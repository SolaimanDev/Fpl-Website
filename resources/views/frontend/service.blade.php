@extends('frontend.template')
@section('title')
Services
@endsection
@section('content')
	<section class="banner-1">
	</section>
	<!-- //banner -->
	<!---728x90--->

		<!-- /services -->
<section class="what_you w3-about py-5">
		<div class="container py-md-4 mt-md-3">
			<h2 class="heading-agileinfo">Services <span>Business Information An Organisation</span></h2>
			<span class="w3-line black"></span>
			<div class="row about-info-grids mt-md-5 pt-5">
				<div class="col-md-4 about-info about-info1">
					<i class="far fa-gem"></i>
					<h4>Loan System</h4>
					<div class="h4-underline"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
				</div>
				<div class="col-md-4 about-info about-info2">
					<i class="fas fa-book"></i>
					<h4>Saving System</h4>
					<div class="h4-underline"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
				</div>
				<div class="col-md-4 about-info about-info3">
					<i class="fab fa-codepen"></i>
					<h4> FDR System</h4>
					<div class="h4-underline"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
				</div>
			</div>
			<div class="bord"></div>
			<div class="row about-info-grids">
				<div class="col-md-4 about-info about-info1">
					<i class="fas fa-university"></i>
					<h4>Invesment Planing</h4>
					<div class="h4-underline"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
				</div>
				<div class="col-md-4 about-info about-info2">
					<i class="fas fa-folder"></i>
					<h4>Client Management</h4>
					<div class="h4-underline"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
				</div>
				<div class="col-md-4 about-info about-info3">
					<i class="fas fa-graduation-cap"></i>
					<h4>Business Solutions</h4>
					<div class="h4-underline"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
				</div>
			</div>
	</div>
</section>
<!---728x90--->

<!-- //services -->
<!-- news -->
	<section class="wthree-row w3-about py-5">
		<div class="container py-md-4 mt-md-3">
			<h3 class="heading-agileinfo">Services Overview <span>Business Information An Organisation</span></h3>
			<span class="w3-line black"></span>
			<div class="card-deck mt-md-5 pt-5">
				  <div class="card">
					<img src="{{asset('public/frontend/images/g7.jpg')}}" class="img-fluid" alt="Card image cap">
					<div class="card-body w3ls-card">
					  <h5 class="card-title">Client Management</h5>
					  <p class="card-text mb-3 ">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
					</div>
					
				  </div>
				  <div class="card">
					<img src="{{asset('public/frontend/images/g6.jpg')}}" class="img-fluid" alt="Card image cap">
					<div class="card-body w3ls-card">
					  <h5 class="card-title">Invesment Planing</h5>
					   <p class="card-text mb-3 ">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
					</div>
					
				  </div>
				  <div class="card">
					<img src="{{asset('public/frontend/images/g8.jpg')}}" class="img-fluid" alt="Card image cap">
					<div class="card-body w3ls-card">
					  <h5 class="card-title">Business Solutions</h5>
					   <p class="card-text mb-3">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
					</div>
					
				  </div>
				</div>
            </div>
        </section>
        @endsection
