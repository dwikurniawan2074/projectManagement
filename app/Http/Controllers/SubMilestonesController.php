<?php

namespace App\Http\Controllers;

use App\Models\Milestone;
use App\Models\SubMilestone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubMilestonesController extends Controller
{
    public function index($id)
    {
        $subMilestonesQuery = SubMilestone::where('milestone_id', $id);
        $sub_milestones = $subMilestonesQuery->orderBy('created_at', 'desc')->paginate(10);
        $progressCounts = $subMilestonesQuery->whereIn('progress', ['Done', 'OnProgress', 'Planned'])->get()->countBy('progress');

        $milestone = Milestone::findOrFail($id)->get(['submitted_date', 'description', 'due_date', 'bobot'])->first();

        return view('projects.subMilestone', [
            'sub_milestones' => $sub_milestones,
            'id' => $id,
            'done' => $progressCounts['Done'] ?? 0,
            'on_progress' => $progressCounts['OnProgress'] ?? 0,
            'planned' => $progressCounts['Planned'] ?? 0,
            'milestone' => $milestone,
            'max' => $subMilestonesQuery->sum('bobot')
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'milestone_id' => 'required',
            'bobot' => 'required|numeric',
            'start_date' => 'required|date',
            'due_date' => 'required|date',
            'description' => 'required|string',
            'progress' => 'required|string|in:Done,OnProgress,Planned',
            'file' => 'nullable|file|mimetypes:application/pdf,image/*,text/plain,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/zip,application/x-rar-compressed,application/octet-stream|max:102400',
        ]);

        $sub_milestone = SubMilestone::create([
            'milestone_id' => $validated['milestone_id'],
            'bobot' => $validated['bobot'],
            'start_date' => $validated['start_date'],
            'due_date' => $validated['due_date'],
            'description' => $validated['description'],
            'progress' => $validated['progress'],
        ]);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = 'sub_milestone_' . time() . '.' . $file->getClientOriginalExtension();
            $filepath = $file->store('sub_milestone_files', 'public');
            $sub_milestone->file = $filepath;
        }
        $sub_milestone->save();
        return session()->flash('success', 'Sub Milestone berhasil ditambahkan');
    }

    public function form($id)
    {
        $sub_milestone = SubMilestone::findOrFail($id);
//        dd($request->id);
        return response()->json($sub_milestone);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'start_date' => 'date',
            'due_date' => 'date',
            'description' => 'string',
            'bobot' => 'numeric',
            'progress' => 'string|in:Done,OnProgress,Planned',
            'file' => 'nullable|file|mimetypes:application/pdf,image/*,text/plain,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/zip,application/x-rar-compressed,application/octet-stream|max:102400',
        ]);

        $sub_milestone = SubMilestone::findOrFail($id);
        if (!$sub_milestone) {
            return response()->json([
                'message' => 'Sub Milestone tidak ditemukan',
            ]);
        }
        if ($request->hasFile('file')) {
            if ($sub_milestone->file != null) {
                if (Storage::disk('public')->exists($sub_milestone->file)) {
                    Storage::disk('public')->delete($sub_milestone->file);
                }
            }
            $file = $request->file('file');
            $fileName = 'sub_milestone_' . time() . '.' . $file->getClientOriginalExtension();
            $filepath = $file->store('sub_milestone_files', 'public');
            $sub_milestone->file = $filepath;
        }
        $sub_milestone->start_date = $validated['start_date'] ?? $sub_milestone->start_date;
        $sub_milestone->due_date = $validated['due_date'] ?? $sub_milestone->due_date;
        $sub_milestone->description = $validated['description'] ?? $sub_milestone->description;
        $sub_milestone->bobot = $validated['bobot'] ?? $sub_milestone->bobot;
        $sub_milestone->progress = $validated['progress'] ?? $sub_milestone->progress;

        $sub_milestone->save();
        return session()->flash('success', 'Sub Milestone berhasil diupdate');
    }

    public function destroy(Request $request)
    {
        $sub_milestone = SubMilestone::findOrFail($request->id);
        if ($sub_milestone->file != null) {
            Storage::disk('public')->delete($sub_milestone->file);
            if (Storage::disk('public')->exists($sub_milestone->file)) {
                return response()->json([
                    'message' => 'Sub Milestone gagal dihapus',
                ]);
            }
        }
        $sub_milestone->delete();
        return response()->json([
            'message' => 'Sub Milestone berhasil dihapus',
        ]);
    }

    public function download($id)
    {
        $sub_milestone = SubMilestone::findOrFail($id);
        if (!$sub_milestone->file) {
            session()->flash('error', 'File tidak ditemukan');
            return response()->json([
                'message' => 'File tidak ditemukan',
            ]);
        }
        return Storage::disk('public')->download($sub_milestone->file);
    }
}
