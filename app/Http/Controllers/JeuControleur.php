<?php

namespace App\Http\Controllers;

use App\Models\Jeu;
use Illuminate\Http\Request;

class JeuControleur extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jeux = Jeu::orderBy('id', 'asc')->get();
        return view('jeux.index', ['jeux'=>$jeux]);
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
        $jeux = Jeu::find($id);
        $categorie = $jeux->categorie;
        return view('jeux.show',['id'=>$id,'jeux'=>$jeux, 'categorie'=>$categorie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jeux = Jeu::find($id);
        return view('jeux.edit',['id'=>$id,'jeux'=>$jeux]);
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
            'titre'=>'required|string|max:45|min:5'
        ])){
        $titre= $request->input('titre');
        $jeux = Jeu::find($id);
        $jeux->titre = $titre;
        $jeux->save();
        return redirect()->route('jeux.index');
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
        Jeu::destroy($id);
        return redirect()->route('jeux.index');
    }
}