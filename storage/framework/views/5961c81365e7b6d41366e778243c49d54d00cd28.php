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

<html class="loading" lang="<?php if(session()->has('locale')): ?><?php echo e(session()->get('locale')); ?><?php else: ?><?php echo e($configData['defaultLanguage']); ?><?php endif; ?>"
 data-textdirection="<?php echo e($configData['direction'] == 'rtl' ? 'rtl' : 'ltr'); ?>">
  <!-- BEGIN: Head-->

    <head>
    <meta  charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title'); ?> - Admin Dashboard</title>
    <link rel="apple-touch-icon" href="<?php echo e(asset('images/ico/apple-icon-120.png')); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('images/ico/favicon.ico')); ?>">

    
    <?php echo $__env->make('panels.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>
    <!-- END: Head-->

     <?php if(!empty($configData['mainLayoutType']) && isset($configData['mainLayoutType'])): ?>
     <?php echo $__env->make(($configData['mainLayoutType'] === 'horizontal-menu') ? 'layouts.horizontalLayoutMaster':'layouts.verticalLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <?php else: ?>
     
     <h1><?php echo e('mainLayoutType Option is empty in config custom.php file.'); ?></h1>
     <?php endif; ?>

</html>
<?php /**PATH /home/adesanoye/lampstack/frameworks/innout admin/resources/views/layouts/contentLayoutMaster.blade.php ENDPATH**/ ?>