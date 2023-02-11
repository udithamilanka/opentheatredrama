@php
  $eyebrowHeading = get_sub_field('fcp_vs_eyebrow_heading');
  $heading = get_sub_field('fcp_vs_heading');
  $videoUrl = get_sub_field('fcp_vs_video_url');
  $description = get_sub_field('fcp_vs_description');
  $button = get_sub_field('fcp_vs_button');
@endphp

<section class="fcp-section video-section">
  <div class="container">
    <div class="video-wrp row">
      @if ($eyebrowHeading)
        <h5>@php echo $eyebrowHeading @endphp</h5>
      @endif
      @if ($heading)
        <h2>@php echo $heading @endphp</h2>
      @endif
      @if ($videoUrl)
        <div class="vimeo-wrapper">
          <iframe
            src="{{ $videoUrl }}?background=1&autoplay=1&loop=1&byline=0&title=0"
            frameborder="0" width="100%" height="100%" webkitallowfullscreen mozallowfullscreen
            allowfullscreen>
          </iframe>
        </div>
      @endif
      @if ($description)
        <p>@php echo $description @endphp</p>
      @endif
      @if ($button)
        <a class="btn btn-primary with-icon" href="{{ $button['url'] }}" target="{{ $button['target'] }}">@php echo $button['title'] @endphp</a>
      @endif
    </div>
  </div>
</section>
