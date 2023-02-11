@php
  $backgroundColor = get_sub_field('fcp_tcs_background_color');
  $eyebrowHeading = get_sub_field('fcp_tcs_eyebrow_heading');
  $heading = get_sub_field('fcp_tcs_heading');
  $col1 = get_sub_field('fcp_tcs_col1_content');
  $col2 = get_sub_field('fcp_tcs_col2_content');
@endphp

<section class="fcp-section two-column-section">
  <div class="container {{ $backgroundColor }}">
    {{-- @if ($backgroundColor)
      <span>@php echo $backgroundColor @endphp</span>
    @endif --}}
    @if ($eyebrowHeading)
      <h5>@php echo $eyebrowHeading @endphp</h5>
    @endif
    @if ($heading)
      <h2>@php echo $heading @endphp</h2>
    @endif
    <div class="two-column-wrp row">
      @if ($col1)
        <div class="column1-wrp col-6">
          @php
            $col1Layout = $col1['col1_layout'];
            $col1Content = $col1['col1_content'];
            $col1Image = $col1['col1_image'];
            $col1ButtonPrimary = $col1['col1_button_primary'];
            $col1ButtonSecondary = $col1['col1_button_secondary'];
          @endphp
          @if ($col1Layout)
            @if ($col1Image)
              <img src="{{ $col1Image['url'] }}" alt="{{ $col1Image['title'] }}">
            @endif
          @else
            @if ($col1Content)
              <p>@php echo $col1Content @endphp</p>
            @endif
            @if ($col1ButtonPrimary)
              <a class="btn btn-primary with-icon" href="{{ $col1ButtonPrimary['url'] }}" target="{{ $col1ButtonPrimary['target'] }}">@php echo $col1ButtonPrimary['title'] @endphp</a>
            @endif
            @if ($col1ButtonSecondary)
              <a class="btn btn-secondary with-icon" href="{{ $col1ButtonSecondary['url'] }}" target="{{ $col1ButtonSecondary['target'] }}">@php echo $col1ButtonSecondary['title'] @endphp</a>
            @endif
          @endif
        </div>
      @endif
      @if ($col2)
        <div class="column2-wrp col-6">
          @php
            $col2layout = $col2['col2_layout'];
            $col2Content = $col2['col2_content'];
            $col2Image = $col2['col2_image'];
          @endphp
          @if ($col2layout)
            @if ($col2Image)
              <img src="{{ $col2Image['url'] }}" alt="{{ $col2Image['title'] }}">
            @endif
          @else
            @if ($col2Content)
              <p>@php echo $col2Content @endphp</p>
            @endif
          @endif
        </div>
      @endif
    </div>
  </div>
</section>
