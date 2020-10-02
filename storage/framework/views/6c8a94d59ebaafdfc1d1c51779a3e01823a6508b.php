<!DOCTYPE html>
<!--
Template Name: Frest HTML Admin Template
Author: :Pixinvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://1.envato.market/pixinvent_portfolio
Renew Support: https://1.envato.market/pixinvent_portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->

<?php if(isset($pageConfigs)): ?>
  <?php echo Helper::updatePageConfig($pageConfigs); ?>

<?php endif; ?>
<?php
// confiData variable layoutClasses array in Helper.php file.
  $configData = Helper::applClasses();
?>

<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title'); ?> - Frest - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="<?php echo e(asset('images/ico/apple-icon-120.png')); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('images/ico/favicon.ico')); ?>">

    
    <?php echo $__env->make('panels.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout 1-column navbar-sticky <?php echo e($configData['bodyCustomClass']); ?> footer-static blank-page
  <?php if($configData['theme'] === 'dark'): ?><?php echo e('dark-layout'); ?> <?php elseif($configData['theme'] === 'semi-dark'): ?><?php echo e('semi-dark-layout'); ?> <?php else: ?> <?php echo e('light-layout'); ?> <?php endif; ?>" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
         <?php echo $__env->yieldContent('content'); ?>
        </div>
      </div>
    </div>
    <!-- END: Content-->

    
    <?php echo $__env->make('panels.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </body>
  <!-- END: Body-->
</html>
<?php /**PATH /home/adesanoye/lampstack/frameworks/innout admin/resources/views/layouts/fullLayoutMaster.blade.php ENDPATH**/ ?>