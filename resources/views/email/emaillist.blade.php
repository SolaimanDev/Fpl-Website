@extends('backend.template')
@section('title')
Settings
@endsection
@section('content')


<div id="page-wrapper">
@include('backend.includes.message')
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Email List</h3>
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
                              Email List
                            </div>                       
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                     
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Subject</th>                                                
                                                <th>Message</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i=1 ?>
                                        @foreach($emails as $data)
                                            <tr>                                                
                                                <td>{{$i++}}</td>
                                                <td>{{$data->name}}</td>
                                                <td>{{$data->email}}</td>
                                                
                                                
                                                                                           
                                                <td>{{$data->subject}}</td>                                                
                                                <td>{{$data->message}}</td>                                                
                                               
                                            </tr> 
                                            @endforeach                                         
                                        </tbody>

                                    </table>
                                    {{ $emails->links() }}
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