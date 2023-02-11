@php
  $backgroundColor = get_sub_field('fcp_ocs_background_color');
  $eyebrowHeading = get_sub_field('fcp_ocs_eyebrow_heading');
  $heading = get_sub_field('fcp_ocs_heading');
  $content = get_sub_field('fcp_ocs_content');
  $button = get_sub_field('fcp_ocs_button');
@endphp

<section class="fcp-section one-column-section">
  <div class="container {{ $backgroundColor }}">
    {{-- @if ($backgroundColor)
      <span>@php echo $backgroundColor @endphp</span>
    @endif --}}
    <div class="one-column-wrp row">
      @if ($eyebrowHeading)
        <h5>@php echo $eyebrowHeading @endphp</h5>
      @endif
      @if ($heading)
        <h2>@php echo $heading @endphp</h2>
      @endif
      @if ($content)
        <p>@php echo $content @endphp</p>
      @endif
      @if ($button)
        <a class="btn btn-primary with-icon" href="{{ $button['url'] }}" target="{{ $button['target'] }}">@php echo $button['title'] @endphp</a>
      @endif
    </div>
  </div>
</section>
