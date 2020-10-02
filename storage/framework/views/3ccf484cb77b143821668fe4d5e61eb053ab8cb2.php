<?php $__env->startSection('title','Chartist'); ?>

<?php $__env->startSection('vendor-styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendors/css/charts/chartist.min.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('page-styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/pages/chart-chartist.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Chartist  -->
<section id="chartist-wrapper">
  <!-- simple line chart -->
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h6 class="card-title">Simple Line Chart</h6>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="simple-line-chart ct-golden-section"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h6 class="card-title">Line Chart With Area</h6>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="line-area-chart ct-golden-section"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- line chart with area -->
  </div>
  <div class="row">
    <!-- Bi-Polar Line Chart with Area only -->
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h6 class="card-title">Bi-Polar Line Chart With Area Only</h6>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="bi-polar-chart ct-golden-section"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Series Overrides -->
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h6 class="card-title">Series Overrides</h6>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="series-overrides-chart ct-golden-section"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- bar chart start here -->
  <div class="row">
    <!-- Bi polar bar Chart -->
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h6 class="card-title">BI-Polar Bar Chart
          </h6>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="bi-polar-bar-chart ct-golden-section"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h6 class="card-title">Stacked Bar Chart</h6>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="stacked-bar-chart ct-golden-section"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h6 class="card-title">Horizontal Bar Chart</h6>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="horizontal-bar-chart ct-golden-section"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h6 class="card-title">Multi-Line Labels</h6>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="multi-line-chart ct-golden-section"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ bar chart start here -->
  <!-- Pie chart start here -->
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h6 class="card-title">Simple Pie Chart</h6>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="pie-chart ct-golden-section"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h6 class="card-title">Pie Chart With Custom Labels</h6>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="pie-custome-label-chart ct-golden-section"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 animated-chart">
      <div class="card">
        <div class="card-header">
          <h6 class="card-title">Animating A Donut With SVG.Animate</h6>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="animation-chart ct-golden-section"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h6 class="card-title">Gauge Chart Using Fill Rather Than Stroke</h6>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="gauge-chart ct-golden-section"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Pie chart start here -->
</section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('vendor-scripts'); ?>
<script src="<?php echo e(asset('vendors/js/charts/chartist.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-scripts'); ?>
<script src="<?php echo e(asset('js/scripts/charts/chart-chartist.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/frest/resources/views/pages/chart-chartist.blade.php ENDPATH**/ ?>