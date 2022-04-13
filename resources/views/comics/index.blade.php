@extends('layouts.standard')

@section('pageTitle', 'Home Page')

@section('content')

    <div class="container">

        <a class="btn btn-success my-3" href="{{route('comics.create')}}" role="button">Add new comic</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Series</th>
                    <th scope="col">Type</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr class="align-middle">
                        <th scope="row">{{$comic->id}}</th>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->type}}</td>
                        <td>{{$comic->price}} &dollar;</td>
                        <td><a class="btn btn-info" href="{{route('comics.show', $comic->id)}}" role="button">Show</a></td>
                        <td><a class="btn btn-warning" href="{{route('comics.edit', $comic->id)}}" role="button">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    
@endsection