@php
  $title = get_sub_field('fcp_bs_title');
  $image = get_sub_field('fcp_bs_image');
@endphp

<section class="fcp-section banner-section" style="background-image: url('{{ $image['url'] }}')">
  <div class="container">
    @if ($title)
      <h2>@php echo $title @endphp</h2>
    @endif
  </div>
</section>
