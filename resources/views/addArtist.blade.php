@extends('layouts.base')
@section('css')

@endsection
@section('title', 'Add an artist')
@section('content')
<form action='/addArtist' method='POST'>
    @csrf
    <label for='name'>Enter the artist's name:</label>
    <input type='text' name='name' id='name' required>
    <label for='birthday'>Enter the artist's date of birth:</label>
    <input type='text' name='birthday' id='birthday' required>
    <label for='nationality'>Enter the artist's nationality:</label>
    <input type='text' name='nationality' id='nationality' required>
    <label for='description'>Enter a short description:</label>
    <input type='text' name='description' id='description' required>
    <input type='hidden' name='image' id='image' value='blank'>
    <input type='submit' value='Submit'>
@endsection