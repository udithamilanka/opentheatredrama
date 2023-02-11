<?php
  $col1 = get_field('home_tcs_col1_content');
  $col2 = get_field('home_tcs_col2_content');
  $sectionEyebrowHeading = get_field('home_tcs_section_eyebrow_heading');
  $sectionHeading = get_field('home_tcs_section_heading');

  $contentAlign = "";
  $orderClass2 = "";
  $orderClass1 = "";

  if ($col1['col1_layout'] == $col2['col2_layout']) {
    $contentAlign = "align-items-start";
  } else {
    $contentAlign = "";
  }

  if ($col2['col2_image']) {
    if ($col1['col1_layout'] == $col2['col2_layout']) {
      $orderClass2 = "";
      $orderClass1 = "";
    } else {
      $orderClass1 = "order-2 order-lg-1";
      $orderClass2 = "order-1 order-lg-2";
    }
  } else {
    $orderClass2 = "";
    $orderClass1 = "";
  }
?>

<section class="home-two-column-section">
  <div class="container">
    <?php if($sectionEyebrowHeading || $sectionHeading): ?>
    <div class="intro-section text-center">
      <?php if($sectionEyebrowHeading): ?>
        <h5 class="eyebrow-heading"><?php echo $sectionEyebrowHeading ?></h5>
      <?php endif; ?>
      <?php if($sectionHeading): ?>
        <h2><?php echo $sectionHeading ?></h2>
      <?php endif; ?>
    </div>
    <?php endif; ?>
    <div class="two-column-wrp row <?php echo e($contentAlign); ?>">
      <?php if($col1): ?>
        <div class="columns column1-wrp col-12 col-lg-6 text-center text-md-left <?php echo e($orderClass1); ?>">
          <?php
            $col1Layout = $col1['col1_layout'];
            $col1EyebrowHeading = $col1['col1_eyebrow_heading'];
            $col1Heading = $col1['col1_heading'];
            $col1Content = $col1['col1_content'];
            $col1Image = $col1['col1_image'];
          ?>
          <?php if($col1Layout): ?>
            <?php if($col1Image): ?>
            <div class="image-wrapper">
              <img src="<?php echo e($col1Image['url']); ?>" alt="<?php echo e($col1Image['title']); ?>">
            </div>
            <?php endif; ?>
          <?php else: ?>
          <div class="intro-content">
            <?php if($col1EyebrowHeading): ?>
              <h5 class="eyebrow-heading"><?php echo $col1EyebrowHeading ?></h5>
            <?php endif; ?>
            <?php if($col1Heading): ?>
              <h2><?php echo $col1Heading ?></h2>
            <?php endif; ?>
          </div>
            <?php if($col1Content): ?>
              <div class="content-wrapper wrap-btns">
                <?php echo $col1Content ?>
              </div>
            <?php endif; ?>
          <?php endif; ?>
        </div>
      <?php endif; ?>
      <?php if($col2): ?>
        <div class="columns column2-wrp col-12 col-lg-6 text-center text-md-left <?php echo e($orderClass2); ?>">
          <?php
            $col2layout = $col2['col2_layout'];
            $col2EyebrowHeading = $col2['col2_eyebrow_heading'];
            $col2Heading = $col2['col2_heading'];
            $col2Content = $col2['col2_content'];
            $col2Image = $col2['col2_image'];
          ?>
          <?php if($col2layout): ?>
            <?php if($col2Image): ?>
              <div class="image-wrapper">
                <img src="<?php echo e($col2Image['url']); ?>" alt="<?php echo e($col2Image['title']); ?>">
              </div>
            <?php endif; ?>
          <?php else: ?>
          <div class="intro-content">
            <?php if($col2EyebrowHeading): ?>
              <h5 class="eyebrow-heading"><?php echo $col2EyebrowHeading ?></h5>
            <?php endif; ?>
            <?php if($col2Heading): ?>
              <h2><?php echo $col2Heading ?></h2>
            <?php endif; ?>
          </div>
          <?php if($col2Content): ?>
            <div class="content-wrapper wrap-btns">
              <?php echo $col2Content ?>
            </div>
          <?php endif; ?>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
