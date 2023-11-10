<?php

namespace App\Http\Livewire;

use App\Models\Profile;
use App\Models\Specialites;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProfileComponent extends Component
{
    public $nom  ;
    public $prenom  ;
    public $email ;
    public $pays  ;
    public $ville  ;
    public $speatch ;
    public $ressource ;
    public  $specialite_id;


    protected $rules = [
        'nom' => 'required',
        'prenom' => 'required',
        'pays' => 'required',
        'ville' => 'required',
        'speatch' => 'required',
        'specialite_id' => 'required',
        'email' => 'required|email',
    ];



    public function mount()
    {
        $this->ressource = Profile::where('user_id', Auth::user()->id)->first();
            $this->nom = $this->ressource->nom ?? '' ;
            $this->prenom = $this->ressource->prenom  ?? '';
            $this->email = $this->ressource->email ?? '';
            $this->pays = $this->ressource->pays ?? '';
            $this->speatch = $this->ressource->speatch ?? '';
            $this->ville = $this->ressource->ville ?? '';
            $this->specialite_id = $this->ressource->specialite_id ?? '';

    }


    public function render()
    {

        return view('livewire.profile-component', [
            'informationUser'=> $this->ressource,
            'specialite' =>  Specialites::all()
        ]);
    }


    public function updateProfile() {
       $ressource =  Profile::where('user_id', Auth::user()->id)->first();

       if($ressource == null) {
        Profile::where('user_id', Auth::user()->id)->create([
            'nom' => $this->nom,
            'prenom'=> $this->prenom,
            'speatch'=> $this->speatch,
            'email'=> $this->email,
            'pays'=> $this->pays,
            'ville'=> $this->ville,
            'specialite_id'=> $this->specialite_id,
            'user_id'=> Auth::user()->id,
          ]);

       } else {
        Profile::where('user_id', Auth::user()->id)->update([
            'nom' => $this->nom,
            'prenom'=> $this->prenom,
            'speatch'=> $this->speatch,
            'email'=> $this->email,
            'pays'=> $this->pays,
            'ville'=> $this->ville,
            'specialite_id'=> $this->specialite_id,
            'user_id'=> Auth::user()->id,
          ]);

       }

    }
}
