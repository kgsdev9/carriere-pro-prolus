<?php

namespace App\Repositories;

use App\Models\LetterMotivation;



class LetterMotivationRepository
{
 public $lettreMotivation ;

 public function __construct(LetterMotivation $lettreMotivation)
 {
    return $this->lettreMotivation = $lettreMotivation ;

 }


 public function all() {
    return $this->lettreMotivation->all();
 }

}
