<?php

namespace App\Http\Livewire\Home;

use App\Models\Contrat;
use App\Models\Family;
use App\Models\Job;
use App\Models\Lieu;
use Livewire\Component;

class HomeJob extends Component
{
    public $family_id= "";
    public $lieu_id = "";
    public $contrat_id = "" ;
    public $search = "";


    public function renitialise () {
        $this->reset();
    }

    public function doSomething() {
        dd('sss');
    }


    

    public function render()
    {
        $query =  Job::query();

        if($this->family_id!= "") {
            $query->where('family_id', '=', $this->family_id);
        }

        if($this->contrat_id!= "") {
            $query->where('contrat_id', '=', $this->contrat_id);

        }

        if($this->lieu_id!= "") {
             $query->where('lieu_id', '=', $this->lieu_id);

        }




        return view('livewire.home.home-job', [
            'allJobs' => $query->where('title', 'like', '%'.$this->search.'%')->orderByDesc('created_at')->paginate(100),
            'allCategories' => Family::all(),
            'allContrats' => Contrat::all(),
            'allLieus' => Lieu::all()
        ]);
    }
}
