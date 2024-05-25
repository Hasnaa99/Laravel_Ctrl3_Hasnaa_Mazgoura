<?php

namespace App\Http\Controllers;

use App\Models\Formateur;
use Illuminate\Http\Request;

class FormateurController extends Controller
{

    public function edit(Formateur $formateur)
    {
        return view('Formateur.edit', compact('formateur'));
    }

    public function update(Request $request, Formateur $formateur)
    {
        $request->validate([
            'nom' => 'required',
            'age' => 'required',
            'profession' => 'required',
            
        ]);

        $formateur->update($request->all());

        return redirect()->route('formateurs.index');
    }

    public function destroy(Formateur $formateur)
    {
        $formateur->delete();

        return redirect()->route('stagiaires.index');
    }
}
