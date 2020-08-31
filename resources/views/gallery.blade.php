@extends('master')
@section('body')
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
        <li class="drop-down"><a href="/rubber_sheets">Products</a>
          <ul>
            <li><a href="/rubber_sheets">Rubber Sheets</a></li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
          </ul>
        </li>
        <li><a href="/services">Services</a></li>
        <li class="active"><a href="/gallery">Gallery</a></li>
        <li><a href="/contact">Contact Us</a></li>

      </ul>
    </nav><!-- .nav-menu -->

  </div>
</header><!-- End Header -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Gallery</h2>
      <h3>Check our <span>Gallery</span></h3>
      <p>You can view the images of our best quality products.</p>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 1</h4>
          <p>App</p>
          <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Web 3</h4>
          <p>Web</p>
          <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 2</h4>
          <p>App</p>
          <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Card 2</h4>
          <p>Card</p>
          <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Web 2</h4>
          <p>Web</p>
          <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 3</h4>
          <p>App</p>
          <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Card 1</h4>
          <p>Card</p>
          <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Card 3</h4>
          <p>Card</p>
          <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Web 3</h4>
          <p>Web</p>
          <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Section -->
</main>

@endsection
