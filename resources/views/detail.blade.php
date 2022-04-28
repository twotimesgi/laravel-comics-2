@extends('templates.default')

@section('title', 'Home')

@section('content')
        <div class="hero">
            <div class="container">
                <div class="title"><img src="{{ $prod['series'] }}"></div>
            </div>
        </div>
        <div class="info-top">
            <div class="container">
                <h2>{{ $prod['title']}}</h2>
                <p>{!! $prod['description'] !!}</p>
            </div>
        </div>
        <div class="info-bottom">
            <div class="container">

            </div>
        </div>

@endsection