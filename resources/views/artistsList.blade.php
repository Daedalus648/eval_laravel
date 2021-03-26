@extends('layouts.base')
@section('css')
@endsection
@section('title', 'Artists list')
@section('content')
<h3>Artists list</h3>
<p>Click on the names for more information</p>
<table>
    <thead>
        <th>Name</th>
        <th>Birthday</th>
        <th>Nationality</th>
    </thead>
    <tbody>
        @foreach($artists as $artist)
        <tr>
        <td><a href='artist/{{$artist->id}}'>{{$artist->name}}</a></td>
        <td>{{$artist->birthday}}</td>
        <td>{{$artist->nationality}}</td>
        <td><form action="/removeArtist" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$artist->id}}">
            <input type="submit" class="btn btn-danger" value = "X"></td>
            <td><a href='/editArtist/{{$artist->id}}'>Edit</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection