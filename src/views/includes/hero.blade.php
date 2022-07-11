<main>
    <section>
        <div class="hero__wrapper">
            <div class="hero">
                <div class="hero-left">
                    <h1 class="hero-left__title">{{$hero->title}}</h1>
                    <p class="hero-left__text">{{$hero->text}}</p>
                    <a href="#" class="hero-left__btn">{{$hero->button}}</a>
                </div>
                <div class="hero-right">
                    <img class="hero-right__img" src="{{$images->hero_image}}" alt="{{$images->hero_image_name}}">
                </div>
            </div>    
        </div>
    </section>
