<?php

namespace App\Http\Controllers;
use App\Models\Décider;
use Illuminate\Http\Request;

class DéciderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('décider.declaration');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function impression()
    {
        $déciders = Décider::all();
        return view('décider.impression',compact('déciders'));
    
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
        'lieuDécider' => 'required',
        'dateDécider' => 'required',
        'NomPére' => 'required',
        'NomMére' => 'required',
      ]);

      $décider = new Décider();
      $décider->anner = $request->anner;
      $décider->numéro = $request->numéro;
      $décider->Nom = $request->Nom;
      $décider->Prénom = $request->Prénom;
      $décider->dateNaissance = $request->dateNaissance;
      $décider->gender = $request->gender;
      $décider->lieuDécider = $request->lieuDécider;
      $décider->dateDécider = $request->dateDécider;
      $décider->NomPére = $request->NomPére;
      $décider->NomMére = $request->NomMére;
      $décider->save();
       
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
        $déciders = Décider::find($id);
        return view('décider.modifier', compact('déciders'));
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request)
       {
        $request->validate([
        'anner' => 'required',
        'numéro' => 'required',
        'Nom' => 'required',
        'Prénom' => 'required',
        'gender' => 'required',
        'dateNaissance' => 'required',
        'lieuDécider' => 'required',
        'dateDécider' => 'required',
        'NomPére' => 'required',
        'NomMére' => 'required',
      ]);
        $décider = Décider::find($request->id); 
        $décider->anner = $request->anner;
        $décider->numéro = $request->numéro;
        $décider->Nom = $request->Nom;
        $décider->Prénom = $request->Prénom;
        $décider->gender = $request->gender;
        $décider->dateNaissance = $request->dateNaissance;
        $décider->lieuDécider = $request->lieuDécider;
        $décider->dateDécider = $request->dateDécider;
        $décider->NomPére = $request->NomPére;
        $décider->NomMére = $request->NomMére;

        $décider->update();
        
        return redirect('/impression/décider')->with('success','modification successfely');
    }

    /**
     * Remove the specified resource from storage.
     */
   public function destroy($id)
    {
        $décider = Décider::find($id);
        $décider->delete();
        return back();
    }
};
