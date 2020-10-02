<?php $__env->startSection('title','Error 404'); ?>

<?php $__env->startSection('content'); ?>
<!-- error 404 -->
<section class="row flexbox-container">
  <div class="col-xl-6 col-md-7 col-9">
    <div class="card bg-transparent shadow-none">
      <div class="card-content">
        <div class="card-body text-center bg-transparent miscellaneous">
          <h1 class="error-title">Page Not Found :(</h1>
          <p class="pb-3">
            we couldn't find the page you are looking for</p>
      <img class="img-fluid" src="<?php echo e(asset('images/pages/404.png')); ?>" alt="404 error">
          <a href="<?php echo e(asset('/')); ?>" class="btn btn-primary round glow mt-3">BACK TO HOME</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- error 404 end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.fullLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/frest/resources/views/pages/error-404.blade.php ENDPATH**/ ?>