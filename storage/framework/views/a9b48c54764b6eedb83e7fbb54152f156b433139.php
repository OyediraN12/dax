<?php $__env->startSection('sidebar-content'); ?>
<!-- app chat user profile left sidebar start -->
<div class="chat-user-profile">
    <header class="chat-user-profile-header text-center border-bottom">
      <span class="chat-profile-close">
        <i class="bx bx-x"></i>
      </span>
      <div class="my-2">
        <div class="avatar">
          <img src="<?php echo e(asset('images/portrait/small/avatar-s-11.jpg')); ?>" alt="user_avatar" height="100" width="100">
        </div>
        <h5 class="mb-0">John Doe</h5>
        <span>Designer</span>
      </div>
    </header>
    <div class="chat-user-profile-content">
      <div class="chat-user-profile-scroll">
        <h6 class="text-uppercase mb-1">ABOUT</h6>
        <p class="mb-2">It is a long established fact that a reader will be distracted by the readable content .</p>
        <h6>PERSONAL INFORAMTION</h6>
        <ul class="list-unstyled mb-2">
          <li class="mb-25">email@gmail.com</li>
          <li>+1(789) 950 -7654</li>
        </ul>
        <h6 class="text-uppercase mb-1">SETTINGS</h6>
        <ul class="list-unstyled">
          <li class="mb-50 "><a href="javascript:void(0);" class="d-flex align-items-center"><i class="bx bx-tag mr-50"></i> Add
              Tag</a></li>
          <li class="mb-50 "><a href="javascript:void(0);" class="d-flex align-items-center"><i class="bx bx-star mr-50"></i>
              Important Contact</a>
          </li>
          <li class="mb-50 "><a href="javascript:void(0);" class="d-flex align-items-center"><i class="bx bx-image-alt mr-50"></i>
              Shared
              Documents</a></li>
          <li class="mb-50 "><a href="javascript:void(0);" class="d-flex align-items-center"><i class="bx bx-trash-alt mr-50"></i>
              Deleted
              Documents</a></li>
          <li><a href="javascript:void(0);" class="d-flex align-items-center"><i class="bx bx-block mr-50"></i> Blocked
              Contact</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- app chat user profile left sidebar ends -->
  <!-- app chat sidebar start -->
  <div class="chat-sidebar card">
    <span class="chat-sidebar-close">
      <i class="bx bx-x"></i>
    </span>
    <div class="chat-sidebar-search">
      <div class="d-flex align-items-center">
        <div class="chat-sidebar-profile-toggle">
          <div class="avatar">
            <img src="<?php echo e(asset('images/portrait/small/avatar-s-11.jpg')); ?>" alt="user_avatar" height="36" width="36">
          </div>
        </div>
        <fieldset class="form-group position-relative has-icon-left mx-75 mb-0">
          <input type="text" class="form-control round" id="chat-search" placeholder="Search">
          <div class="form-control-position">
            <i class="bx bx-search-alt text-dark"></i>
          </div>
        </fieldset>
      </div>
    </div>
    <div class="chat-sidebar-list-wrapper pt-2">
      <h6 class="px-2 pt-2 pb-25 mb-0">CHATS</h6>
      <ul class="chat-sidebar-list">
        <?php if(count($clients) > 0): ?>
          <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('chat.show', ['user' => $client->id])); ?>">
                <li>
                  <div class="d-flex align-items-center">
                    <div class="avatar m-0 mr-50"><img src="<?php echo e(asset('images/portrait/small/avatar-s-26.jpg')); ?>" height="36"
                        width="36" alt="sidebar user image">
                      <span class="avatar-status-busy"></span>
                    </div>
                    <div class="chat-sidebar-name">
                      <h6 class="mb-0"><?php echo e($client->name); ?> <?php echo e($client->last_name); ?></h6><span class="text-muted">Cake pie</span>
                    </div>
                  </div>
                </li>
              </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php else: ?>
          <li>
            <h6>No Client So far</h6>
          </li>
          <?php endif; ?>  
      </ul>

      <h6 class="px-2 pt-2 pb-25 mb-0">CONTACTS<i class="bx bx-plus float-right cursor-pointer"></i></h6>
      <ul class="chat-sidebar-list">
        <?php if(count($clients) > 0): ?>
          <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('chat.show', ['user' => $client->id])); ?>">
                <li>
                  <div class="d-flex align-items-center">
                    <div class="avatar m-0 mr-50"><img src="<?php echo e(asset('images/portrait/small/avatar-s-26.jpg')); ?>" height="36"
                        width="36" alt="sidebar user image">
                      <span class="avatar-status-busy"></span>
                    </div>
                    <div class="chat-sidebar-name">
                      <h6 class="mb-0"><?php echo e($client->name); ?> <?php echo e($client->last_name); ?></h6><span class="text-muted">Cake pie</span>
                    </div>
                  </div>
                </li>
              </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php else: ?>
          <li>
            <h6>No Client So far</h6>
          </li>
          <?php endif; ?>  
      </ul>
    </div>
  </div>
  <!-- app chat sidebar ends -->
<?php $__env->stopSection(); ?>
<?php /**PATH /home/adesanoye/lampstack/frameworks/innout admin/resources/views/pages/app-chat-sidebar.blade.php ENDPATH**/ ?>