<?php
  $eyebrowHeading = get_sub_field('fcp_fs_eyebrow_heading');
  $heading = get_sub_field('fcp_fs_heading');
  $description = get_sub_field('fcp_fs_description');
  $image = get_sub_field('fcp_fs_image');
  $contactFormShortcode = get_sub_field('fcp_fs_contact_form_shortcode');
?>

<section class="fcp-section form-section">
  <div class="intro-content">
    <div class="container">
      <?php if($eyebrowHeading): ?>
        <h5 class="eyebrow-heading"><?php echo $eyebrowHeading ?></h5>
      <?php endif; ?>
      <?php if($heading): ?>
        <h2><?php echo $heading ?></h2>
      <?php endif; ?>
      <?php if($description): ?>
        <?php echo $description ?>
      <?php endif; ?>
    </div>
  </div>
  <div class="form-wrp row">
    <div class="item-wrapper-outer col-12 col-xl-6">
      <?php if($image): ?>
        <div class="image-wrapper">
          <img src="<?php echo e($image['url']); ?>" alt="<?php echo e($image['title']); ?>">
        </div>
      <?php endif; ?>
    </div>
    <div class="item-wrapper-outer col-12 col-xl-6">
      <?php if($contactFormShortcode): ?>
        <div class="form-wrapper">
          <div class="container-xl">
            <?php echo do_shortcode($contactFormShortcode); ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
