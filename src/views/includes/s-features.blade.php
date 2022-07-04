<section class="features section">
  <div class="container">
    <div class="features__wrapper">
      <div class="features__body">
       <h2>{{$subtitle}}</h2>
        <div class="features__list">
         @foreach ($cards as $card)
          <a href="#" class="features__item" target="_blank" style="text-decoration: none;">
            <div class="features__item-img">
              <img src="{{$card->image}}" alt="{{$card->image_name}}">
            </div>
            <div class="features__item-body">
              <h3 class="title">{{$card->head}}</h3>
              <p>
               {{$card->text}}
              </p>
            </div>
          </a>
          @endforeach      
        </div>
      </div>
    </div>
  </div>
</section>
