@extends('layout.master')
@section('content')
@section('account')
<div class="wishlist-link"><i class="fal fa-heart"></i><span class="wl_counter">3</span></div>
                        <div class="header-user-menu">
                            <div class="header-user-name">
                                <span><img src="{{asset('template/images/avatar/4.jpg')}}" alt=""></span>
                                My account
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
                                                <li><a href="">Edit profile</a></li>
                                                <li><a href="dashboard-password.html">Change Password</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{route('dashboardMessages')}}" class="user-profile-act"><i class="far fa-envelope"></i> Inbox <span>3</span></a></li>
                                        <!-- <li>
                                            <a href="dashboard-listing-table.html"><i class="far fa-th-list"></i> My listigs  </a>
                                            <ul>
                                                <li><a href="#">Active</a><span>5</span></li>
                                                <li><a href="#">Pending</a><span>2</span></li>
                                                <li><a href="#">Expire</a><span>3</span></li>
                                            </ul>
                                        </li> -->
                                        <li><a href="{{route('dashboardBookings')}}"> <i class="far fa-calendar-check"></i> My Bookings <span>2</span></a></li>
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
                                    <!-- dashboard-list-box-->         
                                    <div class="dashboard-list-box fl-wrap">
                                        <div class="dashboard-header fl-wrap">
                                            <h3>Indox</h3>
                                        </div>
                                        <div class="row">
                                            <!-- chat-box--> 
                                            <div class="col-sm-8">
                                                <div class="chat-box fl-wrap grey-blue-bg ">
                                                    <!-- message--> 
                                                    <div class="chat-message chat-message_guest fl-wrap">
                                                        <div class="dashboard-message-avatar">
                                                            <img src="images/avatar/1.jpg" alt="">
                                                            <span>Andy</span>
                                                        </div>
                                                        <span class="massage-date">25 may 2018  <span>7.51 PM</span></span>
                                                        <p>Vivamus lobortis vel nibh nec maximus. Donec dolor erat, rutrum ut feugiat sed, ornare vitae nunc. Donec massa nisl, bibendum id ultrices sed, accumsan sed dolor.</p>
                                                    </div>
                                                    <!-- message end-->
                                                    <!-- message--> 
                                                    <div class="chat-message chat-message_user fl-wrap">
                                                        <div class="dashboard-message-avatar">
                                                            <img src="images/avatar/4.jpg" alt="">
                                                            <span>Jessie</span>
                                                        </div>
                                                        <span class="massage-date">25 may 2018  <span>7.51 PM</span></span>
                                                        <p>Nulla eget erat consequat quam feugiat dapibus eget sed mauris.</p>
                                                    </div>
                                                    <!-- message end-->                                             
                                                    <!-- message--> 
                                                    <div class="chat-message chat-message_guest fl-wrap">
                                                        <div class="dashboard-message-avatar">
                                                            <img src="images/avatar/1.jpg" alt="">
                                                            <span>Andy</span>
                                                        </div>
                                                        <span class="massage-date">25 may 2018  <span>7.51 PM</span></span>
                                                        <p>Sed non neque faucibus, condimentum lectus at, accumsan enim. Fusce pretium egestas cursus..</p>
                                                    </div>
                                                    <!-- message end--> 
                                                    <!-- message--> 
                                                    <div class="chat-message chat-message_user fl-wrap">
                                                        <div class="dashboard-message-avatar">
                                                            <img src="images/avatar/4.jpg" alt="">
                                                            <span>Jessie</span>
                                                        </div>
                                                        <span class="massage-date">25 may 2018  <span>7.51 PM</span></span>
                                                        <p>Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat .</p>
                                                    </div>
                                                    <!-- message end-->                                           
                                                </div>
                                                <div class="message-input fl-wrap">
                                                    <textarea  placeholder="Type Message"></textarea>                                                 
                                                    <button type="submit"><i class="fal fa-paper-plane"></i></button>
                                                </div>
                                            </div>
                                            <!-- chat-box end--> 
                                            <!-- chat-contacts--> 
                                            <div class="col-sm-4">
                                                <div class="chat-contacts fl-wrap">
                                                    <!-- chat-contacts-item-->
                                                    <a class="chat-contacts-item" href="#">
                                                        <div class="dashboard-message-avatar">
                                                            <img src="images/avatar/2.jpg" alt="">
                                                            <div class="message-counter">2</div>
                                                        </div>
                                                        <div class="chat-contacts-item-text">
                                                            <h4>Mark Rose</h4>
                                                            <span>27 Dec 2018 </span>
                                                            <p>Vivamus lobortis vel nibh nec maximus. Donec dolor erat, rutrum ut feugiat sed, ornare vitae nunc. Donec massa nisl, bibendum id ultrices sed, accumsan sed dolor.</p>
                                                        </div>
                                                    </a>
                                                    <!-- chat-contacts-item -->
                                                    <!-- chat-contacts-item-->
                                                    <a class="chat-contacts-item" href="#">
                                                        <div class="dashboard-message-avatar">
                                                            <img src="images/avatar/avatar-bg.png" alt="">
                                                            <div class="message-counter">1</div>
                                                        </div>
                                                        <div class="chat-contacts-item-text">
                                                            <h4>Adam Koncy</h4>
                                                            <span>27 Dec 2018 </span>
                                                            <p>Vivamus lobortis vel nibh nec maximus. Donec dolor erat, rutrum ut feugiat sed, ornare vitae nunc. Donec massa nisl, bibendum id ultrices sed, accumsan sed dolor.</p>
                                                        </div>
                                                    </a>
                                                    <!-- chat-contacts-item -->
                                                    <!-- chat-contacts-item-->
                                                    <a class="chat-contacts-item chat-contacts-item_active" href="#">
                                                        <div class="dashboard-message-avatar">
                                                            <img src="images/avatar/1.jpg" alt="">
                                                            <div class="message-counter">3</div>
                                                        </div>
                                                        <div class="chat-contacts-item-text">
                                                            <h4>Andy Smith</h4>
                                                            <span>27 Dec 2018 </span>
                                                            <p>Vivamus lobortis vel nibh nec maximus. Donec dolor erat, rutrum ut feugiat sed, ornare vitae nunc. Donec massa nisl, bibendum id ultrices sed, accumsan sed dolor.</p>
                                                        </div>
                                                    </a>
                                                    <!-- chat-contacts-item --> 
                                                    <!-- chat-contacts-item-->
                                                    <a class="chat-contacts-item" href="#">
                                                        <div class="dashboard-message-avatar">
                                                            <img src="images/avatar/5.jpg" alt="">
                                                            <div class="message-counter">4</div>
                                                        </div>
                                                        <div class="chat-contacts-item-text">
                                                            <h4>Joe Frick</h4>
                                                            <span>27 Dec 2018 </span>
                                                            <p>Vivamus lobortis vel nibh nec maximus. Donec dolor erat, rutrum ut feugiat sed, ornare vitae nunc. Donec massa nisl, bibendum id ultrices sed, accumsan sed dolor.</p>
                                                        </div>
                                                    </a>
                                                    <!-- chat-contacts-item -->
                                                    <!-- chat-contacts-item-->
                                                    <a class="chat-contacts-item" href="#">
                                                        <div class="dashboard-message-avatar">
                                                            <img src="images/avatar/avatar-bg.png" alt="">
                                                        </div>
                                                        <div class="chat-contacts-item-text">
                                                            <h4>Alise Goovy</h4>
                                                            <span>27 Dec 2018 </span>
                                                            <p>Vivamus lobortis vel nibh nec maximus. Donec dolor erat, rutrum ut feugiat sed, ornare vitae nunc. Donec massa nisl, bibendum id ultrices sed, accumsan sed dolor.</p>
                                                        </div>
                                                    </a>
                                                    <!-- chat-contacts-item -->
                                                    <!-- chat-contacts-item-->
                                                    <a class="chat-contacts-item" href="#">
                                                        <div class="dashboard-message-avatar">
                                                            <img src="images/avatar/3.jpg" alt="">
                                                        </div>
                                                        <div class="chat-contacts-item-text">
                                                            <h4>Freddy Kovalsky</h4>
                                                            <span>27 Dec 2018 </span>
                                                            <p>Vivamus lobortis vel nibh nec maximus. Donec dolor erat, rutrum ut feugiat sed, ornare vitae nunc. Donec massa nisl, bibendum id ultrices sed, accumsan sed dolor.</p>
                                                        </div>
                                                    </a>
                                                    <!-- chat-contacts-item -->                                                
                                                    <!-- chat-contacts-item-->
                                                    <a class="chat-contacts-item" href="#">
                                                        <div class="dashboard-message-avatar">
                                                            <img src="images/avatar/avatar-bg.png" alt="">
                                                        </div>
                                                        <div class="chat-contacts-item-text">
                                                            <h4>Cristiano Olando</h4>
                                                            <span>27 Dec 2018 </span>
                                                            <p>Vivamus lobortis vel nibh nec maximus. Donec dolor erat, rutrum ut feugiat sed, ornare vitae nunc. Donec massa nisl, bibendum id ultrices sed, accumsan sed dolor.</p>
                                                        </div>
                                                    </a>
                                                    <!-- chat-contacts-item -->                                                
                                                </div>
                                            </div>
                                            <!-- chat-contacts end--> 
                                        </div>
                                    </div>
                                    <!-- dashboard-list-box end--> 
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