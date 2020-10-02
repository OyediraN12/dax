{{-- navabar  --}}
<div class="header-navbar-shadow"></div>
<nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu 
@if(isset($configData['navbarType'])){{$configData['navbarClass']}} @endif" 
data-bgcolor="@if(isset($configData['navbarBgColor'])){{$configData['navbarBgColor']}}@endif">
  <div class="navbar-wrapper">
    <div class="navbar-container content">
      <div class="navbar-collapse" id="navbar-mobile">
        <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon bx bx-menu"></i></a></li>
          </ul>
          <ul class="nav navbar-nav bookmark-icons">
            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{asset('app-email')}}" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon bx bx-envelope"></i></a></li>
            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{asset('app-chat')}}" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon bx bx-chat"></i></a></li>
            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{asset('app-todo')}}" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon bx bx-check-circle"></i></a></li>
            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{asset('app-calendar')}}" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon bx bx-calendar-alt"></i></a></li>
          </ul>
          <ul class="nav navbar-nav">
            <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon bx bx-star warning"></i></a>
              <div class="bookmark-input search-input">
                <div class="bookmark-input-icon"><i class="bx bx-search primary"></i></div>
                <input class="form-control input" type="text" placeholder="Explore Frest..." tabindex="0" data-search="template-search">
                <ul class="search-list"></ul>
              </div>
            </li>
          </ul>
        </div>
        <ul class="nav navbar-nav float-right">
          <li class="dropdown dropdown-language nav-item">
            <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdown-flag">
              <a class="dropdown-item" href="{{url('lang/en')}}" data-language="en">
                <i class="flag-icon flag-icon-us mr-50"></i> English
              </a>
              <a class="dropdown-item" href="{{url('lang/fr')}}" data-language="fr">
                <i class="flag-icon flag-icon-fr mr-50"></i> French
              </a>
              <a class="dropdown-item" href="{{url('lang/de')}}" data-language="de">
                <i class="flag-icon flag-icon-de mr-50"></i> German
              </a>
              <a class="dropdown-item" href="{{url('lang/pt')}}" data-language="pt">
                <i class="flag-icon flag-icon-pt mr-50"></i> Portuguese
              </a>
            </div>
          </li>
          <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>



          <li class="dropdown dropdown-user nav-item">
            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
              <div class="user-nav d-sm-flex d-none">
                <span class="user-name">{{Auth::user()->name}}</span>
                <span class="user-status text-muted">Available</span>
              </div>
              <span><img class="round" src="{{asset('images/portrait/small/avatar-s-11.jpg')}}" alt="avatar" height="40" width="40"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right pb-0">
              <a class="dropdown-item" href="{{asset('app-email')}}">
                <i class="bx bx-envelope mr-50"></i> My Inbox
              </a>
              <a class="dropdown-item" href="{{asset('app-todo')}}">
                <i class="bx bx-check-square mr-50"></i> Task</a>
                <a class="dropdown-item" href="{{asset('app-chat')}}"><i class="bx bx-message mr-50"></i> Chats
              </a>
              <div class="dropdown-divider mb-0"></div>
              <button class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="bx bx-power-off mr-50"></i> Logout
              </button>
              <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
