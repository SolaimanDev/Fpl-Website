
<!DOCTYPE HTML>

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
<title>@yield('title')</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
<link href="{{asset('public/frontend/css/slider.css')}}" rel="stylesheet" type="text/css" media="all"/>
<link href="{{asset('public/frontend/css/easy-responsive-tabs.css')}}" rel="stylesheet" type="text/css" media="all"/>
<link href="{{asset('public/frontend/css/custome.css')}}" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="{{asset('public/frontend/css/global.css')}}">
<script type="text/javascript" src="{{asset('public/frontend/js/jquery-1.7.2.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('public/frontend/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/easing.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/startstop-slider.js')}}"></script>

<script src="{{asset('public/frontend/js/slides.min.jquery.js')}}"></script>
<!-- Zoom Plugin -->
<!-- <script type="text/javascript" src="{{asset('public/frontend/js/jquery.simpleGallery.js')}}"></script> -->
<script type="text/javascript" src="{{asset('public/frontend/js/jquery.simpleLens.js')}}"></script>
</head>
<body>
<script src='../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script><script>
	(function(v,d,o,ai){ai=d.createElement("script");ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "../../../../vdo.ai/core/w3layouts/vdo.ai.js");
	</script><!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125810435-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125810435-1');
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');
</script>
<script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 350,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
			});
		});
</script>
<body>
  <div class="wrap">
	<div class="header">
		<div class="headertop_desc">
			<div class="call">
				 <p><span>Need help?</span> call us <span class="number">{{$settings->phone}}</span></span></p>
			</div>
			<div class="account_desc">
				<ul>
					<li><a href="#">Register</a></li>
					<li><a href="#">Login</a></li>
					<li><a href="#">Delivery</a></li>
					<li><a href="#">Checkout</a></li>
					<li><a href="#">My Account</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		<div class="header_top">
			<div class="logo">
				<a href="{{url('')}}"><img src="{{asset('public/uploads/logo/'.$settings->logo)}}" alt="" /></a>
			</div>
			  <div class="cart">
			  	   <p>  <span>Welcome to FPL Limited !</span><div id="dd" class="wrapper-dropdown-2"> 
			  	   	<ul class="dropdown">
							<!-- <li>you have no items in your Shopping cart</li> -->
					</ul></div></p>
			  </div>
			  <script type="text/javascript">
			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-2').removeClass('active');
				});

			});

		</script>
	 <div class="clear"></div>
  </div>
  <!---728x90--->

<div class="header_bottom">
 	<div class="menu">
 		<ul>
	    	<li class="active"><a href="{{url('')}}">Home</a></li>
	    	<li><a href="{{url('/about')}}">About</a></li>
	    	<li><a href="#">Delivery</a></li>
	    	<li><a href="{{url('/clients')}}">Clients</a></li>
	    	<li><a href="{{url('/machinary')}}">Machinery</a></li>
	    	<li><a href="{{url('/contact')}}">Contact</a></li>
	    	<div class="clear"></div>
			</ul>
 	</div>
 	<!--<div class="search_box">-->
 	<!--	<form>-->
 	<!--		<input type="text" placeholder="Search" id="search"><input type="submit" value="">-->
 			
 	<!--	</form>-->
 		<!-- <div class="search-box" id="search-data"></div> -->
 	<!--</div>-->
 	<div class="clear"></div>
</div>	

<script type="text/javascript">
$('#search').on('keyup',function(){
$value=$(this).val();

$.ajax({
type : 'get',
url : '{{URL::to('/ajax-search')}}',
data:{'search':$value},
success:function(data){
	console.log(data);
	// alert(data);

// $('#search-data').html(data);
}
});
})
</script>

<script type="text/javascript">
	$(document).on('click','ul li',function(){

  $(this).addClass('active').siblings().removeClass('active');


	})




</script>


