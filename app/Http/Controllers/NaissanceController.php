<?php

namespace App\Http\Controllers;
use App\Models\Declaration;
use Illuminate\Http\Request;


class NaissanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('naissance.declaration');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function impression()
    {
        $déclaration = Declaration::paginate(4);
        return view('naissance.impression',compact('déclaration'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $déclaration = new Declaration();
      $déclaration->number = $request->number;
      $déclaration->déclaration = $request->déclaration;
      $déclaration->Nom = $request->Nom;
      $déclaration->Prénom = $request->Prénom;
      $déclaration->dateNaissance = $request->dateNaissance;
      $déclaration->lieuNaissance = $request->lieuNaissance;
      $déclaration->gender = $request->gender;
      $déclaration->save();
       
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
    public function edit($id)
    {
        $déclaration = Declaration::find($id);
        return view('naissance.modifier',compact('déclaration'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $déclaration = Declaration::find($id); 
        $déclaration->number = $request->number;
        $déclaration->déclaration = $request->déclaration;
        $déclaration->Nom = $request->Nom;
        $déclaration->Prénom = $request->Prénom;
        $déclaration->dateNaissance = $request->dateNaissance;
        $déclaration->update();
        
        return redirect()->route('impression.naissance')->with('success','modification successfely');
        
        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $déclaration = Declaration::find($id);
        $déclaration->delete();
        return back();
    }
}

