<?php

namespace App\Http\Controllers;

use App\Annonce;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use View;
use Auth;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annonces = Annonce::all();
        return view('annonce.index', compact('annonces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('annonce.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $annonce = new Annonce;
        $annonce->id = Input::get('id');
        $annonce->titre = Input::get('titre');
        $annonce->description = Input::get('description');
        // $annonce->photo = Input::get('photo');
        $annonce->prix = Input::get('prix');
        $annonce->users_id = Auth::user()->id;
        $annonce->save();
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
   
    public function show($id)
    {
        var_dump($id);
        $annonces = Annonce::where('users_id', $id)->get();

        // $annonce = Annonce::find($id);
         return view('annonce.show', compact('annonces'));
       
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $annonce = Annonce::find($id);
        return view('annonce.edit', compact('annonce'));     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $annonce = Annonce::find($id);
        $annonce->titre =  $request->get('titre');
        $annonce->description = $request->get('description');
        $annonce->prix = $request->get('prix');
        // $annonce->photo = $request->get('photo');
        
        $annonce->save();

        return redirect('/annonce')->with('success', 'annonce modifer!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $annonce = Annonce::find($id);
        $annonce->delete();

        return redirect('/annonce')->with('success', 'Annonce supprimés!');
    }
}
