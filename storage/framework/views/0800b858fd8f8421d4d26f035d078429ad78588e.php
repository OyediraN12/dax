<footer class="footer footer-light <?php if(isset($configData['footerType'])): ?><?php echo e($configData['footerClass']); ?><?php endif; ?>">
  <p class="clearfix mb-0">
    <span class="float-left d-inline-block">2020 &copy; PIXINVENT</span>
    <span class="float-right d-sm-inline-block d-none">Crafted with
      <i class="bx bxs-heart pink mx-50 font-small-3"></i>by
      <a class="text-uppercase" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a>
    </span>
    <?php if($configData['isScrollTop'] === true): ?>
    <button class="btn btn-primary btn-icon scroll-top" type="button">
      <i class="bx bx-up-arrow-alt"></i>
    </button>
    <?php endif; ?>
  </p>
</footer>
<?php /**PATH /Users/vrushank/Downloads/frest-admin-v2.1/larvel-version/full-version/resources/views/panels/footer.blade.php ENDPATH**/ ?>