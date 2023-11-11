<?php

namespace App\Http\Controllers\Admin\Category;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CategoryController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }



     public function index() {
        $category = Category::orderBy('name')->paginate(10);
        return view('admin.category.liste', compact('category'));
     }

     public function update(Request $request , $id) {
        $ressource = Category::find($id);
        $ressource->name = $request->input('name');
        $ressource->slug = \Str::slug($request->input('name'));
        $ressource->description = $request->input('description');
        $ressource->update();
        return redirect()->route('category.index');

        }


        public function create() {
            return view('admin.category.create');
        }

     public function destroy($id) {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();
     }

     public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:255',
            'description' => 'required',
        ]);

            $category = Category::create([
                'name'  =>   $request->input('name'),
                'slug'  =>   \Str::slug($request->input('name')),
                'description'  =>   $request->input('description'),
            ]);
            return redirect()->route('category.index');

         }

     public function edit(Request $request, $slug) {
      $category =    Category::findOrfail($slug);
      return view('admin.category.edit', compact('category'));
     }


}


