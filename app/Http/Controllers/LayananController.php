<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_trafo' => 'nullable',
            'id_penawaran' => 'required',
            'layanan' => 'required|string',
            'subLayanan' => 'required|array',
            'subLayanan.*.subLayanan' => 'required|string',
            'subLayanan.*.qty' => 'required|string',
            'subLayanan.*.satuan' => 'required|string',
            'subLayanan.*.harga' => 'required|string',
        ]);

        foreach ($validated['subLayanan'] as $subLayanan) {
            $existingLayanan = Layanan::where('id_trafo', $validated['id_trafo'])
                ->where('layanan', $validated['layanan'])
                ->where('sub_layanan', $subLayanan['subLayanan'])
                ->first();

            if ($existingLayanan) {
                return response()->json(['message' => 'Layanan sudah ada!. Silahkan pilih trafo lain atau layanan lain'], 400);
            }

            $layanan = Layanan::create([
                'id_trafo' => $validated['id_trafo'] ?? null,
                'id_penawaran' => $validated['id_penawaran'],
                'layanan' => $validated['layanan'],
                'sub_layanan' => $subLayanan['subLayanan'],
                'qty' => $subLayanan['qty'],
                'satuan' => $subLayanan['satuan'],
                'price' => $subLayanan['harga'],
            ]);
        }
        return response()->json(['message' => 'Success!', 'data' => $request->all()], 200);
    }

    public function show(Request $request)
    {
        $penawaran = $request->input('penawaran');
        $trafo = $request->input('trafo') ?? null;
        $layanan = $request->input('layanan');
        $dataLayanan = Layanan::where('id_penawaran', $penawaran);

        if ($trafo !== null) {
            $dataLayanan->where('id_trafo', $trafo);
        }

        $dataLayanan->where('layanan', $layanan)->get();

        return response()->json(['message' => 'Success!', 'data' => $dataLayanan], 200);
    }

    public function update(Request $request, $id)
    {
        $data = Layanan::findOrFail($id);

    }
}
