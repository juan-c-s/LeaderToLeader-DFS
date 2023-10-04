<?php $__env->startSection('content'); ?>
    <div class="container" style="margin-top: 80px">
        <?php if(session()->has('success_msg')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session()->get('success_msg')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if(session()->has('alert_msg')): ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo e(session()->get('alert_msg')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if(count($errors) > 0): ?>
            <?php $__currentLoopData = $errors0>all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo e($error); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <div class="row justify-content-center">
            <div class="col-lg-7">
            
                <br>
                <?php $__currentLoopData = $viewData["cartProducts"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="<?php echo e($product->getImage()); ?>" class="img-thumbnail" width="200" height="200">
                        </div>
                        <div class="col-lg-5">
                            <p>
                                <b><?php echo e($product->getTitle()); ?></b><br>
                                <b>Price: </b>$<?php echo e($product->getPrice()); ?><br>
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <a href="<?php echo e(route('cart.remove',['id'=>$key])); ?>" 
                                    class="btn btn-dark btn-sm" style="margin-right: 10px;"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                    <hr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('cart.clear')); ?>"
                       class="btn bg-primary text-white">Delete Cart</a>
            </div>
                <div class="col-lg-5">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Total: </b>$<?php echo e($viewData["totalCarrito"]); ?></li>
                        </ul>
                    </div>
                    <br><a href="<?php echo e(route('product.index')); ?>" class="btn btn-dark">Continue shopping</a>
                    <a href="/" class="btn btn-success">Procedure the checkout</a>
                </div>
        </div>
        <br><br>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/juancamilosalazar/Desktop/si/Universidad/VII/Topicos Software/ganaderapp/resources/views/cart/index.blade.php ENDPATH**/ ?>