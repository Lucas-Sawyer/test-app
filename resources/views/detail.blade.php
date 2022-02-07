@extends('shared.head')

@section('content')
    @foreach ($product as $item )
        <img src="{{ URL::asset("img/$item->name.png") }}">
            <div>
                <p>{{ $item->name }}</p>
                <p>{{ $item->description }}</p>
                <p>{{ $item->price}}</p>
            </div>
    @endforeach
@endsection