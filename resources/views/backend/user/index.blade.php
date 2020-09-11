@extends('backend.template')
@section('title')
Settings
@endsection
@section('content')


<div id="page-wrapper">
@include('backend.includes.message')
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">User Settings</h3>
                </div>
                <div class="col-lg-6"> </div>
                                          
                <div class="col-lg-4"> </div>
                                           
                <div class="col-lg-2">
                    <div class="button-position">
                        <a type="submit" class="btn btn-success" data-toggle="modal" data-target="#myModal">User Create </a>

                        <!-- Modal Form -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog modal-xm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Modal Header</h4>
                                    </div>
                                    <div class="modal-body">
                                           {!! Form::open(array('route' => 'user.store','files'=>'true')) !!}
                                                
                                                 <div class="form-group">
                                                    <label>Profile Picture</label>
                                                    <input type="file" name="picture">                                                            
                                                </div> 
                                                <div class="form-group">
                                                    <label> Name</label>
                                                    <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name"  placeholder="Enter Name">
                                                      @if ($errors->has('name'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                    
                                                </div> 
                                                 <div class="form-group">
                                                    <label> Username</label>
                                                    <input class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" type="text" name="username"  placeholder="Enter Username">
                                                      @if ($errors->has('username'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('username') }}</strong>
                                                        </span>
                                                    @endif
                                                    
                                                </div>                                             
                                                <div class="form-group">
                                                    <label> Email</label>
                                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email"   placeholder="Enter Email ">
                                                     @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                 <div class="form-group">
                                                    <label> Phone</label>
                                                    <input class="form-control" type="text" name="phone"  placeholder="Enter Phone Number">
                                                    
                                                </div>   
                                                 <div class="form-group">
                                                    <label> Password</label>
                                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password"  placeholder="Enter Password">
                                                      @if ($errors->has('password'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                      @endif
                                                </div>
                                                  <div class="form-group">
                                                    <label> Password</label>
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="password_confirmation" required>
                                                </div> 
                                                <div class="form-group">
                                                        <label>Address</label>
                                                        <textarea class="form-control" name="address" id="mytextarea" rows="5"></textarea>                                                    
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
                                            <th> Picture</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1 ?>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>
                                                <img src="{{asset('public/uploads/users/'.$user->picture)}}" alt="" style="width:100px; height:60px">
                                            </td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->phone}}</td>
                                            <td>{!!$user->address!!}</td>
                                            <td>
                                            <a href="{{route('user.edit',$user->id)}}" type="button" class="btn btn-outline btn-success" data-toggle="modal" data-target="#">Edit</a>
                                            

                                            
                                            {!! Form::open(array('route' => ['user.destroy',$user->id],'method'=>'DELETE','style'=>'display:inline','onsubmit'=>"return confirm('Are you sure to delete ?')")) !!}
                                                <button class="btn btn-outline btn-danger" type="submit">Delete</button>
                                            {!! Form::close() !!}
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