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
  <div class="chat-start">
    <span class="bx bx-message chat-sidebar-toggle chat-start-icon font-large-3 p-3 mb-1"></span>
    <h4 class="d-none d-lg-block py-50 text-bold-500">Select a contact to start a chat!</h4>
    <button class="btn btn-light-primary chat-start-text chat-sidebar-toggle d-block d-lg-none py-50 px-1">Start
      Conversation!</button>
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
      <h5 class="app-chat-user-name mb-0">Elizabeth Elliott</h5>
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
@endsection
