<?php

namespace App\Http\Controllers\Admin\CategoryJob;

use App\Http\Controllers\Controller;
use App\Http\Requests\FamilyReQuest;
use App\Services\FamilyService;

class CategoryJobController extends Controller
{
    protected $categoryJobService ;

    public function  __construct(FamilyService $categoryJobRessource)
    {
    $this->categoryJobService = $categoryJobRessource ;
    $this->middleware(['admin', 'auth']);

    }

    public function index() {
        return view('admin.job.Categoryjob.liste', [
            'categoryJobRessource' => $this->categoryJobService->all()
        ]);
    }


    public function create()
    {
        return view('admin.job.Categoryjob.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(FamilyReQuest $request)
    {
        $this->categoryJobService->createCategoryJob($request);
        return redirect()->route('categoryjob.index');
    }

    public function edit(string $id)
    {
        return view('admin.job.Categoryjob.edit', [
            'ressource'=>  $this->categoryJobService->show($id)
        ]);

    }

    public function update(FamilyReQuest $request, string $id)
    {
         $this->categoryJobService->updateCategoryJob($request, $id);
         return redirect()->route('categoryjob.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $ressource = $this->categoryJobService->show($id);
          $ressource->delete();
          return redirect()->back();
    }
}
