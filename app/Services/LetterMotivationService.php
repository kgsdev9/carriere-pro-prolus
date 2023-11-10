<?php

namespace App\Services;

use App\Repositories\LetterMotivationRepository;




class LetterMotivationService
{
 public $letterMotivationRepository;

 public function __construct(LetterMotivationRepository $letterMotivationRepository)
 {
    return $this->letterMotivationRepository = $letterMotivationRepository ;

 }

 public function all() {
    return $this->letterMotivationRepository->all();
 }


}
