<section class="hero section">
  <div class="container">
    <div class="hero_main">
      <div class="hero__wrapper">
        <h1 class="title">
          {{$hero->title}}
        </h1>
        <p class="info">
          {{$hero->text}}
        </p>
        <a href="#" class="btn">
         {{$hero->button}}
        </a>
      </div>
      <div class="hero__img">
        <img src="{{$images->hero_image}}" alt="woman" width="50px" height="50px">
      </div>
    </div>
    </div>
  </div>
</section>
