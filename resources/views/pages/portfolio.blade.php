@extends('master')

@section('content')

<section id="gallery">
   <div class="container">
      <h1 class="center">Portfolio</h1>
      <div class="row">

		<div class="col-md-4">
         <img class="gallery" src=" {{ asset('images/portfolio-img2.jpg') }}" class="img-responsive">
      </div>
      <div class="col-md-4">
         <img class="gallery" src="{{ asset('images/portfolio-img1.jpg') }}" class="img-responsive">
      </div>
      <div class="col-md-4">
         <img class="gallery" src="{{ asset('images/portfolio-img3.jpg') }}" class="img-responsive">
      </div>
      <div class="col-md-4">
         <img class="gallery" src="{{ asset('images/portfolio-img4.jpg') }}" class="img-responsive">
      </div>
      <div class="col-md-4">
         <img class="gallery" src="{{ asset('images/portfolio-img5.jpg') }}" class="img-responsive">
      </div>
      <div class="col-md-4">
         <img class="gallery" src="{{ asset('images/portfolio-img6.jpg') }}" class="img-responsive">
      </div>
      <div class="col-md-4">
         <img class="gallery" src="{{ asset('images/portfolio-img2.jpg') }}" class="img-responsive">
      </div>
      <div class="col-md-4">
         <img class="gallery" src="{{ asset('images/portfolio-img1.jpg') }}" class="img-responsive">
      </div>
      <div class="col-md-4">
         <img class="gallery" src="{{ asset('images/portfolio-img3.jpg') }}" class="img-responsive">
      </div>
      <div class="col-md-4">
         <img class="gallery" src="{{ asset('images/portfolio-img4.jpg') }}" class="img-responsive">
      </div>
      <div class="col-md-4">
         <img class="gallery" src="{{ asset('images/portfolio-img5.jpg') }}" class="img-responsive">
      </div>
      <div class="col-md-4">
         <img class="gallery" src="{{ asset('images/portfolio-img6.jpg') }}" class="img-responsive">
      </div>
      <div class="col-md-4">
         <img class="gallery" src="{{ asset('images/portfolio-img2.jpg') }}" class="img-responsive">
      </div>
      <div class="col-md-4">
         <img class="gallery" src="{{ asset('images/portfolio-img1.jpg') }}" class="img-responsive">
      </div>
      <div class="col-md-4">
         <img class="gallery" src="{{ asset('images/portfolio-img3.jpg') }}" class="img-responsive">
      </div>
      
		<div class="clearfix"></div>

      </div>
   </div>
</section>



@include('sections.comment')

@endsection