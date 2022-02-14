@extends('layouts.base')

@section('pageContent')

<div class="container">
    <h1 class="text-center my-2">Modifica fumetto: {{$comic->title}}</h1>
    <form action="{{route("comics.update", $comic->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Title"
                name="title" value="{{$comic->title}}">
            @error ('title')
            <div class="alert alert-danger mt-2">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="sale_date">Sale date</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"
                placeholder="Sale date" name="sale_date" value="{{$comic->sale_date}}">
            @error ('sale_date')
            <div class="alert alert-danger mt-2">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="thumb">Thumb</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb"
                placeholder="Inserisci l'immagine" name="thumb" value="{{$comic->thumb}}">
            @error ('thumb')
            <div class="alert alert-danger mt-2">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <input type="text" class="form-control  @error('description') is-invalid @enderror" id="description"
                placeholder="Inserisci l'immagine" name="description" value="{{$comic->description}}">
            @error ('description')
            <div class="alert alert-danger mt-2">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="series">series</label>
            <input type="text" class="form-control  @error('series') is-invalid @enderror" id="series"
                placeholder="Inserisci l'immagine" name="series" value="{{$comic->series}}">
            @error ('series')
            <div class="alert alert-danger mt-2">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="type">type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type"
                placeholder="Inserisci l'immagine" name="type" value="{{$comic->type}}">
            @error ('type')
            <div class="alert alert-danger mt-2">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">price</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                placeholder="Inserisci l'immagine" name="price" value="{{$comic->price}}">
            @error ('price')
            <div class="alert alert-danger mt-2">{{$message}}</div>
            @enderror
        </div>
</div>



<button type="submit" class="btn btn-danger mx-2">UPDATE</button>
</form>
</div>
@endsection