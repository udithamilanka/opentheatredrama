<?php
  $backgroundColor = get_sub_field('fcp_ocs_background_color');
  $eyebrowHeading = get_field('home_one_column_eyebrow_heading');
  $heading = get_field('home_one_column_heading');
  $content = get_field('home_one_column_content');

  if ($backgroundColor != "no-bg") {
    $bgOption = "bg-enabled";
  } else {
    $backgroundColor = "";
  }
?>

<section class="fcp-section one-column-section <?php echo e($bgOption); ?> <?php echo e($backgroundColor); ?>">
  <div class="container">
    <div class="content-section">
      <div class="intro-content">
        <?php if($eyebrowHeading): ?>
          <h5 class="eyebrow-heading"><?php echo $eyebrowHeading ?></h5>
        <?php endif; ?>
        <?php if($heading): ?>
          <h2><?php echo $heading ?></h2>
        <?php endif; ?>
      </div>
      <div class="other-content wrap-btns">
        <?php if($content): ?>
          <?php echo $content ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
