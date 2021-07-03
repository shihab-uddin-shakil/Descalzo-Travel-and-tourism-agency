@extends ('main.index')
@section('content')

    <!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Dashboard</li>
    </ul>
    <!-- END BREADCRUMB -->
   <!-- PAGE CONTENT WRAPPER -->
   <div class="page-content-wrap">
  <!-- START WIDGETS -->                    
  <div class="row">
    <div class="col-md-3">
        
        <!-- START WIDGET SLIDER -->
        <div class="widget widget-default widget-carousel">
            <div class="owl-carousel" id="owl-example">
                <div>                                    
                    <div class="widget-title">Total Visitors</div>                                                                        
                    <div class="widget-subtitle">27/08/2014 15:23</div>
                    <div class="widget-int">3,548</div>
                </div>
                <div>                                    
                    <div class="widget-title">Returned</div>
                    <div class="widget-subtitle">Visitors</div>
                    <div class="widget-int">1,695</div>
                </div>
                <div>                                    
                    <div class="widget-title">New</div>
                    <div class="widget-subtitle">Visitors</div>
                    <div class="widget-int">1,977</div>
                </div>
            </div>                            
            <div class="widget-controls">                                
                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
            </div>                             
        </div>         
        <!-- END WIDGET SLIDER -->
        
    </div>
    <div class="col-md-3">
        
        <!-- START WIDGET MESSAGES -->
        <div class="widget widget-default widget-item-icon" onclick="location.href='pages-messages.html';">
            <div class="widget-item-left">
                <span class="fa fa-envelope"></span>
            </div>                             
            <div class="widget-data">
                <div class="widget-int num-count">48</div>
                <div class="widget-title">New messages</div>
                <div class="widget-subtitle">In your mailbox</div>
            </div>      
            <div class="widget-controls">                                
                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
            </div>
        </div>                            
        <!-- END WIDGET MESSAGES -->
        
    </div>
    <div class="col-md-3">
        
        <!-- START WIDGET REGISTRED -->
        <div class="widget widget-default widget-item-icon" onclick="location.href='pages-address-book.html';">
            <div class="widget-item-left">
                <span class="fa fa-user"></span>
            </div>
            <div class="widget-data">
                <div class="widget-int num-count">375</div>
                <div class="widget-title">Registred users</div>
                <div class="widget-subtitle">On your website</div>
            </div>
            <div class="widget-controls">                                
                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
            </div>                            
        </div>                            
        <!-- END WIDGET REGISTRED -->
        
    </div>
    <div class="col-md-3">
        
        <!-- START WIDGET CLOCK -->
        <div class="widget widget-info widget-padding-sm">
            <div class="widget-big-int plugin-clock">00:00</div>                            
            <div class="widget-subtitle plugin-date">Loading...</div>
            <div class="widget-controls">                                
                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
            </div>                            
            <div class="widget-buttons widget-c3">
                <div class="col">
                    <a href="#"><span class="fa fa-clock-o"></span></a>
                </div>
                <div class="col">
                    <a href="#"><span class="fa fa-bell"></span></a>
                </div>
                <div class="col">
                    <a href="#"><span class="fa fa-calendar"></span></a>
                </div>
            </div>                            
        </div>                        
        <!-- END WIDGET CLOCK -->
        
    </div>
</div>
<form class="form-horizontal col-md-12" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <div class="col-md-6">
            <label for="name"></label>
            <input type="text" name="name" class="form-control" placeholder="name" />
        </div>
        
    </div>
    @error('email')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
    <div class="form-group">
        <div class="col-md-6">
            <label for="address"></label>
            <input type="text" name="address" class="form-control" placeholder="address" />
        </div>
    </div>
    @error('password')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
    <div class="form-group">
        <div class="col-md-6">
        <label for="details"></label>
        <textarea class="form-control" name="details" rows="3"></textarea>
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-md-6">
            <label for="price"></label>
            <input type="text" name="price" class="form-control" placeholder="price" />
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
        <label for="image">Upload Image</label>
        <input type="file" name="image" class="form-control-file">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            <input type="submit" name="submit" class="btn btn-info btn-block" value="Add Hotel" />
        </div>
      
        <div class="col-md-6">
            <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
        </div>
    </div>

</form>
@stop