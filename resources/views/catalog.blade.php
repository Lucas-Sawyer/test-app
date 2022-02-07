@extends('shared.head')

@section('content')
    <div class="wrapper">
        @foreach ($products as $item )
                <a class="box" href="catalog/{{ $item->name }}">
                    <h4>{{ $item->name }}</h4>
                    <p>{{ $item->description }}</p>
                </a>
        @endforeach
    </div>
@endsection