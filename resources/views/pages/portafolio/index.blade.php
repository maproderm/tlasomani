@extends('index')
@section('title','Portafolio | Tlasomani')
@section('content')

<div class="mb-120 d-block"></div>
<!-- Portfolio Area-->
<div class="saasbox-portfolio-area pt-120 pb-120">
    <div class="container">
      <div class="filters-button-group text-center mb-70">
        <button class="position-relative btn btn-primary btn-sm mx-1 mb-2 active" type="button" data-filter="*">All</button>
        <button class="position-relative btn btn-primary btn-sm mx-1 mb-2" type="button" data-filter=".branding">Branding</button>
        <button class="position-relative btn btn-primary btn-sm mx-1 mb-2" type="button" data-filter=".design">Design</button>
        <button class="position-relative btn btn-primary btn-sm mx-1 mb-2" type="button" data-filter=".marketing">Marketing</button>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row saasbox-portfolio-filter g-3">
        <!-- Single Portfolio Area-->
        <div class="col-12 col-sm-6 col-lg-4 portfolio-item branding">
          <div class="single-portfolio-area"><img src="img/bg-img/p13.jpg" alt="">
            <!-- Ovarlay Content -->
            <div class="overlay-content">
              <div class="portfolio-title">
                <h6 class="mb-0">Portfolio Title</h6>
              </div>
              <div class="portfolio-links"><a class="portfolio-img-zoom" href="img/bg-img/p13.jpg"><i class="bi bi-arrows-fullscreen"></i></a><a href="portfolio-details-one.html"><i class="bi bi-link-45deg"></i></a></div>
            </div>
          </div>
        </div>
        <!-- Single Portfolio Area-->
        <div class="col-12 col-sm-6 col-lg-4 portfolio-item branding">
          <div class="single-portfolio-area"><img src="img/bg-img/p14.jpg" alt="">
            <!-- Ovarlay Content -->
            <div class="overlay-content">
              <div class="portfolio-title">
                <h6 class="mb-0">Portfolio Title</h6>
              </div>
              <div class="portfolio-links"><a class="portfolio-img-zoom" href="img/bg-img/p14.jpg"><i class="bi bi-arrows-fullscreen"></i></a><a href="portfolio-details-one.html"><i class="bi bi-link-45deg"></i></a></div>
            </div>
          </div>
        </div>
        <!-- Single Portfolio Area-->
        <div class="col-12 col-sm-6 col-lg-4 portfolio-item design">
          <div class="single-portfolio-area"><img src="img/bg-img/p15.jpg" alt="">
            <!-- Ovarlay Content -->
            <div class="overlay-content">
              <div class="portfolio-title">
                <h6 class="mb-0">Portfolio Title</h6>
              </div>
              <div class="portfolio-links"><a class="portfolio-img-zoom" href="img/bg-img/p15.jpg"><i class="bi bi-arrows-fullscreen"></i></a><a href="portfolio-details-one.html"><i class="bi bi-link-45deg"></i></a></div>
            </div>
          </div>
        </div>
        <!-- Single Portfolio Area-->
        <div class="col-12 col-sm-6 col-lg-4 portfolio-item design">
          <div class="single-portfolio-area"><img src="img/bg-img/p16.jpg" alt="">
            <!-- Ovarlay Content -->
            <div class="overlay-content">
              <div class="portfolio-title">
                <h6 class="mb-0">Portfolio Title</h6>
              </div>
              <div class="portfolio-links"><a class="portfolio-img-zoom" href="img/bg-img/p16.jpg"><i class="bi bi-arrows-fullscreen"></i></a><a href="portfolio-details-one.html"><i class="bi bi-link-45deg"></i></a></div>
            </div>
          </div>
        </div>
        <!-- Single Portfolio Area-->
        <div class="col-12 col-sm-6 col-lg-4 portfolio-item marketing">
          <div class="single-portfolio-area"><img src="img/bg-img/p17.jpg" alt="">
            <!-- Ovarlay Content -->
            <div class="overlay-content">
              <div class="portfolio-title">
                <h6 class="mb-0">Portfolio Title</h6>
              </div>
              <div class="portfolio-links"><a class="portfolio-img-zoom" href="img/bg-img/p17.jpg"><i class="bi bi-arrows-fullscreen"></i></a><a href="portfolio-details-one.html"><i class="bi bi-link-45deg"></i></a></div>
            </div>
          </div>
        </div>
        <!-- Single Portfolio Area-->
        <div class="col-12 col-sm-6 col-lg-4 portfolio-item marketing">
          <div class="single-portfolio-area"><img src="img/bg-img/p18.jpg" alt="">
            <!-- Ovarlay Content -->
            <div class="overlay-content">
              <div class="portfolio-title">
                <h6 class="mb-0">Portfolio Title</h6>
              </div>
              <div class="portfolio-links"><a class="portfolio-img-zoom" href="img/bg-img/p18.jpg"><i class="bi bi-arrows-fullscreen"></i></a><a href="portfolio-details-one.html"><i class="bi bi-link-45deg"></i></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="load-more-btn text-center mt-5"><a class="btn btn-primary" href="#">Load More</a></div>
        </div>
      </div>
    </div>
  </div>
<div class="mb-120 d-block"></div>

@endsection
