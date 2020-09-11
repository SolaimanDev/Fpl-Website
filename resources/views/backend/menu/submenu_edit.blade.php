@extends('backend.template')
@section('title')
Menu Edit
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
                        <a type="submit" href="{{route('menu.index')}}" class="btn btn-success"> View Menu  </a>

                     
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
                            {!! Form::open(array('url' => ['submenu-update', $data->id],'method'=>'POST','files'=>true)) !!}
                                 <div class="form-group">                                                   
                                    <label>Parent Menu</label>
                                        <select class="form-control" name="menu_id">
                                            <option>------>   Select   <------</option>
                                            @foreach($menudata as $menu)
                                            <option value="{{$menu->id}}">{{$menu->menu_name}}</option>
                                            @endforeach
                                        </select>                                                  
                                </div>
                                <div class="form-group">
                                    <label> Menu Name</label>
                                    <input class="form-control" type="text" name="submenu_name" value="{{$data->submenu_name}}"  placeholder="Enter Menu Name">
                                    <input class="form-control" type="hidden" name="id" value="{{$data->id}}"  placeholder="Enter Menu Name">
                                    
                                </div>                                              
                                <div class="form-group">
                                    <label> Slug</label>
                                    <input class="form-control" type="text" name="submenu_slug" value="{{$data->submenu_slug}}"  placeholder="Enter Menu Url">
                                    
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