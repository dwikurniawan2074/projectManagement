<?php

namespace App\Http\Controllers\SistemPenawaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penawaran;
use Dompdf\Dompdf;

class ApprovalController extends Controller
{
    public function index(){
        $penawaranApproved = Penawaran::where('status', 'approved')->get();
        $penawaranWaiting = Penawaran::where('status', 'waiting')->get();
        $penawaranRejected = Penawaran::where('status', 'rejected')->get();
        return view('sistemPenawaran.approval.index', compact('penawaranApproved', 'penawaranWaiting', 'penawaranRejected'));
    }

    public function preview(){
        return view('sistemPenawaran.approval.preview');
    }
}
