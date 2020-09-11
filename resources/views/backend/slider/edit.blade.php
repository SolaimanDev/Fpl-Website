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
                        <a type="button" href="{{URL::to('/slider')}}" class="btn btn-success">View Sliders  </a>

                      

                    </div>                       
                </div>
                <!-- /.col-lg-12 -->
            </div>
           
            <div class="row">
                <div class="col-lg-10">                  
                     <div class="modal-content">
                        <div class="modal-header">
                        
                        <h4 class="modal-title">Slider Edit</h4>
                        </div>
                        <div class="modal-body">
                         
                          <form method="post" action="{{ route('slider.update', $data->id) }}" enctype="multipart/form-data">
                                     @method('PATCH')
                                      @csrf
                                    <div class="form-group">
                                        <label> Slider Title</label>
                                        <input class="form-control" type="text" name="slider_title"  value="{{$data->slider_title}}" placeholder="Enter Slider Title">

                                         <input class="form-control" type="hidden" name="id"  value="{{$data->id}}">
                                    </div>                                            
                                    <div class="form-group">
                                        <label>Slider Image</label>
                                         <input type="file" name="slider_image">
                                                <br>
                                                <small>Size : 900 x 400 px</small>
                                    </div> 
                                    <div class="form-group">
                                        <label> Slider Caption</label>
                                        <input class="form-control" type="text" name="slider_caption"  value="{{$data->slider_caption}}" placeholder="Enter Slider Caption">

                                         <input class="form-control" type="hidden" name="id"  value="{{$data->id}}">
                                    </div>   

                                    <div class="form-group">
                                        <label> Serial No</label>
                                        <input class="form-control" type="number" name="serial_num" value="{{$data->serial_num}}"  placeholder="Enter Slider Title">
                                        
                                    </div>                                              
                                                                                
                                    
                                    <button type="submit" class="btn btn-success">Submit </button>
                                    <button type="reset" class="btn btn-danger">Reset </button>
                                </form>
                                {{-- {!! Form::close() !!} --}}
                        </div>
                       
                    </div>
                </div>
          
                    
            </div>
              
                
            </div>
            <!-- /.row -->
           
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
@endsection