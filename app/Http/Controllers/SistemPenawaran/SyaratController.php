<?php

namespace App\Http\Controllers\SistemPenawaran;

use App\Http\Controllers\Controller;
use App\Models\Syarat_Ketentuan;
use Exception;
use Illuminate\Http\Request;

class SyaratController extends Controller
{
    public function store(Request $request){

        // dd($request->all());
        // Get the penawaran ID from the form
        $penawaranId = $request->input('id_penawaran');

        // Array to hold checkbox values and labels
        $checkboxes = [
            'Harga belum termasuk PPN',
            'Harga tidak berlaku selama libur hari raya keagamaan dan libur nasional',
            'Harga belum termasuk PCR test bila diperlukan',
            'Harga belum termasuk penggantian material/sparepart trafo',
            'Harga belum termasuk alat bantu, alat berat dan helper jika diperlukan',
            'Syarat Lain'
            // Add new checkbox labels here
        ];

        // Loop through checkboxes
        foreach ($checkboxes as $key => $label) {
            $checkboxName = 'check' . ($key + 1); // Assuming checkbox names follow the check1, check2, ... pattern

            // Check if the checkbox is checked
            if ($request->has($checkboxName)) {
                // Create a new SyaratKetentuan record for the checked checkbox
                $syaratKetentuan = new Syarat_Ketentuan();
                $syaratKetentuan->id_penawaran = $penawaranId; // Assign the penawaran ID as the foreign key
                $syaratKetentuan->deskripsi = $label; // Store checkbox label as 'syarat' field (adjust column name)
                $syaratKetentuan->save(); // Save the record
            }
        }

        // Redirect back or to a success page
        return redirect()->back()->with('success', 'Syarat dan Ketentuan berhasil disimpan.');
    }

    public function destroy($id){
        try {
            $syarat = Syarat_Ketentuan::findOrFail($id);
            $syarat->delete();
            return response()->json(['message' => 'Syarat berhasil dihapus.']);
        } catch (Exception $e) {
            return response()->json(['error' => 'Terjadi kesalahan saat menghapus Syarat.'], 500);
        }
    }
}
