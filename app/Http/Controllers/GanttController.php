<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Task;
use Illuminate\Http\Request;

class GanttController extends Controller
{
    public function get()
    {
        $tasks = new Task();
        $links = new Link();

        return response()->json([
            "data" => $tasks->orderBy('sortorder')->get(),
            "links" => $links->all()
        ]);

    }

    public function store(Request $request)
    {
        $task = new Task();
        $task->text = $request->text;
        $task->start_date = $request->start_date;
        $task->duration = $request->duration;
        $task->progress = $request->progress;
        $task->parent = $request->parent;
        $task->type = $request->type;
        $task->sortorder = Task::max("sortorder") + 1;
        $task->save();

        return response()->json([
            "action" => "inserted",
            "tid" => $task->id
        ]);
    }

    public function update(Task $task, Request $request)
    {
        $task->text = $request->text;
        $task->start_date = $request->start_date;
        $task->duration = $request->duration;
        $task->progress = $request->has("progress") ? $request->progress : 0;
        $task->parent = $request->parent;
        $task->type = $request->type;
        $task->save();

        if ($request->has("target")) {
            $this->updateOrder($task->id, $request->target);
        }
        return response()->json([
            "action" => "updated"
        ]);

        return response()->json([
            "action" => "updated"
        ]);
    }

    private function updateOrder($taskId, $target)
    {
        $nextTask = false;
        $targetId = $target;

        if (strpos($target, "next:") === 0) {
            $targetId = substr($target, strlen("next:"));
            $nextTask = true;
        }

        if ($targetId == "null")
            return;

        $targetOrder = Task::find($targetId)->sortorder;
        if ($nextTask)
            $targetOrder++;

        Task::where("sortorder", ">=", $targetOrder)->increment("sortorder");

        $updatedTask = Task::find($taskId);
        $updatedTask->sortorder = $targetOrder;
        $updatedTask->save();
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return response()->json([
            "action" => "deleted"
        ]);
    }
}
