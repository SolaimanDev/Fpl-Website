@extends('frontend.template')
@section('title')
Home
@endsection
@section('content')
	<div class="header_slide">
			<div class="header_bottom_left">				
				<div class="categories">
				  <ul>
				  	<h3>Categories</h3>
				  @foreach($categories as $category) 
				      <li><a href="{{url('category-by-product',$category->id)}}">{{$category->categoryName}}</a></li>
				      @endforeach
				  </ul>
				</div>					
	  	     </div>
					 <div class="header_bottom_right">					 
					 	 <div class="slider">					     
							 <div id="slider">
			                    <div id="mover">
			                    	@foreach($slider as $slider) 
			                    	<div id="slide-1" class="slide">			                    
									 <div class="slider-img">
									     <a><img src="{{asset('public/uploads/sliders/'.$slider->slider_image)}}" alt="learn more" style="height:350px;width: 700px" /></a>									    
									  </div>
						             	<div class="slider-text">
		                                 <h2>{{$slider->slider_caption}}<br><span> Experts</span></h2>
		                                 <!-- <h2>UPTo 20% OFF</h2> -->
									   <div class="features_list">
									   							               
							            </div>
							             <a class="button">{{$slider->slider_title}}</a>
					                   </div>			               
									  <div class="clear"></div>				
				                  </div>
				                   @endforeach					             											
			                 </div>		
		                </div>
					 <div class="clear"></div>					       
		         </div>
		      </div>
		   <div class="clear"></div>
		</div>
   </div>
 <div class="main">
 <!---728x90--->

    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>New Products</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">See all Products</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
	      	@foreach($products as $product)
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="{{url('product-details/'.$product->id,$product->product_slug)}}"><img src="{{asset('public/uploads/products/'.$product->pictureOne)}}" alt="" style="width: 500px; height: 250px;" /></a>
					 <h2>{{$product->productName}}</h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">{{$product->price}}TK</span></p>
					   </div>
			       		<div class="add-cart">								
							<h4><a href="{{url('product-details/'.$product->id,$product->product_slug)}}">View</a></h4>
					   </div>
							 <div class="clear"></div>
					</div>
					 
				</div>
				@endforeach
				
			</div>
			
			<div class="content_bottom">
			<!---728x90--->

    		<div class="heading">
    		<h3>Feature Products</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">See all Products</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
<?php $fproducts=DB::table('products')->where('status',1)->orderBy('id','asce')->limit(12)->get()?>

  @foreach($fproducts as $data )
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="{{url('product-details/'.$product->id,$product->product_slug)}}"><img src="{{asset('public/uploads/products/'.$product->pictureOne)}}" alt="" /></a>					
					 <h2>{{$data->productName}} </h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">{{$data->price}} TK</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="{{url('product-details/'.$product->id,$product->product_slug)}}">View</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				@endforeach
				
				
			</div>
    </div>
 </div>
</div>
@endsection