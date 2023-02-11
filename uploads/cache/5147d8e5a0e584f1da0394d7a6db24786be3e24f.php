<?php
  $title = get_sub_field('fcp_bs_title');
  $image = get_sub_field('fcp_bs_image');
?>

<section class="fcp-section banner-section" style="background-image: url('<?php echo e($image['url']); ?>')">
  <div class="container">
    <?php if($title): ?>
      <h2><?php echo $title ?></h2>
    <?php endif; ?>
  </div>
</section>
