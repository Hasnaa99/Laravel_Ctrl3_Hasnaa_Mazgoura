<?php

namespace App\Http\Controllers;

use App\Jobs\SendEventNotification;
use App\Models\Auteur;
use App\Notifications\EventNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class AuteurController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function createEvent(){
        return view('Auteur.createEvent');

    }
    public function storeEvent(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        SendEventNotification::dispatch($validated);
        return redirect()->route('auteurs.index')->with('success', 'Notifications envoyées avec succès!');

    }
    public function index(){
        $auteurs = Auteur::all();
        return view('Auteur.index',compact('auteurs'));
    }
    public function show(Auteur $auteur){
        return view('Auteur.show',compact('auteur'));

    }
    public function create(){
        return view('Auteur.create');
    }
    public function store(Request $request){
        $request->validate([
            'nom'=>'required',
            'dateNaissance'=>'required|date',
            'email'=>'required|email'
        ]);
        Auteur::create([
            'nom' => $request->input('nom'),
            'dateNaissance' => $request->input('dateNaissance'),
        ]);
        return redirect()->route('auteurs.index');
    }
    public function edit(Auteur $auteur){
        return view('Auteur.edit',compact('auteur'));

    }
    public function update(Request $request, Auteur $auteur) {
        $request->validate([
            'nom'=>'required',
            'dateNaissance'=>'required|date',
            'email'=>'required|email'
        ]);
        $auteur->update($request->all());
        return redirect()->route('auteurs.index');
    }
    public function destroy(Auteur $auteur){
        $auteur->delete();
        return redirect()->route('auteurs.index');
    }
}
