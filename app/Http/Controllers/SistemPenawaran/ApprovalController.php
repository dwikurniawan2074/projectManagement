<?php

namespace App\Http\Controllers\SistemPenawaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penawaran;
use Dompdf\Dompdf;

class ApprovalController extends Controller
{
    public function index(){
        $penawaran = Penawaran::all();
        return view('sistemPenawaran.approval.index', compact('penawaran'));
    }

    public function preview(){
        return view('sistemPenawaran.approval.preview');
    }

    
}
