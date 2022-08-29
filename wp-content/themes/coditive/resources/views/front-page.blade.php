@extends('layouts.app')

@section('content')
  @if(have_rows('strona_glowna'))
    @while(have_rows('strona_glowna')) @php the_row() @endphp
    @if(get_sub_field(get_row_layout()))
      @includeIf('sections.'.get_row_layout(),
        ['block_name' => get_row_layout(), 'data'=> get_sub_field(get_row_layout())])
    @endif
    @endwhile
  @endif
@endsection
