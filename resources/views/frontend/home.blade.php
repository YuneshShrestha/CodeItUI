@extends('frontend.app')
{{-- Top navbar --}}
@section('top_navbar')
    {{--Display for Large device only --}}
    <div class="hero_top_navbar container py-2 d-lg-block d-none">
        <div class="row px-4">
            <div class="col-6">
                <h4 class="text-white">LOGO</h4>
            </div>
            <div class="col-6 d-flex justify-content-around">
                {{-- Location --}}
            <div class="row">
                <div class="col-2">
                    <i class="text-white fas fa-map-marker-alt"></i>
                </div>
                <div class="col-10">
                    <p class="text-white">Prithvi Path, Dharan</p>
                </div>
            </div>
            {{-- Email --}}
            <div class="row">
                    <div class="col-2">
                        <i class="text-white fas fa-envelope"></i>
                    </div>
                    <div class="col-10">
                        <p class="text-white">codeit@gmail.com</p>
                    </div>
                </div>
                {{-- Call --}}
                <div class="row">
                    <div class="col-2">
                        <i class="text-white fas fa-phone-alt"></i>
                    </div>
                    <div class="col-10">
                        <p class="text-white">98000000000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
{{-- Navbar --}}
@section('navbar')
    <div class="d-none d-lg-block container-lg hero_navbar">
        {{-- For large device --}}
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger rounded-pill">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Courses</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link">Blogs</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
    </div>
    {{-- For small device --}}
    <div  class="d-block d-lg-none hero_navbar">
      <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Courses</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link">Blogs</a>
                </li>
              </ul>
            </div>
          </div>
      </nav>
    </div>
@endsection
{{-- welcome --}}
@section('welcome')
    <div class="hero_welcome">
       <div class="container px-4">
            <h1>Welcome To CodeIT</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit debitis doloremque ducimus incidunt rerum consequatur maxime.</p>
       </div>
    </div>
@endsection