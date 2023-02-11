<?php
  $eyebrowHeading = get_field('video_eyebrow_heading');
  $heading = get_field('video_eyebrow_heading');
  $videoUrl = get_field('video_eyebrow_video_link');
  $description = get_field('video_eyebrow_description');
  $button = get_field('fcp_vs_button');
?>

<section class="fcp-section video-section">
  <div class="container">
    <div class="intro-content text-center">
      <?php if($eyebrowHeading): ?>
        <h5 class="eyebrow-heading"><?php echo $eyebrowHeading ?></h5>
      <?php endif; ?>
      <?php if($heading): ?>
        <h2><?php echo $heading ?></h2>
      <?php endif; ?>
    </div>
    <?php if($videoUrl): ?>
      <div class="video-wrp">
        <div class="vimeo-wrapper">
          <iframe
            src="<?php echo e($videoUrl); ?>"
            frameborder="0" width="100%" height="100%" webkitallowfullscreen mozallowfullscreen
            allowfullscreen>
          </iframe>
          <span class="play-button"></span>
        </div>
      </div>
    <?php endif; ?>
    <?php if($description): ?>
      <div class="content-wrapper wrap-btns text-center">
        <?php echo $description ?>
      </div>
    <?php endif; ?>
  </div>
</section>
