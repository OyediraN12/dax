

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
        <!-- Detailed Email View -->
  <div class="email-app-details show">
    <!-- email detail view header -->
    <div class="email-detail-header">
      <div class="email-header-left d-flex align-items-center mb-1">
        <h5 class="email-detail-title font-weight-normal mb-0">
          <?php echo e($userRequest->user->name); ?> <?php echo e($userRequest->user->last_name); ?>

          <span class="badge badge-light-danger badge-pill ml-1"><?php echo e($userRequest->request_type); ?></span>
        </h5>
      </div>
      <div class="email-header-right mb-1 ml-2 pl-1">
        <ul class="list-inline m-0">
          <li class="list-inline-item">
            <button class="btn btn-icon action-icon">
              <span class="fonticon-wrap">
                <i class="livicon-evo"
                  data-options="name: trash.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                </i>
              </span>
            </button>
          </li>
          <li class="list-inline-item">
            <button class="btn btn-icon action-icon">
              <span class="fonticon-wrap">
                <i class="livicon-evo"
                  data-options="name: envelope-put.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                </i>
              </span>
            </button>
          </li>
          <li class="list-inline-item">
            <div class="dropdown">
              <button class="btn btn-icon dropdown-toggle action-icon" id="open-mail-menu" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="fonticon-wrap">
                  <i class="livicon-evo"
                    data-options="name: morph-folder.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                  </i>
                </span>
              </button>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="open-mail-menu">
                <a class="dropdown-item" href="#"><i class="bx bx-edit"></i> Draft</a>
                <a class="dropdown-item" href="#"><i class="bx bx-info-circle"></i> Spam</a>
                <a class="dropdown-item" href="#"><i class="bx bx-trash"></i> Trash</a>
              </div>
            </div>
          </li>
          <li class="list-inline-item">
            <div class="dropdown">
              <button class="btn btn-icon dropdown-toggle action-icon" id="open-mail-tag" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="fonticon-wrap">
                  <i class="livicon-evo"
                    data-options="name: tag.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                  </i>
                </span>
              </button>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="open-mail-tag">
                <a href="#" class="dropdown-item align-items-center">
                  <span class="bullet bullet-success bullet-sm"></span>
                  Product
                </a>
                <a href="#" class="dropdown-item align-items-center">
                  <span class="bullet bullet-primary bullet-sm"></span>
                  Work
                </a>
                <a href="#" class="dropdown-item align-items-center">
                  <span class="bullet bullet-warning bullet-sm"></span>
                  Misc
                </a>
                <a href="#" class="dropdown-item align-items-center">
                  <span class="bullet bullet-danger bullet-sm"></span>
                  Family
                </a>
                <a href="#" class="dropdown-item align-items-center">
                  <span class="bullet bullet-info bullet-sm"></span>
                  Design
                </a>
              </div>
            </div>
          </li>
          
        </ul>
      </div>
    </div>
    <!-- email detail view header end-->
    <div class="email-scroll-area">
      <!-- email details  -->
      <div class="row">
        <div class="col-12">
          <div class="collapsible email-detail-head">

            <div class="card collapse-header open" role="tablist">
              <div id="headingCollapse7" class="card-header d-flex justify-content-between align-items-center"
                data-toggle="collapse" role="tab" data-target="#collapse7" aria-expanded="false"
                aria-controls="collapse7">
                <div class="collapse-title media">
                  <div class="pr-1">
                    <div class="avatar mr-75">
                      <img src="<?php echo e(asset('images/portrait/small/avatar-s-18.jpg')); ?>" alt="avtar img holder"
                        width="30" height="30">
                    </div>
                  </div>
                  <div class="media-body mt-25">
                    <span class="text-primary"><?php echo e($userRequest->user->name); ?> <?php echo e($userRequest->user->last_name); ?></span>
                    <span class="d-sm-inline d-none">&lt;<?php echo e($userRequest->user->email); ?>&gt;</span>
                    
                  </div>
                </div>
                <div class="information d-sm-flex d-none align-items-center">
                  <small class="text-muted mr-50"><?php echo e($userRequest->created_at); ?></small>
                  
                  
                </div>
              </div>
              <div id="collapse7" role="tabpanel" aria-labelledby="headingCollapse7" class="collapse show">
                <div class="card-content">
                  <div class="card-body py-1">
                    
                    <p>
                      Country: <?php echo e($userRequest->requests->country); ?>

                    </p>
                    <p>
                      About Project: <?php echo e($userRequest->requests->about_project); ?>

                    </p>
                    <p>
                      Have Land: <?php echo e($userRequest->requests->have_land); ?>

                    </p>
                    <p>
                      Status: <?php echo e($userRequest->status); ?>

                    </p>
                    <p class="mb-0">Date:</p>
                    <p class="text-bold-500"><?php echo e($userRequest->created_at); ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- email details  end-->
      <div class="row px-2 mb-4">
        <!-- quill editor for reply message -->
        <div class="col-12 px-0">
          <div class="card shadow-none border rounded">
            <form action="<?php echo e(route('requests.update', ['id' => $userRequest->id])); ?>" method="POST">
              <?php echo csrf_field(); ?>
              <input type="hidden" name="_method" value="PUT">
              <div class="card-body quill-wrapper">
                <span>Change Status</span>
                <select name="status" class="form-control mt-1">
                  <option>Pending</option>
                  <option>Completed</option>
                </select>
                <br>
                <button class="btn btn-primary send-btn" type="submit">
                  <i class='bx bx-send mr-25'></i>
                  <span class="d-none d-sm-inline"> Change</span>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Detailed Email View -->
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
  var showMessage = false;

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

<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/adesanoye/lampstack/frameworks/FrestLaravelDashboard/resources/views/pages/app-email-show.blade.php ENDPATH**/ ?>