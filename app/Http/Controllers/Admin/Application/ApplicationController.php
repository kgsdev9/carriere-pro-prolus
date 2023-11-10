<?php

namespace App\Http\Controllers\Admin\Application;

use App\Models\Category;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ApplicationController extends Controller
{

    public function index() {

        $category = Category::all();
        return view('admin.applications.create', compact('category'));
    }

    public function liste() {
        $ressource = Application::paginate(10);
        return view('admin.applications.liste', compact('ressource'));
     }


     public function destroy($id) {
        $ressource = Application::find($id);
        $ressource->delete();
        return redirect()->route('apps.liste');
     }

     public function edit($id) {
        $category = Category::all();
        $ressource = Application::find($id);
        return view('admin.applications.edit', compact('ressource', 'category'));
     }


     public function update(Request $request , $id) {
        $ressource = Application::find($id);
        $ressource->title = $request->input('name');
        $ressource->description = $request->input('description');
        $ressource->url = $request->input('url');
        $ressource->price = $request->input('price');
        $ressource->popular = $request->input('popular');
        $ressource->category_id = $request->input('categorie');
        $ressource->update();
        return redirect()->route('apps.liste');

     }



     public function store(Request $request) {
        $ventetotal = rand(100, 200);
        Application::create([
            'title' => $request->input('name'),
            'slug' => $request->input('name'),
            'popular' => $request->input('popular'),
            'category_id' => $request->input('categorie'),
            'price' => $request->input('price'),
            'total_buye'=> $ventetotal,
            'url' =>$request->input('url'),
            'description' => $request->input('description'),
        ]);
      return redirect()->route('apps.liste');


     }

}
