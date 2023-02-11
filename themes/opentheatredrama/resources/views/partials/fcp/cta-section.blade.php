@php
  $heading = get_sub_field('fcp_ctas_heading');
  $description = get_sub_field('fcp_ctas_description');
  $button = get_sub_field('fcp_ctas_button');
@endphp

<section class="fcp-section cta-section">
  <div class="container">
    @if ($heading)
      <h2>@php echo $heading @endphp</h2>
    @endif
    @if ($description)
      <h2>@php echo $description @endphp</h2>
    @endif
    @if ($button)
      <a href="{{ $button['url'] }}" target="{{ $button['target'] }}">@php echo $button['title'] @endphp</a>
    @endif
  </div>
</section>
