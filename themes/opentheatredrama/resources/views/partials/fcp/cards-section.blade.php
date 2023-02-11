@php
  $cardsPerRow = get_sub_field('fcp_cs_cards_per_row');
  $eyebrowHeading = get_sub_field('fcp_cs_eyebrow_heading');
  $sectionTitle = get_sub_field('fcp_cs_section_title');

  $colSize = 12 / $cardsPerRow;
@endphp

<section class="fcp-section cards-section">
  <div class="container">
    @if ($eyebrowHeading)
      <h5>@php echo $eyebrowHeading @endphp</h5>
    @endif
    @if ($sectionTitle)
      <h2>@php echo $sectionTitle @endphp</h2>
    @endif
    <div class="cards-wrp row">
      @if (have_rows('cs_content'))
        <?php while ( have_rows('cs_content') )  : the_row(); ?>
          @php
            $image = get_sub_field('image');
            $content = get_sub_field('content');
            $button = get_sub_field('button');
          @endphp
          <div class="cards-item-wrp col-{{ $colSize }}">
            @if ($image)
              <img src="{{ $image['url'] }}" alt="{{ $image['title'] }}">
            @endif
            @if ($content)
              <p>@php echo $content @endphp</p>
            @endif
            @if ($button)
              <a class="btn read-more-btn with-icon" href="{{ $button['url'] }}" target="{{ $button['target'] }}">@php echo $button['title'] @endphp</a>
            @endif
          </div>
        <?php endwhile; ?>
      @endif
    </div>
  </div>
</section>
