<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginComponent extends Component
{

    public $password ;
    public $email ;
    public function render()
    {
        return view('livewire.login-component');
    }


    public function login() {
        $validatedDate = $this->validate([
           'email' => 'required|email',
           'password' => 'required',
       ]);


       if(Auth::attempt(array('email' => $this->email, 'password' => $this->password))){
              return redirect()->route('home');
       }else{
           session()->flash('error', 'l\'adreese email ou le mot de passe incorrecte.');
       }
   }
}
