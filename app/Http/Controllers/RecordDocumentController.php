<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RecordDocument;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use File;
use Illuminate\Support\Facades\Response as FacadesResponse;
use Response;

class RecordDocumentController extends Controller
{
    // fungsi untuk menyimpan document record
    public function store(Request $request){
        // Validasi data input dari form
        $validatedData = $request->validate([
            'project_id' => 'required|exists:projects,id',
            'submitted_date' => 'required|date',
            'description' => 'required|string',
            'due_date' => 'required|date',
            'progress' => 'required|string',
            'file' => 'nullable|file|mimes:jpg,png,jpeg,pdf,docx|max:2048', // Validasi file gambar
        ]);

        // Simpan data record document ke dalam database dengan mengaitkannya dengan ID proyek
        $recordDocument = new RecordDocument([
            'submitted_date' => $request->input('submitted_date'),
            'description' => $request->input('description'),
            'due_date' => $request->input('due_date'),
            'progress' => $request->input('progress'),
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = 'recordDocument_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('recordDocument_files'), $fileName);
            $recordDocument->file = $fileName;
        }

        $project = Project::find($validatedData['project_id']);
        $project->recordDocument()->save($recordDocument);

        return redirect()->route('projects.show', $validatedData['project_id'])->with('success', 'Record Document berhasil ditambahkan');
    
    }

    // fungsi untuk membuat document record
    public function create($id){
        $project = $id;
        
        return view('projects.createRecord', compact('project'));
    }

    // fungsi untuk mengupdate document record
    public function update(Request $request){
        // Validasi data input dari form

        $validatedData = $request->validate([
            'recordDocument_id' => 'required',
            'submitted_date' => 'required|date',
            'description' => 'required|string',
            'due_date' => 'required|date',
            'progress' => 'required|string',
            'file' => 'nullable|file|mimes:jpg,png,jpeg,pdf,docx|max:2048', // Validasi file gambar
        ]);


        $recordDocument = RecordDocument::findOrFail($request->recordDocument_id);

        // Mengupdate data milestone dengan data yang validasi
        $recordDocument->update($validatedData);

        // Upload file jika ada
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = 'recordDocument_' . $file->getClientOriginalName();
            $file->storeAs('recordDocument_files', $fileName, 'public');
            $recordDocument->file = $fileName;
            $recordDocument->save();
        }

        return redirect()->route('projects.show', ['id' => $recordDocument->project_id])->with('success', 'Record Document berhasil diubah.');
    }

    // fungsi untuk menghapus document record
    public function destroy($id){
        try {
            $recordDocument = RecordDocument::findOrFail($id);
            $recordDocument->delete();
            return response()->json(['message' => 'Record Document berhasil dihapus.']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Terjadi kesalahan saat menghapus Milestone.'], 500);
        }
    }


    public function show($id){
        // Cari data record document berdasarkan ID
        $recordDocument = RecordDocument::find($id);
                
                
        if (!$recordDocument) {
            return response()->json(['error' => 'RecordDocument not found'], 404);
        }

        // Mengembalikan data record document sebagai respons JSON
        return response()->json($recordDocument);
    }

}
