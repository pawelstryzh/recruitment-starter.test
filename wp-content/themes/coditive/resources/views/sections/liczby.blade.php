<section class="liczby">
  <div class="container">
    <div class="liczby__holder">

      @foreach($data as $key => $item)
      <div class="liczby__single"
           data-aos="fade-up"
           data-aos-delay="{!! $key+1 !!}00">
        <div class="liczby__single-inner">
          <img class="liczby__icon lozad" data-src="{!! $item['ikona']['url'] !!}"
               alt="{!! $item['ikona']['alt'] !!}">
          <div class="liczby__value">
            <div class="liczby__number">
              <span>{!! $item['liczba'] !!}</span>@if($item['dodac_plus'])+@endif
            </div>
            <div class="liczby__subtitle">
              {!! $item['podtytul'] !!}
            </div>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section>
