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
                        <a href="{{route('content.index')}}" class="btn btn-success" data-toggle="modal" > View Content </a>
                       
                    </div>                       
                </div>
                <!-- /.col-lg-12 -->
            </div>
           
           
                <hr>
              <div class="row">
                    <div class="col-lg-10">                   
                       <div class="modal-body">
                                               {!! Form::open(array('route' => 'content.store','files'=>'true')) !!}
                                                    <div class="form-group">                                                   
                                                        <label>Parent Menu</label>
                                                            <select class="form-control" name="submenu_id">
                                                                
                                                                <option>------>  Select   <------</option>
                                                               @foreach($menudata as $data)
                                                                <option value="{{$data->id}}">{{$data->menu_name}}->{{$data->submenu_name}}</option>
                                                               @endforeach
                                                            </select>                                                  
                                                    </div> 
                                                                                                  
                                                    <div class="form-group">
                                                        <label>Content Title</label>
                                                        <input class="form-control" type="text" name="title"  placeholder="Enter Menu Name">                                                    
                                                    </div>
                                                    {{-- <div class="form-group">
                                                        <label> Slug</label>
                                                        <input class="form-control" type="text" name="content_slug"  placeholder="Enter Menu Url">
                                                        
                                                    </div>  --}}
                                                     <div class="form-group">
                                                        <label>Description</label>
                                                         <textarea class="form-control" name="description" id="mytextarea" rows="5"></textarea>                                                    
                                                    </div>                                               
                                                    <div class="form-group">
                                                        <label>File input</label>
                                                        <input type="file" name="picture">
                                                    </div>                                             
                                                    <div class="form-group">
                                                        <label>Video Link</label>
                                                        <input class="form-control" type="text" name="video_link"  placeholder="Enter Videio Link">                                                    
                                                    </div>
                                                    <button type="submit" class="btn btn-success">Submit </button>
                                                    <button type="reset" class="btn btn-danger">Reset </button>
                                                <!-- </form> -->
                                                {!! Form::close() !!}
                    </div>
                   
              </div>
                
            </div>
            <!-- /.row -->
           
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <script>
  tinymce.init({
    selector: '#mytextarea'
  });
  </script>
@endsection
 