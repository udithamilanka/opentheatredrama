@php
  $eyebrowHeading = get_sub_field('fcp_as_eyebrow_heading');
  $heading = get_sub_field('fcp_as_heading');
@endphp

<section class="fcp-section accordion-section">
  <div class="container">
    @if ($eyebrowHeading)
      <h5>@php echo $eyebrowHeading @endphp</h5>
    @endif
    @if ($heading)
      <h2>@php echo $heading @endphp</h2>
    @endif
    <div class="accordion-wrp">
      @if (have_rows('fcp_as_content'))
        <?php while ( have_rows('fcp_as_content') )  : the_row(); ?>
          @php
            $title = get_sub_field('title');
            $content = get_sub_field('content');
          @endphp
          <div class="accordion-item-wrp">
            @if ($title)
              <h4>@php echo $title @endphp</h4>
            @endif
            @if ($content)
              <p>@php echo $content @endphp</p>
            @endif
          </div>
        <?php endwhile; ?>
      @endif
    </div>
  </div>
</section>
