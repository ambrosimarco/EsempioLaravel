<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::all();

        return view('photo.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photo = new Photo([
            'titolo' => $request->get('titolo'),
            'colore' => $request->get('colore'),
            'data' => $request->get('data'),
            'luogo' => $request->get('luogo'),
        ]);
        $photo->save();
        return redirect('/photos')->with('success', 'Fotografia salvata');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        $photo = Photo::find($photo->id);
        return view('photo.edit', compact('photo'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        $photo = Photo::findorFail($photo->id);
        $photo->titolo =  $request->get('titolo');
        $photo->colore = $request->get('colore');
        $photo->data = $request->get('data');
        $photo->luogo = $request->get('luogo');
        $photo->save();
        return redirect('/photos')->with('success', 'Fotografia aggiornata');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $photo = Photo::findorFail($photo->id);
        $photo->delete();
        return redirect('/photos')->with('success', 'Fotografia eliminata');
    }
}
