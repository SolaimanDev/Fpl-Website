@extends('backend.template')
@section('title')
Settings
@endsection
@section('content')


<div id="page-wrapper">
@include('backend.includes.message')
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Settings</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
               
                               
                                {!! Form::open(['url' => '/update-settings',$settingdata->id, 'enctype'=>"multipart/form-data",'method'=>'post']) !!}
                                        <div class="form-group">
                                            <label> Name</label>
                                            <input class="form-control" type="text" name="app_name" value="{{$settingdata->app_name}}" placeholder="Enter Company Name" required>
                                            <input type="hidden" value="{{$settingdata->id}}" name="id"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" name="app_title" value="{{$settingdata->app_title}}" placeholder="Enter Company Title">
                                        </div>
                                        <div class="form-group">
                                            <label> Email</label>
                                            <input class="form-control" name="app_email" value="{{$settingdata->app_email}}" placeholder="Enter Company Email" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Office Phone</label>
                                            <input class="form-control" name="phone" value="{{$settingdata->phone}}" placeholder="Enter Company Phone" required>
                                        </div>
                                        <div class="form-group">
                                            <label> Mobail</label>
                                            <input class="form-control" name="mobile" value="{{$settingdata->mobile}}" placeholder="Enter Company Mobile" required>
                                        </div>                                     
                                        <div class="form-group">
                                            <label> facebook Page</label>
                                            <input class="form-control" name="facebook_url" value="{{$settingdata->facebook_url}}" placeholder="Enter Facebook link">
                                        </div>                                     
                                       <div class="form-group">
                                            <label>Company logo</label>
                                            <input type="file" name="logo">
                                            <img src="{{asset('public/uploads/logo/'.$settingdata->logo)}}" style="width: 100px; height:70px ">
                                        </div>
                                        <div class="form-group">
                                            <label>Text area</label>
                                            <textarea class="form-control" name="address" rows="3">{{$settingdata->address}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Google Map</label>
                                            <input class="form-control" name="map" value="{{$settingdata->map}}" placeholder="Enter Google Embed Code">
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
@endsection