<?php

namespace App\Http\Controllers\Admin\Users;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware(['admin', 'auth']);
    }

    public function index() {
        $users = User::all();
        return view('admin.users.liste',compact('users'));
    }
}
