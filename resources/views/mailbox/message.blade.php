@extends('main.index')
@section('content')

  <!-- START BREADCRUMB -->
  <ul class="breadcrumb push-down-0">
    <li><a href="#">Home</a></li>
    <li><a href="#">Dashboard</a></li>
    <li><a href="#">Mailbox</a></li>
    <li class="active">Message</li>
</ul>
<!-- END BREADCRUMB -->                

<!-- START CONTENT FRAME -->
<div class="content-frame">                                    
    <!-- START CONTENT FRAME TOP -->
    <div class="content-frame-top">                        
        <div class="page-title">                    
            <h2><span class="fa fa-file-text"></span> Message</h2>
        </div>                                                                                
        
        <div class="pull-right">                                                                                    
            <button class="btn btn-default"><span class="fa fa-print"></span> Print</button>
            <button class="btn btn-default content-frame-left-toggle"><span class="fa fa-bars"></span></button>
        </div>                        
    </div>
    <!-- END CONTENT FRAME TOP -->
    
    <!-- START CONTENT FRAME LEFT -->
    <div class="content-frame-left">
        <div class="block">
            <a href="pages-mailbox-compose.html" class="btn btn-danger btn-block btn-lg"><span class="fa fa-edit"></span> COMPOSE</a>
        </div>
        <div class="block">
            <div class="list-group border-bottom">
                <a href="#" class="list-group-item"><span class="fa fa-inbox"></span> Inbox <span class="badge badge-success">3</span></a>
                <a href="#" class="list-group-item"><span class="fa fa-star"></span> Starred <span class="badge badge-warning">6</span></a>
                <a href="#" class="list-group-item"><span class="fa fa-rocket"></span> Sent</a>
                <a href="#" class="list-group-item"><span class="fa fa-flag"></span> Flagged</a>
                <a href="#" class="list-group-item"><span class="fa fa-trash-o"></span> Deleted <span class="badge badge-default">1.4k</span></a>                            
            </div>                        
        </div>
        <div class="block">
            <h4>Labels</h4>
            <div class="list-group list-group-simple">                                
                <a href="#" class="list-group-item"><span class="fa fa-circle text-success"></span> Clients</a>
                <a href="#" class="list-group-item"><span class="fa fa-circle text-warning"></span> Social</a>
                <a href="#" class="list-group-item"><span class="fa fa-circle text-danger"></span> Work</a>
                <a href="#" class="list-group-item"><span class="fa fa-circle text-info"></span> Family</a>
                <a href="#" class="list-group-item"><span class="fa fa-circle text-primary"></span> Friends</a>
            </div>
        </div>
    </div>
    <!-- END CONTENT FRAME LEFT -->
    
    <!-- START CONTENT FRAME BODY -->
    <div class="content-frame-body">
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="pull-left">
                    <img src="assets/images/users/user2.jpg" class="panel-title-image" alt="John Doe"/>
                    <h3 class="panel-title">John Doe <small>johndoe@domain.com</small></h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-default"><span class="fa fa-mail-reply"></span></button>
                    <button class="btn btn-default"><span class="fa fa-warning"></span></button>
                    <button class="btn btn-default"><span class="fa fa-trash-o"></span></button>                                    
                </div>
            </div>
            <div class="panel-body">
                <h3>Re: Product development <small class="pull-right text-muted"><span class="fa fa-clock-o"></span> Today, Sep 18, 14:33</small></h3>
                <p>Hello Dmitry,</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ligula risus, viverra sit amet purus id, ullamcorper venenatis leo. Ut vitae semper neque. Nunc vel lacus vel erat sodales ultricies sed sed massa. Duis non elementum velit. Nunc quis molestie dui. Nullam ullamcorper lectus in mattis volutpat. Nunc egestas felis sit amet ultrices euismod. Donec lacinia neque vel quam pharetra, non dignissim arcu semper. Donec ultricies, neque ut vehicula ultrices, ligula velit sodales purus, eget eleifend libero risus sed turpis. Fusce hendrerit vel dui ut pulvinar. Ut sed tristique ante, sed egestas turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Fusce sit amet dui at nunc laoreet facilisis. Proin consequat orci sollicitudin sem cursus, quis vehicula eros ultrices. Cras fermentum justo at nibh tincidunt, consectetur elementum est aliquam.</p>
                <p>Nam dignissim convallis nulla, vitae porta purus fringilla ac. Praesent consectetur ex eu dui efficitur sollicitudin. Mauris libero est, aliquam a diam maximus, dignissim laoreet lacus.</p>
                <p>Nulla ac nisi sodales, auctor dui et, consequat turpis. Cras dolor turpis, sagittis vel elit in, varius elementum arcu. Mauris aliquet lorem ac enim blandit, nec consequat tortor auctor. Sed eget nunc at justo congue mollis eget a urna. Phasellus in mauris quis tortor porta tristique at a risus.</p>
                <p class="text-muted"><strong>Best Regards<br/>John Doe</strong></p>      
                
                <div class="form-group push-up-20">
                    <label>Quick Reply</label>
                    <textarea class="form-control summernote_lite" rows="3" placeholder="Click to get editor"></textarea>
                </div>
            </div>
            <div class="panel-body panel-body-table">
                <h6>Attachments</h6>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th width="50">type</th><th>name</th><th width="100">size</th>
                    </tr>
                    <tr>
                        <td><span class="label label-primary">HTML</span></td><td><a href="#">index.html</a></td><td>54 Kb</td>
                    </tr>
                    <tr>
                        <td><span class="label label-success">CSS</span></td><td><a href="#">stylesheet.css</a></td><td>15 Kb</td>
                    </tr>                                    
                    <tr>
                        <td><span class="label label-danger">JS</span></td><td><a href="#">actions.js</a></td><td>3 Kb</td>
                    </tr>                                    
                </table>
            </div>
            <div class="panel-footer">
                <button class="btn btn-success pull-right"><span class="fa fa-mail-reply"></span> Post Reply</button>
            </div>
        </div>
    </div>
    <!-- END CONTENT FRAME BODY -->
</div>
<!-- END CONTENT FRAME --> 

@stop