

@extends('layout')

@section('content')
    

<h1>{{$heading}}</h1>
    @foreach ($listings as $listing)
    <h2>{{$listing['tittle']}}</h2>

    <p>{{$listing['description']}}</p>

@endforeach

@endsection