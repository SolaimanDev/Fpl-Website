@extends('backend.template')
@section('title')
Slider
@endsection
@section('content')


<div id="page-wrapper">
@include('backend.includes.message')
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Slider Settings</h3>
                </div>
                <div class="col-lg-6"> </div>
                                          
                <div class="col-lg-4"> </div>
                                           
                <div class="col-lg-2">
                    <div class="button-position">
                        <a type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Slider Create </a>

                        <!-- Modal Form -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog modal-xm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Modal Header</h4>
                                    </div>
                                        <div class="modal-body">
                                           {!! Form::open(array('route' => 'slider.store','files'=>true)) !!}
                                                <div class="form-group">
                                                    <label> Slider Title</label>
                                                    <input class="form-control" type="text" name="slider_title"  placeholder="Enter Slider Title">
                                                    
                                                </div>                                              
                                                <div class="form-group">
                                                    <label>Slider Image</label>
                                                    <input type="file" name="slider_image">
                                                </div> 
                                                 <div class="form-group">
                                                    <label> Slider Caption</label>
                                                    <input class="form-control" type="text" name="slider_caption"  placeholder="Enter Slider Caption">
                                                    
                                                </div>                                             
                                                <div class="form-group">
                                                    <label> Serial No</label>
                                                    <input class="form-control" type="number" name="serial_num"  placeholder="Enter Slider Title">
                                                    
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
                            Menu List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Banner</th>
                                            <th>Caption</th>
                                            <th>Serial</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1 ?>
                                   @foreach($slider as $slider)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$slider->slider_title}}</td>
                                            <td>
                                                <a> <img class="slider_img" src="{{asset('public/uploads/sliders/'.$slider->slider_image)}}" width="150px" height="80px" alt="Image"> </a>
                                            </td>
                                            
                                            <td>{{$slider->slider_caption}}</td>
                                            <td>{{$slider->serial_num}}</td>
                                            <td>
                                                
                                                <a href="{{route('slider.edit',$slider->id)}}" type="button" class="btn btn-outline btn-success"> Edit</a>

                                            
                                                 {!! Form::open(array('route' => ['slider.destroy',$slider->id],'method'=>'DELETE','style'=>'display: inline','onsubmit'=>"return confirm('Are you sure to delete ?')")) !!}
                                                   
                                                    <button class="btn btn-outline btn-danger" type="submit">Delete</button>
                                                {!! Form::close() !!}
                                               <!-- Modal Form -->
                                                    <div class="modal fade" id="editModal" role="dialog">
                                                        <div class="modal-dialog modal-xm">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title">Modal Header</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                            {!! Form::open(array('route' => 'slider.store','class'=>'form-horizontal','files'=>true)) !!}
                                                                        <div class="form-group">
                                                                            <label> Slider Title</label>
                                                                            <input class="form-control" type="text" name="slider_title"  placeholder="Enter Slider Title">
                                                                            
                                                                        </div>                                            
                                                                        <div class="form-group">
                                                                            <label>Slider Image</label>
                                                                            <input type="file" name="slider_image">
                                                                        </div> 
                                                                         <div class="form-group">
                                                                            <label> Slider Caption</label>
                                                                            <input class="form-control" type="text" name="slider_caption"  placeholder="Enter Slider Caption">
                                                                            
                                                                        </div>  

                                                                        <div class="form-group">
                                                                            <label> Serial No</label>
                                                                            <input class="form-control" type="text" name="serial_num"  placeholder="Enter Slider Title">
                                                                            
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