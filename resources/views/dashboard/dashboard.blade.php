@extends('container.container')
@section('container')
<link rel="stylesheet" href="{{ asset('css/dashboard.css')}}">
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
    @endsection
