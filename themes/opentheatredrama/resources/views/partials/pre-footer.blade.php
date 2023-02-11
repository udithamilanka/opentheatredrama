@php
  $preFooterHeading = get_field('pf_heading','option');
  $preFooterDescription = get_field('pf_description','option');
  $preFooterImage = get_field('pf_image','option');
  $preFooterButton = get_field('pf_button','option');
@endphp

<section class="pre-footer">
  <div class="container">
    <div class="row">
      <div class="col-6">
        @if ($preFooterImage)
          <img src="{{ $preFooterImage['url'] }}" alt="{{ $preFooterImage['title'] }}">
        @endif
      </div>
      <div class="col-6">
        @if ($preFooterHeading)
          <h2>@php echo $preFooterHeading @endphp</h2>
        @endif
        @if ($preFooterDescription)
          <p>@php echo $preFooterDescription @endphp</p>
        @endif
        @if ($preFooterButton)
          <a href="{{ $preFooterButton['url'] }}">
            @php echo $preFooterButton['title'] @endphp
          </a>
        @endif
      </div>
    </div>
  </div>
</section>
