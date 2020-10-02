
    <!-- BEGIN: Vendor JS-->
    <script>
        var assetBaseUrl = "<?php echo e(asset('')); ?>";
    </script>
    <script src="<?php echo e(asset('vendors/js/vendors.min.js')); ?>"></script>
    <script src="<?php echo e(asset('fonts/LivIconsEvo/js/LivIconsEvo.tools.js')); ?>"></script>
    <script src="<?php echo e(asset('fonts/LivIconsEvo/js/LivIconsEvo.defaults.js')); ?>"></script>
    <script src="<?php echo e(asset('fonts/LivIconsEvo/js/LivIconsEvo.min.js')); ?>"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <?php echo $__env->yieldContent('vendor-scripts'); ?>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <?php if($configData['mainLayoutType'] == 'vertical-menu'): ?>
    <script src="<?php echo e(asset('js/scripts/configs/vertical-menu-light.js')); ?>"></script>
    <?php else: ?>
    <script src="<?php echo e(asset('js/scripts/configs/horizontal-menu.js')); ?>"></script>
    <?php endif; ?>
    <script src="<?php echo e(asset('js/core/app-menu.js')); ?>"></script>
    <script src="<?php echo e(asset('js/core/app.js')); ?>"></script>
    <script src="<?php echo e(asset('js/scripts/components.js')); ?>"></script>
    <script src="<?php echo e(asset('js/scripts/footer.js')); ?>"></script>
    <script src="<?php echo e(asset('js/scripts/customizer.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/scripts.js')); ?>"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <?php echo $__env->yieldContent('page-scripts'); ?>
    <!-- END: Page JS-->
<?php /**PATH /var/www/html/frest/resources/views/panels/scripts.blade.php ENDPATH**/ ?>