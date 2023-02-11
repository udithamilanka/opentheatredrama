<?php
  $preFooterHeading = get_field('pf_heading','option');
  $preFooterDescription = get_field('pf_description','option');
  $preFooterImage = get_field('pf_image','option');
  $preFooterButton = get_field('pf_button','option');
?>

<section class="pre-footer">
  <div class="row">
    <div class="col-12 col-xl-6 image-wrapper">
      <?php if($preFooterImage): ?>
      <div class="image-wrapper-inner" style="background-image: url(<?php echo e($preFooterImage['url']); ?>)">
        
      </div>
      <?php endif; ?>
    </div>
    <div class="col-12 col-xl-6 content-wrapper">
      <div class="container">
        <div class="content-wrapper-inner">
          <?php if($preFooterHeading): ?>
            <h2><?php echo $preFooterHeading ?></h2>
          <?php endif; ?>
          <?php if($preFooterDescription): ?>
            <p><?php echo $preFooterDescription ?></p>
          <?php endif; ?>
          <?php if($preFooterButton): ?>
            <a href="<?php echo e($preFooterButton['url']); ?>" class="btn cta-btn with-icon">
              <?php echo $preFooterButton['title'] ?>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
