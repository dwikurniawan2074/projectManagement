<?php

namespace App\Http\Controllers\SistemPenawaran;

use App\Http\Controllers\Controller;
use App\Models\Penawaran;
use App\Models\Trafo;
use Illuminate\Http\Request;

class PenawaranController extends Controller
{
    public function index(){
        return view('sistemPenawaran.penawaran.index');

    }

    public function detail(){
        $trafo = Trafo::all();
        $formTrafoAction = 'store';
        return view('sistemPenawaran.penawaran.detail', compact('trafo', 'formTrafoAction'));
    }

    public function create(Request $request){
        $validasi=$request->validate([
            'project_name'=>'required',
            'judul_pekerjaan'=>'required',
            'email'=>'required',
            'no_frq'=>'required',
            'msg'=>'required',
            'customer'=>'required',
            'customer_contact'=>'required', // Corrected field name
            'no_hp'=>'required',
            'tanggal_penawaran'=>'required',
            'delivery_time'=>'required',
            'segementasi_pasar'=>'required', // Corrected field name
            'pelaksanaan_pekerjaan'=>'required',
            'syarat_pembayaran'=>'required',
        ]);

        $penawaran = Penawaran::create([
            'email' => $request->email,
            'tel_fax' => $request->no_hp,
            'attd' => $request->customer_contact,
            'cc' => $request->cc, // Add this line if 'cc' is part of your model fields
            'date' => $request->tanggal_penawaran,
            'no_msg' => $request->msg,
            'no_rfq' => $request->no_rfq, // Add this line if 'no_rfq' is part of your model fields
            'segementasi_pasar' => $request->segementasi_pasar, // Corrected field name
            'syarat_pembayaran' => $request->syarat_pembayaran,
            'jangka_waktu' => $request->delivery_time,
            'pelaksanaan_pekerjaan' => $request->pelaksanaan_pekerjaan,
        ]);

        dd($penawaran);
        return redirect()->back();
    }

    public function form(){
        return view('sistemPenawaran.penawaran.create');

    }

}
