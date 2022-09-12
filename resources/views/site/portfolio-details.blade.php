@extends('site.master')
@section('titel','PortfolioDetaile | '.env('APP_NAME'))
@section('content')


@php
    $name = 'name_'.app()->currentLocale();
    $description ='description_'.app()->currentLocale();
@endphp

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ route('site.index') }}">Home</a></li>
          <li>Portfolio Details</li>
        </ol>
        <h2>Portfolio Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                @foreach ($detail->PortfolioDetaileImages  as $image)
                  <div class="swiper-slide">
                        <img src="{{ asset('image/detaileImages/'.$image->path) }}" alt="">
                   </div>
                @endforeach


                {{--  <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-details-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-details-3.jpg" alt="">
                </div>  --}}

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: {{ $detail->PortfolioCategry->$name }}</li>
                <li><strong>Client</strong>: {{ $detail->client->$name }}</li>
                <li><strong>Project date</strong>: {{ $detail->project_Date }}</li>
                <li><strong>Project URL</strong>: <a href="{{ $detail->project_URL }}">{{ $detail->project_URL }}</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>This is an example of portfolio detail</h2>
              <p>
                {!! $detail->$description !!}
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

 @stop
