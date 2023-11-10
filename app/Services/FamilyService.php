<?php

namespace App\Services;

use App\Http\Requests\FamilyReQuest;
use App\Repositories\FamilyRepository;

class FamilyService

{
 public $familyRepository ;

 public function __construct(FamilyRepository $familyRepository)
 {
    return $this->familyRepository = $familyRepository ;

 }

 public function show($id) {
   return $this->familyRepository->show($id);
  }

 public function all() {
    return $this->familyRepository->all();
 }



 public function  customrandomCategoryJob() {
    return $this->familyRepository->customrandomCategoryJob();

 }

 public function createCategoryJob(FamilyReQuest $request) {
      return $this->familyRepository->createCategoryJob($request);
 }

 public function updateCategoryJob(FamilyReQuest $request, $id) {
   return $this->familyRepository->updatefamilyJob($request, $id);
 }

 public function categoryParentJobName($id)  {
    return $this->familyRepository->categoryParentJobName($id);
 }

}
