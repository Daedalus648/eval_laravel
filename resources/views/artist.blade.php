@extends('layouts.base')
@section('css')
<link rel="stylesheet" href="{{ asset('/css/presentation.css') }}">
@endsection
@section('Title', 'Show {{$artist->name}}')
@section('content')
<h3>{{$artist->name}}</h3>
<img src="{{asset('img/'.$artist->image)}}">
<p>{{$artist->description}}</p>
@endsection