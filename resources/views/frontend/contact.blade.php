 @extends('frontend.template')
@section('title')
Preview
@endsection
@section('content')
<div class="main">
    <div class="content">
    	@if(session('msg_success'))
			<div class="alert dark alert-icon alert-success alert-dismissible alertDismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			  <i class="icon wb-check" aria-hidden="true"></i> 
			  {{session('msg_success')}}
			</div>
		@endif
    	<div class="section group">
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2>Contact Us</h2>
					    <form action="{{url('/contact-us')}}" method="POST">
					    	@csrf
					    	<div>
						    	<span><label>Name</label></span>
						    	<span><input type="text" name='name' class="textbox" ></span>
						    </div>
						    <div>
						    	<span><label>E-mail</label></span>
						    	<span><input type="text" name="email" class="textbox"></span>
						    </div>
							<!---728x90--->

						    <div>
						     	<span><label>Subject</label></span>
						    	<span><input type="text" name="subject"  class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>Message</label></span>
						    	<span><textarea name="message"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit"   class="myButton"></span>
						  </div>
					    </form>
				  </div>
  				</div>
				<div class="col span_1_of_3">
					<div class="contact_info">
    	 				<h3>Find Us Here</h3>
					    	  <div class="map">
							   	    {!! $settings->map !!}
							  </div>
      				</div>
      			<div class="company_address">
				     	<h3>{{$settings->app_name}}</h3>
						    	<p>Address :</p>
						   		<p>{!!$settings->address!!}</p>
						   		
				   		<p>Phone:{{$settings->phone}} , {{$settings->mobail}}</p>
				   		<!-- <p>Fax: (000) 000 00 00 0</p> -->
				 	 	<p>Email: <span><a>{{$settings->app_email}}</a></span></p>
				   		<p>Follow on: <span><a href="{{$settings->facebook_url}}" target="_blank">Facebook</a></span></p>
				   </div>
				 </div>
			  </div>		
         </div> 
    </div>
</div>
</div>

    @endsection