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
        $penawaran = $request->query('penawaran');
        $trafo = $request->query('trafo') ?? null;
        $layanan = $request->query('layanan');
        $dataLayanan = Layanan::where('id_penawaran', $penawaran)->where('id_trafo', $trafo)->where('layanan', $layanan)->get();
        $data = [
            'id_penawaran' => $penawaran,
            'id_trafo' => $trafo,
            'layanan' => $layanan,
            'dataLayanan' => $dataLayanan
        ];
        return response()->json(['message' => 'Success!', 'data' => $data], 200);
    }

    public function update(Request $request)
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

        $dataLayanan = Layanan::where('id_penawaran', $validated['id_penawaran'])
            ->where('id_trafo', $validated['id_trafo'])
            ->where('layanan', $validated['layanan'])
            ->get('id');

        $dataLayananIds = $dataLayanan->pluck('id')->toArray();

        foreach ($validated['subLayanan'] as $sublayanan) {
            if (empty($sublayanan['id'])) {
                Layanan::create([
                    'id_trafo' => $validated['id_trafo'] ?? null,
                    'id_penawaran' => $validated['id_penawaran'],
                    'layanan' => $validated['layanan'],
                    'sub_layanan' => $sublayanan['subLayanan'],
                    'qty' => $sublayanan['qty'],
                    'satuan' => $sublayanan['satuan'],
                    'price' => $sublayanan['harga'],
                ]);
                continue;
            }
            if (in_array($sublayanan['id'], $dataLayananIds)) {
                $layanan = Layanan::find($sublayanan['id']);
                $layanan->update([
                    'id_trafo' => $validated['id_trafo'] ?? null,
                    'id_penawaran' => $validated['id_penawaran'],
                    'layanan' => $validated['layanan'],
                    'sub_layanan' => $sublayanan['subLayanan'],
                    'qty' => $sublayanan['qty'],
                    'satuan' => $sublayanan['satuan'],
                    'price' => $sublayanan['harga'],
                ]);
                $dataLayananIds = array_diff($dataLayananIds, [$sublayanan['id']]);
            }
        }
        foreach ($dataLayananIds as $id) {
            Layanan::destroy($id);
        }

        return response()->json(['message' => 'Success!', 'data' => $request->all()], 200);
    }

    function destroy(Request $request)
    {
//        ddd($request->all());
        $penawaran = $request->query('penawaran');
        $trafo = $request->query('trafo') ?? null;
        $layanan = $request->query('layanan');
        Layanan::where('id_penawaran', $penawaran)->where('id_trafo', $trafo)->where('layanan', $layanan)->delete();
        return response()->json(['message' => 'Success!'], 200);
    }
}
