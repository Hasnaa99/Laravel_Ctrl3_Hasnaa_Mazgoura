<?php

namespace App\Http\Controllers;

use App\Mail\AttestationMail;
use App\Models\Voiture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VoitureController extends Controller
{

    public function formDemande(){
        return view('Email.demandeAttestation');
    }
    public function sendEmail(Request $request){
        Mail::to($request->only('email'))->send(new AttestationMail());
        return redirect()->route('voitures.index')->with('success','L\'attestation à été envoyer à votre email avec succée.');
    }
    public function index()
    {
        $voitures = Voiture::all();
        return view('Voiture.index', compact('voitures'));
    }

    public function create()
    {
        return view('Voiture.create');
    }

    public function store(Request $request)
{
    $validatedData= $request->validate([
        'marque' => 'required',
        'color' => 'required',
        'image'=>'required|file|mimes:jpeg,png,jpg'
    ]);

    if($request->hasFile('image')){
        $validatedData['image'] = $request->file('image')->store('images','public');
    }

    Voiture::create($validatedData);

    return redirect()->route('voitures.index');
}

    public function show(Voiture $voiture)
    {
        return view('Voiture.show', compact('voiture'));
    }

    public function edit(Voiture $voiture)
    {
        return view('Voiture.edit', compact('voiture'));
    }

    public function update(Request $request, Voiture $voiture)
    {
        $validatedData= $request->validate([
            'marque' => 'required',
            'color' => 'required'
        ]);
        if($request->hasFile('image')){
            $validatedData['image'] = $request->file('image')->store('images','public');
        }
        $voiture->update($validatedData);

        return redirect()->route('voitures.index');
    }

    public function destroy(Voiture $voiture)
    {
        $voiture->delete();
        return redirect()->route('voitures.index');
    }
}