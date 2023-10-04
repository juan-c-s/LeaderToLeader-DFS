<!-- {/*JUANCAMILO*/} -->

<?php $__env->startSection('title', $viewData["title"]); ?>
<?php $__env->startSection('subtitle', $viewData["subtitle"]); ?>
<?php $__env->startSection('content'); ?>
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      
    </div>
    <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">
            <?php echo e($viewData["products"]->getTitle()); ?>

          </h5>
          <p class="card-text"> Description: <?php echo e($viewData["products"]->getDescription()); ?></p>
        </div>
        <div class="card-body">
          <h5 class="card-title">
           price :  <?php echo e($viewData["products"]->getPrice()); ?>

          </h5>
          <h5 class="card-title">
           Seller's rating :  <?php echo e($viewData["products"]->getRating()); ?>

          </h5>
          <h5 class="card-title">
           Breed :  <?php echo e($viewData["products"]->getCategory()); ?>

          </h5>
          <h5 class="card-title">
            Supplier :  <?php echo e($viewData["products"]->getSupplier()); ?>

          </h5>
          <h5 class="card-title">
            Image: <img src="<?php echo e($viewData["products"]->getImage()); ?>" class="img-fluid img-thumbnail">
        </h5>
        <?php if((Auth::user() && Auth::user()->getRole() == 'admin') || (Auth::user()->getId() == $viewData["products"]->getUserId())): ?> 
          <form class="m-2" method="GET" action="<?php echo e(route('product.update', ['id'=> $viewData["products"]->getId()])); ?>">
          <?php echo csrf_field(); ?>
         <input type="hidden" name="id" value="<?php echo e($viewData["products"]->getId()); ?>" />
          <input type="hidden" name="user_id" value="<?php echo e($viewData["products"]->getUserId()); ?>" />
          <input type="submit" class="btn btn-dark" value="Update Product" />
          </form>

          <form class ="m-2" method="POST" action="<?php echo e(route('product.delete')); ?>">
          <?php echo csrf_field(); ?>
          <input type="hidden" name="id" value="<?php echo e($viewData["products"]->getId()); ?>" />
          <input type="hidden" name="user_id" value="<?php echo e($viewData["products"]->getUserId()); ?>" />
          <input type="submit" class="btn btn-dark" value="Delete Product" />
          </form>
        <?php endif; ?>

        <?php if(count($viewData["reviews"])>0): ?>
        <div class="card mt-4">
          <div class="card-body">
            <h5 class="card-title">Reviews</h5>
            <?php $__currentLoopData = $viewData["reviews"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="mb-3">
                <h6 class="card-subtitle mb-2 text-muted">Rating: <span id="rating"><?php echo e($review->rating); ?></span>/5</h6>
                <p class="card-text"><?php echo e($review->comment); ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
          
        <?php endif; ?>
        <?php if($errors->any()): ?>
          <ul id="errors" class="alert alert-danger list-unstyled">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        <?php endif; ?>
        <form method ="POST" action="<?php echo e(route('review.save')); ?>" class="pt-4">
          <?php echo csrf_field(); ?>
            <label for="comment">Comment</label>
            <textarea class="form-control m-2" name="comment" rows="3"></textarea>
            <label for="rating" >Rating</label>
            <input type="number" name="rating" class="form-control w-25 m-2"/>
            <?php $__errorArgs = ['rating'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <input type="hidden" name="product_id" value="<?php echo e($viewData["products"]->getId()); ?>" />
            <input type="submit" class="btn btn-dark" value="comment"/>
        </form>

  </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/juancamilosalazar/Desktop/si/Universidad/VII/Topicos Software/ganaderapp/resources/views/product/show.blade.php ENDPATH**/ ?>