<?php

namespace App\Http\Controllers\Admin\Contrat;

use App\Models\Contrat;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContratRequest;
use Illuminate\Http\RedirectResponse;

class ContratController extends Controller
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
        $contrat = Contrat::all();
        return view('contrat.liste', compact('contrat'));
    }


    public function create() {
        return view('contrat.create');
    }


    public function store(ContratRequest $request)
    {
        Contrat::create([
            'name' => $request->input('name'),
            'slug' => \Str::limit($request->input('name'))
        ]);
        return redirect()->route('contrat.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contrat  = Contrat::find($id);
        return view('contrat.edit', compact('contrat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContratRequest $request, string $id)
    {
        $ressource =Contrat::find($id);
        $ressource->name = $request->input('name');
        $ressource->slug = \Str::slug($request->input('name'));
        $ressource->update();
        return redirect()->route('contrat.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $region  = Contrat::find($id);
        $region->delete();
        return redirect()->back();
    }

}
