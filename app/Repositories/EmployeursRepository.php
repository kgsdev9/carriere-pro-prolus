<?php

namespace App\Repositories;

use App\Models\Employe;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Http\Requests\EmployeurRequest;

class EmployeursRepository
{
 public $employeur ;

 public function __construct(Employe $employeur)
 {
    return $this->employeur = $employeur ; 
  
 }
//  if($request->hasfile('image')) {
//     $chemin='employeurs/image/'.$ressource->logo;
//     if(File::exists($chemin)) {
//     $docs = File::delete($chemin) ;
//     }

//  public function fileSource($field) {
//     $path = "employeurs/image".$field ;
//     if(File::exists($path))  {
//         File::delete($chemin)
        
//     } else {

//     }
  
//  }


 public function all() {
    return $this->employeur->all();
 }

 public function show($id) {
    return $this->employeur->find($id);
 }


 public function createEmployeur(EmployeurRequest $request) {

    if($request->hasfile('image')) {
        $file = $request->file('image');
        $extention  = $file->getClientOriginalExtension();
        $document = time().'.'.$extention;
        $file->move('employeurs/image/',$document);

        }
          $employeur=Employe::create([
            'designation' => $request->input('designation'),
            'slug' => Str::slug($request->input('designation')),
            'lieu'=>  $request->input('lieu'),
            'logo' => $document
         ]);

         return $employeur ; 
 }


 public function updateEmployeur(EmployeurRequest $request, $id) {
   
    $ressource = $this->employeur->find($id);
  
    $ressource->designation = $request->input('designation');
    $ressource->lieu = $request->input('lieu');

    if($request->hasfile('image')) {
        $chemin='employeurs/image/'.$ressource->logo;
        if(File::exists($chemin)) {
        $docs = File::delete($chemin) ;
        }
        $file = $request->file('image');
        $extention  = $file->getClientOriginalExtension();
        $image = time().'.'.$extention;
        $file->move('employeurs/image/',$image);
        $ressource->logo = $image;
        }
        $ressource->update();
        return $ressource; 

 }

}
