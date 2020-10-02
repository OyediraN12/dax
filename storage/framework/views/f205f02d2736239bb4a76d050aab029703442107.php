
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <?php if($configData['direction'] === 'ltr'): ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendors/css/vendors.min.css')); ?>">
    <?php else: ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendors/css/vendors-rtl.min.css')); ?>">
    <?php endif; ?>
    <?php echo $__env->yieldContent('vendor-styles'); ?>
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap-extended.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/colors.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/components.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/themes/dark-layout.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/themes/semi-dark-layout.css')); ?>">
    <?php if($configData['direction'] === 'rtl'): ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/custom-rtl.css')); ?>">
    <?php endif; ?>
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <?php if($configData['mainLayoutType'] == 'horizontal-menu'): ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/core/menu/menu-types/horizontal-menu.css')); ?>">
    <?php else: ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/core/menu/menu-types/vertical-menu.css')); ?>">
    <?php endif; ?>
    <?php echo $__env->yieldContent('page-styles'); ?>
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <?php if($configData['direction'] === 'ltr'): ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <?php else: ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/style-rtl.css')); ?>">
    <?php endif; ?>
    <!-- END: Custom CSS-->
<?php /**PATH /var/www/html/frest/resources/views/panels/styles.blade.php ENDPATH**/ ?>