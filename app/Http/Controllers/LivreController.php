<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function edit(Livre $livre){
        return view('Livre.edit',compact('livre'));
    }
    public function update(Request $request, Livre $livre) {
        $request->validate([
            'titre'=>'required',
            'datePublication'=>'required',
            'prix'=>'required'
        ]);

        $livre->update($request->only(['titre', 'datePublication', 'prix']));
        return redirect()->route('auteurs.index');
    }
    public function destroy(Livre $livre){
        $livre->delete();
        return redirect()->route('auteurs.index');
    }
}
