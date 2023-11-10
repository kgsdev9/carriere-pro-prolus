<?php

namespace App\Repositories;

use App\Models\Lieu;

class LieuRepository
{
 public $lieu ;

 public function __construct(Lieu $lieu)
 {
    return $this->lieu = $lieu ; 
  
 }


 public function all() {
    return $this->lieu->all();
 }

}
