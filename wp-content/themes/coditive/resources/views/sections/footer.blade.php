@php
  $footer_logo = get_field('footer', 'option')['footer_logo'];
  $footer_text = get_field('footer', 'option')['footer_tekst'];
  $social = get_field('footer', 'option')['social_media'];
  $copy = str_replace('$year', Date('Y'), get_field('footer', 'option')['copyright']);
@endphp

<footer class="footer">
  <div class="container">
    <div class="footer__holder">
      <div class="footer__column">
        @if($footer_logo)
        <a class="footer__logo" href="{{ home_url('/') }}">
          <img class="lozad" data-src="{!! $footer_logo['url'] !!}"
               alt="{{ get_bloginfo('name', 'display') }}">
        </a>
        @endif

        @if($footer_text)
        <div class="footer__text">
          {!! $footer_text !!}
        </div>
        @endif

        @if($social)
          <div class="footer__social">
            @foreach($social as $item)
              <a class="footer__social-link"
                 href="{!! $item['link']['url'] !!}"
                 title="{!! $item['link']['title'] !!}"
                 target="{!! $item['link']['target'] !!}">
                <img src="{!! $item['ikona']['url'] !!}" alt="{!! $item['link']['title'] !!}">
              </a>
            @endforeach
          </div>
        @endif

        @if($copy)
          <div class="footer__copy">
            {!! $copy !!}
          </div>
        @endif

      </div>
      <div class="footer__menus">
        <div class="footer__menu">
          <h4 class="footer__menu-title">
            {!! wp_get_nav_menu_name('footer-1') !!}
          </h4>
          {!! wp_nav_menu(array('theme_location' => 'footer-1')) !!}
        </div>
        <div class="footer__menu">
          <h4 class="footer__menu-title">
            {!! wp_get_nav_menu_name('footer-2') !!}
          </h4>
          {!! wp_nav_menu(array('theme_location' => 'footer-2')) !!}
        </div>
        <div class="footer__menu">
          <h4 class="footer__menu-title">
            {!! wp_get_nav_menu_name('footer-3') !!}
          </h4>
          {!! wp_nav_menu(array('theme_location' => 'footer-3')) !!}
        </div>
      </div>
    </div>
  </div>
</footer>
