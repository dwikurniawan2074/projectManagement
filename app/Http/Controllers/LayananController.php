<?php

namespace App\Http\Controllers;

use App\Models\Jenis_Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            '_token' => 'required',
            'id_trafo' => 'required',
            'id_penawaran' => 'required',
            'layanan' => 'required|string',
            'subLayanan' => 'required|array',
            'subLayanan.*.subLayanan' => 'required|string',
            'subLayanan.*.qty' => 'required|string',
            'subLayanan.*.satuan' => 'required|string',
            'subLayanan.*.harga' => 'required|string',
        ]);
        $layanan = new Jenis_Layanan();
        return response()->json(['message' => 'Success!', 'data' => $request->all()], 200);
    }
}
