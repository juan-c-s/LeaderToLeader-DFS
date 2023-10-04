<?php $__env->startSection("title", "Image Storage - DI"); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Upload image</div>
        <div class="card-body">

        <form action="<?php echo e(route('image.save')); ?>" method="post" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <div class="form-group">
            <label>Image:</label>
            <input type="file" name="profile_image" />
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <img src="<?php echo e(URL::asset('storage/test.png')); ?>" />
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/juancamilosalazar/Desktop/si/Universidad/VII/Topicos Software/ganaderapp/resources/views/image/index.blade.php ENDPATH**/ ?>