@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Chat Application')
{{-- page styles --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/app-chat.css')}}">
@endsection

{{-- page content --}}
@include('pages.app-chat-sidebar')
@section('content')
<!-- app chat overlay -->
<div class="chat-overlay"></div>
<!-- app chat window start -->
<section class="chat-window-wrapper">
  <div class="chat-area">
    <div class="chat-header">
      <header class="d-flex justify-content-between align-items-center border-bottom px-1 py-75">
        <div class="d-flex align-items-center">
          <div class="chat-sidebar-toggle d-block d-lg-none mr-1"><i class="bx bx-menu font-large-1 cursor-pointer"></i>
          </div>
          <div class="avatar chat-profile-toggle m-0 mr-1">
            <img src="{{asset('images/portrait/small/avatar-s-26.jpg')}}" alt="avatar" height="36" width="36" />
            <span class="avatar-status-busy"></span>
          </div>
          <h6 class="mb-0">{{$user->name}} {{$user->last_name}}</h6>
        </div>
        <div class="chat-header-icons">
          <span class="chat-icon-favorite">
            <i class="bx bx-star font-medium-5 cursor-pointer"></i>
          </span>
          <span class="dropdown">
            <i class="bx bx-dots-vertical-rounded font-medium-4 ml-25 cursor-pointer dropdown-toggle nav-hide-arrow cursor-pointer"
              id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
            </i>
            <span class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="JavaScript:void(0);"><i class="bx bx-pin mr-25"></i> Pin to top</a>
              <a class="dropdown-item" href="JavaScript:void(0);"><i class="bx bx-trash mr-25"></i> Delete chat</a>
              <a class="dropdown-item" href="JavaScript:void(0);"><i class="bx bx-block mr-25"></i> Block</a>
            </span>
          </span>
        </div>
      </header>
    </div>
    <!-- chat card start -->
    <div class="card chat-wrapper shadow-none">
      <div class="card-content">
        <div class="card-body chat-container">
          <div class="chat-content">
            
          </div>
        </div>
      </div>
      <div class="card-footer chat-footer border-top px-2 pt-1 pb-0 mb-1">
        <form class="d-flex align-items-center" onsubmit="chatMessagesSend();" action="javascript:void(0);">
          <i class="bx bx-face cursor-pointer"></i>
          <i class="bx bx-paperclip ml-1 cursor-pointer"></i>
          <input type="hidden" name="message_id" value="{{$message_info->id}}" >
          <input type="text" class="form-control chat-message-send mx-1" placeholder="Type your message here...">
          <button type="submit" class="btn btn-primary glow send d-lg-flex"><i class="bx bx-paper-plane"></i>
            <span class="d-none d-lg-block ml-1">Send</span></button>
        </form>
      </div>
    </div>
    <!-- chat card ends -->
  </div>
</section>
<!-- app chat window ends -->
<!-- app chat profile right sidebar start -->
<section class="chat-profile">
  <header class="chat-profile-header text-center border-bottom">
    <span class="chat-profile-close">
      <i class="bx bx-x"></i>
    </span>
    <div class="my-2">
      <div class="avatar">
        <img src="{{asset('images/portrait/small/avatar-s-26.jpg')}}" alt="chat avatar" height="100" width="100">
      </div>
      <h5 class="app-chat-user-name mb-0">{{$user->name}}</h5>
      <span>Devloper</span>
    </div>
  </header>
  <div class="chat-profile-content p-2">
    <h6 class="mt-1">ABOUT</h6>
    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
    <h6 class="mt-2">PERSONAL INFORMATION</h6>
    <ul class="list-unstyled">
      <li class="mb-25">email@gmail.com</li>
      <li>+1(789) 950-7654</li>
    </ul>
  </div>
</section>
<!-- app chat profile right sidebar ends -->
@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/pages/app-chat.js')}}"></script>

<script>
  // Add message to chat
function chatMessagesSend(source) {
  var message = chatMessageSend.val();
  var message_id = $('[name="message_id"]').val();
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    })
    $.ajax({
        url: "{{ url('storeConversations') }}",
        method: 'post',
        data: {
            message_id: message_id,
            message: message
        },
        success: function(result) {
            // what should happen when success
            console.log(result);
            if (message != "") {
              var html = '<div class="chat"><div class="chat-body"><div class="chat-message">' + "<p>" + message + "</p>" + "<div class=" + "chat-time" + ">"+ result.created_at +"</div></div></div></div>";
              $(".chat-wrapper .chat-content").append(html);
              chatMessageSend.val("");
              chatContainer.scrollTop($(".chat-container > .chat-content").height());
            }
        }
    })
}

  setInterval(function() {
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    var value = $('[name="message_id"]').val();
    var authenticated_user = "{{Auth::user()->id}}";
    $.ajax({
        url: "{{ url('getConversations') }}",
        method: "get",
        data: {
            id: value
        },
        success: function(data){
          $('.chat-wrapper .chat-content').html('');
          $.each(data, function(i, v) {
            $('.chat-wrapper .chat-content').append(`
              <div class="chat ${(v.user_id != authenticated_user) ? 'chat-left' : '' }">
                  <div class="chat-body">
                    <div class="chat-message">
                      <p>${v.message}</p>
                      <span class="chat-time">${v.created_at}</span>
                    </div>
                  </div>
              </div> `);
          });
        }
    })
    }, 1000);
</script>

@endsection
