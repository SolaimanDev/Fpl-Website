
<!--footer-->
<footer>
		<div class="container py-md-4 mt-md-3">
			<div class="row footer-top-w3layouts-agile py-5">
				<div class="col-lg-3 col-md-6 col-sm-6 footer-grid">
					<div class="footer-title">
						<h3>About Us</h3>
					</div>
					<div class="footer-text">
						<p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. lacinia eget consectetur sed, convallis at tellus..</p>

					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 footer-grid">
					<div class="footer-title">
						<h3>Contact Us</h3>
					</div>
					<div class="footer-office-hour">
						<ul>
							<li class="hd">Address :</li>
							<li>{{$settings->address}}</li>

						</ul>
						<ul>
							<li class="hd">Phone:  {{$settings->phone}}</li>
							<li class="hd">Email:
								<a href="mailto:info@example.com">{{$settings->app_email}}</a>
							</li>
							<li class="hd">Fax: 1(234) 567 8901</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 footer-grid">
					<div class="footer-title">
						<h3>Recent Posts</h3>
					</div>
					<div class="footer-list">
						<div class="flickr-grid">
							<a href="#" data-toggle="modal" data-target="#myModal">
								<img src="{{asset('public/frontend/images/g1.jpg')}}" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="#" data-toggle="modal" data-target="#myModal">
								<img src="{{asset('public/frontend/images/g2.jpg')}}" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="#" data-toggle="modal" data-target="#myModal">
								<img src="{{asset('public/frontend/images/g3.jpg')}}" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="#" data-toggle="modal" data-target="#myModal">
								<img src="{{asset('public/frontend/images/g4.jpg')}}" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="#" data-toggle="modal" data-target="#myModal">
								<img src="{{asset('public/frontend/images/g5.jpg')}}" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="#" data-toggle="modal" data-target="#myModal">
								<img src="{{asset('public/frontend/images/g6.jpg')}}" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="#" data-toggle="modal" data-target="#myModal">
								<img src="{{asset('public/frontend/images/g7.jpg')}}" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="#" data-toggle="modal" data-target="#myModal">
								<img src="{{asset('public/frontend/images/g9.jpg')}}" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="#" data-toggle="modal" data-target="#myModal">
								<img src="{{asset('public/frontend/images/g8.jpg')}}" class="img-fluid" alt=" ">
							</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 footer-grid">
					<div class="footer-title">
						<h3>Subscribe</h3>
					</div>
					<p>Vivamus magna justo, lacinia eget consectetur sed.</p>
					<form action="#" method="post" class="newsletter">
						<input class="email" type="email" placeholder="Your email..." required="">
						<button class="btn1">
							<i class="far fa-envelope"></i>
						</button>
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</footer>
	<!---->
	<div class="copyright py-3">
		<div class="container">
			<div class="copyrighttop">
				<ul>
					<li>
						<h4>Follow us on:</h4>
					</li>
					<li>
						<a class="facebook" href="#">
							<i class="fab fa-facebook-f"></i>
						</a>
					</li>
					<li>
						<a class="facebook" href="#">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li>
						<a class="facebook" href="#">
							<i class="fab fa-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a class="facebook" href="#">
							<i class="fab fa-pinterest-p"></i>
						</a>
					</li>
				</ul>
			</div>
			<div class="copyrightbottom">
				<p>© 2019 Comprised. All Rights Reserved | Design by
					<a href="http://zerobugg.com/">Zerobugg IT Solutions</a>
				</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Comprised</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		 <div class="agileits-w3layouts-info">
			<img src="{{asset('public/frontend/images/g6.jpg')}}" class="img-fluid" alt="" />
			<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. </p>
		</div>
	</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- //Modal -->
<!-- js-->
	<script src="{{asset('public/frontend/js/jquery-2.2.3.min.js')}}"></script>
<!-- js-->
<!-- Banner Responsiveslides -->
	<script src="{{asset('public/frontend/js/responsiveslides.min.js')}}"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
<!-- // Banner Responsiveslides -->
<!-- stats -->
	<script src="{{asset('public/frontend/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.countup.js')}}"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
<!--pop-up-box -->
	<script src="{{asset('public/frontend/js/jquery.magnific-popup.js')}}"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
		});
	</script>
	<!-- //pop-up-box -->
	<!-- clients -->
			<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo1").flexisel({
							visibleItems: 2,
							animationSpeed: 1000,
							autoPlay:false,
							autoPlaySpeed: 2500,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems:1
								},
								tablet: { 
									changePoint:768,
									visibleItems: 1
								}
							}
						});
						
					});
			</script>
			<script type="text/javascript" src="{{asset('public/frontend/js/jquery.flexisel.js')}}"></script>
	<!-- //clients -->
	<!-- Bootstrap Core JavaScript -->
	<script src="{{asset('public/frontend/js/bootstrap.js')}}">
	</script>
	<!-- //Bootstrap Core JavaScript -->
</body>

<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/28-07-2018/comprised-demo_Free/865501077/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Feb 2019 06:19:46 GMT -->
</html>