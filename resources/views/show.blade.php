@extends ('layouts.base')

@section('pageContent')
<div class="container d-flex align-items-center justify-content-center flex-wrap my-2">
    <div class="card mx-2" style="width: 18rem;">
        <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic["title"]}}">
        <div class="card-body">
            <h2> {{$comic["title"]}}</h2>
            <p class="card-text">{{$comic["sale_date"]}}</p>
            <button type="button" class="btn btn-primary mx-2">RETURN</button>
        </div>
    </div>
@endsection