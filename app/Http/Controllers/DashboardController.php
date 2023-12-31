<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\User;
use App\Models\Milestone;
use App\Models\SubMilestone;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil 10 proyek terakhir dengan nama Project Manager dan Sales Executive
        $projects = Project::with(['projectManager', 'salesExecutive'])
            ->latest()
            ->take(10)
            ->get();

        // Menghitung total proyek
        $totalProjects = Project::count();
        $totalUser = User::count();
        $totalMilestones = Milestone::count();
        $totalSubMilestones = SubMilestone::count();
        // $milestoneProgres = $subMilestonesQuery->whereIn('progress', ['Done', 'OnProgress', 'Planned'])->get()->countBy('progress');
        $doneMilestones = Milestone::where('progress', 'done')->count();
        $onProgressMilestones = Milestone::where('progress', 'On Progress')->count();
        $plannedMilestones = Milestone::where('progress', 'planned')->count();
        // dd($plannedMilestones);

        return view('dashboard', compact('projects', 'totalProjects', 'totalUser', 'totalMilestones', 'totalSubMilestones', 'doneMilestones', 'onProgressMilestones', 'plannedMilestones'));
    }
}
