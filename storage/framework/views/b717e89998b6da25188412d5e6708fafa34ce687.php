<?php $__env->startSection('title','Apex Charts'); ?>


<?php $__env->startSection('vendor-styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendors/css/charts/apexcharts.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-12">
    <p>An Apexcharts.js component for ApexCharts. Read full documnetation
      <a href="https://apexcharts.com/docs/installation/" target="_blank">here</a>
    </p>
  </div>
</div>
<!-- apex charts section start -->
<section id="apexchart">
  <div class="row">
    <!-- Line Chart -->
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Line Chart</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div id="line-chart"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Line Area Chart -->
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Line Area Chart</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div id="line-area-chart"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Column Chart -->
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Column Chart</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div id="column-chart"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bar Chart -->
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Bar Chart</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div id="bar-chart"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Mixed Chart -->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Mixed Chart</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div id="mixed-chart"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Candlestick Chart -->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Candlestick Chart</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div id="candlestick-chart"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <!-- 3D Bubble Chart -->
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">3D Bubble Chart</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div id="bubble-chart"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Scatter Chart -->
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Scatter Chart</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div id="scatter-chart"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Heat map Chart -->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Heat Map Chart</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div id="heat-map-chart"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <!-- Pie Chart -->
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Pie Chart</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div id="pie-chart" class="d-flex justify-content-center"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Donut Chart -->
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Donut Chart</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div id="donut-chart" class="d-flex justify-content-center"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <!-- Radial Bar Chart -->
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Radial Bar Chart</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div id="radial-bar-chart"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Radar Chart -->
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Radar Chart</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div id="radar-chart"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- // Apex charts section end -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('vendor-scripts'); ?>
<script src="<?php echo e(asset('vendors/js/charts/apexcharts.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-scripts'); ?>
<script src="<?php echo e(asset('js/scripts/charts/chart-apex.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/frest/resources/views/pages/chart-apex.blade.php ENDPATH**/ ?>