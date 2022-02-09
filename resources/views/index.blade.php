@extends('layouts.base')

@section('pageContent')
    <ul>
        @foreach ($comics as $item)
            <li>{{$item["id"]}}<h2> {{$item["title"]}}</h2> <p>{{$item["sale_date"]}}</p></li>
        @endforeach
    </ul>
@endsection