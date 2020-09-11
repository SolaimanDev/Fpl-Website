@extends('frontend.template')
@section('title')
Home
@endsection
@section('content')

   </div>
 <div class="main">
 <!---728x90--->

    <div class="content">
    	<div class="content_top">
    		<div class="heading" style="display: flex;">
    		<a href="{{url('')}}"><h4>Home >>></h4></a> <p style="color:red; margin-left: 3px">{{$category->categoryName}}</p>
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
		
		
    </div>
 </div>
</div>
@endsection