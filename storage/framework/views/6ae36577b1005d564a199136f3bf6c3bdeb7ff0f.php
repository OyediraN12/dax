<?php $__env->startSection('title','Coming Soon'); ?>


<?php $__env->startSection('page-styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/pages/coming-soon.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- coming soon start -->
<section>
  <div class="row flexbox-container">
    <div class="col-md-6 col-12 text-center p-3">
      <h1 class="error-title mb-2">We are launching soon</h1>
      <p class="mb-1">Our website is opening soon. Please register to notify you when it's ready!</p>
      <div id="clockFlat" class="card-text text-center coming-soon pt-2 d-flex justify-content-center mb-2"></div>
      <form>
        <fieldset class="form-group position-relative w-75 mx-auto">
          <input type="text" class="form-control round form-control-lg shadow pl-2" placeholder="Email">
          <button class="btn btn-primary cs-btn-notify round position-absolute" type="button">Notify</button>
        </fieldset>
      </form>
    </div>
    <div class="col-md-6 d-lg-block d-none p-2">
      <img class="img-fluid cs-effect cs-effect-bounce" src="<?php echo e(asset('images/pages/comingsoon.png')); ?>" alt="coming soon" width="650">
    </div>
  </div>
</section>
<!--/ coming soon end -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('vendor-scripts'); ?>
<script src="<?php echo e(asset('vendors/js/coming-soon/jquery.countdown.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-scripts'); ?>
<script src="<?php echo e(asset('js/scripts/pages/coming-soon.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.fullLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/frest/resources/views/pages/page-coming-soon.blade.php ENDPATH**/ ?>