@extends('site.master')
@section('titel','Home | '.env('APP_NAME'))
@section('content')

@php
    $name = 'name_'.app()->currentLocale();
    $comment = 'comment_'.app()->currentLocale();
    $job = 'job_'.app()->currentLocale();
    $questionn = 'question_'.app()->currentLocale();
    $answer = 'answer_'.app()->currentLocale();
@endphp

@include('site.Hero')

  <main id="main">

    @include('site.About')

    @include('site.Services')

    @include('site.whyUs')

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="zoom-out">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3 class="cta-title">Call To Action</h3>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!--  End Call To Action Section -->

     @include('site.Features')

    @include('site.Portfolio')

    @include('site.Testimonials')

    @include('site.Team')

    @include('site.Clients')

   @include('site.Pricing')

   @include('site.FAQ')

  </main><!-- End #main -->

@stop
