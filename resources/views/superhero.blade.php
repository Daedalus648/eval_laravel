@extends('layouts.base')
@section('css')
<link rel="stylesheet" href="{{ asset('/css/presentation.css') }}">
@endsection
@section('title', 'Superhero details')
@section('content')
<h3>{{$superhero->name}}</h3>
<img src="{{asset('img/'.$superhero->image)}}">
<p>{{$superhero->description}}</p>
@endsection