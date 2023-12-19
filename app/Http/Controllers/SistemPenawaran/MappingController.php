<?php

namespace App\Http\Controllers\SistemPenawaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penawaran;

class MappingController extends Controller
{
    public function index(){
        $penawaran = Penawaran::all();
        return view('sistemPenawaran.mapping.index', compact('penawaran'));
    }
}
