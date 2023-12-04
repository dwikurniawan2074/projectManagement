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
        $penawaran = Penawaran::all();
        return view('sistemPenawaran.penawaran.index', ['penawaran' => $penawaran]);
    }

    public function detail()
    {
        $trafo = Trafo::all();
        $formTrafoAction = 'store';
        return view('sistemPenawaran.penawaran.detail', compact('trafo', 'formTrafoAction'));
    }

    // public function form()
    // {
    //     return view('sistemPenawaran.penawaran.create');
    // }

    public function create()
    {
        return view('sistemPenawaran.penawaran.create');
    }
    public function store(Request $request)
    {

        // Validasi input dari form
        $validated = $request->validate([
            'project_name' => 'required',
            'judul_pekerjaan' => 'required',
            'email' => 'required|email',
            'tel_fax' => 'required',
            'attd' => 'required',
            'cc' => 'required',
            'date' => 'required|date',
            'no_msg' => 'required',
            'no_ref' => 'required',
            'segmentasi_pasar' => 'required|in:1,2,3',
            'syarat_pembayaran' => 'required',
            'jangka_waktu' => 'required|in:1,2,3',
            'pelaksanaan_pekerjaan' => 'required',
            'negara' => 'required|in:in:1,2,3',
            'provinsi' => 'required|in:1,2,3',
            'kota' => 'required|in:1,2',
            'alamat' => 'required',
        ]);

        // dd($validated);
        // Simpan data ke dalam database
        $penawaran = new Penawaran;
        $penawaran->project_name = $request->input('project_name');
        $penawaran->judul_pekerjaan = $request->input('judul_pekerjaan');
        $penawaran->email = $request->input('email');
        $penawaran->tel_fax = $request->input('tel_fax');
        $penawaran->attd = $request->input('attd');
        $penawaran->cc = $request->input('cc');
        $penawaran->date = $request->input('date');
        $penawaran->no_msg = $request->input('no_msg');
        $penawaran->no_ref = $request->input('no_ref');
        $penawaran->segmentasi_pasar = $request->input('segmentasi_pasar');
        $penawaran->syarat_pembayaran = $request->input('syarat_pembayaran');
        $penawaran->jangka_waktu = $request->input('jangka_waktu');
        $penawaran->pelaksanaan_pekerjaan = $request->input('pelaksanaan_pekerjaan');
        $penawaran->negara = $request->input('negara');
        $penawaran->provinsi = $request->input('provinsi');
        $penawaran->kota = $request->input('kota');
        $penawaran->alamat = $request->input('alamat');

        $penawaran->save();
        // Redirect dengan pesan sukses
        return redirect()->route('sistemPenawaran.penawaran.index')->with('success', 'Project berhasil ditambahkan');
    }
}
