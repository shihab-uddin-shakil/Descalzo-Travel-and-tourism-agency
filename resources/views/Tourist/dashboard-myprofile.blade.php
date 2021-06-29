@extends('layout.master')
@section('content')
@section('account')
<div class="wishlist-link"><i class="fal fa-heart"></i><span class="wl_counter">3</span></div>
                        <div class="header-user-menu">
                            <div class="header-user-name">
                                <span><img src="{{asset('images/'.$data->image)}}" alt=""></span>
                                {{$data->username}}
                            </div>
                            <ul>
                                <li><a href="{{route('dashboard')}}"> Edit profile</a></li>
                                <li><a href="dashboard-bookings.html">  My Bookings  </a></li>
                                <li><a href="dashboard-review.html"> Reviews </a></li>
                                <li><a href="{{route('logout')}}">Log Out</a></li>
                            </ul>
                        </div>
@endsection
            <!--  wrapper  -->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!-- section-->
                    <section class="flat-header color-bg adm-header">
                        <div class="wave-bg wave-bg2"></div>
                        <div class="container">
                            <div class="dasboard-wrap fl-wrap">
                                <div class="dasboard-breadcrumbs breadcrumbs"><a href="#">Home</a><a href="#">Dashboard</a><span>Profile page</span></div>
                                <!--dasboard-sidebar-->
                                <div class="dasboard-sidebar">
                                    <div class="dasboard-sidebar-content fl-wrap">
                                        <div class="dasboard-avatar">
                                            <img src="{{asset('images/'.$data->image)}}"alt="">
                                        </div>
                                        <div class="dasboard-sidebar-item fl-wrap">
                                            <h3>
                                                <span>Welcome </span>
                                                {{$data->username}}
                                            </h3>
                                        </div>
                                        <!-- <a href="dashboard-add-listing.html" class="ed-btn">Add Hotel</a>                                        
                                        <div class="user-stats fl-wrap">
                                            <ul>
                                                <li>
                                                    Listings	
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    Bookings
                                                    <span>32</span>	
                                                </li>
                                                <li>
                                                    Reviews	
                                                    <span>9</span>	
                                                </li>
                                            </ul>
                                        </div> -->
                                        <a href="{{route('logout')}}" class="log-out-btn color-bg">Log Out <i class="far fa-sign-out"></i></a>
                                    </div>
                                </div>
                                <!--dasboard-sidebar end--> 
                                <!-- dasboard-menu-->
                                <div class="dasboard-menu">
                                    <div class="dasboard-menu-btn color3-bg">Dashboard Menu <i class="fal fa-bars"></i></div>
                                    <ul class="dasboard-menu-wrap">
                                <!-- , ['id' => $tourist->id] -->
                                        <li>
                                            <a href="{{route('dashboard')}}" class="user-profile-act"><i class="far fa-user"></i>Profile</a>
                                            <ul>
                                                <li><a href="dashboard-myprofile.html">Edit profile</a></li>
                                                <li><a href="dashboard-password.html">Change Password</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{route('dashboardMessages')}}"><i class="far fa-envelope"></i> Inbox <span>3</span></a></li>
                                        <li><a href="{{route('dashboardBookings')}}"> <i class="far fa-calendar-check"></i> My Bookings <span>2</span></a></li>
                                        <li><a href="{{route('dashboardReview')}}"><i class="far fa-comments"></i> Reviews </a></li>
                                    </ul>
                                </div>
                                <!--dasboard-menu end-->
                            </div>
                        </div>
                    </section>
                    <!-- section end-->
                    <!-- section-->
                    <section class="middle-padding">
                        <div class="container">
                            <!--dasboard-wrap-->
                            <div class="dasboard-wrap fl-wrap">
                                <!-- dashboard-content--> 
                                <div class="dashboard-content fl-wrap">
                                    <div class="box-widget-item-header">
                                        <h3> Your Profile</h3>
                                    </div>
                                    <!-- profile-edit-container--> 
                                    <div class="profile-edit-container">

                                        
                                    <form action="" method="post" enctype="multipart/form-data">
                                        
                                        <div class="custom-form">
                                            @csrf
                                            <label>Your Name <i class="far fa-user"></i></label>
                                            <input type="text" placeholder="" name="username" 
                                            value="{{$data->username}}"/>
                                           
                                            <label>Email Address<i class="far fa-envelope"></i>  </label>
                                            <input type="text" placeholder="" name="email" value="{{$data->email}}"/>
                                            <label>Phone<i class="far fa-phone"></i>  </label>
                                            <input type="text" placeholder="" name="phone"value="{{$data->phone}}"/>
                                            <label> Adress <i class="fas fa-map-marker"></i>  </label>
                                            <input type="text" name="address" placeholder="" value="{{$data->address}}"/>
                                            
                                            <div class="row">
                                               
                                                <div class="col-sm-3">
                                                    <label>Change Avatar</label> 
                                                    <div class="add-list-media-wrap">
															
																<div class="fu-text">
																	<span><i class="far fa-cloud-upload-alt"></i> Click here or drop files to upload</span>
																	<div class="photoUpload-files fl-wrap"></div>
																</div>
																<input type="file" name="image" class="">
														
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                            <div class="col-md-6">
                                                <input type="submit" name="submit" value="Update" />
                                            </div>
                                    </form>




                                    </div>
                                    <!-- profile-edit-container end--> 
                                    <!-- <div class="box-widget-item-header mat-top">
                                        <h3>Your  Tariff Plan</h3>
                                    </div> -->
                                    <!-- profile-edit-container--> 
                                    
 
                                    <!-- profile-edit-container end-->                                     
                                </div>
                                <!-- dashboard-list-box end--> 
                            </div>
                            <!-- dasboard-wrap end-->
                        </div>
                    </section>
                    <div class="limit-box fl-wrap"></div>
                </div>
                <!-- content end-->
            </div>
            <!--wrapper end -->
@section('map-model')
            <!--map-modal -->
            <div class="map-modal-wrap">
                <div class="map-modal-wrap-overlay"></div>
                <div class="map-modal-item">
                    <div class="map-modal-container fl-wrap">
                        <h3>Hotel Title</h3>
                        <div class="map-modal fl-wrap">
                            <div id="singleMap" data-latitude="40.7" data-longitude="-73.1"></div>
                        </div>
                        <a href="#" class="btn color2-bg">View Details <i class="fal fa-angle-right"></i></a>
                        <div class="map-modal-close"><i class="far fa-times"></i></div>
                    </div>
                </div>
            </div>
            <!--map-modal end --> 
@endsection           
@endsection