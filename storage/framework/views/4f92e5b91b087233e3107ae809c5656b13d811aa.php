<div class="content-header-left col-12 mb-2 mt-1">
  <div class="row breadcrumbs-top">
    <div class="col-12">
      <h5 class="content-header-title float-left pr-1 mb-0"><?php echo $__env->yieldContent('title'); ?></h5>
      <div class="breadcrumb-wrapper col-12">
        <ol class="breadcrumb p-0 mb-0">
          <?php if(isset($breadcrumbs)): ?>
            <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $breadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="breadcrumb-item <?php echo e(!isset($breadcrumb['link']) ? 'active' :''); ?>">
              <?php if(isset($breadcrumb['link'])): ?>
            <a href="<?php echo e(asset($breadcrumb['link'])); ?>"><?php if($breadcrumb['name'] == "Home"): ?><i class="bx bx-home-alt"></i><?php else: ?><?php echo e($breadcrumb['name']); ?><?php endif; ?></a>
              <?php else: ?><?php echo e($breadcrumb['name']); ?><?php endif; ?>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
        </ol>
      </div>
    </div>
  </div>
</div><?php /**PATH /var/www/html/frest/resources/views/panels/breadcrumbs.blade.php ENDPATH**/ ?>