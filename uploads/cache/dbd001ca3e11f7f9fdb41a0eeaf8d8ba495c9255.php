<?php
  $logo = get_field('scd_logo','option');
  $logoAlternative = get_field('scd_logo_alternative','option');
  $megaMenuContent = get_field('mega_menu_content','option');
?>

<header class="header">
  <div class="container">
    <div class="header-container">
      <div class="logo-wrp">
        <a href="/">
          <?php if($logo): ?>
            <img class="default" src="<?php echo e($logo['url']); ?>" alt="<?php echo e($logo['title']); ?>" />
          <?php endif; ?>
          <?php if($logoAlternative): ?>
            <img class="sticky" src="<?php echo e($logoAlternative['url']); ?>" alt="<?php echo e($logoAlternative['title']); ?>" />
          <?php endif; ?>
        </a>
      </div>
      <div class="mobile-menu d-xl-none">
        <span></span>
        
        <span></span>
      </div>
      <div class="nav-with-button">
        <nav class="nav-primary">
          <?php if(has_nav_menu('primary_navigation')): ?>
            <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

          <?php endif; ?>
        </nav>
        <p>Website by <span>Smashy Design</span></p>
      </div>
    </div>
  </div>
</header>
