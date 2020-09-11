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
                        <a type="submit" class="btn btn-success" data-toggle="modal" data-target="#myModal">Menu Create </a>

                        <!-- Modal Form -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog modal-xm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Modal Header</h4>
                                    </div>
                                    <div class="modal-body">
                                            {!! Form::open(['url' => '/menu']) !!}
                                                <div class="form-group">
                                                    <label> Menu Name</label>
                                                    <input class="form-control" type="text" name="menu_name"  placeholder="Enter Menu Name">
                                                    
                                                </div>                                              
                                                <div class="form-group">
                                                    <label> Slug</label>
                                                    <input class="form-control" type="text" name="url"  placeholder="Enter Menu Url">
                                                    
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
                                            <th> Name</th>
                                            <th>URL</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1 ?>
                                    @foreach($menudata as $menudata)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$menudata->menu_name}}</td>
                                            <td>{{$menudata->url}}</td>
                                            <td>
                                           
                                                <a href="{{route('menu.edit',$menudata->id)}}" type="button" class="btn btn-outline btn-success"> Edit</a>                                           
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
                <hr>
              <div class="row">
                    <div class="col-lg-10">                   
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               Sub Menu List
                            </div>                       
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                     
                                            <tr>
                                                <th>#</th>
                                                <th>Sub Menu</th>
                                                <th>Menu</th>
                                                <th>Slug</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i=1 ?>
                                        @foreach($submenu as $data)
                                            <tr>                                                
                                                <td>{{$i++}}</td>
                                                <td>{{$data->submenu_name}}</td>
                                                <td>{{$data->menu_name}}</td>
                                                
                                                
                                                                                           
                                                <td>{{$data->submenu_slug}}</td>                                                
                                                <td>
                                                     <a href="{{url('/submenu-edit',$data->id)}}" type="button" class="btn btn-outline btn-success">Edit</a>

                                                  
                                                        <form action="{{route('menu.destroy',$data->id)}}" method="post"  onsubmit="return confirm('Are you sure to delete ?')" style="display: inline;">
                                                       
                                                        <input name="_method" type="hidden" value="DELETE">
                                                         {!! csrf_field() !!}

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
                    <div class="col-lg-2">
                        <div class="button-position">
                            <a type="submit" class="btn btn-success" data-toggle="modal" data-target="#subMenu">Sub Menu  </a>

                            <!-- Modal Form -->
                                <div class="modal fade" id="subMenu" role="dialog">
                                    <div class="modal-dialog modal-xm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"> Header</h4>
                                        </div>
                                        <div class="modal-body">
                                                {!! Form::open(['url' => '/menu/submenu']) !!}
                                                    <div class="form-group">                                                   
                                                        <label>Parent Menu</label>
                                                            <select class="form-control" name="menu_id">
                                                                <option>------>  Select   <------</option>
                                                                @foreach($alldata as $data)
                                                                <option value="{{$data->id}}">{{$data->menu_name}}</option>
                                                                @endforeach
                                                            </select>                                                  
                                                    </div>                                               
                                                    <div class="form-group">
                                                        <label>Sub Menu Name</label>
                                                        <input class="form-control" type="text" name="submenu_name"  placeholder="Enter Menu Name">                                                    
                                                    </div>                                              
                                                    <div class="form-group">
                                                        <label> Slug</label>
                                                        <input class="form-control" type="text" name="submenu_slug"  placeholder="Enter Menu Url">
                                                        
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
              </div>
                
            </div>
            <!-- /.row -->
           
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
@endsection