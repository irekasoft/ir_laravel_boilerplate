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

{{-- TOPNAV --}}
<nav id="topnav">
  
</nav>

{{-- WRAPPER --}}
<div id="wrapper">

{{-- SIDEBAR --}}
<div class="sidebar navbar-nav">


<section >SECTION 1</section>  

<ul class="navbar-nav">
  <li class="nav-item active">
    <a href="" class="nav-link">
      Dashboard
    </a>
  </li>
  <li class="nav-item ">
    <a href="" class="nav-link">
      ABC
    </a>
  </li>
  <li class="nav-item ">
    <a href="" class="nav-link">
      ABC
    </a>
  </li>
</ul>

</div>

<div class="main-content">

@yield('content')

</div>    
</div>
    
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>    
</body>
</html>

