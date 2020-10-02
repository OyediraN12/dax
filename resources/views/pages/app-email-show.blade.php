@extends('layouts.contentLayoutMaster')

@section('title','Email Application')
{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/editors/quill/quill.snow.css')}}">
@endsection
{{-- page styles --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/app-email.css')}}">
@endsection

{{-- sidebar page icluded --}}
@include('pages.app-email-sidebar')

@section('content')
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
          {{$userRequest->user->name}} {{$userRequest->user->last_name}}
          <span class="badge badge-light-danger badge-pill ml-1">{{$userRequest->request_type}}</span>
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
          {{-- <li class="list-inline-item">
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
          </li> --}}
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
                      <img src="{{asset('images/portrait/small/avatar-s-18.jpg')}}" alt="avtar img holder"
                        width="30" height="30">
                    </div>
                  </div>
                  <div class="media-body mt-25">
                    <span class="text-primary">{{$userRequest->user->name}} {{$userRequest->user->last_name}}</span>
                    <span class="d-sm-inline d-none">&lt;{{$userRequest->user->email}}&gt;</span>
                    {{-- <small class="text-muted d-block">to Lois Jimenez</small> --}}
                  </div>
                </div>
                <div class="information d-sm-flex d-none align-items-center">
                  <small class="text-muted mr-50">{{$userRequest->created_at}}</small>
                  {{-- <span class="favorite warning">
                    <i class="bx bxs-star mr-25"></i>
                  </span> --}}
                  {{-- <div class="dropdown">
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
                  </div> --}}
                </div>
              </div>
              <div id="collapse7" role="tabpanel" aria-labelledby="headingCollapse7" class="collapse show">
                <div class="card-content">
                  <div class="card-body py-1">
                    {{-- <p class="text-bold-500">Greetings!</p> --}}
                    <p>
                      Country: {{$userRequest->requests->country}}
                    </p>
                    <p>
                      About Project: {{$userRequest->requests->about_project}}
                    </p>
                    <p>
                      Have Land: {{$userRequest->requests->have_land}}
                    </p>
                    <p>
                      Status: {{$userRequest->status}}
                    </p>
                    <p class="mb-0">Date:</p>
                    <p class="text-bold-500">{{$userRequest->created_at}}</p>
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
            <form action="{{route('requests.update', ['id' => $userRequest->id])}}" method="POST">
              @csrf
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
@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')
<script src="{{asset('vendors/js/editors/quill/quill.min.js')}}"></script>
@endsection

@section('page-scripts')
<script src="{{asset('js/scripts/pages/app-email.js')}}"></script>

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
            url: "{{ route('email.store') }}",
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
@endsection
