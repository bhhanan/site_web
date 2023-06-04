<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcceuilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Accuiel.accuiel');
        return view('Accuiel.bureau');
       
    }
    public function bureau()
    {
        
        return view('Accuiel.bureau');
       
    }
    public function officier()
    {
        
        return view('Accuiel.officier');
       
    }
    public function procédure()
    {
        
        return view('Accuiel.procédure');
       
    }
    public function registre()
    {
        
        return view('Accuiel.registre');
       
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function Guide()
    {
        return view('Accuiel.Guide'); 
    }
    public function service()
    {
        return view('Accuiel.service');
       
    }
    public function étranger()
    {
        return view('Accuiel.étranger');
       
    }

     public function infos()
     {
        return view('Accuiel.infos');
   
     }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
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
