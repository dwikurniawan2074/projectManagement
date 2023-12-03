<?php

namespace App\Http\Controllers\SistemPenawaran;

use App\Http\Controllers\Controller;
use App\Models\Penawaran;
use App\Models\Trafo;
use Illuminate\Http\Request;

class PenawaranController extends Controller
{
    public function index()
    {
        return view('sistemPenawaran.penawaran.index');
    }

    public function detail()
    {
        $trafo = Trafo::all();
        $formTrafoAction = 'store';
        return view('sistemPenawaran.penawaran.detail', compact('trafo', 'formTrafoAction'));
    }

    // public function create(Request $request)
    // {
    //     $validasi = $request->validate([
    //         'project_name' => 'required',
    //         'judul_pekerjaan' => 'required',
    //         'email' => 'required',
    //         'no_frq' => 'required',
    //         'msg' => 'required',
    //         'customer' => 'required',
    //         'customer_contact' => 'required', // Corrected field name
    //         'no_hp' => 'required',
    //         'tanggal_penawaran' => 'required',
    //         'delivery_time' => 'required',
    //         'segementasi_pasar' => 'required', // Corrected field name
    //         'pelaksanaan_pekerjaan' => 'required',
    //         'syarat_pembayaran' => 'required',
    //     ]);

    //     $penawaran = Penawaran::create([
    //         'email' => $request->email,
    //         'tel_fax' => $request->no_hp,
    //         'attd' => $request->customer_contact,
    //         'cc' => $request->cc, // Add this line if 'cc' is part of your model fields
    //         'date' => $request->tanggal_penawaran,
    //         'no_msg' => $request->msg,
    //         'no_rfq' => $request->no_rfq, // Add this line if 'no_rfq' is part of your model fields
    //         'segementasi_pasar' => $request->segementasi_pasar, // Corrected field name
    //         'syarat_pembayaran' => $request->syarat_pembayaran,
    //         'jangka_waktu' => $request->delivery_time,
    //         'pelaksanaan_pekerjaan' => $request->pelaksanaan_pekerjaan,
    //     ]);

    //     dd($penawaran);
    //     return redirect()->back();
    // }
    public function form()
    {
        return view('sistemPenawaran.penawaran.create');
    }

    public function create()
    {
        return view('sistemPenawaran.penawaran.create');
    }
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'project_name' => 'required',
            'judul_pekerjaan' => 'required',
            'email' => 'required|email',
            'tel_fax' => 'required',
            'attd' => 'required',
            'cc' => 'required',
            'date' => 'required|date',
            'no_msg' => 'required',
            'no_ref' => 'required',
            'segmentasi_pasar' => 'required',
            'syarat_pembayaran' => 'required',
            'jangka_waktu' => 'required',
            'pelaksanaan_pekerjaan' => 'required',
            'negara' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'alamat' => 'required',
        ]);

        // Simpan data ke dalam database
        $penawaran = new Penawaran;
        $penawaran->project_name = $request->input('project_name');
        $penawaran->judul_pekerjaan = $request->input('judul_pekerjaan');
        $penawaran->email = $request->input('email');
        $penawaran->tel_fax = $request->input('tel_fax');
        $penawaran->attd = $request->input('attd');
        $penawaran->cc = $request->input('cc');
        $penawaran->no_msg = $request->input('no_msg');
        $penawaran->no_ref = $request->input('no_ref');
        $penawaran->segmentasi_pasar = $request->input('segmentasi_pasar ');
        $penawaran->syarat_pembayaran = $request->input('syarat_pembayaran');
        $penawaran->jangka_waktu = $request->input('jangka_waktu');
        $penawaran->pelaksanaan_pekerjaan = $request->input('pelaksanaan_pekerjaan ');
        $penawaran->negara = $request->input('negara');
        $penawaran->provinsi = $request->input('provinsi');
        $penawaran->kota = $request->input('kota');
        $penawaran->alamat = $request->input('alamat');

        $penawaran->save();

        // Redirect dengan pesan sukses
        return redirect('penawaran')->with('success', 'Project berhasil ditambahkan');
    }
}
