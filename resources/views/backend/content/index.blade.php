@extends('backend.template')
@section('title')
Settings
@endsection
@section('content')


<div id="page-wrapper">
@include('backend.includes.message')
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Content Settings</h3>
                </div>
                <div class="col-lg-6"> </div>
                                          
                <div class="col-lg-4"> </div>
                                           
                <div class="col-lg-2">
                                        
                </div>
                
            </div>          
           
              <div class="row">
                    <div class="col-lg-10">                   
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              Content List
                            </div>                       
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                     
                                            <tr>
                                                <th>#</th>
                                                <th>Sub Menu</th>
                                                <th>Content Title</th>
                                                <th>Slug</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i=1 ?>
                                        @foreach($contents as $data)
                                            <tr>                                                
                                                <td>{{$i++}}</td>
                                                <td>{{$data->submenu_id}}</td>
                                                <td>{{$data->title}}</td>
                                                
                                                
                                                                                           
                                                <td>{{$data->content_slug}}</td>                                                
                                                <td>
                                                     <a href="{{URL::to('content'.$data->id.'/edit')}}" type="button" class="btn btn-success btn-circle"  title="Edit"><i class="fa fa-link"></i></a>
                                                     <a href="" type="button" class="btn btn-danger btn-circle"  title="Delete"></a>
                                              
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
                     
                    </div>
              </div>
                
            </div>
            <!-- /.row -->
           
        </div>
        

    </div>
    <!-- /#wrapper -->
@endsection