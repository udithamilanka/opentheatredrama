<?php
  $logo = get_field('scd_logo','option');
  $copyrightsText = get_field('scd_copyrights_text','option');
  $siteBy = get_field('scd_site_by','option');
  $termsAndConditions = get_field('scd_terms_and_conditions','option');
  $privacyPolicy = get_field('scd_privacy_policy','option');
  $contactNumber = get_field('cd_contact_number','option');
  $email = get_field('cd_email','option');
  $address = get_field('cd_address','option');
  $socialMedia = get_field('cd_social_media','option');
?>

<footer class="footer">
  <div class="container">
    <div class="footer-container">
      <div class="footer-top-container row">
        <div class="footer-logo col-12 col-lg-3">
          <div class="footer-logo-wrp">
            <?php if($logo): ?>
              <img src="<?php echo e($logo['url']); ?>" alt="<?php echo e($logo['title']); ?>" />
            <?php endif; ?>
          </div>
        </div>
        <div class="footer-menu col-12 col-lg-6">
          <div class="footer-menu-wrp">
            <?php if(has_nav_menu('footer-menu')): ?>
              <?php echo wp_nav_menu(['theme_location' => 'footer-menu', 'menu_class' => 'nav']); ?>

            <?php endif; ?>
          </div>
          
        </div>
        <div class="footer-social-media col-12 col-lg-3">
          <div class="footer-social-media-wrp">
            <?php if($socialMedia): ?>
              <?php $__currentLoopData = $socialMedia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socialMediaItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                  $smIcon = $socialMediaItem['social_media_icon'];
                  $smLink = $socialMediaItem['social_media_link'];
                ?>
                <div class="footer-social-media-item">
                  <?php if($smLink): ?>
                    <a href="<?php echo e($smLink); ?>" target="_blank">
                      <?php if($smIcon): ?>
                        <img src="<?php echo e($smIcon['url']); ?>" alt="<?php echo e($smIcon['title']); ?>" />
                      <?php endif; ?>
                    </a>
                  <?php endif; ?>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom-container">
    <div class="container">
      <div class="row">
        <div class="footer-copyright col-12 col-lg-6">
          <?php if($copyrightsText): ?>
            <span class="footer-text"><?php echo $copyrightsText ?></span>
          <?php endif; ?>
          <?php if($privacyPolicy): ?>
            <a class="light" href="<?php echo e($privacyPolicy['url']); ?>" target="<?php echo e($privacyPolicy['target']); ?>">
              <?php echo $privacyPolicy['title'] ?>
            </a>
          <?php endif; ?>
          <?php if($termsAndConditions): ?>
            <a class="light" href="<?php echo e($termsAndConditions['url']); ?>" target="<?php echo e($termsAndConditions['target']); ?>">
              <?php echo $termsAndConditions['title'] ?>
            </a>
          <?php endif; ?>
        </div>
        <div class="footer-site-details col-12 col-lg-6">
          <?php if($siteBy): ?>
            <span class="footer-text">Website by </span>
            <a class="light" href="<?php echo e($siteBy['url']); ?>" target="<?php echo e($siteBy['target']); ?>">
              <?php echo $siteBy['title'] ?>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</footer>
