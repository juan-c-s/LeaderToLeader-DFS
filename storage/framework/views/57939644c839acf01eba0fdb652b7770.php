<?php $__env->startSection('title', $viewData["title"]); ?>
<?php $__env->startSection('subtitle', $viewData["subtitle"]); ?>
<?php $__env->startSection('content'); ?>
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://laravel.com/img/logotype.min.svg" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">
            <?php echo e($viewData["product"]["name"]); ?>

          </h5>
          <p class="card-text"><?php echo e($viewData["product"]["description"]); ?></p>
        </div>
        <div class="card-body">
          <h5 class="card-title">
           price :  <?php echo e($viewData["product"]["price"]); ?>

          </h5>
          <p class="card-text"><?php echo e($viewData["product"]["information"]); ?></p>
          <?php $__currentLoopData = $viewData["product"]->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          - <?php echo e($comment->getDescription()); ?><br />
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/juancamilosalazar/Desktop/si/Universidad/VII/Topicos Software/taller1/laravelcourse/resources/views/product/show.blade.php ENDPATH**/ ?>