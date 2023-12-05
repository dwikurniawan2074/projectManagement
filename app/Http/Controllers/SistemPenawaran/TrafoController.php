<?php

namespace App\Http\Controllers\SistemPenawaran;

use App\Http\Controllers\Controller;
use App\Models\Trafo;
use Exception;
use Illuminate\Http\Request;

class TrafoController extends Controller
{
    public function store(Request $request)
    {

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

    public function show($id)
    {
        $trafo = Trafo::find($id);


        if (!$trafo) {
            return response()->json(['error' => 'Trafo not found'], 404);
        }

        return response()->json($trafo);
    }


    public function update(Request $request)
    {

        $validated = $request->validate([
            'id_trafo' => 'required',
            'id_penawaran' => 'required',
            'merk' => 'required',
            'capacity' => 'required',
            'no_seri' => 'required',
            'tahun' => 'required',
        ]);

        $trafo = Trafo::findOrFail($validated['id_trafo']);

        // Mengupdate data milestone dengan data yang validasi
        $trafo->update($validated);

        return redirect()->route('sistemPenawaran.penawaran.detail')->with('success', 'Data trafo berhasil diubah.');
    }

    // fungsi untuk menghapus document record
    public function destroy($id)
    {
        try {
            $trafo = Trafo::findOrFail($id);
            $trafo->delete();
            return response()->json(['message' => 'Trafo berhasil dihapus.']);
        } catch (Exception $e) {
            return response()->json(['error' => 'Terjadi kesalahan saat menghapus data trafo.'], 500);
        }
    }

}
