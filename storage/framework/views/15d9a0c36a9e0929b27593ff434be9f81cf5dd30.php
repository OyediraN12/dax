<?php $userrequest = app('App\UserRequest'); ?>



<?php $__env->startSection('title','Email Application'); ?>

<?php $__env->startSection('vendor-styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendors/css/editors/quill/quill.snow.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/pages/app-email.css')); ?>">
<?php $__env->stopSection(); ?>


<?php echo $__env->make('pages.app-email-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
<!-- email app overlay -->
<div class="app-content-overlay"></div>
<div class="email-app-area">
  <!-- Email list Area -->
  <div class="email-app-list-wrapper">
    <div class="email-app-list">
      <div class="email-action">
        <!-- action left start here -->
        <div class="action-left d-flex align-items-center">
          <!-- select All checkbox -->
          <div class="checkbox checkbox-shadow checkbox-sm selectAll mr-50">
            <input type="checkbox" id="checkboxsmall">
            <label for="checkboxsmall"></label>
          </div>
          <!-- delete unread dropdown -->
          <ul class="list-inline m-0 d-flex">
            <li class="list-inline-item mail-delete">
              <button type="button" class="btn btn-icon action-icon">
                <span class="fonticon-wrap">
                  <i class="livicon-evo"
                    data-options="name: trash.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                  </i>
                </span>
              </button>
            </li>
            <li class="list-inline-item mail-unread">
              <button type="button" class="btn btn-icon action-icon">
                <span class="fonticon-wrap d-inline mr-25">
                  <i class="livicon-evo"
                    data-options="name: envelope-put.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                  </i>
                </span>
              </button>
            </li>
            <li class="list-inline-item">
              <div class="dropdown">
                <button type="button" class="dropdown-toggle btn btn-icon action-icon" id="folder"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="fonticon-wrap">
                    <i class="livicon-evo"
                      data-options="name: morph-folder.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                    </i>
                  </span>
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="folder">
                  <a class="dropdown-item" href="#"><i class="bx bx-edit"></i> Draft</a>
                  <a class="dropdown-item" href="#"><i class="bx bx-info-circle"></i>Spam</a>
                  <a class="dropdown-item" href="#"><i class="bx bx-trash"></i>Trash</a>
                </div>
              </div>
            </li>
            <li class="list-inline-item">
              <div class="dropdown">
                <button type="button" class="btn btn-icon dropdown-toggle action-icon" id="tag" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <span class="fonticon-wrap">
                    <i class="livicon-evo"
                      data-options="name: tag.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                    </i>
                  </span>
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="tag">
                  <a href="#" class="dropdown-item align-items-center">
                    <span class="bullet bullet-success bullet-sm"></span>
                    <span>Product</span>
                  </a>
                  <a href="#" class="dropdown-item align-items-center">
                    <span class="bullet bullet-primary bullet-sm"></span>
                    <span>Work</span>
                  </a>
                  <a href="#" class="dropdown-item align-items-center">
                    <span class="bullet bullet-warning bullet-sm"></span>
                    <span>Misc</span>
                  </a>
                  <a href="#" class="dropdown-item align-items-center">
                    <span class="bullet bullet-danger bullet-sm"></span>
                    <span>Family</span>
                  </a>
                  <a href="#" class="dropdown-item align-items-center">
                    <span class="bullet bullet-info bullet-sm"></span>
                    <span> Design</span>
                  </a>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <!-- action left end here -->

        <!-- action right start here -->
        <div class="action-right d-flex flex-grow-1 align-items-center justify-content-around">
          <!-- search bar  -->
          <div class="email-fixed-search flex-grow-1">
            <div class="sidebar-toggle d-block d-lg-none">
              <i class="bx bx-menu"></i>
            </div>
            <fieldset class="form-group position-relative has-icon-left m-0">
              <input type="text" class="form-control" id="email-search" placeholder="Search email">
              <div class="form-control-position">
                <i class="bx bx-search"></i>
              </div>
            </fieldset>
          </div>
          <!-- pagination and page count -->
          <span class="d-none d-sm-block">1 of <?php echo e($userRequests->count()); ?></span>
          <button class="btn btn-icon email-pagination-prev d-none d-sm-block">
            <i class="bx bx-chevron-left"></i>
          </button>
          <button class="btn btn-icon email-pagination-next d-none d-sm-block">
            <i class="bx bx-chevron-right"></i>
          </button>
        </div>
      </div>
      <!-- / action right -->

      <!-- email user list start -->
      <div class="email-user-list list-group">
        <?php if($userRequests->count() > 0): ?>
        <ul class="users-list-wrapper media-list">
            <?php $__currentLoopData = $userRequests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userRequest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('email.show', ['email' => $userRequest->encoded_Id])); ?>">
              <li class="media mail-read">
                <div class="user-action">
                  <div class="checkbox-con mr-25">
                    <div class="checkbox checkbox-shadow checkbox-sm">
                      <input type="checkbox" id="checkboxsmall<?php echo e($userRequest->id); ?>">
                      <label for="checkboxsmall<?php echo e($userRequest->id); ?>"></label>
                    </div>
                  </div>
                  <span class="favorite"><i class="bx bx-star"></i></span>
                </div>
                  <div class="pr-50">
                    <div class="avatar">
                      <img class="rounded-circle" src="<?php echo e(asset('images/portrait/small/avatar-s-17.jpg')); ?>"
                        alt="Generic placeholder image">
                    </div>
                  </div>
                  <div class="media-body">
                    <div class="user-details">
                      <div class="mail-items">
                      <span class="list-group-item-text text-truncate"><?php echo e($userRequest->user->name); ?> - Request <?php echo e($userRequest->request_type); ?> </span>
                      </div>
                      <div class="mail-meta-item">
                        <span class="float-right">
                          <span class="mail-date"><?php echo e($userRequest->created_at); ?></span>
                        </span>
                      </div>
                    </div>
                    <div class="mail-message">
                      <p class="list-group-item-text mb-0 truncate">
                        
                        Status: <?php echo e($userRequest->status); ?>

                      </p>
                      <div class="mail-meta-item">
                        <span class="float-right">
                          <span class="bullet bullet-sm 
                            <?php if($userRequest->request_type == "Rent"): ?> bullet-success <?php endif; ?>
                            <?php if($userRequest->request_type == "Buy"): ?> bullet-primary <?php endif; ?>
                            <?php if($userRequest->request_type == "Construction"): ?> bullet-warning <?php endif; ?>
                            <?php if($userRequest->request_type == "Rental"): ?> bullet-danger <?php endif; ?>
                            <?php if($userRequest->request_type == "Sales"): ?> bullet-info <?php endif; ?>
                            <?php if($userRequest->request_type == "Distress Sales"): ?> bullet-secondary <?php endif; ?>
                            "></span>
                        </span>
                      </div>
                    </div>
                  </div>
                </li>
              </a>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        <!-- email user list end -->
        <?php else: ?> 
          <!-- no result when nothing to show on list -->
          <div class="no-results">
            <i class="bx bx-error-circle font-large-2"></i>
            <h5>No Items Found</h5>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <!--/ Email list Area -->
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('vendor-scripts'); ?>
<script src="<?php echo e(asset('vendors/js/editors/quill/quill.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-scripts'); ?>
<script src="<?php echo e(asset('js/scripts/pages/app-email.js')); ?>"></script>

<script>
  $('#compose-form').on('submit', function (event) {
    event.preventDefault();

        var form_data = {
          'to': document.querySelector("#emailTo").value,
          'subject': document.querySelector("#emailSubject").value,
          'message': document.querySelector('#compose-form .ql-editor').innerHTML 
        };
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
        $.ajax({
            url: "<?php echo e(route('email.store')); ?>",
            method: "POST",
            data: form_data,
            success: function (data) {
                console.log(data);
                $("#success").removeClass("d-none");
                document.querySelector("#emailTo").value = "";
                document.querySelector("#emailSubject").value = ""
                document.querySelector('#compose-form .ql-editor').innerHTML = ""
            },
            error: function(err) {
              console.log(err);
            }
        })

    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/adesanoye/lampstack/frameworks/innout admin/resources/views/pages/app-email.blade.php ENDPATH**/ ?>