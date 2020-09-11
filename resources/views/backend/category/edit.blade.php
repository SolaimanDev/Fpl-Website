@extends('backend.template')
@section('title')
Menu Edit
@endsection
@section('content')


<div id="page-wrapper">
@include('backend.includes.message')
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Category Settings</h3>
                </div>
                <div class="col-lg-6"> </div>
                                          
                <div class="col-lg-4"> </div>
                                           
                <div class="col-lg-2">
                    <div class="button-position">
                        <a type="submit" href="{{route('category.index')}}" class="btn btn-success"> View Category  </a>

                     
                    </div>                       
                </div>
                <!-- /.col-lg-12 -->
            </div>
           
            <div class="row">
                <div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update Category
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                            {!! Form::open(array('route' => ['category.update', $data->id],'method'=>'PUT','files'=>true)) !!}
                                <div class="form-group">
                                    <label> Category Name</label>
                                    <input class="form-control" type="text" name="categoryName" value="{{$data->categoryName}}"  placeholder="Enter Menu Name">
                                    <input class="form-control" type="hidden" name="id" value="{{$data->id}}"  placeholder="Enter Menu Name">
                                    
                                </div>                                              
                                <div class="form-group">
                                    <label> Category Descriptions</label>
                                    <input class="form-control" type="text" name="categoryDescription" value="{{$data->categoryDescription}}"  placeholder="Enter Descriptions">
                                    
                                </div>
                                <div class="form-group">
                                    <label> Serial No</label>
                                    <input class="form-control" type="number" name="serial_num" value="{{$data->serial_num}}"  >
                                    
                                </div>
                               <div class="form-group">
                                    <label> Status</label>                                    
                                    <select class="form-control" name="status" required>
                                        <option value="">Select Status</option>
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                    </select>                                                    
                                </div>                                                  
                                
                                <button type="submit" class="btn btn-success">Update </button>
                                <button type="reset" class="btn btn-danger">Reset </button>
                          
                            {!! Form::close() !!}
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
          
                    
            </div>
            
                
            </div>
            <!-- /.row -->
           
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
@endsection