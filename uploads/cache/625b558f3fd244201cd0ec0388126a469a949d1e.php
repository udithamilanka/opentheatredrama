<?php
  $cardsPerRow = get_sub_field('fcp_cs_cards_per_row');
  $eyebrowHeading = get_sub_field('fcp_cs_eyebrow_heading');
  $sectionTitle = get_sub_field('fcp_cs_section_title');

  $colSize = 12 / $cardsPerRow;
?>

<section class="fcp-section cards-section">
  <div class="container">
    <div class="intro-content">
      <?php if($eyebrowHeading): ?>
        <h5 class="eyebrow-heading"><?php echo $eyebrowHeading ?></h5>
      <?php endif; ?>
      <?php if($sectionTitle): ?>
        <h2><?php echo $sectionTitle ?></h2>
      <?php endif; ?>
    </div>
    <div class="cards-wrp row">
      <?php if(have_rows('fcp_cs_content')): ?>
        <?php while ( have_rows('fcp_cs_content') )  : the_row(); ?>
          <?php
            $image = get_sub_field('image');
            $content = get_sub_field('content');
            $button = get_sub_field('button');
          ?>
          <div class="cards-item-wrp col-lg-<?php echo e($colSize); ?>">
            <div class="cards-item-inner-wrp">
              <?php if($image): ?>
              <div class="image-wrapper">
                <img src="<?php echo e($image['url']); ?>" alt="<?php echo e($image['title']); ?>">
              </div>
              <?php endif; ?>
              <?php if($content): ?>
              <div class="content-wrapper">
                <?php echo $content ?>
              </div>
              <?php endif; ?>
              <?php if($button): ?>
                <a class="btn read-more-btn with-icon" href="<?php echo e($button['url']); ?>" target="<?php echo e($button['target']); ?>"><?php echo $button['title'] ?></a>
              <?php endif; ?>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
