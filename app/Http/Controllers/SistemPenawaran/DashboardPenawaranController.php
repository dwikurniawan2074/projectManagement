<?php

namespace App\Http\Controllers\SistemPenawaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penawaran;

class DashboardPenawaranController extends Controller
{
    //
    public function index(){
        $penawaranTotal = Penawaran::count();
        $penawaranApproved = Penawaran::where('status', 'approved')->count();
        $penawaranRejected = Penawaran::where('status', 'rejected')->count();
        $penawaranWaiting = Penawaran::where('status', 'waiting')->count();

        return view('sistemPenawaran.dashboardPenawaran', compact('penawaranTotal', 'penawaranApproved', 'penawaranRejected', 'penawaranWaiting'));
    }
}
