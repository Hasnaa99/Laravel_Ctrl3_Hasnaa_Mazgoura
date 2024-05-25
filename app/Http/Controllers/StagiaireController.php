<?php

namespace App\Http\Controllers;

use App\Events\StagiaireCreated;
use App\Models\Stagiaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redis;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stagiaires = Stagiaire::paginate(10);
        return view('Stagiaire.index', compact('stagiaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Stagiaire.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'filiere'=>'required',
        ]);
        
        $stagiaire = Stagiaire::create($validatedData);
        event(new StagiaireCreated($stagiaire));
        return redirect()->route('stagiaires.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Stagiaire $stagiaire)
    {
        return view('Stagiaire.show', compact('stagiaire'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stagiaire $stagiaire)
    {
        $this->authorize('update');
        return view('Stagiaire.edit', compact('stagiaire'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stagiaire $stagiaire)
    {
        $this->authorize('update');
        $request->validate([
            'nom' => 'required',
            'filiere'=>'required'
        ]);

        $stagiaire->update($request->all());

        return redirect()->route('stagiaires.index')->with('success','Le stagiaire à été modifier avec succée');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stagiaire $stagiaire)
    {
        Gate::authorize('supprimer_stagiaire');
        $stagiaire->delete();
        return redirect()->route('stagiaires.index')->with('success','Le stagiaire à été modifier avec succée');;
    }
    public function testSession(Request $request){
        $request->session()->put('user',Auth::user()->name);
        $name=$request->session()->get('user');
        return view('acceuil',compact('name'));
    }
}
