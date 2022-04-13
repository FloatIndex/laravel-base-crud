@extends('layouts.standard')

@section('pageTitle', 'New comic');

@section('content')

    <div class="container">

        <form method="POST" action="{{route('comics.store')}}">
            @csrf

            <div class="my-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value='New Comic Title'>
            <div>

            <div class="my-3">
                <label for="thumb" class="form-label">Thumb url</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value='https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/AV1976_01_300-001_HD_5f738f6e39ddd7.18205602.jpg?itok=VgdYdJ01'>
            <div>

            <div class="my-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" value='Type'>
            <div>
            
            <div class="my-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" value='Series'>
            <div>

            <div class="my-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" value='9'>
            <div>
            
            <div class="my-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="data" class="form-control" id="sale_date" name="sale_date" value='1997/08/09'>
            <div>

            <div class="my-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4">test</textarea>
            <div>

            <div class="my-4">
                <button type="submit" class="btn btn-success">Submit</button>
                <a class="btn btn-info" href="{{route('comics.index')}}" role="button">Back to the list</a>
            </div>
        </form>

    </div>
    
@endsection