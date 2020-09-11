@extends('frontend.template')
@section('title')
Home
@endsection

@section('content')

    <!-- banner -->
	<section class="banner">
		<div class="callbacks_container">
			<ul class="rslides" id="slider3">
			@foreach($slider as $slider)
            	<li>
                    
					<div class="slider-info bg1"   style="
                    
                    background: url({{asset('public/uploads/sliders/'.$slider->slider_image)}})no-repeat;
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;
                    -ms-background-size: cover;
                    background-size: cover;
                    height: 45vw;
                    "
                     >
                    
						<div class="banner-text container">
							<h4 class="movetxt text-left mb-3 agile-title text-capitalize">{{$slider->slider_title}}</h4>
							
						</div>
					</div>
				</li>
                 @endforeach
				
			</ul>
		</div>
	</section>
	<!-- //banner -->
	<!---728x90--->

	<!-- details -->
	<section class="details-books py-5">
		<div class="container py-md-4 mt-md-3">
		<h2 class="heading-agileinfo">Welcome<span>Business information an organisation</span></h2>
			<span class="w3-line black"></span>
			<div class="row mt-md-5 pt-5">
			<div class="col-lg-6 agileits_updates_grid_right">
					<div id="accordion">
					  <div class="card w3l-acd">
						<div class="card-header wl3_head" id="headingOne">
						  <h5 class="mb-0">
							<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							 <span class="fa fa-check mr-2" aria-hidden="true"></span>
									Experience A Ranking Factor?
							</button>
						  </h5>
						</div>
						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
						  <div class="card-body">
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
						  </div>
						</div>
					  </div>
					  <div class="card w3l-acd">
						<div class="card-header wl3_head" id="headingTwo">
						  <h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							 <span class="fa fa-check mr-2" aria-hidden="true"></span>
									 Global supply Chain Solutions
							</button>
						  </h5>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						  <div class="card-body">
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
						  </div>
						</div>
					  </div>
					  <div class="card w3l-acd">
						<div class="card-header wl3_head" id="headingThree">
						  <h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							 <span class="fa fa-check mr-2" aria-hidden="true"></span>
									24 Hours - Technical Support
							</button>
						  </h5>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
						  <div class="card-body">
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
						  </div>
						</div>
					  </div>
					</div>
			</div>
			<div class="col-lg-6 details-w3l">
				<img src="{{asset('public/frontend/images/g3.jpg')}}" class="img-fluid" alt="" />
			</div>
			</div>
		</div>
	</section>
	<!-- //details -->
	<!-- stats -->
<section class="stats pb-5">
		<div class="container py-md-4 mt-md-3">
			<div class="row inner_w3l_agile_grids-1">
			<div class="col-lg-3 col-sm-6 w3layouts_stats_left w3_counter_grid">
				<p class="counter">546</p>
				<h3>FINISHED PROJECT</h3>
			</div>
			<div class="col-lg-3 col-sm-6 w3layouts_stats_left w3_counter_grid1">
				<p class="counter">465</p>
				<h3>CREATIVE MATERIALS</h3>
			</div>
			<div class="col-lg-3 col-sm-6 w3layouts_stats_left w3_counter_grid2">
				<p class="counter">125</p>
				<h3>PROJECT MASTER</h3>
			</div>
			<div class="col-lg-3 col-sm-6 w3layouts_stats_left w3_counter_grid2">
				<p class="counter">150</p>
				<h3>PROFESSIONAL</h3>
			</div>
		</div>
   </div>	
</section>
<!-- //stats -->
<!---728x90--->

<!-- video -->
	<section class="video-grid1">
		<div class="demo-bg1">
			<div class="pop-bg text-center position-relative py-5">
				<div class="arrow-container animated fadeInDown">
					<a href="#small-dialog1" class="arrow-2 popup-with-zoom-anim">
						<i class="fa fa-play" aria-hidden="true"></i>
					</a>
					<div class="arrow-1 animated hinge infinite zoomIn"></div>
				</div>
				<!--  video-button-popup -->
				<div id="small-dialog1" class="mfp-hide">
					<div class="agileits_modal_body">
						<img src="{{asset('public/frontend/images/banner6.jpg')}}"></img>
					</div>
				</div>
				<!-- // video-button-popup -->
			</div>
		</div>
	</section>
	<!-- //video -->
	<!---728x90--->

<!-- pricing -->
	<section class="pricing-plans py-5">
		<div class="container py-md-4 mt-md-3">
		  <h3 class="heading-agileinfo">Our Pricing Plans<span>Business information an organisation</span></h3>
			<span class="w3-line black"></span>
			<div class="pricing-grids mt-md-5 pt-5">
				<div class="pricing-grid1">
					<h5>BASIC</h5>
					<div class="price-value">
						<h3>
							<a href="#">$ 59</a>
						</h3>
						
					</div>
					<div class="price-bg">
						<ul>
							<li class="whyt">
								<a href="#">12 Projects</a>
							</li>
							<li>
								<a href="#">5 GB Storage</a>
							</li>
							<li class="whyt">
								<a href="#">5 Mail Marketing</a>
							</li>
							<li>
								<a href="#">10 Data Base</a>
							</li>
							<li class="whyt">
								<a href="#">10 GB Bandwidth</a>
							</li>
							<li class="whyt">
								<a href="#">Free Hand</a>
							</li>
						</ul>
						<div class="cart1">
							<a href="#">Purchase</a>
						</div>
					</div>
				</div>
				<div class="pricing-grid2">
					<h5>STARTER</h5>
					<div class="price-value two">
						<h3>
							<a href="#">$ 49</a>
						</h3>
						
					</div>
					<div class="price-bg">
						<ul>
							<li class="whyt">
								<a href="#">20 Projects</a>
							</li>
							<li>
								<a href="#">10 GB Storage</a>
							</li>
							<li class="whyt">
								<a href="#">12 Mail Marketing</a>
							</li>
							<li>
								<a href="#">15 Data Base</a>
							</li>
							<li class="whyt">
								<a href="#">15 GB Bandwidth</a>
							</li>
							<li class="whyt">
								<a href="#">Gym Fitness</a>
							</li>
						</ul>
						<div class="cart2">
							<a href="#">Purchase</a>
						</div>
					</div>
				</div>
				<div class="pricing-grid3">
					<h5>BUSINESS</h5>
					<div class="price-value three">
						<h3>
							<a href="#">$ 69</a>
						</h3>
						
					</div>
					<div class="price-bg">
						<ul>
							<li class="whyt">
								<a href="#">30 Projects</a>
							</li>
							<li>
								<a href="#">15 GB Storage</a>
							</li>
							<li class="whyt">
								<a href="#">22 Mail Marketing</a>
							</li>
							<li>
								<a href="#">30 Data Base</a>
							</li>
							<li class="whyt">
								<a href="#">20 GB Bandwidth</a>
							</li>
							<li class="whyt">
								<a href="#">Body Building</a>
							</li>
						</ul>
						<div class="cart3">
							<a href="#">Purchase</a>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</section>
<!-- testimonials -->
<section class="testimonials py-5">
		<div class="container py-md-4 mt-md-3"> 
	    <h3 class="heading-agileinfo text-white">Our Clients Feedback<span class="text-white">Business information an organisation</span></h3>
		<span class="w3-line black"></span>
		<div class="agile_testimonials_grids mt-md-5 pt-5">
			<ul id="flexiselDemo1">	
				<li>
					<div class="agile_testimonials_grid">
						<div class="agile_testimonials_grid1">
							<div class="w3_agile_testimonials_grid_right test-tooltip1">
								 <p>Vivamus sed porttitor felis. Pellentesque habitant morbi tristique senectus et netus et 
								malesuada fames ac turpis egestas.Sed lorem enim, .</p>
							</div>
							<div class="w3_agile_testimonials_grid">
								<div class="w3_agile_testimonials_grid_left">
									<img src="{{asset('public/frontend/images/t2.jpg')}}" alt=" " class="img-responsive" />
								</div>
								<div class="tex-t">
									<h4>Steve Smith</h4>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="agile_testimonials_grid">
						<div class="agile_testimonials_grid1">
							<div class="w3_agile_testimonials_grid_right test-tooltip1">
								 <p>Vivamus sed porttitor felis. Pellentesque habitant morbi tristique senectus et netus et 
								malesuada fames ac turpis egestas.Sed lorem enim, .</p>
							</div>
							<div class="w3_agile_testimonials_grid">
								<div class="w3_agile_testimonials_grid_left">
									<img src="{{asset('public/frontend/images/t4.jpg')}}" alt=" " class="img-responsive" />
								</div>
								<div class="tex-t">
									<h4>Shane Watson</h4>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="agile_testimonials_grid">
						<div class="agile_testimonials_grid1">
							<div class="w3_agile_testimonials_grid_right test-tooltip1">
								 <p>Vivamus sed porttitor felis. Pellentesque habitant morbi tristique senectus et netus et 
								malesuada fames ac turpis egestas.Sed lorem enim, .</p>
							</div>
							<div class="w3_agile_testimonials_grid">
								<div class="w3_agile_testimonials_grid_left">
									<img src="{{asset('public/frontend/images/t1.jpg')}}" alt=" " class="img-responsive" />
								</div>
								<div class="tex-t">
									<h4>Shane Rosey</h4>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</li>	
			</ul>
		</div>
	</div>
</section>
<!-- //testimonials -->
<!-- news -->
	<section class="wthree-row w3-about py-5">
		<div class="container py-md-4 mt-md-3">
			<h3 class="heading-agileinfo">Our Latest News <span>Business Information An Organisation</span></h3>
			<span class="w3-line black"></span>
			<div class="card-deck mt-md-5 pt-5">
				  <div class="card">
					<img src="{{asset('public/frontend/images/g7.jpg')}}" class="img-fluid" alt="Card image cap">
					<div class="card-body w3ls-card">
					  <h5 class="card-title">Client Management</h5>
					  <p class="card-text mb-3 ">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
					</div>
					<div class="card-footer">
					  <small class="text-muted">Last updated on May 18, 2018</small>
					</div>
				  </div>
				  <div class="card">
					<img src="{{asset('public/frontend/images/g6.jpg')}}" class="img-fluid" alt="Card image cap">
					<div class="card-body w3ls-card">
					  <h5 class="card-title">Invesment Planing</h5>
					   <p class="card-text mb-3 ">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
					</div>
					<div class="card-footer">
					  <small class="text-muted">Last updated on May 18, 2018</small>
					</div>
				  </div>
				  <div class="card">
					<img src="{{asset('public/frontend/images/g8.jpg')}}" class="img-fluid" alt="Card image cap">
					<div class="card-body w3ls-card">
					  <h5 class="card-title">Business Solutions</h5>
					   <p class="card-text mb-3">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
					</div>
					<div class="card-footer">
					  <small class="text-muted">Last updated on May 18, 2018</small>
					</div>
				  </div>
				</div>
            </div>
        </section>
			@endsection
 