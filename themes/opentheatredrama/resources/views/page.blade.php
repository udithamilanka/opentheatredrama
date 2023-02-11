@extends('layouts.app')

@section('content')
  @if (have_rows('page_content'))
    @while (have_rows('page_content')) @php the_row() @endphp
      @if (get_row_layout() == 'banner_section')
        @include('partials.fcp.banner-section')
      @elseif(get_row_layout() == 'one_column_section')
        @include('partials.fcp.one-column-section')
      @elseif(get_row_layout() == 'two_column_section')
        @include('partials.fcp.two-column-section')
      @elseif(get_row_layout() == 'three_column_section')
        @include('partials.fcp.three-column-section')
      @elseif(get_row_layout() == 'cards_section')
        @include('partials.fcp.cards-section')
      @elseif(get_row_layout() == 'form_section')
        @include('partials.fcp.form-section')
      @elseif(get_row_layout() == 'video_section')
        @include('partials.fcp.video-section')
      @elseif(get_row_layout() == 'gallery_section')
          @include('partials.fcp.gallery-section')
      @elseif(get_row_layout() == 'accordion_section')
          @include('partials.fcp.accordion-section')
      @elseif(get_row_layout() == 'cta_section')
          @include('partials.fcp.cta-section')
      @endif
    @endwhile
  @endif
@endsection
