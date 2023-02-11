<?php
  $content = get_field('banner_content');
  $image = get_field('banner_image');
  $video = get_field('banner_video');
  $headerLayout = get_field('banner_layout');
  $videoClass = '';

  if ($video) {
    $videoClass = ' has-video';
  } else {
    $videoClass = '';
  }

  if ($headerLayout == '1') {
    $headerLayoutClass = ' sticky-over';
  } else {
    $headerLayoutClass = '';
  }
?>

<section id="home-banner-section" class="home-banner-section<?php echo e($videoClass); ?><?php echo e($headerLayoutClass); ?>" style="background-image: url('<?php echo e($image['url']); ?>')">
  <?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php if($content): ?>
    <div class="content-wrp">
      <div class="container">
        <div class="content-wrp-inner wrap-btns">
          <?php echo $content ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <?php if($videoClass == 'has-video'): ?>
    <div class="banner-video-wrp">
      <?php if($video): ?>
        <div class="vimeo-wrapper">
          <iframe src="<?php echo e($video); ?>?background=1&autoplay=1&loop=1&byline=0&title=0&muted=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
      <?php endif; ?>
    </div>
  <?php endif; ?>
</section>
