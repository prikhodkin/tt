<footer class="footer">
  <nav class="footer__nav">
    <div class="footer__col">
      <a href="#" class="footer__cats">Кредиты</a>
      <ul class="footer__list">
        <li class="footer__item"><a href="">Главная</a></li>
        <li class="footer__item"><a href="">Вклады</a></li>
        <li class="footer__item"><a href="">Кредиты</a></li>
        <li class="footer__item"><a href="">Ипотека</a></li>
        <li class="footer__item"><a href="">Займы</a></li>
        <li class="footer__item"><a href="">Карты</a></li>
      </ul>
    </div>
    <div class="footer__col">
      <a href="#" class="footer__cats">Вклады</a>
      <ul class="footer__list">
        <li class="footer__item"><a href="">Главная</a></li>
        <li class="footer__item"><a href="">Вклады</a></li>
        <li class="footer__item"><a href="">Кредиты</a></li>
        <li class="footer__item"><a href="">Ипотека</a></li>
        <li class="footer__item"><a href="">Займы</a></li>
        <li class="footer__item"><a href="">Карты</a></li>
      </ul>
    </div>
    <div class="footer__col">
      <a href="#" class="footer__cats">Ипотека</a>
      <ul class="footer__list">
        <li class="footer__item"><a href="">Главная</a></li>
        <li class="footer__item"><a href="">Вклады</a></li>
        <li class="footer__item"><a href="">Кредиты</a></li>
        <li class="footer__item"><a href="">Ипотека</a></li>
        <li class="footer__item"><a href="">Займы</a></li>
        <li class="footer__item"><a href="">Карты</a></li>
      </ul>
    </div>
    <div class="footer__col">
      <a href="#" class="footer__cats">Кредитные карты</a>
      <ul class="footer__list">
        <li class="footer__item"><a href="">Главная</a></li>
        <li class="footer__item"><a href="">Вклады</a></li>
        <li class="footer__item"><a href="">Кредиты</a></li>
        <li class="footer__item"><a href="">Ипотека</a></li>
        <li class="footer__item"><a href="">Займы</a></li>
        <li class="footer__item"><a href="">Карты</a></li>
      </ul>
    </div>
    <div class="footer__col">
      <a href="#" class="footer__cats">Микрозаймы</a>
      <ul class="footer__list">
        <li class="footer__item"><a href="">Главная</a></li>
        <li class="footer__item"><a href="">Вклады</a></li>
        <li class="footer__item"><a href="">Кредиты</a></li>
        <li class="footer__item"><a href="">Ипотека</a></li>
        <li class="footer__item"><a href="">Займы</a></li>
        <li class="footer__item"><a href="">Карты</a></li>
      </ul>
    </div>
    <div class="footer__col">
      <a href="#" class="footer__cats">Стахование</a>
      <ul class="footer__list">
        <li class="footer__item"><a href="">Главная</a></li>
        <li class="footer__item"><a href="">Вклады</a></li>
        <li class="footer__item"><a href="">Кредиты</a></li>
        <li class="footer__item"><a href="">Ипотека</a></li>
        <li class="footer__item"><a href="">Займы</a></li>
        <li class="footer__item"><a href="">Карты</a></li>
      </ul>
    </div>
  </nav>
  <div class="footer__bottom">
    <div class="footer__left">
      <a @if (!is_home()) href="{{ home_url() }}" @endif class="footer__logo logo">
        <img class="logo__img" width="145" src="{{ get_field('logo', 'option') }}" alt="logo">
      </a>
      <p class="footer__copyright">© {{ date('Y') }} {{ get_field('copyright', 'option') }}</p>
    </div>
    <ul class="footer__list">
      {!! App::footerMenu() !!}
    </ul>
    <div class="footer__subscribe subscribe">
      <p class="subscribe__title">Подпишитесь на обновления</p>
      <form action="#" class="subscribe__form">
        <label>
          <input type="text" class="subscribe__input" placeholder="Ваш E-mail">
        </label>
        <button class="subscribe__button">ПОДПИСАТЬСЯ</button>
      </form>
    </div>
    <ul class="footer__social social">
      <li class="social__item social__item--ok"><a target="_blank" href="{{ get_field('social_ok', 'option') }}">Одноклассники</a></li>
      <li class="social__item social__item--fb"><a target="_blank" href="{{ get_field('social_fb', 'option') }}">Facebook</a></li>
      <li class="social__item social__item--vk"><a target="_blank" href="{{ get_field('social_vk', 'option') }}">Vkontakte</a></li>
    </ul>
  </div>
</footer>
