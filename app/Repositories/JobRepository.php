<?php

namespace App\Repositories;

use App\Models\Job;
use App\Models\Family;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;

class JobRepository
{
 public $job ;

 public function __construct(Job $job)
 {
    return $this->job = $job ;

 }


 public function show(int $id) {
    return $this->job->find($id);
 }

 public function  singleSlug($slug) {
   return $this->job->where('slug', $slug)->first();
 }


 public function all() {
    return $this->job->paginate(20);
 }

 public function search(Request $request) {
    $query = "%".$request->search. "%";
    $demande = $this->job->where('title', 'LIKE',$query)->get();
    return $demande ;

 }

 public function collectionjobrandom() {
    return $this->job->orderByDesc('created_at')
                     ->paginate(18);
 }


 public function collectionJob() {
    return $this->job->orderByDesc('created_at')
                     ->take(18)
                     ->get();
 }




 public function  similarJob($slug) {

   $ressource =   $this->job->where('slug', $slug)->first();

    $similarjob=Job::where('family_id',$ressource->family_id)
                    ->where('slug','!=',$slug)
                    ->orderByDesc('created_at')
                    ->inrandomOrder()
                    ->take(10)
                    ->get();
     $urlcurrent =  url()->current() ;

    $share = \Share::page(
        $urlcurrent
    )
    ->facebook()
    ->twitter()
    ->linkedin()
    ->telegram()
    ->whatsapp()
    ->reddit();

    return $similarjob ;
 }


 public function CreateJob(JobRequest $request) {
   $job =  $this->job->create([
      'title'  =>   $request->input('title'),
      'slug'  => Str::slug($request->input('title')),
      'employeur'  =>   $request->input('employeur'),
      'lieu_id' =>   $request->input('lieu_id'),
      'contrat_id'  =>   $request->input('contrat_id'),
      'family_id'  =>   $request->input('family_id'),
      'mini_description'  =>   $request->input('mini_description'),
      'description'  =>   $request->input('description'),
      'publish_at' => $request->input('publish_at') ? :'0',
      'logo' =>   $request->input('publish_at'),
      'numero' =>rand(12345556676, 14999994556)
  ]);


  return $job ;

 }


 public function updateJob(JobRequest $request , $id) {
   $ressource = $this->job->find($id);
   $ressource->title = $request->input('title');
    $ressource->slug = Str::slug($request->input('title'));
   $ressource->employeur = $request->input('employeur');
   $ressource->lieu_id = $request->input('lieu_id');
   $ressource->family_id = $request->input('family_id');
   $ressource->mini_description = $request->input('mini_description');
   $ressource->description = $request->input('description');
   $ressource->contrat_id = $request->input('contrat_id');
   $ressource->update();
   return redirect()->route('job.index');
}


 public function recentlyJob() {
    return  $this->job->orderByDesc('created_at')->paginate(40);
 }





public function categoryJob($id) {
    $category = Family::where('id', $id)->first();
    $categoryname = $category->name;
    $job = Job::where('family_id', $category->id)->get();
    return $job ;
}


}
