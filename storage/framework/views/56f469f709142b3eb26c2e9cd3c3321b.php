<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('subtitle', $subtitle); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-lg-4 ms-auto">
      <p class="lead"><?php echo e($email); ?></p>
    </div>
    <div class="col-lg-4 me-auto">
      <p class="lead"><?php echo e($address); ?></p>
    </div>
    <div class="col-lg-4 me-auto">
      <p class="lead"><?php echo e($phone); ?></p>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/juancamilosalazar/Desktop/si/Universidad/VII/Topicos Software/taller1/laravelcourse/resources/views/home/contact.blade.php ENDPATH**/ ?>