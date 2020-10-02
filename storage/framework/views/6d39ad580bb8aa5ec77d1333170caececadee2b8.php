<?php $__env->startSection('title','Tour'); ?>

<?php $__env->startSection('vendor-styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendors/css/ui/plyr.css')); ?>"><?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- medai Player Start here -->
<section id="media-player-wrapper">
  <div class="row">
    <div class="col-md-12">
      <div class="card p-2">
        <h6 class="card-title">Video</h6>
        <!-- VIDEO -->
        <div class="video-player" id="plyr-video-player">
          <iframe
            src="https://www.youtube.com/embed/bTqVqk7FSmY?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
            allowfullscreen allow="autoplay">
          </iframe>
        </div>
        <!-- VIDEO END -->
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card p-2">
        <!-- AUDIO -->
        <h6 class="card-title">Audio</h6>
        <audio id="plyr-audio-player" class="audio-player" controls>
          <source src="https://cdn.plyr.io/static/demo/Kishi_Bashi_-_It_All_Began_With_a_Burst.mp3" type="audio/mp3" />
          <source src="https://cdn.plyr.io/static/demo/Kishi_Bashi_-_It_All_Began_With_a_Burst.ogg" type="audio/ogg" />
        </audio>
        <!-- AUDIO END -->
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('vendor-scripts'); ?>
<script src="<?php echo e(asset('vendors/js/ui/plyr.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-scripts'); ?>
<script src="<?php echo e(asset('js/scripts/extensions/ext-component-media-player.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/frest/resources/views/pages/ext-component-media-player.blade.php ENDPATH**/ ?>