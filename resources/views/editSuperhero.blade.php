@extends('layouts.base')
@section('css')

@endsection
@section('title', 'Edit a superhero')
@section('content')
<form action='/editSuperhero' method='POST'>
    @csrf
    <input type='hidden' name='id' id='id' value='{{$superhero->id}}' required>
    <label for='name'>Enter the superhero's name:</label>
    <input type='text' name='name' id='name' value='{{$superhero->name}}' required>
    <label for='creation_date'>Enter the superhero's date of creation:</label>
    <input type='text' name='creation_date' id='creation_date' value='{{$superhero->creation_date}}' required>
    <label for='appearance'>Enter the comic book in which the superhero appeared first:</label>
    <input type='text' name='appearance' id='appearance' value='{{$superhero->appearance}}' required>
    <label for='artist_id'>Choose the name of the creator:</label>
    <select name="artist_id" id="artist_id" value='{{$superhero->artist_id}}'>
    @foreach ($artists as $artist)
    <option value="{{$artist->id}}">{{$artist->name}}</option>
  @endforeach
    </select>
    <label for='description'>Enter a short description:</label>
    <input type='text' name='description' id='description' value='{{$superhero->description}}' required>
    <!--<input type='hidden' name='image' id='image' value='blank'>-->
    <input type='submit' value='Submit'>
@endsection