<?php

namespace App\Http\Controllers\SistemPenawaran;

use App\Http\Controllers\Controller;
use App\Models\Penawaran;
use Illuminate\Http\Request;

class PenawaranController extends Controller
{
    public function index(){
        return view('sistemPenawaran.penawaran.index');

    }

    public function detail(){
        return view('sistemPenawaran.penawaran.detail');
    }

    public function create(Request $request){
        $validasi=$request->validate([
            'project_name'=>'required',
            'judul_pekerjaan'=>'required',
            'email'=>'required',
            'cc'=>'string',
            'msg'=>'required',
            'no_rfq'=>'string',
            'customer'=>'required',
            'customr_contact'=>'required',
            'no_hp'=>'required',
            'tanggal_penawaran'=>'required',
            'delivery_time'=>'required',
            'segmentasi_pasar'=>'required',
            'pelaksanaan_pekerjaan'=>'required',
            'syarat_pembayaran'=>'required',   
        ]);
        $penawran=Penawaran::create([
            'email'=>$request->email,
            'tel_fax'=>$request->no_hp,
            'attd'=>$request->customer_contact,
            'cc'=>$request->cc,
            'date'=>$request->tanggal_penawaran,
            'no_msg'=>$request->msg,
            'no_rfq'=>$request->no_rfq,
            'segementasi_pasar'=>$request->segementasi_pasar,
            'syarat_pembayaran'=>$request->syarat_pembayaran,
            'jangka_waktu'=>$request->delivery_time,
            'pelaksanaan_pekerjaan'=>$request->pelaksanaan_pekerjaan,
        ]);
        return redirect()->back();
    }

}
