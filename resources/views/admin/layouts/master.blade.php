<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" href="{{ mix('css/admin.css') }}" />


<title>
  @if(View::hasSection('title'))
    App - @yield('title')
  @else
    App
  @endif
</title>
</head>
<body>

<div id="overlay" class="hidden"></div>

{{-- TOPNAV --}}
<nav id="topnav" style="display: flex; flex-direction:row; justify-content: space-between; align-items:center;" >
  <div style="display: flex; flex-direction:row;">
    <div class="hide-for-desktop" style="margin-right:10px;">
    <a id="btnHamburger" class="cursor-pointer" style="color:rgb(0, 0, 0);" >
      <i class="bi bi-list"></i>
    </a>
    </div>
    <div>
      <a href="" class="b">App</a>
    </div>
  </div>

  <div>
    <div class="dropdown">
      <a href="#" class="" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <div style="width: 32px; height: 32px; background-color: #808080; border-radius: 50%;"></div>
      </a>
      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">        
        <li>
          <a 
            class="dropdown-item" 
            href="#"             
            onclick="
              event.preventDefault();
              var result = confirm('Are you sure want to logout?');
              if (result == true){
                document.getElementById('logout-form').submit();
              }
            "    
          >
            Logout
          </a>
        </li>
      </ul>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
  </nav>
</nav>


{{-- WRAPPER --}}
<div id="wrapper">

{{-- SIDEBAR --}}
<div class="sidebar navbar-nav">

<section >SECTION 1</section>

<?php

$section_01_links = [
    [
      'title'=>'Dashboard',
      'link' => '/admin/dashboard',
      'active_path' => 'admin/dashboard',
      'icon_class' => 'bi bi-house-door mr-2'
    ],
    [
      'title'=>'MasterDetail',
      'link' => '/admin/masterdetail',
      'active_path' => 'admin/masterdetail',
      'icon_class' => 'bi bi-cpu-fill mr-2'
    ],
    [
      'title'=>'React',
      'link' => '/admin/react',
      'active_path' => 'admin/react',
      'icon_class' => 'bi bi-cpu-fill mr-2'
    ],
    [
      'title'=>'Tasks',
      'link' => '/admin/tasks',
      'active_path' => 'admin/tasks',
      'icon_class' => 'bi bi-cpu-fill mr-2'
    ],
]
?>

<ul class="navbar-nav">
  @foreach ($section_01_links as $link)
  <li class="nav-item {{ ( Request::is( $link['active_path'] , $link['active_path'].'/*' ) ? 'active' : '') }}" >
    <a href="{{$link['link']}}" class="nav-link">
      <i class="{{$link['icon_class']}}" style="margin-bottom:-15px;margin-right:3px;"></i>
      {{ $link['title'] }}
    </a>
  </li>
  @endforeach
</ul>

</div>

<div id="content-wrapper" >

@yield('content')

</div>
</div>

<script src="{{ mix('/js/admin.js') }}" ></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>

