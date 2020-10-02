

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
          Advertising Internet Online
          <span class="badge badge-light-danger badge-pill ml-1">PRODUCT</span>
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
          <li class="list-inline-item">
            <span class="no-of-list d-none d-sm-block ml-1">1-10 of 653</span>
          </li>
          <li class="list-inline-item">
            <button class="btn btn-icon email-pagination-prev action-icon">
              <i class='bx bx-chevron-left'></i>
            </button>
          </li>
          <li class="list-inline-item">
            <button class="btn btn-icon email-pagination-next action-icon">
              <i class='bx bx-chevron-right'></i>
            </button>
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
            <div class="card collapse-header" role="tablist">
              <div id="headingCollapse5" class="card-header d-flex justify-content-between align-items-center"
                data-toggle="collapse" role="tab" data-target="#collapse5" aria-expanded="false"
                aria-controls="collapse5">
                <div class="collapse-title media">
                  <div class="pr-1">
                    <div class="avatar mr-75">
                      <img src="<?php echo e(asset('images/portrait/small/avatar-s-18.jpg')); ?>" alt="avtar img holder"
                        width="30" height="30">
                    </div>
                  </div>
                  <div class="media-body mt-25">
                    <span class="text-primary">Elnora Reese</span>
                    <span class="d-sm-inline d-none"> &lt;elnora@gmail.com&gt;</span>
                    <small class="text-muted d-block">to Lois Jimenez</small>
                  </div>
                </div>
                <div class="information d-sm-flex d-none align-items-center">
                  <small class="text-muted mr-50">15 Jul 2019, 10:30</small>
                  <span class="favorite">
                    <i class="bx bx-star mr-25"></i>
                  </span>
                  <div class="dropdown">
                    <a href="#" class="dropdown-toggle" id="fisrt-open-submenu" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <i class='bx bx-dots-vertical-rounded mr-0'></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="fisrt-open-submenu">
                      <a href="#" class="dropdown-item mail-reply">
                        <i class='bx bx-share'></i>
                        Reply
                      </a>
                      <a href="#" class="dropdown-item">
                        <i class='bx bx-redo'></i>
                        Forward
                      </a>
                      <a href="#" class="dropdown-item">
                        <i class='bx bx-info-circle'></i>
                        Report Spam
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div id="collapse5" role="tabpanel" aria-labelledby="headingCollapse5" class="collapse">
                <div class="card-content">
                  <div class="card-body py-1">
                    <p class="text-bold-500">Greetings!</p>
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                      the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                      type and scrambled it to make a type specimen book.
                    </p>
                    <p>
                      It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                      essentially unchanged.
                    </p>
                    <p class="mb-0">Sincerely yours,</p>
                    <p class="text-bold-500">Envato Design Team</p>
                  </div>
                  <div class="card-footer pt-0 border-top">
                    <label class="sidebar-label">Attached Files</label>
                    <ul class="list-unstyled mb-0">
                      <li class="cursor-pointer pb-25">
                        <img src="<?php echo e(asset('images/icon/psd.png')); ?>" height="30" alt="psd.png">
                        <small class="text-muted ml-1 attchement-text">uikit-design.psd</small>
                      </li>
                      <li class="cursor-pointer">
                        <img src="<?php echo e(asset('images/icon/sketch.png')); ?>" height="30" alt="sketch.png">
                        <small class="text-muted ml-1 attchement-text">uikit-design.sketch</small>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="card collapse-header" role="tablist">
              <div id="headingCollapse6" class="card-header d-flex justify-content-between align-items-center"
                data-toggle="collapse" role="tab" data-target="#collapse6" aria-expanded="false"
                aria-controls="collapse6">
                <div class="collapse-title media">
                  <div class="pr-1">
                    <div class="avatar mr-75">
                      <img src="<?php echo e(asset('images/portrait/small/avatar-s-19.jpg')); ?>" alt="avtar img holder"
                        width="30" height="30">
                    </div>
                  </div>
                  <div class="media-body mt-25">
                    <span class="text-primary">Lois Jimenez </span>
                    <span class="d-sm-inline d-none"> &lt;lois_jim@gmail.com&gt;</span>
                    <small class="text-muted d-block">to Elnora Reese</small>
                  </div>
                </div>
                <div class="information d-sm-flex d-none align-items-center">
                  <i class='bx bx-paperclip mr-50'></i>
                  <small class="text-muted mr-50">10 Jul 2019, 10:30</small>
                  <span class="favorite">
                    <i class="bx bx-star mr-25"></i>
                  </span>
                  <div class="dropdown">
                    <a href="#" class="dropdown-toggle" id="second-open-submenu" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <i class='bx bx-dots-vertical-rounded mr-0'></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="second-open-submenu">
                      <a href="#" class="dropdown-item mail-reply">
                        <i class='bx bx-share'></i>
                        Reply
                      </a>
                      <a href="#" class="dropdown-item">
                        <i class='bx bx-redo'></i>
                        Forward
                      </a>
                      <a href="#" class="dropdown-item">
                        <i class='bx bx-info-circle'></i>
                        Report Spam
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div id="collapse6" role="tabpanel" aria-labelledby="headingCollapse7" class="collapse">
                <div class="card-content">
                  <div class="card-body py-1">
                    <p class="text-bold-500">Greetings!</p>
                    <p>
                      Successful businesses have many things in common, today we’ll look at the big ‘R’of recognition
                      and how a digital advertising network may help. Recognition can be illustrated by two individuals
                      entering a crowded room at a party. Both walk to the far side of the room, one of them slips
                      through the crowd easily and unnoticed as they reach the far side.
                    </p>
                    <p>
                      Gummies sweet tart marzipan lemon drops donut pie. Chocolate cake gingerbread jujubes gingerbread
                      chocolate cake tart bear claw apple pie jelly-o.
                      Gummies biscuit brownie marshmallow oat cake tootsie roll bear claw topping. Oat cake sesame snaps
                      icing cupcake wafer tiramisu jelly-o sugar plum carrot cake
                    </p>
                    <p class="mb-0">Sincerely yours,</p>
                    <p class="text-bold-500">Envato Design Team</p>
                  </div>
                  <div class="card-footer pt-0 border-top">
                    <label class="sidebar-label">Attached Files</label>
                    <ul class="list-unstyled mb-0">
                      <li class="cursor-pointer pb-25">
                        <img src="<?php echo e(asset('images/icon/psd.png')); ?>" height="30" alt="psd.png">
                        <small class="text-muted ml-1 attchement-text">uikit-design.psd</small>
                      </li>
                      <li class="cursor-pointer">
                        <img src="<?php echo e(asset('images/icon/sketch.png')); ?>" height="30" alt="sketch.png">
                        <small class="text-muted ml-1 attchement-text">uikit-design.sketch</small>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
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
                    <span class="text-primary">Elnora Reese</span>
                    <span class="d-sm-inline d-none">&lt;elnora@gmail.com&gt;</span>
                    <small class="text-muted d-block">to Lois Jimenez</small>
                  </div>
                </div>
                <div class="information d-sm-flex d-none align-items-center">
                  <small class="text-muted mr-50">05 Jul 2019, 10:30</small>
                  <span class="favorite warning">
                    <i class="bx bxs-star mr-25"></i>
                  </span>
                  <div class="dropdown">
                    <a href="#" class="dropdown-toggle" id="third-open-menu" data-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false">
                      <i class='bx bx-dots-vertical-rounded mr-0'></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="second-open-submenu">
                      <a href="#" class="dropdown-item mail-reply">
                        <i class='bx bx-share'></i>
                        Reply
                      </a>
                      <a href="#" class="dropdown-item">
                        <i class='bx bx-redo'></i>
                        Forward
                      </a>
                      <a href="#" class="dropdown-item">
                        <i class='bx bx-info-circle'></i>
                        Report Spam
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div id="collapse7" role="tabpanel" aria-labelledby="headingCollapse7" class="collapse show">
                <div class="card-content">
                  <div class="card-body py-1">
                    <p class="text-bold-500">Greetings!</p>
                    <p>
                      It is a long established fact that a reader will be distracted by the readable content of a page
                      when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal
                      distribution of letters, as opposed to using 'Content here, content here',making it look like
                      readable English.
                    </p>
                    <p>
                      There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                      alteration in some form, by injected humour, or randomised words which don't look even slightly
                      believable.
                    </p>
                    <p class="mb-0">Sincerely yours,</p>
                    <p class="text-bold-500">Envato Design Team</p>
                  </div>
                  <div class="card-footer pt-0 border-top">
                    <label class="sidebar-label">Attached Files</label>
                    <ul class="list-unstyled mb-0">
                      <li class="cursor-pointer pb-25">
                        <img src="<?php echo e(asset('images/icon/psd.png')); ?>" height="30" alt="psd.png">
                        <small class="text-muted ml-1 attchement-text">uikit-design.psd</small>
                      </li>
                      <li class="cursor-pointer">
                        <img src="<?php echo e(asset('images/icon/sketch.png')); ?>" height="30" alt="sketch.png">
                        <small class="text-muted ml-1 attchement-text">uikit-design.sketch</small>
                      </li>
                    </ul>
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
            <div class="card-body quill-wrapper">
              <span>Reply to Lois Jimenez</span>
              <div class="snow-container" id="detail-view-quill">
                <div class="detail-view-editor"></div>
                <div class="d-flex justify-content-end">
                  <div class="detail-quill-toolbar">
                    <span class="ql-formats mr-50">
                      <button class="ql-bold"></button>
                      <button class="ql-italic"></button>
                      <button class="ql-underline"></button>
                      <button class="ql-link"></button>
                      <button class="ql-image"></button>
                    </span>
                  </div>
                  <button class="btn btn-primary send-btn">
                    <i class='bx bx-send mr-25'></i>
                    <span class="d-none d-sm-inline"> Send</span>
                  </button>
                </div>
              </div>
            </div>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/adesanoye/lampstack/frameworks/FrestLaravelDashboard/resources/views/pages/app-email1.blade.php ENDPATH**/ ?>