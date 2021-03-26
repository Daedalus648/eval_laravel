@extends('layouts.base')
@section('css')

@endsection
@section('title', 'Add an artist')
@section('content')
<form action='/addSuperhero' method='POST'>
    @csrf
    <label for='name'>Enter the superhero's name:</label>
    <input type='text' name='name' id='name' required>
    <label for='creation_date'>Enter the superhero's date of creation:</label>
    <input type='text' name='creation_date' id='creation_date' required>
    <label for='appearance'>Enter the comic book in which the superhero appeared first:</label>
    <input type='text' name='appearance' id='appearance' required>
    <label for='artist_id'>Choose the name of the creator:</label>
    <select name="artist_id" id="artist_id">
    @foreach ($artists as $artist)
    <option value="{{$artist->id}}">{{$artist->name}}</option>
  @endforeach
    </select>
    <label for='description'>Enter a short description:</label>
    <input type='text' name='description' id='description' required>
    <input type='hidden' name='image' id='image' value='blank'>
    <input type='submit' value='Submit'>
@endsection