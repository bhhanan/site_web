<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nonEnregistrer;

class NonEnregisrerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('nonenregistrer.déclaration');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function impression()
    {
        $nonenregistrer = nonEnregistrer::all();
        return view('nonenregistrer.impression',compact('nonenregistrer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'anner' => 'required',
            'numéro' => 'required',
            'Nom' => 'required',
            'Prénom' => 'required',
            'gender' => 'required',
            'dateNaissance' => 'required',
          ]);
    
          $nonenregistre = new nonEnregistrer();
          $nonenregistre->anner = $request->anner;
          $nonenregistre->numéro = $request->numéro;
          $nonenregistre->Nom = $request->Nom;
          $nonenregistre->Prénom = $request->Prénom;
          $nonenregistre->dateNaissance = $request->dateNaissance;
          $nonenregistre->gender = $request->gender;
          $nonenregistre->save();
           
          return redirect()->back()->with('success','Declaration successfely');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
