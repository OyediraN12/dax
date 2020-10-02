
<?php if($configData['mainLayoutType'] == 'vertical-menu'): ?>
<div class="main-menu menu-fixed <?php if($configData['theme'] === 'light'): ?> <?php echo e("menu-light"); ?> <?php else: ?> <?php echo e('menu-dark'); ?> <?php endif; ?> menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
      <li class="nav-item mr-auto">
          <a class="navbar-brand" href="<?php echo e(asset('/')); ?>">
          <div class="brand-logo">
            <img src="<?php echo e(asset('images/logo/logo.png')); ?>" class="logo" alt="">
          </div>
          <h2 class="brand-text mb-0">
            <?php if(!empty($configData['templateTitle']) && isset($configData['templateTitle'])): ?>
            <?php echo e($configData['templateTitle']); ?>

            <?php else: ?>
            Frest
            <?php endif; ?>
          </h2>
          </a>
      </li>
          <li class="nav-item nav-toggle">
          <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
            <i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i>
            <i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i>
          </a>
          </li>
      </ul>
      </div>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
          <?php if(!empty($menuData[0]) && isset($menuData[0])): ?>
          <?php $__currentLoopData = $menuData[0]->menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if(isset($menu->navheader)): ?>
                  <li class="navigation-header"><span><?php echo e($menu->navheader); ?></span></li>
              <?php else: ?>
              <li class="nav-item <?php echo e((request()->is($menu->url.'*')) ? 'active' : ''); ?>">
              <a href="<?php if(isset($menu->url)): ?><?php echo e(asset($menu->url)); ?> <?php endif; ?>" <?php if(isset($menu->newTab)): ?><?php echo e("target=_blank"); ?><?php endif; ?>>
                  <?php if(isset($menu->icon)): ?>
                      <i class="menu-livicon" data-icon="<?php echo e($menu->icon); ?>"></i>
                  <?php endif; ?>
                  <?php if(isset($menu->name)): ?>
                      <span class="menu-title"><?php echo e(__('locale.'.$menu->name)); ?></span>
                  <?php endif; ?>
                  <?php if(isset($menu->tag)): ?>
                  <span class="<?php echo e($menu->tagcustom); ?>"><?php echo e($menu->tag); ?></span>
                  <?php endif; ?>
              </a>
              <?php if(isset($menu->submenu)): ?>
                  <?php echo $__env->make('panels.sidebar-submenu',['menu' => $menu->submenu], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <?php endif; ?>
              </li>
              <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
      </ul>
      </div>
  </div>
<?php endif; ?>

<?php if($configData['mainLayoutType'] == 'horizontal-menu'): ?>
<div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-light navbar-without-dd-arrow 
<?php if($configData['navbarType'] === 'navbar-static'): ?> <?php echo e('navbar-sticky'); ?> <?php endif; ?>" role="navigation" data-menu="menu-wrapper">
  <div class="navbar-header d-xl-none d-block">
      <ul class="nav navbar-nav flex-row">
      <li class="nav-item mr-auto">
          <a class="navbar-brand" href="<?php echo e(asset('/')); ?>">
          <div class="brand-logo">
            <img src="<?php echo e(asset('images/logo/logo.png')); ?>" class="logo" alt="">
          </div>
          <h2 class="brand-text mb-0">
            <?php if(!empty($configData['templateTitle']) && isset($configData['templateTitle'])): ?>
            <?php echo e($configData['templateTitle']); ?>

            <?php else: ?>
            Frest
            <?php endif; ?>
          </h2>
          </a>
      </li>
      <li class="nav-item nav-toggle">
          <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
          <i class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i>
          </a>
      </li>
      </ul>
  </div>
  <div class="shadow-bottom"></div>
  <!-- Horizontal menu content-->
  <div class="navbar-container main-menu-content" data-menu="menu-container">
      <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="filled">
      <?php if(!empty($menuData[1]) && isset($menuData[1])): ?>
          <?php $__currentLoopData = $menuData[1]->menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class="<?php if(isset($menu->submenu)): ?><?php echo e('dropdown'); ?> <?php endif; ?> nav-item" data-menu="dropdown">
          <a class="<?php if(isset($menu->submenu)): ?><?php echo e('dropdown-toggle'); ?> <?php endif; ?> nav-link" href="<?php echo e(asset($menu->url)); ?>" 
            <?php if(isset($menu->submenu)): ?><?php echo e('data-toggle=dropdown'); ?> <?php endif; ?> <?php if(isset($menu->newTab)): ?><?php echo e("target=_blank"); ?><?php endif; ?>>
              <i class="menu-livicon" data-icon="<?php echo e($menu->icon); ?>"></i>
              <span><?php echo e(__('locale.'.$menu->name)); ?></span>
          </a>
          <?php if(isset($menu->submenu)): ?>
              <?php echo $__env->make('panels.sidebar-submenu',['menu'=>$menu->submenu], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php endif; ?>
          </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
      </ul>
  </div>
  <!-- /horizontal menu content-->
  </div>
<?php endif; ?>


<?php if($configData['mainLayoutType'] == 'vertical-menu-boxicons'): ?>
<div class="main-menu menu-fixed <?php if($configData['theme'] === 'light'): ?> <?php echo e("menu-light"); ?> <?php else: ?> <?php echo e('menu-dark'); ?> <?php endif; ?> menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
    <li class="nav-item mr-auto">
      <a class="navbar-brand" href="<?php echo e(asset('/')); ?>">
        <div class="brand-logo">
          <img src="<?php echo e(asset('images/logo/logo.png')); ?>" class="logo" alt="">
        </div>
        <h2 class="brand-text mb-0">
          <?php if(!empty($configData['templateTitle']) && isset($configData['templateTitle'])): ?>
          <?php echo e($configData['templateTitle']); ?>

          <?php else: ?>
          Frest
          <?php endif; ?>
        </h2>
      </a>
    </li>
    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="bx-disc"></i></a></li>
    </ul>
  </div>
  <div class="shadow-bottom"></div>
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="">
      <?php if(!empty($menuData[2]) && isset($menuData[2])): ?>
      <?php $__currentLoopData = $menuData[2]->menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if(isset($menu->navheader)): ?>
              <li class="navigation-header"><span><?php echo e($menu->navheader); ?></span></li>
          <?php else: ?>
          <li class="nav-item <?php echo e((request()->is($menu->url.'*')) ? 'active' : ''); ?>">
            <a href="<?php if(isset($menu->url)): ?><?php echo e(asset($menu->url)); ?> <?php endif; ?>" <?php if(isset($menu->newTab)): ?><?php echo e("target=_blank"); ?><?php endif; ?>>
            <?php if(isset($menu->icon)): ?>
              <i class="<?php echo e($menu->icon); ?>"></i>
            <?php endif; ?>
            <?php if(isset($menu->name)): ?>
              <span class="menu-title"><?php echo e(__('locale.'.$menu->name)); ?></span>
            <?php endif; ?>
            <?php if(isset($menu->tag)): ?>
              <span class="<?php echo e($menu->tagcustom); ?>"><?php echo e($menu->tag); ?></span>
            <?php endif; ?>
           </a>
          <?php if(isset($menu->submenu)): ?>
            <?php echo $__env->make('panels.sidebar-submenu',['menu' => $menu->submenu], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php endif; ?>
          </li>
          <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
  </ul>
  </div>
</div>
<?php endif; ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/frest-bootstrap-admin-template-html/frest-laravel-admin-template/resources/views/panels/sidebar.blade.php ENDPATH**/ ?>