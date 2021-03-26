<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Character;

class NavController extends Controller
{
    public function home(){
        return view('home');
    }

    public function addArtist(){
        return view('addArtist');
    }

    public function addSuperhero(){
        $artists = Artist::all()->sortBy('name');
        return view('addSuperhero', ['artists' => $artists]);
    }

    public function artistsList(){
        $artists = Artist::all();
        return view('artistsList', ['artists' => $artists]);
    }

    public function showArtist($id){
        $artist = Artist::findOrFail($id);
        return view('artist', ['artist' => $artist]);
    }

    public function editArtist($id){
        $artist = Artist::findOrFail($id);
        return view('editArtist', ['artist' =>$artist]);
    }

    public function superheroesList(){
        $superheroes = Character::all();
        return view('superheroesList', ['superheroes' => $superheroes]);
    }

    public function showSuperhero($id){
        $superhero = Character::findOrFail($id);
        return view('superhero', ['superhero' => $superhero]);
    }

    public function editSuperhero($id){
        $superhero = Character::findOrFail($id);
        $artists = Artist::All();
        return view('editSuperhero', ['superhero' => $superhero], ['artists' => $artists]);
    }
}
