<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" href="{{ asset('css/admin.css') }}" />

<!-- CSS only -->
<link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
  rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
  crossorigin="anonymous"
/>

<title>App</title>
</head>
<body>

{{-- <div class="overlay"></div> --}}

{{-- TOPNAV --}}
<nav id="topnav">
  <div class="hide-for-desktop">
    <a id="btnHamburger" class="cursor-pointer" style="color:white;" >Menu</a>

  </div>

</nav>


{{-- WRAPPER --}}
<div id="wrapper">

{{-- SIDEBAR --}}
<div class="sidebar navbar-nav can-fade">


<section >SECTION 1</section>

<ul class="navbar-nav">
  <li class="nav-item {{ (Request::is('admin/dashboard', 'admin/dashboard/*') ? 'active' : '') }}">
    <a href="/admin/dashboard" class="nav-link">
      <i class="bi bi-house-door mr-2" style="margin-bottom:-15px;margin-right:3px;"></i>
      Dashboard
    </a>
  </li>
  <li class="nav-item {{ (Request::is('admin/masterdetail', 'admin/masterdetail/*') ? 'active' : '') }}">
    <a href="/admin/masterdetail" class="nav-link">
      <i class="bi bi-cpu-fill mr-2"></i>
      MasterDetail
    </a>
  </li>
  <li class="nav-item {{ (Request::is('admin/react', 'admin/react/*') ? 'active' : '') }}">
    <a href="/admin/react" class="nav-link">
      <i class="bi bi-cpu-fill mr-2"></i>
      React
    </a>
  </li>

  <li class="nav-item {{ (Request::is('admin/tasks', 'admin/tasks/*') ? 'active' : '') }}">
    <a href="/admin/tasks" class="nav-link">
      <i class="bi bi-cpu-fill mr-2"></i>
      Tasks
    </a>
  </li>

</ul>

</div>

<div id="content-wrapper">

@yield('content')

</div>
</div>


<script src="{{ asset('/js/admin.js') }}" ></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>

