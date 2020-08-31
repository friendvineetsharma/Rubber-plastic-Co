@extends('master')
@section('body')
<style>
p{
  text-align: justify;
}
</style>
<link rel="stylesheet" href="https://colorlib.com/preview/theme/aranoz/css/lightslider.min.css">

<link rel="stylesheet" href="https://colorlib.com/preview/theme/aranoz/css/all.css">

<link rel="stylesheet" href="https://colorlib.com/preview/theme/aranoz/css/flaticon.css">
<link rel="stylesheet" href="https://colorlib.com/preview/theme/aranoz/css/themify-icons.css">

<link rel="stylesheet" href="https://colorlib.com/preview/theme/aranoz/css/magnific-popup.css">

<link rel="stylesheet" href="https://colorlib.com/preview/theme/aranoz/css/style.css">

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

@foreach($data as $i)
<section class="services">
  <div class="container">
    <div class="container">
    <div class="row s_product_inner justify-content-between">
    <div class="col-lg-7 col-xl-7">
    <div data-thumb="assets\img\rubber-sheets\natural.jpg">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-aos="zoom-in">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('assets\img\rubbersheets\\' . $i->rsimg1)}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets\img\rubbersheets\\' . $i->rsimg2)}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets\img\rubbersheets\\' . $i->rsimg3)}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
    </div>
    <div class="col-lg-5 col-xl-4" data-aos="fade-left">
    <div class="s_product_text">
    <h5><a href="/">Home</a> <span>|</span><a href="/rubber_sheets"> Products</a></h5>
    <h3>{{ $i->rsname }}</h3>
    <h2>INR {{ $i->rsprice }}</h2>
    <ul class="list">
    <li>
    <a class="active" href="#">
    <span>Category</span> : {{ $i->rscategory }}</a>
     </li>
    <li>
    <a href="#"> <span>Availibility</span> : In Stock</a>
    </li>
    </ul>
    <p>
    {{ $i->rsintro }}
    </p>
    <div class="card_area d-flex justify-content-between align-items-center">
    <a href="\contact" class="btn_3">Proceed</a>
    </div>
    </div>
    </div>
    </div>
    </div>


    <section class="product_description_area" data-aos="fade-up"data-aos-delay="300">
    <div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Specification</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Technical Specification</a>
    </li>
    </ul>
    <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <p>
    {{ $i->rsdescription }}
  </p>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <div class="table-responsive">
    <table class="table">
    <tbody>
    <tr>
    <td>
    <h5>Width</h5>
    </td>
    <td>
    <h5>{{ $i->rswidth }}</h5>
    </td>
    </tr>
    <tr>
    <td>
    <h5>Lenght</h5>
    </td>
    <td>
    <h5>{{ $i->rslenght }}</h5>
    </td>
    </tr>
    <tr>
    <td>
    <h5>Thickness</h5>
    </td>
    <td>
    <h5>{{ $i->rsthickness }}</h5>
    </td>
    </tr>
    <tr>
    <td>
    <h5>Reinforcement</h5>
    </td>
    <td>
    <h5>{{ $i->rsreinforcement }}</h5>
    </td>
    </tr>
    <tr>
    <td>
    <h5>Colour</h5>
    </td>
    <td>
    <h5>{{ $i->rscolor }}</h5>
    </td>
    </tr>
    <tr>
    <td>
    <h5>Application</h5>
    </td>
    <td>
    <h5>{{ $i->rsapplication }}</h5>
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
      <div class="table-responsive">
      <table class="table">
      <tbody>
      <tr>
      <td>
      <h5>Specific Gravity (gm / cm 3)</h5>
      </td>
      <td>
      <h5>{{ $i->rsgravity }}</h5>
      </td>
      </tr>
      <tr>
      <td>
      <h5>Hardness (Shore A, ±5)</h5>
      </td>
      <td>
      <h5>{{ $i->rshardness }}</h5>
      </td>
      </tr>
      <tr>
      <td>
      <h5>Tensile Strength, min (kg / cm 2 )</h5>
      </td>
      <td>
      <h5>{{ $i->rstensile }}</h5>
      </td>
      </tr>
      <tr>
      <td>
      <h5>Elongation at break, min(%)</h5>
      </td>
      <td>
      <h5>{{ $i->rselongation }}</h5>
      </td>
      </tr>
      <tr>
      <td>
      <h5>Compression Set , at 70°C for 22 hrs (%), min</h5>
      </td>
      <td>
      <h5>{{ $i->rscompression }}</h5>
      </td>
      </tr>
      <tr>
      <td>
      <h5>Service Temperature Range</h5>
      </td>
      <td>
      <h5>{{ $i->rstemp }}</h5>
      </td>
      </tr>
      </tbody>
      </table>
      </div>
    </div>
    </div>
    </div>
    </section>
    @endforeach

  </div>
</section>
@endsection
