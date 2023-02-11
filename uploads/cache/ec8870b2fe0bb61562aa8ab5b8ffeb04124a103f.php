<?php $__env->startSection('content'); ?>
  <?php if(have_rows('page_content')): ?>
    <?php while(have_rows('page_content')): ?> <?php the_row() ?>
      <?php if(get_row_layout() == 'banner_section'): ?>
        <?php echo $__env->make('partials.fcp.banner-section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php elseif(get_row_layout() == 'one_column_section'): ?>
        <?php echo $__env->make('partials.fcp.one-column-section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php elseif(get_row_layout() == 'two_column_section'): ?>
        <?php echo $__env->make('partials.fcp.two-column-section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php elseif(get_row_layout() == 'three_column_section'): ?>
        <?php echo $__env->make('partials.fcp.three-column-section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php elseif(get_row_layout() == 'cards_section'): ?>
        <?php echo $__env->make('partials.fcp.cards-section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php elseif(get_row_layout() == 'form_section'): ?>
        <?php echo $__env->make('partials.fcp.form-section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php elseif(get_row_layout() == 'video_section'): ?>
        <?php echo $__env->make('partials.fcp.video-section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php elseif(get_row_layout() == 'gallery_section'): ?>
          <?php echo $__env->make('partials.fcp.gallery-section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php elseif(get_row_layout() == 'accordion_section'): ?>
          <?php echo $__env->make('partials.fcp.accordion-section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php elseif(get_row_layout() == 'cta_section'): ?>
          <?php echo $__env->make('partials.fcp.cta-section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php endif; ?>
    <?php endwhile; ?>
  <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>