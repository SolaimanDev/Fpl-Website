 <div class="footer">
   	  <div class="wrap">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>Information</h4>
						<ul>
						<li><a href="about.html">About Us</a></li>
						<li><a href="contact.html">Customer Service</a></li>
						<li><a href="#">Advanced Search</a></li>
						<li><a href="delivery.html">Orders and Returns</a></li>
						<li><a href="contact.html">Contact Us</a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Why buy from us</h4>
						<ul>
						<li><a href="{{url('/about')}}">About Us</a></li>
						<li><a href="{{url('/contact')}}">Customer Service</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="{{url('/contact')}}">Site Map</a></li>
						<li><a href="#">Search Terms</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>My account</h4>
						<ul>
							<li><a href="{{url('/contact')}}">Sign In</a></li>
							<li><a href="#">View Cart</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Track My Order</a></li>
							<li><a href="{{url('/contact')}}">Help</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Contact</h4>
						<ul>
							<li><span>{{$settings->phone}}</span></li>
							<li><span>{{$settings->mobile}}</span></li>
						</ul>
						<div class="social-icons">
							<h4>Follow Us</h4>
					   		  <ul>
							      <li><a href="{{$settings->facebook_url}}" target="_blank"><img src="{{asset('public/frontend/images/facebook.png')}}" alt="" /></a></li>
							      <li><a href="#" target="_blank"><img src="{{asset('public/frontend/images/twitter.png')}}" alt="" /></a></li>
							      <li><a href="#" target="_blank"><img src="{{asset('public/frontend/images/skype.png')}}" alt="" /> </a></li>
							      <li><a href="#" target="_blank"> <img src="{{asset('public/frontend/images/dribbble.png')}}" alt="" /></a></li>
							      <li><a href="#" target="_blank"> <img src="{{asset('public/frontend/images/linkedin.png')}}" alt="" /></a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
			</div>			
        </div>
        <div class="copy_right">
				<p>&copy; 2019 FPL Limited. All rights reserved | Design by <a href="http://zerobugg.com/">Zerobugg IT</a></p>
		   </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>


</html>