@extends('frontend.template')
@section('title')
Gallery
@endsection
@section('content')
    <!-- banner -->
	<section class="banner-1">
	</section>
	<!-- //banner -->
	<!---728x90--->

	<!--gallery-->
	<section class="gallery py-5">
		<div class="container py-md-4 mt-md-3">
			<h2 class="heading-agileinfo">Gallery<span>Business information an organisation</span></h2>
			<span class="w3-line black"></span>
			<!---728x90--->

			<div class="row gallery-info mt-md-5 pt-5">
				<div class="col-md-3 col-sm-6 gallery-grids">
					<a href="{{asset('public/frontend/images/g3.jpg')}}" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('public/frontend/images/g3.jpg')}}" alt="" class="img-fluid zoom-img">
					</a>
				</div>
				<div class="col-md-3 col-sm-6 gallery-grids">
					<a href="{{asset('public/frontend/images/g4.jpg')}}" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('public/frontend/images/g4.jpg')}}" alt="" class="img-fluid zoom-img">
					</a>
				</div>
				<div class="col-md-3 col-sm-6 gallery-grids">
					<a href="{{asset('public/frontend/images/g5.jpg')}}" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('public/frontend/images/g5.jpg')}}" alt="" class="img-fluid zoom-img">
					</a>
				</div>
				<div class="col-md-3 col-sm-6 gallery-grids">
					<a href="{{asset('public/frontend/images/g6.jpg')}}" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('public/frontend/images/g6.jpg')}}" alt="" class="img-fluid zoom-img">
					</a>
				</div>
				<div class="col-md-3 col-sm-6 gallery-grids">
					<a href="{{asset('public/frontend/images/g7.jpg')}}" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('public/frontend/images/g7.jpg')}}" alt="" class="img-fluid zoom-img">
					</a>
				</div>
				<div class="col-md-3 col-sm-6 gallery-grids">
					<a href="{{asset('public/frontend/images/g8.jpg')}}" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('public/frontend/images/g8.jpg')}}" alt="" class="img-fluid zoom-img">
					</a>
				</div>
				<div class="col-md-3 col-sm-6 gallery-grids">
					<a href="{{asset('public/frontend/images/g9.jpg')}}" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('public/frontend/images/g9.jpg')}}" alt="" class="img-fluid zoom-img">
					</a>
				</div>
				<div class="col-md-3 col-sm-6 gallery-grids">
					<a href="{{asset('public/frontend/images/g1.jpg')}}" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('public/frontend/images/g1.jpg')}}" alt="" class="img-fluid zoom-img">
					</a>
				</div>
				<div class="col-md-3 col-sm-6 gallery-grids">
					<a href="{{asset('public/frontend/images/g2.jpg')}}" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('public/frontend/images/g2.jpg')}}" alt="" class="img-fluid zoom-img">
					</a>
				</div>
				<div class="col-md-3 col-sm-6 gallery-grids">
					<a href="{{asset('public/frontend/images/g3.jpg')}}" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('public/frontend/images/g3.jpg')}}" alt="" class="img-fluid zoom-img">
					</a>
				</div>
				<div class="col-md-3 col-sm-6 gallery-grids">
					<a href="{{asset('public/frontend/images/g4.jpg')}}" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('public/frontend/images/g4.jpg')}}" alt="" class="img-fluid zoom-img">
					</a>
				</div>
				<div class="col-md-3 col-sm-6 gallery-grids">
					<a href="{{asset('public/frontend/images/g5.jpg')}}" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('public/frontend/images/g5.jpg')}}" alt="" class="img-fluid zoom-img">
					</a>
				</div>
			</div>
			<script src="{{asset('public/frontend/js/lightbox-plus-jquery.min.js')}}"></script>
		</div>
</section>

@endsection