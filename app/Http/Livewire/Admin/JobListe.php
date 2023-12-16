<?php

namespace App\Http\Livewire\Admin;

use App\Models\Job;
use Livewire\Component;
use Livewire\WithPagination;

class JobListe extends Component
{

    public $search = "";

    public $mode = true  ;


    public function displayForm() {
        $this->mode = false ;
    }


    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.admin.job-liste', [
            'jobALl'=> Job::where('title', 'like', '%'.$this->search.'%')->orderByDesc('created_at')->paginate(10)
        ]);
    }
}
