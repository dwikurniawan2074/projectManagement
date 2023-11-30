<?php

namespace App\Http\Controllers;

use App\Models\SubMilestone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubMilestonesController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'milestone_id' => 'required',
            'bobot' => 'required',
            'start_date' => 'required|date',
            'due_date' => 'required|date',
            'description' => 'required|string',
            'file' => 'nullable|file|mimes:jpg,png,jpeg,pdf,docx|max:2048',
        ]);

        $sub_milestone = SubMilestone::create([
            'milestone_id' => $validated['milestone_id'],
            'bobot' => $validated['bobot'],
            'start_date' => $validated['start_date'],
            'due_date' => $validated['due_date'],
            'description' => $validated['description'],
        ]);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = 'sub_milestone_' . time() . '.' . $file->getClientOriginalExtension();
            $filepath = $file->store('sub_milestone_files', 'public');
            $sub_milestone->file = $filepath;
        }
        $sub_milestone->save();
        return response()->json([
            'message' => 'Sub Milestone berhasil ditambahkan',
            'sub_milestone' => $sub_milestone
        ]);

    }

    public function form(Request $request)
    {
        $sub_milestone = SubMilestone::findOrFail($request->id);
        return response()->json([
            'sub_milestone' => $sub_milestone
        ]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required',
            'start_date' => 'date',
            'due_date' => 'date',
            'description' => 'string',
            'file' => 'nullable|file|mimes:jpg,png,jpeg,pdf,docx|max:2048',
        ]);

        $sub_milestone = SubMilestone::findOrFail($validated['id']);
        if ($request->hasFile('file')) {
            Storage::disk('public')->delete($sub_milestone->file);
            $file = $request->file('file');
            $fileName = 'sub_milestone_' . time() . '.' . $file->getClientOriginalExtension();
            $filepath = $file->store('sub_milestone_files', 'public');
            $sub_milestone->file = $filepath;
        }
        $sub_milestone->start_date = $validated['start_date'] ?? $sub_milestone->start_date;
        $sub_milestone->due_date = $validated['due_date'] ?? $sub_milestone->due_date;
        $sub_milestone->description = $validated['description'] ?? $sub_milestone->description;
        $sub_milestone->bobot = $validated['bobot'] ?? $sub_milestone->bobot;

        $sub_milestone->save();
        return response()->json([
            'message' => 'Sub Milestone berhasil diubah',
            'sub_milestone' => $sub_milestone
        ]);
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
}
