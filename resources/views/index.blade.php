@extends('shared.head')

    @section('content')
        <div class="wrapper">
            @foreach ($featuring as $item )
                    <a class="box" href="catalog/{{ $item->name }}">
                        <h4>{{ $item->name }}</h4>
                    </a>
            @endforeach
        </div>
    @endsection