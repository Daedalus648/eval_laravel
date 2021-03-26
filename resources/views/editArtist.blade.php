@extends('layouts.base')
@section('css')

@endsection
@section('title', 'Edit author')
@section('content')
<form action='/editArtist' method='POST'>
    @csrf
    <input type='hidden' name='id' id='id' value={{$artist->id}}>
    <label for='name'>Enter the artist's name:</label>
    <input type='text' name='name' id='name' value="{{$artist->name}}" required>
    <label for='birthday'>Enter the artist's date of birth:</label>
    <input type='text' name='birthday' id='birthday' value="{{$artist->birthday}}" required>
    <label for='nationality'>Enter the artist's nationality:</label>
    <input type='text' name='nationality' id='nationality' value="{{$artist->nationality}}" required>
    <label for='description'>Enter a short description:</label>
    <input type='text' name='description' id='description' value="{{$artist->description}}" required>
    <!--<input type='hidden' name='image' id='image' value='blank'>-->
    <input type='submit' value='Submit'>
@endsection