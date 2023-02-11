<?php
  $backgroundColor = get_sub_field('fcp_ocs_background_color');
  $eyebrowHeading = get_sub_field('fcp_ocs_eyebrow_heading');
  $heading = get_sub_field('fcp_ocs_heading');
  $content = get_sub_field('fcp_ocs_content');
  $button = get_sub_field('fcp_ocs_button');

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
      <div class="other-content">
        <?php if($content): ?>
          <?php echo $content ?>
        <?php endif; ?>
      </div>
    </div>
    <?php if($button): ?>
      <a class="btn btn-primary with-icon" href="<?php echo e($button['url']); ?>" target="<?php echo e($button['target']); ?>"><?php echo $button['title'] ?></a>
    <?php endif; ?>
  </div>
</section>
