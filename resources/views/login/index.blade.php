<!DOCTYPE html>
<html lang="en" class="body-full-height">

<head>
    <!-- META SECTION -->
    <title>Descalzo Login </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="{{ asset('template/favicon.ico') }}" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('template/css/theme-default.css') }}" />
    <!-- EOF CSS INCLUDE -->
</head>

<body>

    <div class="login-container lightmode">

        <div class="login-box animated fadeInDown">

            <div class="login-body">
                <div>
                    <h2>Deacalzo</h2>
                </div>
                <div class="login-title"><strong>Log In</strong> to your account</div>
                <form class="form-horizontal" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="email"></label>
                            <input type="text" name="email" class="form-control" placeholder="E-mail" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="password"></label>
                            <input type="password" name="password" class="form-control" placeholder="Password" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
                        </div>
                        <div class="col-md-6">
                            <input type="submit" name="submit" class="btn btn-info btn-block" value="Log In" />
                        </div>
                    </div>

                </form>
                <br>
                {{ session('msg') }}
                <br>
                @foreach ($errors->all() as $error)
                    {{ $error }} <br>
                @endforeach
            </div>
            <div>

            </div>
        </div>

    </div>

</body>

</html>
