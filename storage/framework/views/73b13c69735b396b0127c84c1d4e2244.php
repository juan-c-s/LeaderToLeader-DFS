<?php $__env->startSection('title', $viewData["title"]); ?>
<?php $__env->startSection('subtitle', $viewData["subtitle"]); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-lg-4 ms-auto">
      <p class="lead"><?php echo e($viewData["description"]); ?></p>
    </div>
    <div class="col-lg-4 me-auto">
      <p class="lead"><?php echo e($viewData["author"]); ?></p>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/juancamilosalazar/Desktop/si/Universidad/VII/Topicos Software/ganaderapp/resources/views/home/about.blade.php ENDPATH**/ ?>