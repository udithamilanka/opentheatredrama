<?php
  $backgroundColor = get_sub_field('fcp_ctas_background_color');
  $backgroundImage = get_sub_field('fcp_ctas_background_image');
  $heading = get_sub_field('fcp_ctas_heading');
  $description = get_sub_field('fcp_ctas_description');
  $button = get_sub_field('fcp_ctas_button');

  if ($backgroundColor != "no-bg") {
    $bgOption = "bg-enabled";
  } else {
    $backgroundColor = "";
  }
  ?>

<?php if($backgroundColor != "bg-img"): ?>
  <section class="fcp-section cta-section <?php echo e($bgOption); ?> <?php echo e($backgroundColor); ?>">
<?php else: ?>
  <section class="fcp-section cta-section <?php echo e($bgOption); ?> <?php echo e($backgroundColor); ?>" style="background-image: url(<?php echo e($backgroundImage['url']); ?>)">
<?php endif; ?>
  <div class="container">
    <div class="content-section">
      <div class="intro-content">
        <?php if($heading): ?>
          <h2><?php echo $heading ?></h2>
        <?php endif; ?>
      </div>
      <div class="other-content">
        <?php if($description): ?>
          <?php echo $description ?>
        <?php endif; ?>
      </div>
    </div>
    <?php if($button): ?>
      <a class="btn cta-btn with-icon" href="<?php echo e($button['url']); ?>" target="<?php echo e($button['target']); ?>"><?php echo $button['title'] ?></a>
    <?php endif; ?>
  </div>
</section>
