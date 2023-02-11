@php
  $eyebrowHeading = get_sub_field('fcp_fs_eyebrow_heading');
  $heading = get_sub_field('fcp_fs_heading');
  $description = get_sub_field('fcp_fs_description');
  $image = get_sub_field('fcp_fs_image');
  $contactFormShortcode = get_sub_field('fcp_fs_contact_form_shortcode');
@endphp

<section class="fcp-section form-section">
  <div class="container">
    @if ($eyebrowHeading)
      <h5>@php echo $eyebrowHeading @endphp</h5>
    @endif
    @if ($heading)
      <h2>@php echo $heading @endphp</h2>
    @endif
    @if ($description)
      <p>@php echo $description @endphp</p>
    @endif
    <div class="form-wrp row">
      <div class="col-6">
        @if ($image)
          <img src="{{ $image['url'] }}" alt="{{ $image['title'] }}">
        @endif
      </div>
      <div class="col-6">
        @if ($contactFormShortcode)
          @php echo do_shortcode($contactFormShortcode); @endphp
        @endif
      </div>
    </div>
  </div>
</section>
