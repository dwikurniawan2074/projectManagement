<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {

    }

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
}
