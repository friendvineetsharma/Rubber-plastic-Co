@if(isset(Auth::user()->email))
@extends('master')
@section('body')
<style>
  .card{
    box-shadow: 2px 2px 10px #cccccc;
  }
  .card-img-top{
    cursor: pointer;
  }
  h6{
    color: #7733ff;
  }
</style>
<main id="main">
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">

    <h1 class="logo mr-auto"><a href="index.html">Sai Rubber & Plastic Co<span>.</span></a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li><a href="/">Home</a></li>
        <li class="drop-down active"><a href="/rubber_sheets">Products</a>
          <ul>
            <li><a href="/rubber_sheets">Rubber Sheets</a></li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
          </ul>
        </li>
        <li><a href="/services">Services</a></li>
        <li><a href="/gallery">Gallery</a></li>
        <li><a href="/contact">Contact Us</a></li>

      </ul>
    </nav><!-- .nav-menu -->

  </div>
</header><!-- End Header -->

<!-- ======= product Section ======= -->

<section id="rubber_sheets" class="services">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Products</h2>
      <h3>Check our <span>Rubber Sheets</span></h3>
      <p>With the help of our hardworkers, we are able to provide the best Products. All Rubber Sheets are here.</p>
    </div>

    <div class="row row-cols-1 row-cols-md-3">

  @foreach($data as $i)
  <div class="col mb-4">
    <!-- Card -->
    <div class="card h-100"data-aos="zoom-in" data-aos-delay="300" >

      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="{{ asset('assets\img\rubbersheets\\' . $i->rsimg1) }}"
          alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!--Card content-->
      <div class="card-body">

        <!--Title-->
        <h4 class="card-title">{{ $i->rsname }}</h4>
        <!--Text-->
        <p class="card-text">
          {{ $i->rsintro }}
        </p>
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
       <form method="post" action="{{ url('/card') }}">
         {{ csrf_field() }}
        <div class="form-group">
          <input type="hidden" name="id" class="form-control" value="{{ $i->id }}"
        </div>
        <div class="form-group">
         <input type="submit" class="btn btn-outline-primary" value="Read More" />
        </div>
       </form>
       
       <form method="post" action="{{ url('/del') }}">
         {{ csrf_field() }}
        <div class="form-group">
          <input type="hidden" name="id" class="form-control" value="{{ $i->id }}"
        </div>
        <div class="form-group">
         <input type="submit" class="btn btn-outline-primary" value="Delete" />
        </div>
       </form>

      </div>

    </div>
    <!-- Card -->
  </div>
  @endforeach

</div>
</div>
</section>
<!-- End Services Section -->
<a href="/add_rs"><button type="button" class="btn btn-outline-success btn-lg btn-block">Add Rubber Sheets</button></a>
<div class="my-5"></div>
</main>

@endsection
@else
 <script>window.location = "/main";</script>
@endif
