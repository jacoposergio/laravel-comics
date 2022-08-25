@extends('layouts.app')

@section('main_content')

@include('components.jumbotron')
@include('components.comics-list')

    <div class="load-more">
        <a href="#">LOAD MORE</a>
    </div>
  </div>

@endsection