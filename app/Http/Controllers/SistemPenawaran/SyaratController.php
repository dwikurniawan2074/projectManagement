<?php

namespace App\Http\Controllers\SistemPenawaran;

use App\Http\Controllers\Controller;
use App\Models\Syarat_Ketentuan;
use Exception;
use Illuminate\Http\Request;

class SyaratController extends Controller
{
    public function store(Request $request){

        $penawaranId = $request->input('id_penawaran');
        $syaratLainInput = $request->input('syaratLainInput', []);



        $checkboxes = [
            'Harga belum termasuk PPN',
            'Harga tidak berlaku selama libur hari raya keagamaan dan libur nasional',
            'Harga belum termasuk PCR test bila diperlukan',
            'Harga belum termasuk penggantian material/sparepart trafo',
            'Harga belum termasuk alat bantu, alat berat dan helper jika diperlukan',
            'Syarat Lain'
        ];


        foreach ($checkboxes as $key => $label) {
            $checkboxName = 'check' . ($key + 1); 

            if ($request->has($checkboxName)) {
                $syaratKetentuan = new Syarat_Ketentuan();
                $syaratKetentuan->id_penawaran = $penawaranId;
                $syaratKetentuan->deskripsi = $label;
                $syaratKetentuan->save();
            }
        }

        if ($syaratLainInput[0]!=null) {
            foreach ($syaratLainInput as $syaratLain) {
                $syaratKetentuan = new Syarat_Ketentuan();
                $syaratKetentuan->id_penawaran = $penawaranId;
                $syaratKetentuan->deskripsi = $syaratLain;
                $syaratKetentuan->save();
            }
        }
        

        return redirect()->back()->with('success', 'Syarat dan Ketentuan berhasil disimpan.');
    }

    public function destroy($id){
        try {
            $syarat = Syarat_Ketentuan::findOrFail($id);
            $syarat->delete();
            return response()->json(['message' => 'Syarat Ketentuan berhasil dihapus.']);
        } catch (Exception $e) {
            return response()->json(['error' => 'Terjadi kesalahan saat menghapus Syarat.'], 500);
        }
    }
}
