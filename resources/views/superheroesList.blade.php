@extends('layouts.base')
@section('css')
@endsection
@section('title', 'Superheroes list')
@section('content')
<h3>Superheroes list</h3>
<p>Click on the names for more information.</p>
<table>
    <thead>
        <th>Name</th>
        <th>Date of creation</th>
        <th>First appearance</th>
        <th>Created by</th>
        <th>Remove</th>
    </thead>
    <tbody>
        @foreach($superheroes as $superhero)
        <tr>
        <td><a href='/superhero/{{$superhero->id}}'>{{$superhero->name}}</a></td>
        <td>{{$superhero->creation_date}}</td>
        <td>{{$superhero->appearance}}</td>
        <td>{{$superhero->artist->name}}</td>
        <td><form action="/removeSuperhero" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$superhero->id}}">
            <input type="submit" class="btn btn-danger" value = "X"></td>
            <td><a href='/editSuperhero/{{$superhero->id}}'>Edit</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection