<?php
  $backgroundColor = get_sub_field('fcp_thcs_background_color');

  if ($backgroundColor != "no-bg") {
    $bgOption = "bg-enabled";
  } else {
    $backgroundColor = "";
  }
?>

<section class="fcp-section three-column-section <?php echo e($bgOption); ?> <?php echo e($backgroundColor); ?>">
  <div class="container">
    
    <div class="three-column-wrp row">
      <?php if(have_rows('three_column_section_repeater')): ?>
        <?php while ( have_rows('three_column_section_repeater') )  : the_row(); ?>
          <?php
            $content = get_sub_field('three_column_section_content');
          ?>
          <div class="three-column-item-wrp col-12 col-lg-4">
            <div class="content-wrapper wrap-btns">
              <?php if($content): ?>
                <?php echo $content ?>
              <?php endif; ?>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
