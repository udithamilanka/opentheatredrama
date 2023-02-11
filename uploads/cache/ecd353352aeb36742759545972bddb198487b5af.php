
<?php
  $eyebrowHeading = get_sub_field('fcp_gs_eyebrow_heading');
  $heading = get_sub_field('fcp_gs_heading');
  $gallery = get_sub_field('fcp_gs_image_gallery');
?>

<section class="fcp-section gallery-section">
  <div class="container">
    <div class="intro-content">
      <?php if($eyebrowHeading): ?>
        <h5 class="eyebrow-heading"><?php echo $eyebrowHeading ?></h5>
      <?php endif; ?>
      <?php if($heading): ?>
        <h2><?php echo $heading ?></h2>
      <?php endif; ?>
    </div>
    <div class="gallery-wrapper">
      <?php if($gallery): ?>
        <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galleryItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="gallery-item">
            <a href="<?php echo e($galleryItem['url']); ?>" data-rel="lightcase:gallery:slideshow">
              <img src="<?php echo e($galleryItem['url']); ?>" alt="<?php echo e($galleryItem['title']); ?>"/>
            </a>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
    </div>
  </div>
</section>
