 @extends('frontend.template')
@section('title')
Preview
@endsection
@section('content')

 <div class="main">
    <div class="content">
	<!---728x90--->

    	<div class="content_top">
    		<div class="back-links">
    		<p><a href="index.html">Home</a> >>>> <a href="#">Electronics</a></p>
    	    </div>
    		<div class="clear"></div>
    	</div>
    	<div class="section group">
				<div class="cont-desc span_1_of_2">
				  <div class="product-details">				
					<div class="grid images_3_of_2">
						<div id="container">
						   <div id="products_example">
							   <div id="products" class="demo-1">
								<div class="image_zooming slides_container">
									<a href="#" target="_blank">
										<img src="{{asset('public/uploads/products/'.$product->pictureOne)}}" alt=" " class="image_zooming"/>
									</a>
									<a href="#" target="_blank">
										<img src="{{asset('public/uploads/products/'.$product->pictureTwo)}}" alt=" " />
									</a>
									<a href="#" target="_blank">
										<img src="{{asset('public/uploads/products/'.$product->pictureThree)}}" alt=" " />
									</a>
														
									
								</div>
								<ul class="pagination">
									
									
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="desc span_3_of_2">
					<h2>{{$product->productName}}</h2>										
					<div class="price">
						<p>Price: <span>{{$product->price}} TK</span></p>
					</div>					
				<div class="share-desc">
					<div class="share">
						<p>Share Product :</p>
						<ul>
					    	<li><a href="#"><img src="images/facebook.png" alt="" /></a></li>
					    	<li><a href="#"><img src="images/twitter.png" alt="" /></a></li>					    
			    		</ul>
					</div>
										
					<div class="clear"></div>
				</div>
			
			</div>
			<div class="clear"></div>
		  </div>
		<div class="product_desc">
<!---728x90--->
		
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li>Product Details</li>					
					<div class="clear"></div>
				</ul>
				<div class="resp-tabs-container">
					<div class="product-desc">
						<p>{!! $product->productDescription !!}</p>					
					</div>
	

			
			</div>
		 </div>
	 </div>
	<!--     <script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
   </script> -->
   <script>
    $(document).ready(function(){
        // $('#demo-1 .simpleLens-thumbnails-container img').simpleGallery({
        //     loading_image: 'demo/images/loading.gif'
        // });

        $('$products .image_zooming').simpleLens({
            loading_image: 'demo/images/loading.gif'
        });
    });
</script>		
   <div class="content_bottom">
    		<div class="heading">
    		<h3>Related Products</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">See all Products</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
    	<?php $fproducts=DB::table('products')->where('status',1)->orderBy('id','asce')->skip(12)->take(8)->get()?>
   <div class="section group">
@foreach($fproducts as $data )
				<div class="grid_1_of_4 images_1_of_4">
					 <a><img src="{{asset('public/uploads/products/'.$product->pictureOne)}}" alt="" /></a>					
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
				<div class="rightsidebar span_3_of_1">
                   <?php $categories=DB::table('categories')->where('status',1)->get() ?>
					<h2>CATEGORIES</h2>
					<ul>
				      
				       @foreach($categories as $category) 
				      <li><a href="{{url('category-by-product',$category->id)}}">{{$category->categoryName}}</a></li>
				      @endforeach
				      
    				</ul>
    				<div class="subscribe">
    					<h2>Newsletters Signup</h2>
    						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.......</p>
						    <div class="signup">
							    <form>
							    	<input type="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';"><input type="submit" value="Sign up">
							    </form>
						    </div>
      				</div>
      				 
 				</div>
 		</div>
 	</div>
    </div>
    </div>
    </div>
 @endsection