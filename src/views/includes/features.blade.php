    <section>
        <div class="features__wrapper">
            <div class="features">
                <h2 class="features__title">{{$subtitle}}</h2>
                <div class="features-list">
                    @foreach ($cards as $card)
                    <a class="features-item" href="#">
                            <img class="features-item__img" src="{{$card->image}}" alt="{{$card->image_name}}">
                            <h3 class="features-item__title">{{$card->head}}</h3>
                            <p class="features-item__text">{{$card->text}}</p>
                    </a>
                    @endforeach 
                </div>
            </div>
        </div>
    </section>
</main>
