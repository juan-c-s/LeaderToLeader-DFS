<!-- {/*JUANCAMILO*/} -->

<?php $__env->startSection("title", $viewData["title"]); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Create event</div>
          <div class="card-body">
            <?php if($errors->any()): ?>
            <ul id="errors" class="alert alert-danger list-unstyled">
              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <?php endif; ?>

            <form method="POST" action="<?php echo e(route('event.save')); ?>" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              <input type="text" class="form-control mb-2" placeholder="Enter title" name="title" value="<?php echo e(old('title')); ?>" />
              <input type="text" class="form-control mb-2" placeholder="Enter description" name="description" value="<?php echo e(old('description')); ?>" />
              <input type="date" class="form-control mb-2" placeholder="Enter date" name="date" value="<?php echo e(old('date')); ?>" />
              <input type="text" class="form-control mb-2" placeholder="Enter category" name="category" value="<?php echo e(old('category')); ?>" />
              <input type="text" class="form-control mb-2" placeholder="Enter location" name="location" value="<?php echo e(old('location')); ?>" />
              <input type="number" class="form-control mb-2" placeholder="Enter Max Capacity" name="maxCapacity" value="<?php echo e(old('maxCapacity')); ?>" />
              <input type="file" accept="image/png, image/jpg, image/jpeg" class="form-control mb-2" placeholder="Choose an image" name="image" value="<?php echo e(old('image')); ?>" />
              <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->getId()); ?>" />
              <input type="submit" class="btn btn-primary" value="Send" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/juancamilosalazar/Desktop/si/Universidad/VII/Topicos Software/ganaderapp/resources/views/event/create.blade.php ENDPATH**/ ?>