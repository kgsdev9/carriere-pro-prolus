<?php

namespace App\Services;

use App\Repositories\CvRepository;


class CvService
{
 public $cvRepository ;

 public function __construct(CvRepository $cvRepository)
 {
    return $this->cvRepository= $cvRepository ;

 }


 public function all() {
    return $this->cvRepository->all();
 }


 public function  first($id) {
    return $this->cvRepository->first($id);
 }


}
