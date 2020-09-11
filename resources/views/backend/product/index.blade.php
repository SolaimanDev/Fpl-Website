@extends('backend.template')
@section('title')
Product
@endsection
@section('content')


<div id="page-wrapper">
@include('backend.includes.message')
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Product List</h3>
                </div>
                <div class="col-lg-6"> </div>
                                          
                <div class="col-lg-4"> </div>
                                           
                <div class="col-lg-2">
                                        
                </div>
                
            </div>          
           
              <div class="row">
                    <div class="col-lg-12">                   
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              Product List
                            </div>                       
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                     
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>Picture</th>
                                                <th>Price</th>
                                                <th>Old Price</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i=1 ?>
                                        @foreach($products as $data)
                                            <tr>                                                
                                                <td>{{$i++}}</td>
                                                <td>{{$data->productName}}</td>
                                                <td>{{$data->categoryName}}</td>
                                                <td>
                                                    <a> <img class="slider_img" src="{{asset('public/uploads/products/'.$data->pictureOne)}}" width="60px" alt="Image"> </a>
                                                </td>
                                                <td>{{$data->price}}</td>
                                                <td>{{$data->oldPrice}}</td>
                                                <td class="{{($data->status==1)? 'btn btn-success btn-circle' : 'btn btn-danger btn-circle'}}"><i class="{{($data->status==1)? 'fa fa-heart' : 'fa fa-check'}}"></i>
                                                </td>
                                                                                            
                                                <td>
                                                    <a href="{{route('product.edit',$data->id)}}" type="button" class="btn btn-outline btn-success"> Edit</a>
                                                    <form action="{{action('ProductController@destroy', $data['id'])}}" method="post"  onsubmit="return confirm('Are you sure to delete ?')" style="display: inline;">
                                                        @csrf
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button class="btn btn-outline btn-danger" type="submit">Delete</button>
                                                    </form>
                                              
                                                </td>
                                            </tr> 
                                            @endforeach                                         
                                        </tbody>
                                    </table>
                                </div>                               
                            </div>                       
                        </div>
                    </div>
                    
              </div>
                
            </div>
            <!-- /.row -->
           
        </div>
        

    </div>
    <!-- /#wrapper -->
@endsection