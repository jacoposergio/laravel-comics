<section>
        <div class="comics-wrapper">
            @foreach ($comics_array as $comic)
             <div class="comics-card">
                 <div class="img-container">
                    <img src="{{ $comic['thumb'] }}" alt="">
                 </div>
                 <h3>{{ $comic['title'] }}</h3>
             </div>
             @endforeach
          </div>
        

        
  </section>