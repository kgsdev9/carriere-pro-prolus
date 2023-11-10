<?php

namespace App\Http\Controllers\Admin\Region;

use App\Models\Lieu;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegionRequest;

class RegionController extends Controller
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
        $regions = Lieu::all();
        return view('admin.region.liste', compact('regions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.region.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegionRequest $request)
    {
        Lieu::create([
            'name' => $request->input('name'),
            'slug' => \Str::limit($request->input('name'))
        ]);
        return redirect()->route('region.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $region  = Lieu::find($id);
        return view('admin.region.edit', compact('region'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RegionRequest $request, string $id)
    {
        $ressource =  Lieu::find($id);
        $ressource->name = $request->input('name');
        $ressource->slug = \Str::slug($request->input('name'));
        $ressource->update();
        return redirect()->route('region.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $region  = Lieu::find($id);
        $region->delete();
        return redirect()->back();
    }
}
