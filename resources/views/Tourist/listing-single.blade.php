@extends('layout.master')
@section('content')
            <!--  wrapper  -->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--  section  -->
                    <section class="list-single-hero" data-scrollax-parent="true" id="sec1">
                        <div class="bg par-elem "  data-bg="{{$hotel['image']}}" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="list-single-hero-title fl-wrap">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="listing-rating-wrap">
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                        </div>
                                        <h2><span>{{$hotel['name']}}</span></h2>
                                        <div class="list-single-header-contacts fl-wrap">
                                            <ul>
                                                <li><i class="far fa-phone"></i><a  href="#">{{$hotel['phone']}}</a></li>
                                                <li><i class="far fa-map-marker-alt"></i><a  href="#">{{$hotel['address']}}</a></li>
                                                <li><i class="far fa-envelope"></i><a  href="#">{{$hotel['email']}}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <!--  list-single-hero-details-->
                                        <div class="list-single-hero-details fl-wrap">
                                            <!--  list-single-hero-rating-->
                                            <div class="list-single-hero-rating">
                                                <div class="rate-class-name">
                                                    <div class="score"><strong>Very Good</strong>2 Reviews </div>
                                                    <span>4.5</span>                                             
                                                </div>
                                                <!-- list-single-hero-rating-list-->
                                                <div class="list-single-hero-rating-list">
                                                    <!-- rate item-->
                                                    <div class="rate-item fl-wrap">
                                                        <div class="rate-item-title fl-wrap"><span>Cleanliness</span></div>
                                                        <div class="rate-item-bg" data-percent="100%">
                                                            <div class="rate-item-line color-bg"></div>
                                                        </div>
                                                        <div class="rate-item-percent">5.0</div>
                                                    </div>
                                                    <!-- rate item end-->
                                                    <!-- rate item-->
                                                    <div class="rate-item fl-wrap">
                                                        <div class="rate-item-title fl-wrap"><span>Comfort</span></div>
                                                        <div class="rate-item-bg" data-percent="90%">
                                                            <div class="rate-item-line color-bg"></div>
                                                        </div>
                                                        <div class="rate-item-percent">5.0</div>
                                                    </div>
                                                    <!-- rate item end-->                                                        
                                                    <!-- rate item-->
                                                    <div class="rate-item fl-wrap">
                                                        <div class="rate-item-title fl-wrap"><span>Staf</span></div>
                                                        <div class="rate-item-bg" data-percent="80%">
                                                            <div class="rate-item-line color-bg"></div>
                                                        </div>
                                                        <div class="rate-item-percent">4.0</div>
                                                    </div>
                                                    <!-- rate item end-->  
                                                    <!-- rate item-->
                                                    <div class="rate-item fl-wrap">
                                                        <div class="rate-item-title fl-wrap"><span>Facilities</span></div>
                                                        <div class="rate-item-bg" data-percent="90%">
                                                            <div class="rate-item-line color-bg"></div>
                                                        </div>
                                                        <div class="rate-item-percent">4.5</div>
                                                    </div>
                                                    <!-- rate item end--> 
                                                </div>
                                                <!-- list-single-hero-rating-list end-->
                                            </div>
                                            <!--  list-single-hero-rating  end-->
                                            <div class="clearfix"></div>
                                            <!-- list-single-hero-links-->
                                            <div class="list-single-hero-links">
                                                <a class="lisd-link" href="booking-single.html"><i class="fal fa-bookmark"></i> Book Now</a>
                                                <a class="custom-scroll-link lisd-link" href="#sec6"><i class="fal fa-comment-alt-check"></i> Add review</a>
                                            </div>
                                            <!--  list-single-hero-links end-->                                            
                                        </div>
                                        <!--  list-single-hero-details  end-->
                                    </div>
                                </div>
                                <div class="breadcrumbs-hero-buttom fl-wrap">
                                    <div class="breadcrumbs"><a href="#">Home</a><a href="#">Listings</a><a href="#">New York</a><span>Listing Single</span></div>
                                    <div class="list-single-hero-price">AWG/NIGHT<span>{{$hotel['price']}}$</span></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--  section  end-->
                    <!--  section  -->
                    <section class="grey-blue-bg small-padding scroll-nav-container" id="sec2">
                        <!--  scroll-nav-wrapper  -->
                        <div class="scroll-nav-wrapper fl-wrap">
                            <div class="hidden-map-container fl-wrap">
                                <input id="pac-input" class="controls fl-wrap controls-mapwn" type="text" placeholder="What Nearby ?   Bar , Gym , Restaurant ">
                                <div class="map-container">
                                    <div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="container">
                                <nav class="scroll-nav scroll-init">
                                    <ul>
                                        <li><a class="act-scrlink" href="#sec1">Top</a></li>
                                        <li><a href="#sec2">Details</a></li>
                                        <li><a href="#sec3">Amenities</a></li>
                                        <li><a href="#sec4">Rooms</a></li>
                                        <li><a href="#sec5">Reviews</a></li>
                                    </ul>
                                </nav>
                                <a href="#" class="show-hidden-map">  <span>On The Map</span> <i class="fal fa-map-marked-alt"></i></a>
                            </div>
                        </div>
                        <!--  scroll-nav-wrapper end  -->                    
                        <!--   container  -->
                        <div class="container">
                            <!--   row  -->
                            <div class="row">
                                <!--   datails -->
                                <div class="col-md-8">
                                    <div class="list-single-main-container ">
                                        <!-- fixed-scroll-column  -->
                                        <div class="fixed-scroll-column">
                                            <div class="fixed-scroll-column-item fl-wrap">
                                                <div class="showshare sfcs fc-button"><i class="far fa-share-alt"></i><span>Share </span></div>
                                                <div class="share-holder fixed-scroll-column-share-container">
                                                    <div class="share-container  isShare"></div>
                                                </div>
                                                <a class="fc-button custom-scroll-link" href="#sec6"><i class="far fa-comment-alt-check"></i> <span>  Add review </span></a>
                                                <a class="fc-button" href="#"><i class="far fa-heart"></i> <span>Save</span></a>
                                                <a class="fc-button" href="booking-single.html"><i class="far fa-bookmark"></i> <span> Book Now </span></a>
                                            </div>
                                        </div>
                                        <!-- fixed-scroll-column end   -->
                                        <div class="list-single-main-media fl-wrap">
                                            <!-- gallery-items   -->
                                            <div class="gallery-items grid-small-pad  list-single-gallery three-coulms lightgallery">
                                                <!-- 1 -->
                                                <div class="gallery-item ">
                                                    <div class="grid-item-holder">
                                                        <div class="box-item">
                                                            <img  src="{{asset('template/images/gal/9.jpg')}}"   alt="">
                                                            <a href="{{asset('template/images/gal/9.jpg')}}" class="gal-link popup-image"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 1 end -->
                                                <!-- 2 -->
                                                <div class="gallery-item">
                                                    <div class="grid-item-holder">
                                                        <div class="box-item">
                                                            <img  src="{{asset('template/images/gal/7.jpg')}}"   alt="">
                                                            <a href="images/gal/7.jpg" class="gal-link popup-image"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 2 end -->
                                                <!-- 3 -->
                                                <div class="gallery-item gallery-item-second">
                                                    <div class="grid-item-holder">
                                                        <div class="box-item">
                                                            <img  src="{{asset('template/images/gal/3.jpg')}}"   alt="">
                                                            <a href="{{asset('template/images/gal/3.jpg')}}" class="gal-link popup-image"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 3 end -->
                                                <!-- 4 -->
                                                <div class="gallery-item">
                                                    <div class="grid-item-holder">
                                                        <div class="box-item">
                                                            <img  src="{{asset('template/images/gal/4.jpg')}}"   alt="">
                                                            <a href="{{asset('template/images/gal/4.jpg')}}" class="gal-link popup-image"><i class="fa fa-search"  ></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 4 end -->
                                                <!-- 5 -->
                                                <div class="gallery-item">
                                                    <div class="grid-item-holder">
                                                        <div class="box-item">
                                                            <img  src="{{asset('template/images/gal/5.jpg')}}"   alt="">
                                                            <a href="{{asset('template/images/gal/5.jpg')}}" class="gal-link popup-image"><i class="fa fa-search"  ></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 5 end -->
                                                <!-- 7 -->
                                                <div class="gallery-item">
                                                    <div class="grid-item-holder">
                                                        <div class="box-item">
                                                            <img  src="{{asset('template/images/gal/6.jpg')}}"   alt="">
                                                            <div class="more-photos-button dynamic-gal"  data-dynamicPath="[{'src': '{{asset('template/images/gal/2.jpg')}}'}, {'src': '{{asset('template/images/gal/8.jpg')}}'},{'src': '{{asset('template/images/gal/1.jpg')}}'}]">Other <span>4 photos</span><i class="far fa-long-arrow-right"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 7 end -->
                                            </div>
                                            <!-- end gallery items -->                                          
                                        </div>
                                        <!-- list-single-header end -->
                                        <div class="list-single-facts fl-wrap">
                                            <!-- inline-facts -->
                                            <div class="inline-facts-wrap">
                                                <div class="inline-facts">
                                                    <i class="fal fa-bed"></i>
                                                    <div class="milestone-counter">
                                                        <div class="stats animaper">
                                                            45
                                                        </div>
                                                    </div>
                                                    <h6>Hotel Rooms</h6>
                                                </div>
                                            </div>
                                            <!-- inline-facts end -->
                                            <!-- inline-facts  -->
                                            <div class="inline-facts-wrap">
                                                <div class="inline-facts">
                                                    <i class="fal fa-users"></i>
                                                    <div class="milestone-counter">
                                                        <div class="stats animaper">
                                                            2557
                                                        </div>
                                                    </div>
                                                    <h6>Customers Every Year</h6>
                                                </div>
                                            </div>
                                            <!-- inline-facts end -->
                                            <!-- inline-facts -->
                                            <div class="inline-facts-wrap">
                                                <div class="inline-facts">
                                                    <i class="fal fa-taxi"></i>
                                                    <div class="milestone-counter">
                                                        <div class="stats animaper">
                                                            15
                                                        </div>
                                                    </div>
                                                    <h6>Distance to Center</h6>
                                                </div>
                                            </div>
                                            <!-- inline-facts end -->
                                            <!-- inline-facts -->
                                            <div class="inline-facts-wrap">
                                                <div class="inline-facts">
                                                    <i class="fal fa-cocktail"></i>
                                                    <div class="milestone-counter">
                                                        <div class="stats animaper">
                                                            4
                                                        </div>
                                                    </div>
                                                    <h6>Restaurant Inside</h6>
                                                </div>
                                            </div>
                                            <!-- inline-facts end -->                                                                        
                                        </div>
                                        <!--   list-single-main-item -->
                                        <div class="list-single-main-item fl-wrap">
                                            <div class="list-single-main-item-title fl-wrap">
                                                <h3>About Hotel </h3>
                                            </div>
                                            <p>{{$hotel['details']}}</p>
                                            <a href="https://vimeo.com/70851162" class="btn flat-btn color-bg big-btn float-btn image-popup">Video Presentation <i class="fal fa-play"></i></a>
                                        </div>
                                        <!--   list-single-main-item end -->
                                        <!--   list-single-main-item -->
                                        <div class="list-single-main-item fl-wrap" id="sec3">
                                            <div class="list-single-main-item-title fl-wrap">
                                                <h3>Amenities</h3>
                                            </div>
                                            <div class="listing-features fl-wrap">
                                                <ul>
                                                    <li><i class="fal fa-rocket"></i> Elevator in building</li>
                                                    <li><i class="fal fa-wifi"></i> Free Wi Fi</li>
                                                    <li><i class="fal fa-parking"></i> Free Parking</li>
                                                    <li><i class="fal fa-snowflake"></i> Air Conditioned</li>
                                                    <li><i class="fal fa-plane"></i>Airport Shuttle</li>
                                                    <li><i class="fal fa-paw"></i> Pet Friendly</li>
                                                    <li><i class="fal fa-utensils"></i> Restaurant Inside</li>
                                                    <li><i class="fal fa-wheelchair"></i> Wheelchair Friendly</li>
                                                </ul>
                                            </div>
                                            <span class="fw-separator"></span>
                                            <div class="list-single-main-item-title no-dec-title fl-wrap">
                                                <h3>Tags</h3>
                                            </div>
                                            <div class="list-single-tags tags-stylwrap">
                                                <a href="#">Hotel</a>
                                                <a href="#">Hostel</a>
                                                <a href="#">Room</a>
                                                <a href="#">Spa</a>
                                                <a href="#">Restourant</a>
                                                <a href="#">Parking</a>                                                                               
                                            </div>
                                        </div>
                                        <!--   list-single-main-item end -->     
                                                    
   
                                        <div class="list-single-main-item fl-wrap" id="sec5">
                                            <div class="list-single-main-item-title fl-wrap">
                                                <h3>Item Reviews -  <span> 2 </span></h3>
                                            </div>
                                            <!--reviews-score-wrap-->   
                                            <div class="reviews-score-wrap fl-wrap">
                                                <div class="review-score-total">
                                                    <span>
                                                    4.5
                                                    <strong>Very Good</strong>
                                                    </span>
                                                    <a href="#" class="color2-bg">Add Review</a>
                                                </div>
                                                <div class="review-score-detail">
                                                    <!-- review-score-detail-list-->
                                                    <div class="review-score-detail-list">
                                                        <!-- rate item-->
                                                        <div class="rate-item fl-wrap">
                                                            <div class="rate-item-title fl-wrap"><span>Cleanliness</span></div>
                                                            <div class="rate-item-bg" data-percent="100%">
                                                                <div class="rate-item-line color-bg"></div>
                                                            </div>
                                                            <div class="rate-item-percent">5.0</div>
                                                        </div>
                                                        <!-- rate item end-->
                                                        <!-- rate item-->
                                                        <div class="rate-item fl-wrap">
                                                            <div class="rate-item-title fl-wrap"><span>Comfort</span></div>
                                                            <div class="rate-item-bg" data-percent="90%">
                                                                <div class="rate-item-line color-bg"></div>
                                                            </div>
                                                            <div class="rate-item-percent">5.0</div>
                                                        </div>
                                                        <!-- rate item end-->                                                        
                                                        <!-- rate item-->
                                                        <div class="rate-item fl-wrap">
                                                            <div class="rate-item-title fl-wrap"><span>Staf</span></div>
                                                            <div class="rate-item-bg" data-percent="80%">
                                                                <div class="rate-item-line color-bg"></div>
                                                            </div>
                                                            <div class="rate-item-percent">4.0</div>
                                                        </div>
                                                        <!-- rate item end-->  
                                                        <!-- rate item-->
                                                        <div class="rate-item fl-wrap">
                                                            <div class="rate-item-title fl-wrap"><span>Facilities</span></div>
                                                            <div class="rate-item-bg" data-percent="90%">
                                                                <div class="rate-item-line color-bg"></div>
                                                            </div>
                                                            <div class="rate-item-percent">4.5</div>
                                                        </div>
                                                        <!-- rate item end--> 
                                                    </div>
                                                    <!-- review-score-detail-list end-->
                                                </div>
                                            </div>
                                            <!-- reviews-score-wrap end -->   
                                            <div class="reviews-comments-wrap">
                                                <!-- reviews-comments-item -->  
                                                <div class="reviews-comments-item">
                                                    <div class="review-comments-avatar">
                                                        <img src="{{asset('template/images/avatar/2.jpg')}}" alt=""> 
                                                    </div>
                                                    <div class="reviews-comments-item-text">
                                                        <h4><a href="#">Liza Rose</a></h4>
                                                        <div class="review-score-user">
                                                            <span>4.4</span>
                                                            <strong>Good</strong>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <p>" Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. "</p>
                                                        <div class="reviews-comments-item-date"><span><i class="far fa-calendar-check"></i>12 April 2018</span><a href="#"><i class="fal fa-reply"></i> Reply</a></div>
                                                    </div>
                                                </div>
                                                <!--reviews-comments-item end--> 
                                                <!-- reviews-comments-item -->  
                                                <div class="reviews-comments-item">
                                                    <div class="review-comments-avatar">
                                                        <img src="{{asset('template/images/avatar/5.jpg')}}" alt=""> 
                                                    </div>
                                                    <div class="reviews-comments-item-text">
                                                        <h4><a href="#">Adam Koncy</a></h4>
                                                        <div class="review-score-user">
                                                            <span>4.7</span>
                                                            <strong>Very Good</strong>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere convallis purus non cursus. Cras metus neque, gravida sodales massa ut. "</p>
                                                        <div class="reviews-comments-item-date"><span><i class="far fa-calendar-check"></i>03 December 2017</span><a href="#"><i class="fal fa-reply"></i> Reply</a></div>
                                                    </div>
                                                </div>
                                                <!--reviews-comments-item end-->                                                                  
                                            </div>
                                        </div>
                                        <!-- list-single-main-item end -->   
                                        <!-- list-single-main-item -->   
                                        <div class="list-single-main-item fl-wrap" id="sec6">
                                            <div class="list-single-main-item-title fl-wrap">
                                                <h3>Add Review</h3>
                                            </div>
                                            <!-- Add Review Box -->
                                            <div id="add-review" class="add-review-box">
                                                <!-- Review Comment -->
                                                <form id="add-comment" class="add-comment  custom-form" name="rangeCalc" >
                                                    <fieldset>
                                                        <div class="review-score-form fl-wrap">
                                                            <div class="review-range-container">
                                                                <!-- review-range-item-->
                                                                <div class="review-range-item">
                                                                    <div class="range-slider-title">Cleanliness</div>
                                                                    <div class="range-slider-wrap ">
                                                                        <input type="text" class="rate-range" data-min="0" data-max="5"  name="rgcl"  data-step="1" value="4">
                                                                    </div>
                                                                </div>
                                                                <!-- review-range-item end --> 
                                                                <!-- review-range-item-->
                                                                <div class="review-range-item">
                                                                    <div class="range-slider-title">Comfort</div>
                                                                    <div class="range-slider-wrap ">
                                                                        <input type="text" class="rate-range" data-min="0" data-max="5"  name="rgcl"  data-step="1"  value="1">
                                                                    </div>
                                                                </div>
                                                                <!-- review-range-item end --> 
                                                                <!-- review-range-item-->
                                                                <div class="review-range-item">
                                                                    <div class="range-slider-title">Staf</div>
                                                                    <div class="range-slider-wrap ">
                                                                        <input type="text" class="rate-range" data-min="0" data-max="5"  name="rgcl"  data-step="1" value="5" >
                                                                    </div>
                                                                </div>
                                                                <!-- review-range-item end --> 
                                                                <!-- review-range-item-->
                                                                <div class="review-range-item">
                                                                    <div class="range-slider-title">Facilities</div>
                                                                    <div class="range-slider-wrap">
                                                                        <input type="text" class="rate-range" data-min="0" data-max="5"  name="rgcl"  data-step="1" value="3">
                                                                    </div>
                                                                </div>
                                                                <!-- review-range-item end -->                                     
                                                            </div>
                                                            <div class="review-total">
                                                                <span><input type="text" name="rg_total"  data-form="AVG({rgcl})" value="0"></span>    
                                                                <strong>Your Score</strong>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label><i class="fal fa-user"></i></label>
                                                                <input type="text" placeholder="Your Name *" value=""/>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label><i class="fal fa-envelope"></i>  </label>
                                                                <input type="text" placeholder="Email Address*" value=""/>
                                                            </div>
                                                        </div>
                                                        <textarea cols="40" rows="3" placeholder="Your Review:"></textarea>
                                                    </fieldset>
                                                    <button class="btn  big-btn flat-btn float-btn color2-bg" style="margin-top:30px">Submit Review <i class="fal fa-paper-plane"></i></button>
                                                </form>
                                            </div>
                                            <!-- Add Review Box / End -->
                                        </div>
                                        <!-- list-single-main-item end -->                                    
                                    </div>
                                </div>
                                <!--   datails end  -->
                                <!--   sidebar  -->
                                <div class="col-md-4">
                                    <!--box-widget-wrap -->  
                                    <div class="box-widget-wrap">
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap">
                                            <div class="box-widget">
                                                <div class="box-widget-content">
                                                    <div class="box-widget-item-header">
                                                        <h3> Book This Hotel</h3>
                                                    </div>

                <a href="{{route('bookHotel',[$hotel->id])}}">Book Now</a>
                <!-- <button class="btnaplly color2-bg book-btn">Book Now<i class="fal fa-paper-plane"></i></button> -->



                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->                                                                            
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap">
                                            <div class="box-widget">
                                                <div class="box-widget-content">
                                                    <div class="box-widget-item-header">
                                                        <h3> Contact Information</h3>
                                                    </div>
                                                    <div class="box-widget-list">
                                                        <ul>
                                                            <li><span><i class="fal fa-map-marker"></i> Adress :</span> <a href="#">{{$hotel['address']}}</a></li>
                                                            <li><span><i class="fal fa-phone"></i> Phone :</span> <a href="#">{{$hotel['phone']}}</a></li>
                                                            <li><span><i class="fal fa-envelope"></i> Mail :</span> <a href="#">{{$hotel['email']}}</a></li>
                                                            <li><span><i class="fal fa-browser"></i> Website :</span> <a href="#">{{$hotel['website']}}</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="list-widget-social">
                                                        <ul>
                                                            <li><a href="#" target="_blank" ><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="#" target="_blank" ><i class="fab fa-vk"></i></a></li>
                                                            <li><a href="#" target="_blank" ><i class="fab fa-instagram"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->                          
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap">
                                            <div class="box-widget">
                                                <div class="box-widget-content">
                                                    <div class="box-widget-item-header">
                                                        <h3> Price Range </h3>
                                                    </div>
                                                    <div class="claim-price-wdget fl-wrap">
                                                        <div class="claim-price-wdget-content fl-wrap">
                                                            <div class="pricerange fl-wrap"><span>Price : </span> {{$hotel['price']}} </div>
                                                            <div class="claim-widget-link fl-wrap"><span>Own or work here?</span><a href="#">Claim Now!</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                         
                                                        
                                    </div>
                                    <!--box-widget-wrap end -->  
                                </div>
                                <!--   sidebar end  -->
                            </div>
                            <!--   row end  -->
                        </div>
                        <!--   container  end  -->
                    </section>
                    <!--  section  end-->
                </div>
                <!-- content end-->
                <div class="limit-box fl-wrap"></div>
            </div>
            <!--wrapper end -->

            <!--booking-modal-wrap -->   
            <div class="booking-modal-wrap">
                <div class="booking-modal-container">
                    <div class="booking-modal-content fl-wrap">
                        <div class="booking-modal-info">
                            <div class="booking-modal-close color-bg"><i class="fa fa-times" aria-hidden="true"></i></div>
                            <div class="bg"  data-bg="images/bg/24.jpg" ></div>
                            <div class="overlay"></div>
                            <div class="booking-modal-info_content fl-wrap">
                                <h4>Luxury Hotel Spa</h4>
                                <ul>
                                    <li>Date : <span>05.05.2020</span></li>
                                    <li>Persons : <span>2</span></li>
                                    <li>Price : <span>$120</span> </li>
                                </ul>
                            </div>
                        </div>
                                    <div class="bookiing-form-wrap">
                                        <ul id="progressbar">
                                            <li class="active"><span>01.</span>Personal Info</li>
                                            <li><span>02.</span>Billing Address</li>
                                            <li><span>03.</span>Payment Method</li>
                                            <li><span>04.</span>Confirm</li>
                                        </ul>
                                        <!--   list-single-main-item -->
                                        <div class="list-single-main-item fl-wrap hidden-section tr-sec">
                                            <div class="profile-edit-container">
                                                <div class="custom-form">
                                                    <form>
                                                        <fieldset class="fl-wrap book_mdf">
                                                            <div class="list-single-main-item-title fl-wrap">
                                                                <h3>Your personal Information</h3>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <label>First Name <i class="far fa-user"></i></label>
                                                                    <input type="text" placeholder="Your Name" value=""/>                                                  
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label>Last Name <i class="far fa-user"></i></label>
                                                                    <input type="text" placeholder="Your Last Name" value=""/> 
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <label>Email Address<i class="far fa-envelope"></i>  </label>
                                                                    <input type="text" placeholder="yourmail@domain.com" value=""/>                                                  
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label>Phone<i class="far fa-phone"></i>  </label>
                                                                    <input type="text" placeholder="87945612233" value=""/>
                                                                </div>
                                                            </div>
                                                            <div class="log-massage">Existing Customer? <a href="#" class="modal-open">Click here to login</a></div>
                                                            <div class="log-separator fl-wrap"><span>or</span></div>
                                                            <div class="soc-log fl-wrap">
                                                                <p>For faster login or register use your social account.</p>
                                                                <a href="#" class="facebook-log"><i class="fab fa-facebook-f"></i>Connect with Facebook</a>
                                                            </div>
                                                            <div class="filter-tags">
                                                                <input id="check-a" type="checkbox" name="check">
                                                                <label for="check-a">By continuing, you agree to the<a href="#" target="_blank">Terms and Conditions</a>.</label>
                                                            </div>
                                                            <span class="fw-separator"></span>
                                                            <a  href="#"  class="next-form action-button btn no-shdow-btn color-bg">Billing Address <i class="fal fa-angle-right"></i></a>
                                                        </fieldset>
                                                        <fieldset class="fl-wrap book_mdf">
                                                            <div class="list-single-main-item-title fl-wrap">
                                                                <h3>Billing Address</h3>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <label>City <i class="fal fa-globe-asia"></i></label>
                                                                    <input type="text" placeholder="Your city" value=""/>                                                  
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label>Country </label>
                                                                    <div class="listsearch-input-item ">
                                                                        <select data-placeholder="Your Country" class="chosen-select no-search-select" >
                                                                            <option>United states</option>
                                                                            <option>Asia</option>
                                                                            <option>Australia</option>
                                                                            <option>Europe</option>
                                                                            <option>South America</option>
                                                                            <option>Africa</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label>Street <i class="fal fa-road"></i> </label>
                                                                    <input type="text" placeholder="Your Street" value=""/>                                                  
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-8">
                                                                    <label>State<i class="fal fa-street-view"></i></label>
                                                                    <input type="text" placeholder="Your State" value=""/>                                                  
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <label>Postal code<i class="fal fa-barcode"></i> </label>
                                                                    <input type="text" placeholder="123456" value=""/>
                                                                </div>
                                                            </div>
                                                            <div class="list-single-main-item-title fl-wrap">
                                                                <h3>Addtional Notes</h3>
                                                            </div>
                                                            <textarea cols="40" rows="3" placeholder="Notes"></textarea>
                                                            <span class="fw-separator"></span>
                                                            <a  href="#"  class="previous-form action-button back-form   color-bg"><i class="fal fa-angle-left"></i> Back</a>
                                                            <a  href="#"  class="next-form back-form action-button btn no-shdow-btn color-bg">Payment Step <i class="fal fa-angle-right"></i></a>
                                                        </fieldset>
                                                        <fieldset class="fl-wrap book_mdf">
                                                            <div class="list-single-main-item-title fl-wrap">
                                                                <h3>Payment method</h3>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <label>Cardholder's Name<i class="far fa-user"></i></label>
                                                                    <input type="text" placeholder="" value="Adam Kowalsky"/>                                                  
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label>Card Number <i class="fal fa-credit-card-front"></i></label>
                                                                    <input type="text" placeholder="xxxx-xxxx-xxxx-xxxx" value=""/> 
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <label>Expiry Month<i class="fal fa-calendar"></i></label>
                                                                    <input type="text" placeholder="MM" value=""/>                                                  
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label>Expiry Year<i class="fal fa-calendar"></i></label>
                                                                    <input type="text" placeholder="YY" value=""/>                                                  
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <label>CVV / CVC *<i class="fal fa-credit-card"></i></label>
                                                                    <input type="password" placeholder="***" value=""/> 
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <p style="padding-top:20px;">*Three digits number on the back of your card</p>
                                                                </div>
                                                            </div>
                                                            <div class="log-separator fl-wrap"><span>or</span></div>
                                                            <div class="soc-log fl-wrap">
                                                                <p>Select Other Payment Method</p>
                                                                <a href="#" class="paypal-log"><i class="fab fa-paypal"></i>Pay With Paypal</a>
                                                            </div>
                                                            <span class="fw-separator"></span>
                                                            <a  href="#"  class="previous-form  back-form action-button    color-bg"><i class="fal fa-angle-left"></i> Back</a>
                                                            <a  href="#"  class="next-form  action-button btn color2-bg no-shdow-btn">Confirm and Pay<i class="fal fa-angle-right"></i></a>                                               
                                                        </fieldset>
                                                        <fieldset class="fl-wrap book_mdf">
                                                            <div class="list-single-main-item-title fl-wrap">
                                                                <h3>Confirmation</h3>
                                                            </div>
                                                            <div class="success-table-container">
                                                                <div class="success-table-header fl-wrap">
                                                                    <i class="fal fa-check-circle decsth"></i>
                                                                    <h4>Thank you. Your reservation has been received.</h4>
                                                                    <div class="clearfix"></div>
                                                                    <p>Your payment has been processed successfully.</p>
                                                                    <br>
                                                                    <a href="invoice.html" target="_blank" class="color-bg">View Invoice</a>
                                                                </div>
                                                            </div>
                                                            <span class="fw-separator"></span>
                                                            <a  href="#"  class="previous-form action-button  back-form   color-bg"><i class="fal fa-angle-left"></i> Back</a>
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
            <div class="bmw-overlay"></div>
            <!--booking-modal-wrap end -->

            <!--ajax-modal-container-->
            <div class="ajax-modal-overlay"></div>
            <div class="ajax-modal-container">
                <!--ajax-modal -->
                <div class='ajax-loader'>
                    <div class='ajax-loader-cirle'></div>
                </div>
                <div id="ajax-modal" class="fl-wrap"> 
                </div>
                <!--ajax-modal-container end -->
            </div>
            <!--ajax-modal-container end -->
@endsection

@section('js')
        <script type="text/javascript" src="{{asset('template/js/map-single.js')}}"></script>         
@endsection