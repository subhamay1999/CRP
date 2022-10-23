@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/container.css')}}">
<div class="sidebar">
    <div class="logo-details">
    <img src="{{ asset('assets\logo.jpg')}}">
      <span class="logo_name">CRP</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="{{url('/user')}}" class="active">
          <i class="fas fa-home"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="{{url('/user/car')}}">
          <i class="fas fa-taxi"></i>
            <span class="links_name">Car list</span>
          </a>
        </li>
        <li>
          <a href="{{url('/user/booking')}}">
          <i class="fas fa-shopping-cart"></i>
            <span class="links_name">Booking list</span>
          </a>
        </li>
        <li>
          <a href="#">
          <i class="fas fa-address-card"></i>
            <span class="links_name">Address</span>
          </a>
        </li>
        <li>
          <a href="#">
          <i class="fas fa-cog"></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li>
          <a href="#">
          <i class="fas fa-id-badge"></i>
            <span class="links_name">Contact Us</span>
          </a>
        </li>
        <li class="log_out">
          <a href="#">
          <i class="fas fa-sign-out-alt"></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
      <i class="fas fa-home bx-menu sidebarBtn"></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class="fas fa-search"></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <i class="fas fa-user-circle"></i>
        <span class="admin_name">Subhamay Paria</span>
      </div>
    </nav>
    <div>
    @yield('container')
    </div>
    </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>
 @endsection
