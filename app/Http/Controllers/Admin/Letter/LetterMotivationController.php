<?php

namespace App\Http\Controllers\Admin\Letter;

use App\Models\Category;
use App\Models\TypeLetter;
use Illuminate\Http\Request;
use App\Models\LetterMotivation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\LetterMotivationRequest;

class LetterMotivationController extends Controller
{
    public function __construct()
    {
        $this->middleware(['admin', 'auth']);
    }

    public function index()     {
        $letter = LetterMotivation::all();
        return view('admin.letterMotivation.liste', compact('letter'));

    }



    public function create() {
        $typeletter = Category::all();
        return view('admin.letterMotivation.create', compact('typeletter'));
    }

    public function store(LetterMotivationRequest $request ) {


        if($request->hasfile('image')) {
            $file = $request->file('image');
            $extention  = $file->getClientOriginalExtension();
            $document = time().'.'.$extention;
            $file->move('lettermotivation/document/' , $document);
         }

         $user =  LetterMotivation::create([
            'name'=> $request->input('title'),
            'slug'=> \Str::slug($request->input('title')),
            'category_id'=> $request->input('category_id'),
            'image'=> $document ,
            'contenu'=> $request->input('description'),
         ]);
        return redirect()->route('letter.index');

    }


    public function update(LetterMotivationRequest $request , $id) {
        $category = LetterMotivation::find($id);
        $category->name = $request->input('title');
        $category->contenu = $request->input('description');
        $category->category_id = $request->input('category_id');

        if($request->hasFile('image')) {
            $chemin ='lettermotivation/document/'.$category->image;
            if(File::exists($chemin)) {
            $docs =    File::delete($chemin) ;
            }
              $file = $request->file('image');
            $extention  = $file->getClientOriginalExtension();
            $document = time().'.'.$extention;
            $file->move('lettermotivation/document/' , $document);
            $category->image  = $document;
         }

        $category->update();
        return redirect()->route('letter.index');

     }

     public function show($id) {
        $ressource = LetterMotivation::find($id);
        return view('admin.letterMotivation.detail', compact('ressource'));
     }

     public function destroy($id) {
        $ressource = LetterMotivation::find($id);
        $ressource->delete();
        return redirect()->back();
     }

    public function edit($id) {
        $typeletter = Category::all();
        $ressource = LetterMotivation::find($id);
        return view('admin.letterMotivation.edit', compact('ressource', 'typeletter'));
    }


}
