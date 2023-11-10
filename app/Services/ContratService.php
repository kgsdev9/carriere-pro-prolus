<?php

namespace App\Services;

use App\Repositories\ContratRepository;


class ContratService 
{
 public $contratRepository ;

 public function __construct(ContratRepository $contratRepository)
 {
    return $this->contratRepository= $contratRepository ; 
  
 }

 
 public function all() {
    return $this->contratRepository->all();
 }


}
