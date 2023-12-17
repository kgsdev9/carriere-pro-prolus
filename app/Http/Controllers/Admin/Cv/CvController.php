<?php

namespace App\Http\Controllers\Admin\Cv;

use App\Models\Cv;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CvRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class CvController extends Controller
{

    public function __construct()
    {
        $this->middleware(['admin', 'auth']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cv =   Cv::orderByDesc('created_at')->paginate(10);
        return view('admin.ressourcesCv.cv.liste', compact('cv'));
    }


    public function liste() {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::orderBy('name')->get();
        return view('admin.ressourcesCv.cv.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(CvRequest $request) {


        if($request->hasfile('image')) {
            $file = $request->file('image');
            $extention  = $file->getClientOriginalExtension();
            $image = time().'.'.$extention;
            $file->move('cv/images/' , $image);
         }

            Cv::create([
                'title'  =>   $request->input('title'),
                'slug'  =>   $request->input('title'),
                'image'  =>   $image,
                'document'  =>   "ssss",
                'price'  =>   $request->input('price'),
                'category_id'  => 1,
                'description'  =>   $request->input('description'),
            ]);
            return redirect()->route('cvs.index');
         }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ressources = Cv::find($id);
        $category = Category::all();
        return view('admin.ressourcesCv.cv.edit', compact('ressources', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function update(CvRequest $request , $id) {
        $category = Cv::find($id);
        $category->title = $request->input('title');
        $category->url = $request->input('url');
        $category->price = $request->input('price');
        $category->category_id = $request->input('category_id');
        $category->description = $request->input('description');

        if($request->hasFile('image')) {
            $chemin = 'cv/images/'.$category->image;
            if(File::exists($chemin)) {
            $docs =    File::delete($chemin) ;
            }
              $file = $request->file('image');
              $extention  = $file->getClientOriginalExtension();
              $image = time().'.'.$extention;
              $file->move('cv/images/' , $image);
            $category->image  = $image;
         }

         if($request->hasFile('document')) {
            $chemin = 'cv/document/'.$category->document;
            if(File::exists($chemin)) {
            $docs =    File::delete($chemin) ;
            }
            $file = $request->file('document');
            $extention  = $file->getClientOriginalExtension();
            $document = time().'.'.$extention;
            $file->move('cv/document/' , $document);
            $category->document  = $document;
         }

        $category->update();
        return redirect()->route('cvs.index');

     }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function destroy($id) {
        $category = Cv::find($id);
        $chemin = 'cv/images/'.$category->image;
        $chemin1 = 'cv/document/'.$category->document;
        if(File::exists($chemin)) {
            if(File::exists($chemin)) {
            $docs =    File::delete($chemin) ;
            }
        }
        if(File::exists($chemin1)) {
            if(File::exists($chemin1)) {
            $docs =    File::delete($chemin1) ;
            }
        }
        $category->delete();
        return redirect()->back();
     }
}
