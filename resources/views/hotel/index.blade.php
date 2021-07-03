<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Login Template</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href=" {{ asset ('admin_template/favicon.ico')}} " type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="{{asset('admin_template/css/theme-default.css')}} "/>
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
        
        <div class="login-container lightmode">
        
            <div class="login-box animated fadeInDown">
                <div class="text-center text-uppercase" ><h2>D E S C A L Z O</h2></div>
                <div class="login-body">
                    <div class="login-title"><strong>Log In</strong> to your account</div>

                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="name"></label>
                                <input type="text" name="name" class="form-control" placeholder="name" />
                            </div>
                            
                        </div>
                        @error('email')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="address"></label>
                                <input type="text" name="address" class="form-control" placeholder="address" />
                            </div>
                        </div>
                        @error('password')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <div class="form-group">
                            <div class="col-md-12">
                            <label for="details"></label>
                            <textarea class="form-control" name="details" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="email"></label>
                                <input type="text" name="email" class="form-control" placeholder="email" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="website"></label>
                                <input type="text" name="website" class="form-control" placeholder="website" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="phone"></label>
                                <input type="text" name="phone" class="form-control" placeholder="phone" />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="price"></label>
                                <input type="text" name="price" class="form-control" placeholder="price" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                            <label for="image">Upload Image</label>
                            <input type="file" name="image" class="form-control-file">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <input type="submit" name="submit" class="btn btn-info btn-block" value="Log In" />
                            </div>
                          
                            <div class="col-md-6">
                                <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
                            </div>
                        </div>
     
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2021 Descalzo
                    </div>
                    {{-- <div class="pull-right">
                        <a href="#">About</a> |
                        <a href="#">Privacy</a> |
                        <a href="#">Contact Us</a>
                    </div> --}}
                </div>
            </div>
        </div>

    </body>
</html>






