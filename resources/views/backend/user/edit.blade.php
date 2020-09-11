@extends('backend.template')
@section('title')
Settings
@endsection
@section('content')


<div id="page-wrapper">
@include('backend.includes.message')
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Menu Settings</h3>
                </div>
                <div class="col-lg-6"> </div>
                                          
                <div class="col-lg-4"> </div>
                                           
                <div class="col-lg-2">
                    <div class="button-position">
                        <a type="submit" href="{{url('/user')}}" class="btn btn-success"> View User </a>

                        <!-- Modal Form -->
                           
                    </div>                       
                </div>
                <!-- /.col-lg-12 -->
            </div>
           
            <div class="row">
                <div class="col-lg-10">
                 
                 
                                <div class="modal-content">                                    
                                    <div class="modal-body">
                                           {!! Form::open(array('route' => ['user.update',$data->id],'files'=>'true','method'=>'PUT')) !!}
                                                
                                                 <div class="form-group">
                                                    <label>Profile Picture</label>
                                                    <input type="file" name="picture"> 
                                                      <img src="{{asset('public/uploads/users/'.$data->picture)}}" style="width: 100px; height:70px ">                                                          
                                                </div> 
                                                <div class="form-group">
                                                    <label> Name</label>
                                                    <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" value="{{$data->name}}"  placeholder="Enter Name">
                                                      @if ($errors->has('name'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                    <input type="hidden" name="id" value="{{$data->id}}">
                                                </div>
                                                  <div class="form-group">
                                                    <label> Username</label>
                                                    <input class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" type="text" name="username" value="{{$data->username}}"  placeholder="Enter Name">
                                                      @if ($errors->has('username'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('username') }}</strong>
                                                        </span>
                                                    @endif
                                                    <input type="hidden" name="id" value="{{$data->id}}">
                                                </div>                                              
                                                <div class="form-group">
                                                    <label> Email</label>
                                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" value="{{$data->email}}"  placeholder="Enter Email ">
                                                     @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                 <div class="form-group">
                                                    <label> Phone</label>
                                                    <input class="form-control" type="text" name="phone" value="{{$data->phone}}"  placeholder="Enter Phone Number">
                                                    
                                                </div>

                                                 <div class="form-group">
                                                    <label> Password</label>
                                                    <input class="form-control" type="password" name="password" placeholder="Enter Phone Password">
                                                    
                                                </div>

                                                <div class="form-group">
                                                        <label>Address</label>
                                                        <textarea class="form-control" name="address" id="mytextarea" rows="5">{{$data->address}}</textarea>                                                    
                                                    </div>                                             
                                                
                                                <button type="submit" class="btn btn-success">Submit </button>
                                                <button type="reset" class="btn btn-danger">Reset </button>
                                            <!-- </form> -->
                                            {!! Form::close() !!}
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