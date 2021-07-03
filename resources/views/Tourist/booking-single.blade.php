@extends('layout.master')
@section('content')
@section('account')
<div class="wishlist-link"><i class="fal fa-heart"></i><span class="wl_counter">3</span></div>
                        <div class="header-user-menu">
                            <div class="header-user-name">
                                <span><img src="{{asset('images/'.$data->image)}}" alt=""></span>
                                {{$data->name}}
                            </div>
                            <ul>
                                <li><a href="{{route('dashboard')}}"> Edit profile</a></li>
                                <li><a href="dashboard-bookings.html">  My Bookings  </a></li>
                                <li><a href="dashboard-review.html"> Reviews </a></li>
                                <li><a href="{{route('logout')}}">Log Out</a></li>
                            </ul>
                        </div>
@endsection
            <!--  header end -->
            <!--  wrapper  -->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <div class="breadcrumbs-fs fl-wrap">
                        <div class="container">
                            <div class="breadcrumbs fl-wrap"><a href="#">Home</a><a href="#">Pages</a><span>Booking Page</span></div>
                        </div>
                    </div>
                    <section class="middle-padding gre y-blue-bg">
                        <div class="container">
                            <div class="list-main-wrap-title single-main-wrap-title fl-wrap">
                                <h2>Booking form for : <span>Descalzo</span></h2>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="bookiing-form-wrap">
                                        <ul id="progressbar">
                                            <li class="active">Booking Info</li>
                                        </ul>
                                        <!--   list-single-main-item -->
                                        <div class="list-single-main-item fl-wrap hidden-section tr-sec">
                                            <div class="profile-edit-container">
                                                <div class="custom-form">
                                                    <form method="post">
                                                        <fieldset class="fl-wrap book_mdf">
                                                            <div class="list-single-main-item-title fl-wrap">
                                                                <h3>Booking Information</h3>
                                                            </div>
                                                            <div class="row">
                                                                <!-- <div class="col-sm-6">
                                                                    <label>First Name <i class="far fa-user"></i></label>
                                                                    <input type="text" name="name" value="{{$data['name']}}"/>                                                  
                                                                </div> -->
                                                                <div class="col-sm-6">
                                                                    <label>User Name <i class="far fa-user"></i></label>
                                                                    <input type="text" name="username" value="{{$data['username']}}"/> 
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <label>Email Address<i class="far fa-envelope"></i>  </label>
                                                                    <input type="text" name="email" value="{{$data['email']}}"/>                                                  
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label>Phone<i class="far fa-phone"></i>  </label>
                                                                    <input type="text" name="phone"  value="{{$data['phone']}}"/>
                                                                </div>
                                                            </div>
                                                            <div class="list-single-main-item-title fl-wrap">
                                                                <h3>Hotel Information</h3>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <label>Hotel Name <i class="far fa-user"></i></label>
                                                                    <input type="text" name="name" value="{{$hotel['name']}}"/>                                                  
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label>Price <i class="far fa-user"></i></label>
                                                                    <input type="text" name="price" value="{{$hotel['price']}}"/> 
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <label>Address <i class="far fa-user"></i></label>
                                                                    <input type="text" name="address" value="{{$hotel['address']}}"/>                                                  
                                                                </div>
                                                                
                                                            </div>
                                                            <input type="hidden" name="tid" value="{{$data['id']}}">
                                                            <input type="hidden" name="hid" value="{{$hotel['id']}}">
                            
                                                            
                                                            <div class="col-md-6">
                            <input type="submit" name="submit" class="" value="Book" />
                        </div>
                                                        </fieldset>
    
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!--   list-single-main-item end -->
                                    </div>
                                </div>
                             
                            </div>
                        </div>
                    </section>
                    <!-- section end -->
                </div>
                <!-- content end-->
            </div>
            <!--wrapper end -->
            <!--footer -->

            <!--footer end -->           
            <!--register form -->
            <div class="main-register-wrap modal">
                <div class="reg-overlay"></div>
                <div class="main-register-holder">
                    <div class="main-register fl-wrap">
                        <div class="close-reg color-bg"><i class="fal fa-times"></i></div>
                        <ul class="tabs-menu">
                            <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                            <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
                        </ul>
                        <!--tabs -->                       
                        <div id="tabs-container">
                            <div class="tab">
                                <!--tab -->
                                <div id="tab-1" class="tab-content">
                                    <h3>Sign In <span>Easy<strong>Book</strong></span></h3>
                                    <div class="custom-form">
                                        <form method="post"  name="registerform">
                                            <label>Username or Email Address <span>*</span> </label>
                                            <input name="email" type="text"   onClick="this.select()" value="">
                                            <label >Password <span>*</span> </label>
                                            <input name="password" type="password"   onClick="this.select()" value="" >
                                            <button type="submit"  class="log-submit-btn"><span>Log In</span></button>
                                            <div class="clearfix"></div>
                                            <div class="filter-tags">
                                                <input id="check-a12" type="checkbox" name="check">
                                                <label for="check-a12">Remember me</label>
                                            </div>
                                        </form>
                                        <div class="lost_password">
                                            <a href="#">Lost Your Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <!--tab end -->
                                <!--tab -->
                                <div class="tab">
                                    <div id="tab-2" class="tab-content">
                                        <h3>Sign Up <span>Easy<strong>Book</strong></span></h3>
                                        <div class="custom-form">
                                            <form method="post"   name="registerform" class="main-register-form" id="main-register-form2">
                                                <label >Full Name <span>*</span> </label>
                                                <input name="name" type="text"   onClick="this.select()" value="">
                                                <label>Email Address <span>*</span></label>
                                                <input name="email" type="text"  onClick="this.select()" value="">
                                                <label >Password <span>*</span></label>
                                                <input name="password" type="password"   onClick="this.select()" value="" >
                                                <button type="submit"     class="log-submit-btn"  ><span>Register</span></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--tab end -->
                            </div>
                            <!--tabs end -->
                            <div class="log-separator fl-wrap"><span>or</span></div>
                            <div class="soc-log fl-wrap">
                                <p>For faster login or register use your social account.</p>
                                <a href="#" class="facebook-log"><i class="fab fa-facebook-f"></i>Connect with Facebook</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--register form end -->
            <a class="to-top"><i class="fas fa-caret-up"></i></a>
        </div>
        <!-- Main end -->

        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&libraries=places&callback=initAutocomplete"></script>        
    </body>
</html>