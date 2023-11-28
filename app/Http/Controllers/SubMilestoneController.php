<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubMilestoneController extends Controller
{
    public function index(){
        return view('projects.subMilestone');
    }
}
