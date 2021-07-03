@extends('layout.master')
@section('content')
@section('account')
<div class="wishlist-link"><i class="fal fa-heart"></i><span class="wl_counter">3</span></div>
                        <div class="header-user-menu">
                            <div class="header-user-name">
                                <span><img src="{{asset('template/images/avatar/4.jpg')}}" alt=""></span>
                                
                            </div>
                            <ul>
                                <li><a href="{{route('dashboard')}}"> Edit profile</a></li>
                                <li><a href="dashboard-bookings.html">  My Bookings  </a></li>
                                <li><a href="dashboard-review.html"> Reviews </a></li>
                                <li><a href="#">Log Out</a></li>
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
                                            <img src="images/avatar/4.jpg" alt="">
                                        </div>
                                        <div class="dasboard-sidebar-item fl-wrap">
                                            <h3>
                                                <span>Welcome </span>
                                                Jessie Manrty
                                            </h3>
                                        </div>
                                        <a href="dashboard-add-listing.html" class="ed-btn">Add Hotel</a>                                        
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
                                        </div>
                                        <a href="#" class="log-out-btn color-bg">Log Out <i class="far fa-sign-out"></i></a>
                                    </div>
                                </div>
                                <!--dasboard-sidebar end--> 
                                <!-- dasboard-menu-->
                                <div class="dasboard-menu">
                                    <div class="dasboard-menu-btn color3-bg">Dashboard Menu <i class="fal fa-bars"></i></div>
                                    <ul class="dasboard-menu-wrap">
                                        <li>
                                            <a href="{{route('dashboard')}}"><i class="far fa-user"></i>Profile</a>
                                            <ul>
                                                <li><a href="dashboard-myprofile.html">Edit profile</a></li>
                                                <li><a href="dashboard-password.html">Change Password</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{route('dashboardMessages')}}"><i class="far fa-envelope"></i> Inbox <span>3</span></a></li>
                                        <!-- <li>
                                            <a href="dashboard-listing-table.html"><i class="far fa-th-list"></i> My listigs  </a>
                                            <ul>
                                                <li><a href="#">Active</a><span>5</span></li>
                                                <li><a href="#">Pending</a><span>2</span></li>
                                                <li><a href="#">Expire</a><span>3</span></li>
                                            </ul>
                                        </li> -->
                                        <li><a href="{{route('dashboardBookings')}}" class="user-profile-act"> <i class="far fa-calendar-check"></i> My Bookings <span>2</span></a></li>
                                        <li><a href="{{route('dashboardReview')}}"><i class="far fa-comments"></i> Reviews </a></li>
                                    </ul>
                                </div>
                                <!--dasboard-menu end-->
                                <!--Tariff Plan menu-->
                                <div   class="tfp-btn"><span>Tariff Plan : </span> <strong>Extended</strong></div>
                                <div class="tfp-det">
                                    <p>You Are on <a href="#">Extended</a> . Use link bellow to view details or upgrade. </p>
                                    <a href="#" class="tfp-det-btn color2-bg">Details</a>
                                </div>
                                <!--Tariff Plan menu end-->
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
                                @foreach($book as $booking)
                                    <div class="dashboard-list-box fl-wrap">
                                        <div class="dashboard-header fl-wrap">
                                            <h3>Bookings</h3>
                                        </div>
                                        <!-- dashboard-list end-->    
                                        <div class="dashboard-list">
                                            <div class="dashboard-message">
                                                <a href="{{url('delete/'.$booking->id)}}">Cancel</a>
                                                <!-- <span class="new-dashboard-item">New</span> -->
                                                <div class="dashboard-message-text">
                                                    <h4>{{$booking->name}}</h4>
                                                    <div class="booking-details fl-wrap">
                                                        <span class="booking-title">Listing Item :</span> :
                                                        <span class="booking-text"><a href="listing-sinle.html">{{$booking->name}}</a></span>
                                                    </div>
                                                    <div class="booking-details fl-wrap">
                                                        <span class="booking-title">Persons :</span>   
                                                        <span class="booking-text">4 Peoples</span>
                                                    </div>
                                                    <div class="booking-details fl-wrap">
                                                        <span class="booking-title">Booking Date :</span>   
                                                        <span class="booking-text">02.03.2018  - 10.03.2018</span>
                                                    </div>
                                                    <div class="booking-details fl-wrap">                                                               
                                                        <span class="booking-title">Address :</span>  
                                                        <span class="booking-text"><a href="#" target="_top">{{$booking->destination}}</a></span>
                                                    </div>
                                                    <div class="booking-details fl-wrap">
                                                        <span class="booking-title">Phone :</span>   
                                                        <span class="booking-text"><a href="tel:+496170961709" target="_top">+496170961709</a></span>
                                                    </div>
                                                    <div class="booking-details fl-wrap">
                                                        <span class="booking-title">Amount :</span> 
                                                        <span class="booking-text"> <strong class="done-paid">Paid  </strong>{{$booking->amount}}$</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- dashboard-list end-->    

                                    </div>
                                    @endforeach
                                    <!-- pagination-->
                                    <div class="pagination">
                                        <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
                                        <a href="#" class="current-page">1</a>
                                        <a href="#">2</a>
                                        <a href="#">3</a>
                                        <a href="#">4</a>
                                        <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
                                    </div>
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