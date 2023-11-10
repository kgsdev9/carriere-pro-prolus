<?php

namespace App\Services;

use App\Repositories\LieuRepository;


class LieuService
{
 public $LieuRepository ;

 public function __construct(LieuRepository $LieuRepository)
 {
    return $this->LieuRepository= $LieuRepository ; 
  
 }

 
 public function all() {
    return $this->LieuRepository->all();
 }


}
