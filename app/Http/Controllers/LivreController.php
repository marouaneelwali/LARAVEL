<?php

namespace App\Http\Controllers;
use App\Models\stagaire;

use Illuminate\Http\Request;

class LivreController extends Controller
{


public function delete($id)
{
    $stagiaire = stagaire::find($id);
    $stagiaire->delete();
    return redirect('/livre/add');
}


public function edit($id)
{
    $stagiaire = stagaire::find($id); 
    return view('EditStagaire', compact('stagiaire'));
}


public function update(Request $request, $id)
{
    $stagiaire = stagaire::find($id);
    $stagiaire->update($request->all());
    return redirect('/livre/add');
}

    public function home()
    {
        $stagaires = stagaire::all();
        return view('ShowStagaire', compact('stagaires'));
    }
    public function add(Request $request)
    {
 
        $name = $request->input('name');
        $filier = $request->input('filier');
        $email = $request->input('email');
        $password = $request->input('password');
        $note = $request->input('note');

        stagaire::create([
            'name' => $name,
            'email' => $email,
            'filier' =>$filier,
            'password' => $password,
            'note' => $note,
        ]);
        $stagaires = stagaire::all();
        return view('ShowStagaire', compact('stagaires'));

    }
}
