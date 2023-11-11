<?php

namespace App\Http\Controllers\Admin\Job;

use App\Http\Requests\JobRequest;
use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Services\ContratService;
use App\Services\FamilyService;
use App\Services\JobService;
use App\Services\LieuService;

class JobController extends Controller
{

    protected $jobService ;
    protected $familyService ;
    protected $contratService;
    protected $lieuService ;


    public function __construct(JobService $jobService, FamilyService $familyService, ContratService $contratService , LieuService $lieuService)
    {
        $this->jobService = $jobService ;
        $this->familyService = $familyService ;
        $this->contratService = $contratService ;
        $this->lieuService = $lieuService ;
        $this->middleware('auth');
    }


    public function create() {
        return view('admin.job.create', [
            'categoryjob' => $this->familyService->all(),
            'lieu' => $this->lieuService->all(),
            'contrat' => $this->contratService->all(),
        ]);
    }

    public function index() {

        return view('admin.job.liste',[
            'jobALl' => Job::orderByDesc('created_at')->paginate(13)
        ]);
    }

    public function show($id) {
        return view('admin.job.detail',[
            'ressource'=>  $this->jobService->show($id)
        ]);
    }

    public function store(JobRequest $request) {
        $this->jobService->CreateJob($request);
        return redirect()->route('job.store', ['success', true]);
    }


    public function update(JobRequest $request , $id) {
        $this->jobService->updateJob($request, $id);
         return redirect()->route('job.index');
    }


    public function destroy($id) {
      $ressource  =  $this->jobService->show($id);
      $ressource->delete();
      return redirect()->route('job.index');
    }

    public function edit($id) {
        return view('admin.job.edit', [
            'ressource'=>  $this->jobService->show($id),
            'categoryjob' => $this->familyService->all(),
            'lieu' => $this->lieuService->all(),
            'contrat' => $this->contratService->all(),
        ]);
    }
}
