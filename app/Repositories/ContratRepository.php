<?php

namespace App\Repositories;

use App\Models\Contrat;

class ContratRepository
{
 public $contrat ;

 public function __construct(Contrat $contrat)
 {
    return $this->contrat = $contrat ; 
  
 }


 public function all() {
    return $this->contrat->all();
 }

}
