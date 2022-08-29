@php
  $title = $data['tytul'];
  $subtitle = $data['podtytul'];
  $btn = $data['przycisk'];
  $image = $data['zdjecie'];
@endphp
<section class="hero">
  <div class="container">
    <div class="hero__holder">
      <div class="hero__caption" data-aos="fade-right">

        @if($title)
          <h1 class="hero__heading">
            {!! $title!!}
          </h1>
        @endif

        @if($subtitle)
          <div class="hero__subtitle">
            {!! $subtitle !!}
          </div>
        @endif

        @if($data['przycisk'])
          <a class="hero__btn"
             href="{!! $btn['url'] !!}"
             title="{!! $btn['title'] !!}"
             @if($btn['target'])
             target="{!! $btn['target'] !!}" @endif>
            {!! $btn['title'] !!}
          </a>
        @endif

      </div>

      @if($image)
        <div class="hero__image" data-aos="fade-left">
          <img src="{!! $image['url'] !!}"
               alt="{!! $image['alt'] !!}">
        </div>
      @endif

    </div>
  </div>
</section>
