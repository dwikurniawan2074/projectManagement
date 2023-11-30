<?php

namespace App\Http\Controllers\SistemPenawaran;

use App\Http\Controllers\Controller;
use App\Models\Trafo;
use Illuminate\Http\Request;

class TrafoController extends Controller
{
    public function store(Request $request){
        // Validasi data input dari form
        
        // $request->validate([
        //     'merk' => 'required|string',
        //     'capacity' => 'required|string',
        //     'no_seri' => 'required|numeric',
        //     'tahun' => 'required|date',
        // ]);

        // if($validatedData){
        //     dd('berhasil');
        // }else{
        //     dd('tidah berhasil');
        // }
        
        $trafo = Trafo::create([
            'id_penawaran' => $request->input('id_penawaran'),
            'merk' => $request->input('merk'),
            'capacity' => $request->input('capacity'),
            'no_seri' => $request->input('no_seri'),
            'tahun' => $request->input('tahun'),
        ]);

        $trafo->save();


        return redirect('sistemPenawaran/penawaran/detail')->with('success', 'Data trafo berhasil ditambahkan');
    }
}
