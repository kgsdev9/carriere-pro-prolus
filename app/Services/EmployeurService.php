<?php

namespace App\Services;

use App\Http\Requests\EmployeurRequest;
use App\Repositories\EmployeursRepository;


class EmployeurService
{
 public $employeurRepository ;

 public function __construct(EmployeursRepository $employeurRepository)
 {
    return $this->employeurRepository = $employeurRepository ; 
  
 }
 
 public function show($id) {
   return $this->employeurRepository->show($id);
 }

 public function all() {
    return $this->employeurRepository->all();
 }



 public function createEmployeur(EmployeurRequest $request) {
   return $this->employeurRepository->createEmployeur($request);
 }

 public function updateEmployeur(EmployeurRequest $request , $id) {
   return $this->employeurRepository->updateEmployeur($request, $id);
 }

}
