@extends('layouts.base')

@section('pageContent')
<h1 class="text-center font-weight-bold my-2">Comics Collection
    <a href="{{route("comics.create")}}"><button type="button" class="btn btn-primary btn-lg">ADD COMICS</button></a>
</h1>

<div class="container d-flex align-items-center justify-content-center flex-wrap my-2">

    @foreach ($comics as $item)
    <div class="card mx-2" style="width: 18rem;">
        <img src="{{$item->thumb}}" class="card-img-top" alt="{{$item["title"]}}">
        <div class="card-body">
            <h2> {{$item["title"]}}</h2>
            <p class="card-text">{{$item["sale_date"]}}</p>
            <a href="{{route("comics.show", $item->id)}}"><button type="button" class="btn btn-success">SEE
                    MORE</button></a>
            <a href="{{route("comics.edit", $item->id)}}"><button type="button"
                    class="btn btn-primary">CUSTOM</button></a>
            <form action="{{route('comics.destroy', $item->id)}}" method="POST">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn btn-danger mx-2">DELETE</button>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection