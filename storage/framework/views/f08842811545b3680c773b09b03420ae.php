<?php $__env->startSection("title", $viewData["title"]); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Update product</div>
          <div class="card-body">
            <?php if($errors->any()): ?>
            <ul id="errors" class="alert alert-danger list-unstyled">
              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <?php endif; ?>

            <form method="POST" action="<?php echo e(route('product.updateProduct')); ?>">
              <?php echo csrf_field(); ?>
              <input type="text" class="form-control mb-2" placeholder="Enter title" name="title" value="<?php echo e($viewData["product"]->getTitle()); ?>" />
              <input type="text" class="form-control mb-2" placeholder="Enter description" name="description" value="<?php echo e($viewData["product"]->getDescription()); ?>" />
              <input type="text" class="form-control mb-2" placeholder="Enter price" name="price" value="<?php echo e($viewData["product"]->getPrice()); ?>" />
              <input type="text" class="form-control mb-2" placeholder="Enter rating" name="rating" value="<?php echo e($viewData["product"]->getRating()); ?>" />
              <input type="text" class="form-control mb-2" placeholder="Enter Breed" name="category" value="<?php echo e($viewData["product"]->getCategory()); ?>" />
              <input type="text" class="form-control mb-2" placeholder="Enter Supplier" name="supplier" value="<?php echo e($viewData["product"]->getSupplier()); ?>" />
              <input type="hidden" name="id" value="<?php echo e($viewData["product"]->getId()); ?>" />
              <input type="hidden" name="user_id" value="<?php echo e($viewData["product"]->getUserId()); ?>" />
              <input type="submit" class="btn btn-primary" value="Update" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/juancamilosalazar/Desktop/si/Universidad/VII/Topicos Software/ganaderapp/resources/views/product/update.blade.php ENDPATH**/ ?>