@extends('layout.master')
@section('content')
            <!--  wrapper  -->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--  section  -->
                    <section class="color-bg middle-padding ">
                        <div class="wave-bg wave-bg2"></div>
                        <div class="container">
                            <div class="flat-title-wrap">
                                <h2><span>Our Last News</span></h2>
                                <span class="section-separator"></span>
                                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit amet fermentum sem.</h4>
                            </div>
                        </div>
                    </section>
                    <!--  section  end-->
                    <div class="breadcrumbs-fs fl-wrap">
                        <div class="container">
                            <div class="breadcrumbs fl-wrap"><a href="#">Home</a><a href="#">Blog</a><span>Blog Masonry</span></div>
                        </div>
                    </div>
                    <!-- section-->
                    <section  id="sec1" class="middle-padding grey-blue-bg">
                        <div class="container">
                            <div class="row">
                                <!--blog content -->
                                <div class="col-md-8">
                                    <!--post-container -->
                                    <div class="post-container fl-wrap">
                                        <!--article-masonry -->
                                        <div class="article-masonry">
                                            <article class="card-post">
                                                <div class="card-post-img fl-wrap">
                                                    <div class="list-single-main-media fl-wrap">
                                                        <div class="single-slider-wrapper fl-wrap">
                                                            <div class="single-slider fl-wrap"  >
                                                                <div class="slick-slide-item"><img src="{{asset('template/images/all/9.jpg')}}" alt=""></div>
                                                                <div class="slick-slide-item"><img src="{{asset('template/images/all/7.jpg')}}" alt=""></div>
                                                                <div class="slick-slide-item"><img src="{{asset('template/images/all/1.jpg')}}" alt=""></div>
                                                            </div>
                                                            <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                                                            <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-post-content fl-wrap">
                                                    <h3><a href="blog-single.html">Blog Post Title.</a></h3>
                                                    <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. </p>
                                                    <div class="post-author"><a href="#"><img src="{{asset('template/images/avatar/1.jpg')}}" alt=""><span>By , Mery Lynn</span></a></div>
                                                    <div class="post-opt">
                                                        <ul>
                                                            <li><i class="fal fa-calendar"></i> <span>25 April 2018</span></li>
                                                            <li><i class="fal fa-eye"></i> <span>264</span></li>
                                                            <li><i class="fal fa-tags"></i> <a href="#">Design</a>  </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <!--article-masonry end -->
                                        <!--article-masonry -->
                                        <div class="article-masonry">
                                            <article class="card-post">
                                                <div class="card-post-img fl-wrap">
                                                    <a href="blog-single.html"><img  src="{{asset('template/images/all/11.jpg')}}"   alt=""></a>
                                                </div>
                                                <div class="card-post-content fl-wrap">
                                                    <h3><a href="blog-single.html">Blog Post Title.</a></h3>
                                                    <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. </p>
                                                    <div class="post-author"><a href="#"><img src="{{asset('template/images/avatar/4.jpg')}}" alt=""><span>By , Mery Lynn</span></a></div>
                                                    <div class="post-opt">
                                                        <ul>
                                                            <li><i class="fal fa-calendar"></i> <span>25 April 2018</span></li>
                                                            <li><i class="fal fa-eye"></i> <span>264</span></li>
                                                            <li><i class="fal fa-tags"></i> <a href="#">Design</a>  </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <!--article-masonry end -->          
                                        <!--article-masonry -->
                                        <div class="article-masonry">
                                            <article class="card-post">
                                                <div class="card-post-img fl-wrap">
                                                    <a href="blog-single.html"><img  src="{{asset('template/images/all/10.jpg')}}"   alt=""></a>
                                                </div>
                                                <div class="card-post-content fl-wrap">
                                                    <h3><a href="blog-single.html">Blog Post Title.</a></h3>
                                                    <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. </p>
                                                    <div class="post-author"><a href="#"><img src="{{asset('template/images/avatar/1.jpg')}}" alt=""><span>By , Mery Lynn</span></a></div>
                                                    <div class="post-opt">
                                                        <ul>
                                                            <li><i class="fal fa-calendar"></i> <span>25 April 2018</span></li>
                                                            <li><i class="fal fa-eye"></i> <span>264</span></li>
                                                            <li><i class="fal fa-tags"></i> <a href="#">Design</a>  </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <!--article-masonry end -->
                                        <!--article-masonry -->
                                        <div class="article-masonry">
                                            <article class="card-post">
                                                <div class="card-post-img fl-wrap">
                                                    <div class="list-single-main-media fl-wrap">
                                                        <div class="single-slider-wrapper fl-wrap">
                                                            <div class="single-slider fl-wrap"  >
                                                                <div class="slick-slide-item"><img src="{{asset('template/images/all/4.jpg')}}" alt=""></div>
                                                                <div class="slick-slide-item"><img src="{{asset('template/images/all/5.jpg')}}" alt=""></div>
                                                                <div class="slick-slide-item"><img src="{{asset('template/images/all/6.jpg')}}" alt=""></div>
                                                            </div>
                                                            <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                                                            <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-post-content fl-wrap">
                                                    <h3><a href="blog-single.html">Blog Post Title.</a></h3>
                                                    <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. </p>
                                                    <div class="post-author"><a href="#"><img src="{{asset('template/images/avatar/2.jpg')}}" alt=""><span>By , Mery Lynn</span></a></div>
                                                    <div class="post-opt">
                                                        <ul>
                                                            <li><i class="fal fa-calendar"></i> <span>25 April 2018</span></li>
                                                            <li><i class="fal fa-eye"></i> <span>264</span></li>
                                                            <li><i class="fal fa-tags"></i> <a href="#">Design</a>  </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <!--article-masonry end -->
                                        <!--article-masonry -->
                                        <div class="article-masonry">
                                            <article class="card-post">
                                                <div class="card-post-img fl-wrap">
                                                    <a href="blog-single.html"><img  src="{{asset('template/images/all/8.jpg')}}"   alt=""></a>
                                                </div>
                                                <div class="card-post-content fl-wrap">
                                                    <h3><a href="blog-single.html">Blog Post Title.</a></h3>
                                                    <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. </p>
                                                    <div class="post-author"><a href="#"><img src="{{asset('template/images/avatar/3.jpg')}}" alt=""><span>By , Mery Lynn</span></a></div>
                                                    <div class="post-opt">
                                                        <ul>
                                                            <li><i class="fal fa-calendar"></i> <span>25 April 2018</span></li>
                                                            <li><i class="fal fa-eye"></i> <span>264</span></li>
                                                            <li><i class="fal fa-tags"></i> <a href="#">Design</a>  </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <!--article-masonry end -->
                                        <!--article-masonry -->
                                        <div class="article-masonry">
                                            <article class="card-post">
                                                <div class="card-post-img fl-wrap">
                                                    <a href="blog-single.html"><img  src="{{asset('template/images/all/5.jpg')}}"   alt=""></a>
                                                </div>
                                                <div class="card-post-content fl-wrap">
                                                    <h3><a href="blog-single.html">Blog Post Title.</a></h3>
                                                    <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. </p>
                                                    <div class="post-author"><a href="#"><img src="{{asset('template/images/avatar/2.jpg')}}" alt=""><span>By , Mery Lynn</span></a></div>
                                                    <div class="post-opt">
                                                        <ul>
                                                            <li><i class="fal fa-calendar"></i> <span>25 April 2018</span></li>
                                                            <li><i class="fal fa-eye"></i> <span>264</span></li>
                                                            <li><i class="fal fa-tags"></i> <a href="#">Design</a>  </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <!--article-masonry end -->   
                                        <!--article-masonry -->
                                        <div class="article-masonry">
                                            <article class="card-post">
                                                <div class="card-post-img fl-wrap">
                                                    <a href="blog-single.html"><img  src="{{asset('template/images/all/1.jpg')}}"   alt=""></a>
                                                </div>
                                                <div class="card-post-content fl-wrap">
                                                    <h3><a href="blog-single.html">Blog Post Title.</a></h3>
                                                    <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. </p>
                                                    <div class="post-author"><a href="#"><img src="{{asset('template/images/avatar/3.jpg')}}" alt=""><span>By , Mery Lynn</span></a></div>
                                                    <div class="post-opt">
                                                        <ul>
                                                            <li><i class="fal fa-calendar"></i> <span>25 April 2018</span></li>
                                                            <li><i class="fal fa-eye"></i> <span>264</span></li>
                                                            <li><i class="fal fa-tags"></i> <a href="#">Design</a>  </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <!--article-masonry end -->
                                        <!--article-masonry -->
                                        <div class="article-masonry">
                                            <article class="card-post">
                                                <div class="card-post-img fl-wrap">
                                                    <a href="blog-single.html"><img  src="images/all/3.jpg"   alt=""></a>
                                                </div>
                                                <div class="card-post-content fl-wrap">
                                                    <h3><a href="blog-single.html">Blog Post Title.</a></h3>
                                                    <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. </p>
                                                    <div class="post-author"><a href="#"><img src="images/avatar/2.jpg" alt=""><span>By , Mery Lynn</span></a></div>
                                                    <div class="post-opt">
                                                        <ul>
                                                            <li><i class="fal fa-calendar"></i> <span>25 April 2018</span></li>
                                                            <li><i class="fal fa-eye"></i> <span>264</span></li>
                                                            <li><i class="fal fa-tags"></i> <a href="#">Design</a>  </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <!--article-masonry end -->                                      
                                        <!-- pagination-->
                                        <div class="pagination">
                                            <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
                                            <a href="#" >1</a>
                                            <a href="#" class="current-page">2</a>
                                            <a href="#">3</a>
                                            <a href="#">4</a>
                                            <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
                                        </div>
                                        <!-- pagination end-->
                                    </div>
                                    <!--post-container end -->  
                                </div>
                                <!-- blog content end -->
                                <!--   sidebar  -->
                                <div class="col-md-4">
                                    <!--box-widget-wrap -->  
                                    <div class="box-widget-wrap fl-wrap">
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap">
                                            <div class="box-widget">
                                                <div class="box-widget-content">
                                                    <div class="box-widget-item-header">
                                                        <h3> Search In Blog </h3>
                                                    </div>
                                                    <div class="search-widget">
                                                        <form action="#" class="fl-wrap">
                                                            <input name="se" id="se" type="text" class="search" placeholder="Search.." value="Search..." />
                                                            <button class="search-submit color2-bg" id="submit_btn"><i class="fal fa-search transition"></i> </button>
                                                        </form>
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
                                                        <h3>About Athor</h3>
                                                    </div>
                                                    <div class="box-widget-author fl-wrap">
                                                        <div class="box-widget-author-title fl-wrap">
                                                            <div class="box-widget-author-title-img">
                                                                <img src="images/avatar/4.jpg" alt=""> 
                                                            </div>
                                                            <a href="author-single.html">Jessie Manrty</a>
                                                            <span>Co-manager associated</span>
                                                        </div>
                                                        <div class="box-widget-author-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla.</p>
                                                        </div>
                                                        <div class="list-widget-social">
                                                            <ul>
                                                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--box-widget-item end --> 
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap">
                                            <div class="box-widget widget-posts">
                                                <div class="box-widget-content">
                                                    <div class="box-widget-item-header">
                                                        <h3>Popular Posts</h3>
                                                    </div>
                                                    <!--box-image-widget-->
                                                    <div class="box-image-widget">
                                                        <div class="box-image-widget-media"><img src="images/all/4.jpg" alt="">
                                                            <a href="blog-single.html" class="color-bg">Details</a>
                                                        </div>
                                                        <div class="box-image-widget-details">
                                                            <h4>Nullam dictum felis</h4>
                                                            <p>Integer tincidunt. Aliquam lorem ante, dapibus in, viverra quis...</p>
                                                            <span class="widget-posts-date"><i class="fal fa-calendar"></i> 7 Mar 2017 </span>
                                                        </div>
                                                    </div>
                                                    <!--box-image-widget end -->
                                                    <!--box-image-widget-->
                                                    <div class="box-image-widget">
                                                        <div class="box-image-widget-media"><img src="images/all/7.jpg" alt="">
                                                            <a href="blog-single.html" class="color-bg">Details</a>
                                                        </div>
                                                        <div class="box-image-widget-details">
                                                            <h4><span>Scrambled it to mak</h4>
                                                            <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo...</p>
                                                            <span class="widget-posts-date"><i class="fal fa-calendar"></i> 7 Mar 2017 </span>
                                                        </div>
                                                    </div>
                                                    <!--box-image-widget end -->                                                   	
                                                    <!--box-image-widget-->
                                                    <div class="box-image-widget">
                                                        <div class="box-image-widget-media"><img src="images/all/9.jpg" alt="">
                                                            <a href="blog-single.html" class="color-bg">Details</a>
                                                        </div>
                                                        <div class="box-image-widget-details">
                                                            <h4>Fermentum nis type</h4>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and   industry...</p>
                                                            <span class="widget-posts-date"><i class="fal fa-calendar"></i> 7 Mar 2017 </span>
                                                        </div>
                                                    </div>
                                                    <!--box-image-widget end -->                                                         
                                                </div>
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->                                         
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap">
                                            <div class="box-widget">
                                                <div class="box-widget-content">
                                                    <div class="box-widget-item-header">
                                                        <h3>Tags </h3>
                                                    </div>
                                                    <div class="list-single-tags tags-stylwrap  sb-tags">
                                                        <a href="#">Event</a>
                                                        <a href="#">Design</a>
                                                        <a href="#">Photography</a>
                                                        <a href="#">Trends</a>
                                                        <a href="#">Video</a>
                                                        <a href="#">News</a>                                                                               
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
                                                        <h3>Our Instagram</h3>
                                                    </div>
                                                    <div class="jr-insta-thumb">
                                                        <ul>
                                                            <li>
                                                                <a href="#"><img src="images/instagram/1.jpg" alt=""></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><img src="images/instagram/2.jpg" alt=""></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><img src="images/instagram/3.jpg" alt=""></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><img src="images/instagram/4.jpg" alt=""></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><img src="images/instagram/5.jpg" alt=""></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><img src="images/instagram/6.jpg" alt=""></a>
                                                            </li>
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
                                                        <h3> Categories</h3>
                                                    </div>
                                                    <ul class="cat-item">
                                                        <li><a href="#">Standard</a> <span>3</span></li>
                                                        <li><a href="#">Video</a> <span>6 </span></li>
                                                        <li><a href="#">Gallery</a> <span>12 </span></li>
                                                        <li><a href="#">Quotes</a> <span>4</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->                             
                                    </div>
                                    <!--box-widget-wrap end -->  
                                </div>
                                <!--   sidebar end  -->
                            </div>
                        </div>
                        <div class="limit-box fl-wrap"></div>
                    </section>
                    <!-- section end -->
                </div>
                <!-- content end-->
            </div>
            <!--wrapper end -->
@endsection