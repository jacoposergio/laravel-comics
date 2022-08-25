@extends('layouts.app')

@section('main_content')
@include('components.jumbotron')

  <div class="product-container">
    <div class="blue-stripe"></div>
    <div class="poster-container">
        <img src="{{ $current_comic['thumb'] }}" alt="{{ $current_comic['title'] }}">
    </div>
    <div class="comic-info">
        <div class="first-col">
          <h2>{{ $current_comic['price'] }}</h2>
          <h3>{{ $current_comic['title'] }}</h3>
          <p>{{ $current_comic['description'] }}</p>
            <div class="art-by">
            </div>
        </div>
        <div class="second-col"></div>
    </div>
  </div>
@endsection