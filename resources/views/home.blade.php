@extends('layouts.app')

@section('main_content')
         <div class="jumbo-cards-container">
           <div class="jumbotron">
               <div class="current-series">
                   <h3>CURRENT SERIES</h3>
               </div>
               <div class="jumbo-img">
                   <img src="{{asset('img/jumbotron.jpg')}}" alt="jumbotron">
               </div>
           </div>
        </div>
        <div class="comics-wrapper">
            @foreach ($comics_array as $comic)
             <div class="comics-card">
                 <div class="img-container">
                    <img src=""{{ $comic['thumb'] }}"" alt="">
                 </div>
                 <h3>batmanz</h3>
             </div>
             @endforeach
             
          </div>
        

           <div class="load-more">
               <a href="#">LOAD MORE</a>
           </div>
         </div>
@endsection