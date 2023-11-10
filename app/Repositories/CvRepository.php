<?php

namespace App\Repositories;

use App\Models\Cv;



class CvRepository
{
 protected  $cv ;

 public function __construct(Cv $cv)
 {
    return $this->cv = $cv ;

 }

 public function  first($id) {
    return $this->cv->where('id', $id)->first();
 }


 public function all() {
    return $this->cv->all();
 }

}
