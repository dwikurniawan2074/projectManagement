<?php

namespace App\Http\Controllers\SistemPenawaran;

use App\Http\Controllers\Controller;
use App\Models\Trafo;
use Illuminate\Http\Request;

class TrafoController extends Controller
{
    public function store(Request $request){

        $validated = $request->validate([
            'id_penawaran' => 'required',
            'merk' => 'required',
            'capacity' => 'required',
            'no_seri' => 'required',
            'tahun' => 'required',
        ]);
        
        $trafo = Trafo::create($validated);

        // $trafo->save();

        return redirect('sistemPenawaran/penawaran/detail')->with('success', 'Data trafo berhasil ditambahkan');
    }

    public function show($id){
        $trafo = Trafo::find($id);
        
        if (!$trafo) {
            return response()->json(['error' => 'Trafo not found'], 404);
        }

        return response()->json($trafo);
    }


    public function update($id){
        $trafo = Trafo::find($id);
        
        if (!$trafo) {
            return response()->json(['error' => 'Trafo not found'], 404);
        }

        return response()->json($trafo);
    }

    // fungsi untuk menghapus document record
    public function destroy($id){
        try {
            $trafo = Trafo::findOrFail($id);
            $trafo->delete();
            return response()->json(['message' => 'Trafo berhasil dihapus.']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Terjadi kesalahan saat menghapus data trafo.'], 500);
        }
    }
}
