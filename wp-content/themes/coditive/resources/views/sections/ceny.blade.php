@php
  $title = $data['tytul'];
  $subtitle = $data['podtytul'];
  $prices = $data['blok_cenowy'];
@endphp
@if($prices)
<div class="ceny">
  <div class="container">

    @if($title)
    <h2 class="ceny__heading" data-aos="fade-up">
      {!! $title !!}
    </h2>
    @endif

    @if($subtitle)
    <div class="ceny__subtitle" data-aos="fade-up">
      {!! $subtitle !!}
    </div>
    @endif

    <div class="ceny__holder">
      @foreach($prices as $key => $price)
        <div class="ceny__single"
             data-aos="fade-up"
             data-aos-delay="{!! $key+1 !!}00">

          @if($price['zdjecie'])
          <img class="ceny__image lozad"
               data-src="{!! $price['zdjecie']['url'] !!}"
               alt="{!! $price['zdjecie']['alt'] !!}">
          @endif

          @if($price['tytul'])
            <h3 class="ceny__single-title">
              {!! $price['tytul'] !!}
            </h3>
          @endif

          @if($price['cechy'])
            <div class="ceny__features">
              {!! $price['cechy'] !!}
            </div>
          @endif

          <div class="ceny__bottom">

            @if($price['cena'])
              <div class="ceny__price">
                @if($price['cena'] == 'Free')
                  <strong>{!! $price['cena']  !!}</strong>
                @else
                  <strong>
                    ${!! $price['cena']  !!}
                  </strong> / mo
                @endif
              </div>
            @endif

            @if($price['przycisk'])
              <a class="ceny__btn" href="#" title="{!! $price['przycisk']['title'] !!}">
                {!! $price['przycisk']['title'] !!}
              </a>
            @endif

          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endif
