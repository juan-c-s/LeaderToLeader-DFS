<!-- {/*JUANCAMILO*/} -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
  <link href="<?php echo e(asset('/css/app.css')); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <title><?php echo $__env->yieldContent('title', 'Ganaderapp'); ?></title>
</head>
<body>
  <!-- header -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
    <div class="container">
      <a class="navbar-brand" href="<?php echo e(route('home.index')); ?>">Ganaderapp</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          
          <?php if(auth()->guard()->check()): ?>
          <a class="nav-link active" href="<?php echo e(route('home.index')); ?>">Home</a>
          <a class="nav-link active" href="<?php echo e(route('product.index')); ?>">Marketplace</a>
          <a class="nav-link active" href="<?php echo e(route('product.create')); ?>">Create Product</a>
          <a class="nav-link active" href="<?php echo e(route('event.index')); ?>">Events</a>
          <a class="nav-link active" href="<?php echo e(route('event.create')); ?>">Create Event</a>
          <a class="nav-link active" href="<?php echo e(route('cart.index')); ?>">Cart</a>
          <?php endif; ?>

          <?php if(Auth::user() && Auth::user()->getRole() == 'admin'): ?>
            <a class="nav-link active" href="<?php echo e(route('admin.index')); ?>">Admin</a>
          <?php endif; ?>

          <div class="vr bg-white mx-2 d-none d-lg-block"></div>
          <?php if(auth()->guard()->guest()): ?>
          <a class="nav-link active" href="<?php echo e(route('login')); ?>">Login</a>
          <a class="nav-link active" href="<?php echo e(route('register')); ?>">Register</a>
          <?php else: ?>
          <form id="logout" action="<?php echo e(route('logout')); ?>" method="POST"> 
            <a role="button" class="nav-link active" onclick="document.getElementById('logout').submit();">Logout</a>
            <?php echo csrf_field(); ?>
          </form>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </nav>

  <header class="masthead bg-primary text-white text-center py-4">
    <div class="container d-flex align-items-center flex-column">
      <h2><?php echo $__env->yieldContent('subtitle', 'Welcome'); ?></h2>
    </div>
  </header>
  <!-- header -->

  <div class="container my-4">
    <?php echo $__env->yieldContent('content'); ?>
  </div>

  <!-- footer -->
  <div class="copyright py-4 text-center text-white">
    <div class="container">
    </div>
  </div>
  <!-- footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH /Users/juancamilosalazar/Desktop/si/Universidad/VII/Topicos Software/ganaderapp/resources/views/layouts/app.blade.php ENDPATH**/ ?>