<header class="header header--no-js">
  <a @if (!is_home()) href="{{home_url()}}" @endif class="header__logo logo">
    <img class="logo__img" width="145" src="{{ get_field('logo', 'option') }}" alt="logo">
  </a>
  <nav class="header__menu menu" data-controller="menu">
    <button class="menu__burger burger burger" data-target="menu.burger">
      <span class="burger__inner">Открыть меню</span>
    </button>
    {!! App::mainMenu() !!}
  </nav>
  <a href="#" class="header__location location">
    <svg width="20" height="20">
      <use xlink:href="{{get_template_directory_uri()}}/assets/img/sprites/sprite.svg#icon__pin"></use>
    </svg>
    <span>Россия</span>
  </a>
  <button class="header__search" aria-label="Поиск">
    <svg width="20" height="20">
      <use xlink:href="{{get_template_directory_uri()}}/assets/img/sprites/sprite.svg#icon__search"></use>
    </svg>
  </button>
</header>
