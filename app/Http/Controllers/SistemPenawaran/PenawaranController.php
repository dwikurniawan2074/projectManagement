<?php

namespace App\Http\Controllers\SistemPenawaran;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use App\Models\Penawaran;
use App\Models\Trafo;
use App\Models\Syarat_Ketentuan;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

class PenawaranController extends Controller
{
    public function index(Request $request)
    {
        $searchQuery = $request->input('search');

        $penawaran = Penawaran::where('project_name', 'like', '%' . $searchQuery . '%')->get();

        return view('sistemPenawaran.penawaran.index', compact('penawaran'));

        $penawaran = Penawaran::all();
        return view('sistemPenawaran.penawaran.index', ['penawaran' => $penawaran]);
    }

    public function detail($id)
    {
        $penawaran = Penawaran::find($id);
        $data = $id;
        $trafo = Trafo::all();
        $formTrafoAction = 'store';
        $syarat = Syarat_Ketentuan::where('id_penawaran', $id)->get();
        $layanan = Layanan::where('id_penawaran', $id)
            ->with(['trafo' => function ($query) {
                $query->select('id', 'no_seri', 'merk');
            }])
            ->paginate(5);
        $layanan->setCollection($layanan->groupBy(['trafo.no_seri', 'trafo.id', 'layanan']));
        $layananList = Layanan::where('id_penawaran', $id)->get('price');
        $total_Allprice = 0;

        if ($layananList->isEmpty()) {
            $total_Allprice = 0;
        } else {
            foreach ($layananList as $item) {
                $total_Allprice += $item->price;
            }
        }
        // dd($total_price);
        return view('sistemPenawaran.penawaran.detail', compact('penawaran', 'trafo', 'formTrafoAction', 'data', 'layanan', 'syarat', 'total_Allprice'));
    }

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
            'customer_contact' => 'required',
            'cc' => 'required',
            'date' => 'required|date',
            'no_msg' => 'required',
            'no_ref' => 'required',
            'segmentasi_pasar' => 'required|',
            'syarat_pembayaran' => 'required',
            'jangka_waktu' => 'required|',
            'pelaksanaan_pekerjaan' => 'required',
            'negara' => 'required|',
            'provinsi' => 'required|',
            'kota' => 'required|',
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
        $penawaran->customer_contact = $request->input('customer_contact');
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
        $penawaran->status = "waiting";

        try {
            $penawaran->save();
        } catch (\Exception $e) {
            // Log or dump the exception message for debugging
            dd($e->getMessage());
        }
        
        // Redirect dengan pesan sukses
        return redirect()->route('sistemPenawaran.penawaran.index')->with('success', 'Project berhasil ditambahkan');
    }

    public function edit($id)
    {
        $penawaran = Penawaran::find($id);

        return view('sistemPenawaran.penawaran.edit', compact('penawaran'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'project_name' => 'required',
            'judul_pekerjaan' => 'required',
            'email' => 'required|email',
            'tel_fax' => 'required',
            'attd' => 'required',
            'customer_contact' => 'required',
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



        $penawaran = Penawaran::findOrFail($id);
        $penawaran->update($validatedData);

        // Redirect atau lakukan hal lain setelah update
        return redirect()->route('sistemPenawaran.penawaran.detail', ['id' => $id])->with('success', 'Data penawaran berhasil diedit');;
    }


    // Menghapus penawaran dari database
    public function destroy($id)
    {
        try {
            $penawaran = Penawaran::findOrFail($id);
            $penawaran->delete();
            return response()->json(['message' => 'Penawaran berhasil dihapus.']);
        } catch (Exception $e) {
            return response()->json(['error' => 'Terjadi kesalahan saat menghapus penawaran.'], 500);
        }
    }

    public function preview($id)
    {
        $penawaran = Penawaran::findOrFail($id);
        return view('sistemPenawaran.approval.preview', compact('penawaran'));
    }

    public function document($id)
    {
        $penawaran = Penawaran::where('id', $id)->first();
        $syarat = Syarat_Ketentuan::where('id_penawaran', $id)->get();
        $layanan = Layanan::with('trafo')->where('id_penawaran', $id)->get();


        $oilTypeList = [
            'Insulation resistance',
            'Test Turn Ratio',
            'BDV test',
            'Proteksi cek',
            'Torsi cek',
            'Visual cek',
            'Cleaning bushing trafo'
        ];

        $dryTypeList = [
            'Insulation resistance',
            'Test Turn Ratio',
            'Proteksi cek',
            'Torsi cek',
            'Visual cek',
            'Cleaning terminasi'
        ];

        $data = [
            'title' => 'Sample PDF Document',
            'penawaran' => $penawaran,
            'syarat' => $syarat,
            'layanan' => $layanan,
            'oilTypeList' => $oilTypeList,
            'dryTypeList' => $dryTypeList,
        ];

        


        return view('sistemPenawaran.approval.pdf', compact('penawaran', 'syarat', 'layanan', 'oilTypeList', 'dryTypeList'));
        
    }

    public function updateStatus($id){
        $penawaran = Penawaran::findOrFail($id);
        $penawaran->status = 'approved'; // Set the status attribute to 'approved'
        $penawaran->save(); // Save the updated status

        // You can return a response indicating success or perform other actions as needed
        return response()->json(['message' => 'Penawaran Approved']);
    }
}
