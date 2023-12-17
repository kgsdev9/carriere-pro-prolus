<?php

namespace App\Http\Controllers\Admin\Employeur;


use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeurRequest;
use App\Services\EmployeurService;


class EmployeurController extends Controller
{
    protected $employeurService ;
    public function __construct(EmployeurService $employeurService)
    {
        $this->employeurService= $employeurService ;
        $this->middleware(['admin', 'auth']);
    }

    public function index()
    {
        return view('admin.employeurs.liste',[
            'employeurs' => $this->employeurService->all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.employeurs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeurRequest $request)
    {

     $this->employeurService->createEmployeur($request);
     return redirect()->route('employeur.store', ['sucess' => true]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.employeurs.edit', [
            'ressource' =>  $this->employeurService->show($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeurRequest $request, string $id)
    {
       $ressource =  $this->employeurService->updateEmployeur($request, $id);

        return redirect()->route('employeur.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
