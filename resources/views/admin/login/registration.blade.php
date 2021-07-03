<!DOCTYPE html>
<html lang="en" class="body-full-height">

<head>
    <!-- META SECTION -->
    <title>Descalzo Registration </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="{{ asset('admin_template/favicon.ico') }}" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('admin_template/css/theme-default.css') }}" />
    <!-- EOF CSS INCLUDE -->
</head>

<body>

    <div class="login-container lightmode">

        <div class="login-box animated fadeInDown">

            <div class="login-body">
                <div>
                    <h2>Descalzo</h2>
                </div>
                <div class="login-title"><strong>Sign Up</strong> to your account</div>
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="Name"></label>
                            <input type="text" name="name" class="form-control" placeholder="Full-Name" value="{{old('name')}}" />
                        </div>
                    </div>
                    @error('name')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <!-- @if($errors->has('name'))
                    {
                        <strong>{{$errors->first('name')}}</strong>
                    }
                    @endif -->
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="Username"></label>
                            <input type="text" name="username" class="form-control" placeholder="username" value="{{old('username')}}"/>
                        </div>
                    </div>
                    @error('username')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="email"></label>
                            <input type="text" name="email" class="form-control" placeholder="E-mail" value="{{old('email')}}"/>
                        </div>
                    </div>
                    @error('email')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="password"></label>
                            <input type="password" name="password" class="form-control" placeholder="Password"/>
                        </div>
                    </div>
                    @error('password')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="image">Upload Image</label>
                            <input type="file" name="image" class="form-control-file" id="image">
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <div class="col-md-12">
                            <label for="ConfirmPassword"></label>
                            <input type="password" name="pconfirm" class="form-control" placeholder="Confirm Password"/>
                        </div>
                    </div>
                    @error('password')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror -->
                    <div class="form-group">
                        <div class="col-md-6">
                            <input type="submit" name="submit" class="btn btn-info btn-block" value="Sign Up" />
                        </div>
                        <div class="col-md-6">
                        <a href="{{route('login')}}" class="btn btn-info btn-block" >
                            <!-- <input type="submit" name="submit" class="btn btn-info btn-block" value="Sign Up" /> -->
                            Log In
                        </a>
                        </div>
                    </div>

                </form>
            </div>
            <div>

            </div>
        </div>

    </div>

</body>

</html>
