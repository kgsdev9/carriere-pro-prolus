<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;
use App\Repositories\JobRepository;


class JobService
{
 public $jobRepository  ;

 public function __construct(JobRepository $jobRepository)
 {
    return $this->jobRepository = $jobRepository ;

 }

 public function all() {
    return $this->jobRepository->all();
 }


 public function CreateJob(JobRequest $request) {
   return $this->jobRepository->CreateJob($request);

 }

 public function show($id) {
   return $this->jobRepository->show($id);
 }


 public function recentlyJob() {
    return $this->jobRepository->recentlyJob();
 }

 public function  singleSlug($slug) {
  return $this->jobRepository->singleSlug($slug);
}

 public function updateJob(JobRequest $request,$id) {
   return $this->jobRepository->updateJob($request, $id);
 }

 public function collectionJob() {
    return $this->jobRepository->collectionJob();
 }

 public function collectionjobrandom() {
    return $this->jobRepository->collectionjobrandom();
 }


 public function categoryJob($id) {
    return $this->jobRepository->categoryJob($id);
}


public function search(Request $request) {
    return $this->jobRepository->search($request);
 }


public function  similarJob($slug) {
    return $this->jobRepository->similarJob($slug);

}

}



