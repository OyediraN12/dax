<?php $__env->startSection('title','Tour'); ?>

<?php $__env->startSection('vendor-styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendors/css/extensions/shepherd-theme-default.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('page-styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/plugins/tour/tour.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Basic tour Starts -->
<section id="basic-tour">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Tour</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="btn btn-outline-primary" id="tour">Start Tour</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic tour Ends -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('vendor-scripts'); ?>
<script src="<?php echo e(asset('vendors/js/extensions/shepherd.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-scripts'); ?>
<script src="<?php echo e(asset('js/scripts/extensions/tour.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/frest/resources/views/pages/ext-component-tour.blade.php ENDPATH**/ ?>