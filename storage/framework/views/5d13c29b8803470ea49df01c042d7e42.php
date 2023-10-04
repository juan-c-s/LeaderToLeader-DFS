<?php $__env->startSection('title', $viewData["title"]); ?>
<?php $__env->startSection('subtitle', $viewData["subtitle"]); ?>
<?php $__env->startSection('content'); ?>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="<?php echo e(asset('js/event/filterByDate.js')); ?>"></script>
<label for="date">Filter by date:</label>
<input type="date" id="date">
<div id='results' class="row">
  <?php $__currentLoopData = $viewData["events"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-4 col-lg-3 mb-2">
      <div class="card">
        <div class="card-body text-center">
          <img src="<?php echo e($event->getImage()); ?>" class="img-fluid img-thumbnail" alt="event_image">
          <h2><?php echo e($event->getTitle()); ?></h2>
          <p><?php echo e($event->getDescription()); ?></p>
          <p><?php echo e($event->getDate()); ?></p>
        </div>
      </div>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div id="events" style="display: none;">'<?php echo json_encode($viewData["events"], 15, 512) ?>'</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/juancamilosalazar/Desktop/si/Universidad/VII/Topicos Software/ganaderapp/resources/views/event/index.blade.php ENDPATH**/ ?>