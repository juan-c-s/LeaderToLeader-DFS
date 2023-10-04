<?php $__env->startSection("title", $viewData["title"]); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Create product</div>
          <div class="card-body">
            <?php if($errors->any()): ?>
            <ul id="errors" class="alert alert-danger list-unstyled">
              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <?php endif; ?>

            <form method="POST" action="<?php echo e(route('product.save')); ?>">
              <?php echo csrf_field(); ?>
              <input type="text" class="form-control mb-2" placeholder="Enter name" name="name" value="<?php echo e(old('name')); ?>" />
              <input type="text" class="form-control mb-2" placeholder="Enter price" name="price" value="<?php echo e(old('price')); ?>" />
              <input type="submit" class="btn btn-primary" value="Send" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/juancamilosalazar/Desktop/si/Universidad/VII/Topicos Software/taller1/laravelcourse/resources/views/product/create.blade.php ENDPATH**/ ?>