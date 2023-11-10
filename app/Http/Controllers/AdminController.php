<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Formation;
use App\Models\Job;
use App\Models\User;


class AdminController extends Controller
{

    public function index() {
        return view('admin.index',  [
            'countJobs'=> Job::count(),
            'countArticles'=> Article::count(),
            'countUsers' => User::count(),
            'countFormations'=> Formation::all(),
            'curentMont' =>    Job::whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)->count()
        ]);
    }
}

