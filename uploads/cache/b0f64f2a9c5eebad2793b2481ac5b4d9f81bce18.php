<?php $__env->startSection('content'); ?>
  

  <?php if(!have_posts()): ?>
    <section class="not-found-wrapper text-center">
      <div class="container">
        <p class="not-found"><b>404</b></p>
        <p>NOT FOUND</p>
      </div>
    </section>
    
  <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>