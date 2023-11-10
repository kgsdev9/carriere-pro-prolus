<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function __construct()
    {
            $this->middleware('auth');
    }

    
    public function profile() {
        return view('dashboarduser.profile');
    }


}
