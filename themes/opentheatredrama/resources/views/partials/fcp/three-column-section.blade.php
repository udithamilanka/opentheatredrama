@php
  $backgroundColor = get_sub_field('fcp_thcs_background_color');
@endphp

<section class="fcp-section three-column-section">
  <div class="container {{ $backgroundColor }}">
    {{-- @if ($backgroundColor)
      <span>@php echo $backgroundColor @endphp</span>
    @endif --}}
    <div class="three-column-wrp row">
      @if (have_rows('fcp_thcs_content'))
        @php while ( have_rows('fcp_thcs_content') )  : the_row(); @endphp
          @php
            $content = get_sub_field('content');
          @endphp
          <div class="three-column-item-wrp col-4">
            @if ($content)
              <p>@php echo $content @endphp</p>
            @endif
          </div>
        @php endwhile; @endphp
      @endif
    </div>
  </div>
</section>
