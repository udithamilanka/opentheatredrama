
@php
  $eyebrowHeading = get_sub_field('fcp_gs_eyebrow_heading');
  $heading = get_sub_field('fcp_gs_heading');
  $gallery = get_sub_field('fcp_gs_image_gallery');
@endphp

<section class="fcp-section gallery-section">
  <div class="container">
    @if ($eyebrowHeading)
      <h5>@php echo $eyebrowHeading @endphp</h5>
    @endif
    @if ($heading)
      <h2>@php echo $heading @endphp</h2>
    @endif
    @if ($gallery)
      @foreach( $gallery as $galleryItem )
        <div class="gallery-item">
          <div class="image-wrp">
            <div class="image-inner-wrp" style="background-image: url({{ $galleryItem['url'] }})">
              <img src="{{ $galleryItem['url'] }}" alt="gallery-image" style="width: 100%;" />
            </div>
          </div>
        </div>
      @endforeach
    @endif
  </div>
</section>
