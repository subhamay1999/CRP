@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="css/dashboard.css">
<div class="sidebar">
    <div class="logo-details">
    <img src="assets/logo.jpg">
      <span class="logo_name">CRP</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
          <i class="fas fa-home"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
          <i class="fas fa-taxi"></i>
            <span class="links_name">Car list</span>
          </a>
        </li>
        <li>
          <a href="#">
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

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Booking</div>
            <div class="number">50</div>
            <div class="indicator">
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class="fas fa-taxi"></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total KM Travel</div>
            <div class="number">38,876</div>
            <div class="indicator">
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class="fas fa-taxi two"></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Upcoming Travel</div>
            <div class="number">2</div>
            <div class="indicator">
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class="fas fa-taxi three"></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Travel</div>
            <div class="number">10</div>
            <div class="indicator">
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class="fas fa-taxi four"></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Recent Travel</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">Date</li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
            </ul>
            <ul class="details">
            <li class="topic">Customer</li>
            <li><a href="#">Subhamay paria</a></li>
            <li><a href="#">Subhamay paria</a></li>
            <li><a href="#">Subhamay paria</a></li>
            <li><a href="#">Subhamay paria</a></li>
            <li><a href="#">Subhamay paria</a></li>
          </ul>
          <ul class="details">
            <li class="topic">Destination</li>
            <li><a href="#">Kolkata</a></li>
            <li><a href="#">Kolkata</a></li>
            <li><a href="#">Kolkata</a></li>
            <li><a href="#">Kolkata</a></li>
            <li><a href="#">Kolkata</a></li>
          </ul>
          <ul class="details">
            <li class="topic">KM</li>
            <li><a href="#">100</a></li>
            <li><a href="#">100</a></li>
            <li><a href="#">100</a></li>
            <li><a href="#">100</a></li>
            <li><a href="#">100</a></li>
          </ul>
          </div>
          <div class="button">
            <a href="#">See All</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title">Top Travel Distance</div>
          <ul class="top-sales-details">
            <li>
              <a href="#">
                <!--<img src="images/jeans.jpg" alt="">-->
                <span class="product">Kolkata</span>
              </a>
              <span class="price">100</span>
            </li>
            <li>
              <a href="#">
                <!--<img src="images/jeans.jpg" alt="">-->
                <span class="product">Kolkata</span>
              </a>
              <span class="price">100</span>
            </li>
            <li>
              <a href="#">
                <!--<img src="images/jeans.jpg" alt="">-->
                <span class="product">Kolkata</span>
              </a>
              <span class="price">100</span>
            </li>
            <li>
              <a href="#">
                <!--<img src="images/jeans.jpg" alt="">-->
                <span class="product">Kolkata</span>
              </a>
              <span class="price">100</span>
            </li>
            <li>
              <a href="#">
                <!--<img src="images/jeans.jpg" alt="">-->
                <span class="product">Kolkata</span>
              </a>
              <span class="price">100</span>
            </li>
          </ul>
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
