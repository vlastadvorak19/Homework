<header class="header">
  <div class="header__wrapper">
    <div class="container">
      <nav class="nav">
        <ul class="nav__list list-reset">
            @foreach ($links as $link)
              <li class="nav__item">
                  <a href="#" class="nav__link">{{$link}}</a>
              </li>
            @endforeach
        </ul>
      </nav>
      <div class="burger">
        <span class="burger__line"></span>
      </div>
    </div>
  </div>
</header>
