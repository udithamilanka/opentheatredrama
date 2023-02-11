<?php
  $eyebrowHeading = get_field('accordion_eyebrow_heading');
  $heading = get_field('accordion_heading');
  $accordion = get_row_index();
?>

<section class="fcp-section accordion-section">
  <div class="container">
    <div class="intro-content">
      <?php if($eyebrowHeading): ?>
        <h5 class="eyebrow-heading"><?php echo $eyebrowHeading ?></h5>
      <?php endif; ?>
      <?php if($heading): ?>
        <h2><?php echo $heading ?></h2>
      <?php endif; ?>
    </div>
    <div class="accordion-wrp" id="accordionFaq<?php echo e($accordion); ?>">
      <?php if(have_rows('accordion_repeater')): ?>
        <?php
          $i = 0;
          while ( have_rows('accordion_repeater') )  : the_row();

          $title = get_sub_field('accordion_title');
          $content = get_sub_field('accordion_content');
          $accordionItem = "{$accordion}_item_{$i}";
        ?>
          <div class="accordion-item-wrp">
            <?php if($title): ?>
              <div class="faq-title <?php if ($i!=0) { echo('collapsed'); }; ?>" data-toggle="collapse" data-target="#collapse<?php echo e($accordionItem); ?>">
                <p><?php echo $title ?></p>
                <span class="accord-icon"></span>
              </div>
            <?php endif; ?>
            <?php if($content): ?>
              <div id="collapse<?php echo e($accordionItem); ?>" class="faq-content collapse <?php if ($i==0) { echo('show'); }; ?>" data-parent="#accordionFaq<?php echo e($accordion); ?>">
                <div class="faq-content-inner-wrp wrap-btns">
                  <?php echo $content ?>
                </div>
              </div>
            <?php endif; ?>
          </div>
        <?php
          $i++;
          endwhile;
        ?>
      <?php endif; ?>
    </div>
  </div>
</section>
