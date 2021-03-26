<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Character;

class ActionController extends Controller
{
    public function removeSuperhero(Request $request)
    {
        Character::destroy($request->id);
        return redirect('/superheroes');
    }

    public function removeArtist(Request $request)
    {
        Artist::destroy($request->id);
        return redirect('/artists');
    }

    public function addArtist(Request $request)
    {
        $artist = new Artist;
        $artist->name = $request->name;
        $artist->birthday = $request->birthday;
        $artist->nationality = $request->nationality;
        $artist->description = $request->description;
        $artist->image = 'null';
        $artist->save();
        return redirect('/artists');
    }

    public function addSuperhero(Request $request)
    {
        $superhero = new Character;
        $superhero->name = $request->name;
        $superhero->creation_date = $request->creation_date;
        $superhero->appearance = $request->appearance;
        $superhero->artist_id = $request->artist_id;
        $superhero->description = $request->description;
        $superhero->image = 'null';
        $superhero->save();
        return redirect('/superheroes');
    }

    public function editSuperhero(Request $request)
    {
        $superhero = Character::findOrFail($request->id);
        $superhero->name = $request->name;
        $superhero->creation_date = $request->creation_date;
        $superhero->appearance = $request->appearance;
        $superhero->artist_id = $request->artist_id;
        $superhero->description = $request->description;
        $superhero->save();
        return redirect('/superheroes');
    }

    public function editArtist(Request $request)
    {
        $artist = Artist::findOrFail($request->id);
        $artist->id = $artist->id;
        $artist->name = $request->name;
        $artist->birthday = $request->birthday;
        $artist->nationality = $request->nationality;
        $artist->description = $request->description;
        $artist->save();
        return redirect('/artists');
    }
}