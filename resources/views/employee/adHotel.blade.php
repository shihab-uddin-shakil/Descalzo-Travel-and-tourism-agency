@extends('main.index')
@section('content')

   <!-- START BREADCRUMB -->
   <ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Dashboard</a></li>
    <li><a href="#">AdHotel</a></li>
    <li class="active">AdHotel Form</li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">
       
            <form class="form-horizontal" method="POST">

                @csrf
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Hotel Name</strong> for Tourist</h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                </div>
                {{-- <div class="panel-body">
                    <p>This is non libero bibendum, scelerisque arcu id, placerat nunc. Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris. Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem. Phasellus semper felis in odio convallis, et venenatis nisl posuere. Morbi non aliquet magna, a consectetur risus. Vivamus quis tellus eros. Nulla sagittis nisi sit amet orci consectetur laoreet. Vivamus volutpat erat ac vulputate laoreet. Phasellus eu ipsum massa.</p>
                </div> --}}
                <div class="panel-body">                                                                        
                    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Hotel category Name</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" name="name" class="form-control"/>
                            </div>                                            
                            <span class="help-block">This is Hotel category field</span>
                        </div>
                    </div>
php
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Address</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" name="address" class="form-control"/>
                            </div>                                            
                            <span class="help-block">This is Address name text field</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Official Email</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="email" name="email" class="form-control"/>
                            </div>                                            
                            <span class="help-block">This is Email Address text field</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Phone NO:</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" name="phone" class="form-control"/>
                            </div>                                            
                            <span class="help-block">This is Mobile Number text field</span>
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Available rooms </label>
                        <div class="col-md-6 col-xs-12">                                                                                            
                            <input type="text" name="rooms" class="tagsinput" value=""/>
                            <span class="help-block">Available rooms</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Room prices </label>
                        <div class="col-md-6 col-xs-12">                                                                                            
                            <input type="text" name="price" class="tagsinput" value=""/>
                            <span class="help-block"> Per Room price details</span>
                        </div>
                    </div>
                    
                   <!-- <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Quality</label>
                        <div class="col-md-6 col-xs-12">                                                                                            
                            <select class="form-control select" name="quality">
                          
                                <option>Bigener</option>
                                <option>Expert</option>
                                <option>Pro</option>
                            </select>
                            <span class="help-block">Select worker expertness </span>
                        </div>
                    </div> -->
                 
                    
                    {{-- <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">File</label>
                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                            <input type="file" class="fileinput btn-primary" name="filename" id="filename" title="Browse file"/>
                            <span class="help-block">Input type file</span>
                        </div>
                    </div> --}}
                    
                 

                </div>
                <div class="panel-footer">
                    <button class="btn btn-default">Clear Form</button>                                    
                   <input type="submit" name="submit" class="btn btn-primary pull-right" value="Add Hotels">
                </div>
            </div>
            </form>
            
        </div>
    </div>                    
    
</div>
<!-- END PAGE CONTENT WRAPPER --> 

@stop