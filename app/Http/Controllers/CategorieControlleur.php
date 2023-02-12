<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;

class CategorieControlleur extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorie = categorie::all();
        return view('categorie.index', ['categorie'=>$categorie]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jeux.create', ['message'=>"Cette page n'est pas encore développée"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorie = categorie::find($id);
        $jeux = $categorie->jeux;
        return view('categorie.show',['id'=>$id,'categorie'=>$categorie, 'jeux'=>$jeux]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = categorie::find($id);
        return view('categorie.edit',['id'=>$id,'categorie'=>$categorie]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->validate([
            'libelle'=>'required|string|max:45|min:5'
        ])){
        $libelle= $request->input('libelle');
        $categorie = categorie::find($id);
        $categorie->libelle = $libelle;
        $categorie->save();
        return redirect()->route('categorie.index');
        }else{
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        categorie::destroy($id);
        return redirect()->route('categorie.index');
    }
}
