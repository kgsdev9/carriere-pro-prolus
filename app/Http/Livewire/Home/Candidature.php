<?php

namespace App\Http\Livewire\Home;

use App\Models\Profile;
use Livewire\Component;

class Candidature extends Component
{
    public function render()
    {
        return view('livewire.home.candidature', [
            'allCandidature'=> Profile::orderByDesc('created_at')->take(8)->get()
        ]);
    }
}
