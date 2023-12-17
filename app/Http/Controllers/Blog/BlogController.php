<?php

namespace App\Http\Controllers\Blog;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $article = Article::paginate();
        return view('admin.blog.liste', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.blog.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Validator::make($request->all(), [
            "title" => "required",
              'image'=> 'required',
             "category_id" => "required",
             "description" => "required",
             "mini_description" => "required"

        ])->validate();

        if($request->hasfile('image')) {
            $file = $request->file('image');
            $filename  = $file->getClientOriginalName();
            $img = Image::make($file->getRealPath());
            $img->resize(600, 400);
            $img->save(public_path('blog/images/'.$filename));
         }


        Article::create([
            "title" =>$request->input('title'),
            "slug" =>\Str::slug($request->input('title')),
            "event" =>$request->input('event'),
            "image"  => $filename,
            "category_id" =>$request->input('category_id'),
            "event" =>$request->input('event'),
            "mini_description" =>$request->input('mini_description') ?? 'teste',
            "description" =>$request->input('description'),
        ]);

        return redirect()->route('blogs.index');


    }



    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $ressource = Article::find($id);

        return view('admin.blog.detail', compact('ressource'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $ressource = Article::find($id);
        $category = Category::all();
        return view('admin.blog.edit', compact('ressource', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int  $id)
    {
        $ressource = Article::find($id);
        if($request->hasFile('image')) {
            $chemin ='blog/images/'.$ressource->image;
            if(File::exists($chemin)) {
            $docs =File::delete($chemin) ;
            }
            $file = $request->file('image');
            $filename  = $file->getClientOriginalName();
            $img = Image::make($file->getRealPath());
            $img->resize(600, 400);
            $img->save(public_path('blog/images/'.$filename));
            $ressource->image  = $filename;
         }

        $ressource->title  = $request->input('title');
        $ressource->event  = $request->input('event');
        $ressource->slug  = \Str::slug($request->input('title'));
        $ressource->mini_description = $request->input('mini_description');
        $ressource->description = $request->input('description');
        $ressource->update();
        return redirect()->route('blogs.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $ressource = Article::find($id);
        $ressource->delete();
        return redirect()->back();
    }
}
