@extends('backend.template')
@section('title')
Settings
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
                        <a type="submit" class="btn btn-success" data-toggle="modal" data-target="#myModal">Category Create </a>

                        <!-- Modal Form -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog modal-xm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"> Add Category</h4>
                                    </div>
                                    <div class="modal-body">
                                            {!! Form::open(['url' => '/category']) !!}
                                                <div class="form-group">
                                                    <label> Category Name</label>
                                                    <input class="form-control" type="text" name="categoryName"  placeholder="Enter Menu Name" required>
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label> Category Description</label>
                                                    <textarea class="form-control" name="categoryDescription" rows="3"></textarea>
                                                    
                                                </div>                                              
                                                <div class="form-group">
                                                    <label> Serial No</label>
                                                    <input class="form-control" type="Number" name="serial_num"  placeholder="Enter Serial Number">
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label> Status</label>
                                                    <label>Selects</label>
                                                    <select class="form-control" name="status" required>
                                                        <option value="">----> Select Status <-------</option>
                                                        <option value="1">Active</option>
                                                        <option value="2">Inactive</option>
                                                        
                                                    </select>
                                                    
                                                </div>                                              
                                                
                                                <button type="submit" class="btn btn-success">Submit </button>
                                                <button type="reset" class="btn btn-danger">Reset </button>
                                            <!-- </form> -->
                                            {!! Form::close() !!}
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                    </div>                       
                </div>
                <!-- /.col-lg-12 -->
            </div>
           
            <div class="row">
                <div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Category List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th> Name</th>
                                            <th>Description</th>
                                            <th>Serial</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1 ?>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$category->categoryName}}</td>
                                            <td>{{$category->categoryDescription}}</td>
                                            <td>{{$category->serial_num}}</td>
                                            <td class="{{($category->status==1)? 'btn btn-success btn-circle' : 'btn btn-danger btn-circle'}}"><i class="{{($category->status==1)? 'fa fa-heart' : 'fa fa-check'}}"></i></td>
                                            
                                            <td>
                                            <a href="{{route('category.edit',$category->id)}}" type="button" class="btn btn-outline btn-success"> Edit</a>
                                            <form action="{{action('CategoryController@destroy', $category['id'])}}" method="post" onsubmit="return confirm('Are you sure to delete ?')" style="display: inline;">
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button class="btn btn-outline btn-danger" type="submit">Delete</button>
                                            </form>
                                           
                                               <!-- Modal Form -->
                                                  
                                            
                                            </td>
                                        </tr>
                                        @endforeach                                       
                                    </tbody>
                                </table>
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