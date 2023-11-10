<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class AuthController extends Component
{
    public $email ;
    public $password ;



    public function render()
    {
        return view('livewire.auth.auth-controller');
    }


    public function login()  {

        

    }
}
