@extends('backend.template')
@section('title')
Product
@endsection
@section('content')

<style>
    .form-group.required .control-label:after {
  content:"*";
  color:red;
}
</style>
<div id="page-wrapper">
@include('backend.includes.message')
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Product</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-6">
               
                               
                                {!! Form::open(['url' => '/product/{$product->id}',  'enctype'=>"multipart/form-data",'method'=>'PUT']) !!}
                                        
                                        <div class="form-group required">
                                            <label> Name *</label>
                                            <input class="form-control" type="text" name="productName" value="{{$product->productName}}" placeholder="Enter Product Name">
                                            <input class="form-control" type="hidden" name="id" value="{{$product->id}}" placeholder="Enter Product Name">
                                            
                                        </div>
                                         <div class="form-group">                                                   
                                            <label>Category</label>
                                                <select class="form-control" name="category_id">
                                                    
                                                    <option>------>  Select   <------</option>
                                                   @foreach($categories as $data)
                                                    <option value="{{$data->id}}" {{($data->id == $product->category_id) ? 'selected' : '' }}>{{$data->categoryName}}</option>
                                                   @endforeach
                                                </select>                                                  
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" id="froala-editor" name="productDescription"  rows="3">{{$product->productDescription}}</textarea>
                                        </div>
                                                                         
                                       <div class="form-group">
                                            <label>Picture 1</label>
                                            <input type="file" name="pictureOne">
                                            <br>
                                            <div class="">
                                                <img src="{{asset('public/uploads/products/'.$product->pictureOne)}}" width="60px">
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <label>Picture 2</label>
                                            <input type="file" name="pictureTwo">
                                            <br>
                                            <div class="">
                                                <img src="{{asset('public/uploads/products/'.$product->pictureTwo)}}" width="60px">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Picture 3</label>
                                            <input type="file" name="pictureThree">
                                            <br>
                                            <div class="">
                                                <img src="{{asset('public/uploads/products/'.$product->pictureThree)}}" width="60px">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input class="form-control" type="number" name="price" value="{{$product->price}}" placeholder="Enter Product Price">
                                        </div> 
                                        <div class="form-group">
                                            <label>Old Price</label>
                                            <input class="form-control" type="number" name="oldPrice" value="{{$product->oldPrice}}" placeholder="Enter Old Price">
                                        </div>  
                                        <div class="form-group">
                                            <label>Serial No</label>
                                            <input class="form-control" type="text" name="serial_no" value="{{$product->serial_no}}" placeholder="Enter Product Price">
                                        </div>
                                        <div class="form-group">                                                   
                                            <label>Status</label>
                                                <select class="form-control" name="status" required>
                                                    
                                                   
                                                        <option value="{{ $product->status }}">{{ ( $product->status == 1 ) ? 'Active' : 'Inactive' }} </option>
 
                                                    <option value="1">Active</option>
                                                    <option value="2">Inactive</option>
                                                  
                                                </select>                                                  
                                        </div>
                                        
                                        <button type="submit" class="btn btn-success">Submit </button>
                                        <button type="reset" class="btn btn-danger">Reset </button>
                                    <!-- </form> -->
                                    {!! Form::close() !!}
                                
                                </div>
                                <div class="col-md-6">
                                    <div class="pull-right">
                                      <a type="button" href="{{url('/product')}}" class="btn btn-success">View Product </a>
                                    </div>
                                </div>
                </div>
                
            </div>
            <!-- /.row -->
           
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <script>
  $(function() {
    $('textarea#froala-editor').froalaEditor()
  });
</script>
@endsection