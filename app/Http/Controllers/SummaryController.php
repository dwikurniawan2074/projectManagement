<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Auth;

class SummaryController extends Controller
{
    public function index()
    {
        $project = Project::where('project_manager', Auth::id())->count();
        return view('summary', compact('project'));
    }
}
