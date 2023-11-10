<?php

namespace App\Repositories;

use Illuminate\Support\Str;
use App\Http\Requests\FamilyReQuest;
use App\Models\Family;

class FamilyRepository
{
 public $familyJob ;

 public function __construct(Family $familyJob)
 {
    return $this->familyJob = $familyJob ;

 }

 public function show($id) {
  return $this->familyJob->find($id);
 }


 public function all() {
   return $this->familyJob->all();
 }


 public function  customrandomCategoryJob() {
    return $this->familyJob->inRandomOrder()
                           ->take(10)
                            ->get();
 }

 public function randomCategory() {
   return $this->familyJob->inRandomOrder()->get();
 }

 public function createCategoryJob(FamilyReQuest $request) {

 $familyJob = $this->familyJob->create([
           'name' => $request->input('name'),
          'slug' => Str::slug($request->input('name')),
   ]);

   return $familyJob ;

}


public function categoryParentJobName($id)  {
   $ressource =  $this->familyJob->where('id', $id)->first();
   if($ressource) {
        $categoryName = $ressource->name ;
   } else {
    return redirect()->route('home');
   }
   return $categoryName ;

}


public function updatefamilyJob(FamilyReQuest $request, $id) {

  $ressource = $this->familyJob->find($id);
  $ressource->name = $request->input('name');
  $ressource->update();
  return redirect()->route('job.index');

 }



}
