
<?php if($configData['mainLayoutType'] == 'vertical-menu'): ?>
  <ul class="menu-content">
      <?php if(isset($menu)): ?>
        <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li <?php echo e((request()->is($submenu->url.'*')) ? 'class=active' : ''); ?>>
            <a href="<?php if(isset($submenu->url)): ?> <?php echo e(asset($submenu->url)); ?> <?php endif; ?>" <?php if(isset($submenu->newTab)): ?><?php echo e("target=_blank"); ?><?php endif; ?>>
              <i class="bx bx-right-arrow-alt"></i>
            <span class="menu-item"><?php echo e(__('locale.'.$submenu->name)); ?></span>
            </a>
            <?php if(isset($submenu->submenu)): ?>
              <?php echo $__env->make('panels.sidebar-submenu',['menu'=>$submenu->submenu], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
          </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
  </ul>
  
<?php elseif($configData['mainLayoutType'] == 'horizontal-menu'): ?>
  <ul class="dropdown-menu">
      <?php if(isset($menu)): ?>
        <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class="<?php if(isset($submenu->submenu)): ?><?php echo e('dropdown dropdown-submenu'); ?><?php endif; ?> <?php echo e((request()->is($submenu->url.'*')) ? 'active' : ''); ?>" data-menu="<?php if(isset($submenu->submenu)): ?><?php echo e('dropdown-submenu'); ?> <?php endif; ?>">
          <a class="dropdown-item align-items-center <?php if(isset($submenu->submenu)): ?><?php echo e('dropdown-toggle'); ?><?php endif; ?>" href="<?php echo e(asset($submenu->url)); ?>" data-toggle="dropdown" <?php if(isset($submenu->newTab)): ?><?php echo e("target=_blank"); ?><?php endif; ?>>
              <i class="bx bx-right-arrow-alt"></i>
              <span><?php echo e(__('locale.'.$submenu->name)); ?></span>
          </a>
          <?php if(isset($submenu->submenu)): ?>
            <?php echo $__env->make('panels.sidebar-submenu',['menu' => $submenu->submenu], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php endif; ?>
          </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
  </ul>
<?php endif; ?>


<?php if($configData['mainLayoutType'] == 'vertical-menu-boxicons'): ?>
<ul class="menu-content">
  <?php if(isset($menu)): ?>
    <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li <?php echo e((request()->is($submenu->url.'*')) ? 'class=active' : ''); ?>>
        <a href="<?php if(isset($submenu->url)): ?> <?php echo e(asset($submenu->url)); ?> <?php endif; ?>" <?php if(isset($submenu->newTab)): ?><?php echo e("target=_blank"); ?><?php endif; ?>>
          <i class="bx bx-right-arrow-alt"></i>
        <span class="menu-item"><?php echo e(__('locale.'.$submenu->name)); ?></span>
        </a>
        <?php if(isset($submenu->submenu)): ?>
          <?php echo $__env->make('panels.sidebar-submenu',['menu'=>$submenu->submenu], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
      </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php endif; ?>
</ul>
<?php endif; ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/frest-bootstrap-admin-template-html/frest-laravel-admin-template/resources/views/panels/sidebar-submenu.blade.php ENDPATH**/ ?>