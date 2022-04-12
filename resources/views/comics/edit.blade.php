@extends('layouts.standard')

@section('pageTitle', 'Edit ' . $comic->title)

@section('content')
    <div class="container">

        <form method="POST" action="{{route('comics.update', $comic->$id)}}">
            @csrf
            @method('PUT');

            <div class="my-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value='{{$comic->title}}'>
            <div>

            <div class="my-3">
                <label for="thumb" class="form-label">Thumb url</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value='{{$comic->thumb}}'>
            <div>

            <div class="my-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" value='{{$comic->type}}'>
            <div>
            
            <div class="my-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" value='{{$comic->series}}'>
            <div>

            <div class="my-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" value='{{$comic->price}}'>
            <div>
            
            <div class="my-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="data" class="form-control" id="sale_date" name="sale_date" value='{{$comic->sale_date}}'>
            <div>

            <div class="my-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4">{{$comic->description}}</textarea>
            <div>

            <div class="my-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>
@endsection