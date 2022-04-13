@extends('layouts.standard')

@section('pageTitle', '{{$comic->title}}');

@section('content')

    <div class="container">

        <h1>{{$comic->title}}</h1>
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
        <div class="mt-2"><strong>Series: </strong><span>{{$comic->series}}</span></div>
        <div class="mt-2"><strong>Type: </strong><span>{{$comic->type}}</span></div>
        <div class="mt-2"><strong>Price: </strong><span>{{$comic->price}} &dollar;</span></div>
        <div class="mt-2"><p><strong>Description: </strong>{{$comic->description}}</p></div>
        <a class="btn btn-info" href="{{route('comics.index')}}" role="button">Back to the list</a>
    </div>
    
@endsection