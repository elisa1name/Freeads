<?php

namespace App\Http\Controllers;

use App\Annonce;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use View;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('annonce.index');
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
        var_dump($annonce);
        // $annonce->users_id = User::user()->id;
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
        $annonce = Annonce::find($id);
        return View::make('annonce.show')
            ->with('annonce', $annonce);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function edit(Annonce $annonce)
    {
        return view('annonce.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Annonce $annonce)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annonce $annonce)
    {
        //
    }
}
