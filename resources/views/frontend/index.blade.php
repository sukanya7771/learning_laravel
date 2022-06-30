@extends('frontend/layout.layout')


@section('page_title','Oyzer Home')
@section('container')

<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner-text">
                    <h1>Reference site about Lorem Ipsum</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- category -->

<section class="mt-4 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="cat-bg">
                    <div class="cat-pic">
                        <img src="{{asset('front_assets/img/dev.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="cat-text">
                        <a href="#">General Home Service</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="cat-bg">
                    <div class="cat-pic">
                        <img src="{{asset('front_assets/img/dev.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="cat-text">
                        <a href="#">Appliance repair service</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="cat-bg">
                    <div class="cat-pic">
                        <img src="{{asset('front_assets/img/dev.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="cat-text">
                        <a href="#">Construction</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="cat-bg">
                    <div class="cat-pic">
                        <img src="{{asset('front_assets/img/dev.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="cat-text">
                        <a href="#">Vehicle</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="cat-bg">
                    <div class="cat-pic">
                        <img src="{{asset('front_assets/img/dev.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="cat-text">
                        <a href="#">Documentation</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="cat-bg">
                    <div class="cat-pic">
                        <img src="{{asset('front_assets/img/dev.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="cat-text">
                        <a href="#">Cleaning</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center mt-4">
                <a href="{{url('/services')}}" class="btn btn-primary">View All Services</a>
            </div>
        </div>
    </div>
</section>

<!-- top trending services -->
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hding text-center mb-4">
                    <h3>TOP TRENDING SERVICES</h3>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-12 col-carousel">
                <div class="owl-carousel carousel-main">
                    <div>
                        <img src="{{asset('front_assets/img/ca-1.jpg')}}" class="img-fluid">
                        <h6>Services-1</h6>
                    </div>
                    <div>
                        <img src="{{asset('front_assets/img/ca-2.jpg')}}" class="img-fluid">
                        <h6>Services-2</h6>
                    </div>
                    <div>
                        <img src="{{asset('front_assets/img/ca-3.jpg')}}" class="img-fluid">
                        <h6>Services-3</h6>
                    </div>
                    <div>
                        <img src="{{asset('front_assets/img/ca-4.jpg')}}" class="img-fluid">
                        <h6>Services-4</h6>
                    </div>
                    <div>
                        <img src="{{asset('front_assets/img/ca-5.jpg')}}" class="img-fluid">
                        <h6>Services-5</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 <!--<script>
    $('.carousel-main').owlCarousel({
         items: 4,
         loop: true,
         autoplay: true,
         autoplayTimeout: 1500,
         margin: 10,
         nav: true,
         dots: false,
         navText: ['<span class="fa fa-chevron-left fa-2x"></span>','<span class="fa fa-chevron-right fa-2x"></span>'],
     })
 </script> -->

<!--people testimonial -->
<section class="testi my-5">
    <div class="container rounded">
       <div class="row">
           <div class="col-md-12">
            <div class="hding text-center">
                <h3>CHANGING LIFE OF PEOPLE</h3>
            </div>
           </div>
       </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme testi-carousel">
                    <div class="owl-item">
                        <div class="card d-flex flex-column">
                            <div class="card-body">
                            <div class="ct-pic">
                                <img src="{{asset('front_assets/img/cot.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="testimonial">
                                “Getting business at vehicle stand has become very tough today due to intense competition. 
                                But with Porter's partner driver app, transparent fare structure and standard pricing, my life has become easier. 
                                Now I don't worry 
                                about finding customers and getting payments.”
                                </div>
                            </div>   
                            <div class="d-flex flex-row profile pt-4 mt-auto"> <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" class="rounded-circle">
                                <div class="d-flex flex-column pl-2">
                                    <div class="name">KRISHNA</div>
                                    <p class="text-muted designation">Hyderabad</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="card d-flex flex-column">
                            <div class="card-body">
                            <div class="ct-pic">
                                <img src="{{asset('front_assets/img/cot.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="testimonial">
                                “Earlier there were many restrictions on earnings because I got limited trips in market which were 
                                only from my known customers and to nearby places. I gave my truck on rent with Porter
                                 there are no such restrictions, 
                                there are a lot of orders throughout city. I enjoy being a part of Porter family.”
                                </div>
                            </div>    
                            <div class="d-flex flex-row profile pt-4 mt-auto"> <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" class="rounded-circle">
                                <div class="d-flex flex-column pl-2">
                                    <div class="name">UMESH</div>
                                    <p class="text-muted designation">Hyderabad</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="card d-flex flex-column">
                            <div class="card-body">
                            <div class="ct-pic">
                                <img src="{{asset('front_assets/img/cot.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="testimonial">
                                “I was new to Chennai and went ahead to attach my tata ace with Porter. 
                                Porter app's inbuilt map and navigational capability never made me feel new to city. 
                                Payment is done on time and their vendor helpdesk provides immediate solutions to all my issues.”
                                </div>
                            </div>    
                            <div class="d-flex flex-row profile pt-4 mt-auto"> <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" class="rounded-circle">
                                <div class="d-flex flex-column pl-2">
                                    <div class="name">BIRJU</div>
                                    <p class="text-muted designation">Chennai</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="owl-item">
                        <div class="card d-flex flex-column">
                            <div class="mt-2"> <span class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span class="fas fa-star-half-alt active-star"></span> </div>
                            <div class="main font-weight-bold pb-2 pt-1">Great Service</div>
                            <div class="testimonial"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni dolores molestias veniam inventore itaque eius iure omnis, temporibus culpa id. </div>
                            <div class="d-flex flex-row profile pt-4 mt-auto"> <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" class="rounded-circle">
                                <div class="d-flex flex-column pl-2">
                                    <div class="name">Megan</div>
                                    <p class="text-muted designation">CEO of My Company</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="card d-flex flex-column">
                            <div class="mt-2"> <span class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span class="fas fa-star-half-alt active-star"></span> </div>
                            <div class="main font-weight-bold pb-2 pt-1">Great Service</div>
                            <div class="testimonial"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni dolores molestias veniam inventore itaque eius iure omnis, temporibus culpa id. </div>
                            <div class="d-flex flex-row profile pt-4 mt-auto"> <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" class="rounded-circle">
                                <div class="d-flex flex-column pl-2">
                                    <div class="name">Megan</div>
                                    <p class="text-muted designation">CEO of My Company</p>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- why choose us -->
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hding text-center mb-4">
                    <h3>WHY CHOOSE US</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="why-bg">
                    <div class="why-icon">
                        <img src="{{asset('front_assets/img/w-1.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="why-text">
                        <h6>Winner </h6>
                        <p>Best Startup Award</p>
                    </div>
                </div>
            </div>
                <div class="col-md-3">
                    <div class="why-bg">
                        <div class="why-icon">
                            <img src="{{asset('front_assets/img/w-2.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="why-text">
                            <h6>30,000+</h6>
                            <p>Satisfied homes</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="why-bg">
                        <div class="why-icon">
                            <img src="{{asset('front_assets/img/w-3.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="why-text">
                            <h6>23,000+</h6>
                            <p>In-house Professionals</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="why-bg">
                        <div class="why-icon">
                            <img src="{{asset('front_assets/img/w-4.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="why-text">
                            <h6>VERIFIED</h6>
                            <p>& background checked</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- news and update -->
<section class="blog-section bg-grey bd-bottom padding">
    <div class="container">
        <div class="section-heading mb-40 text-center wow fadeInUp" data-wow-delay="200ms">
           <h2>Get The Latest Updats</h2>
           <p>Financial experts support or help you to to find out which <br> way you can raise your funds more.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="blog-item">
                    <div class="blog-thumb">
                        <img src="{{asset('front_assets/img/post-1.jpg')}}" alt="post">
                        <span class="category"><a href="blog-grid.html">Design</a></span>
                    </div>
                    <div class="blog-content">
                        <div class="post-meta">
                            <div class="meta-list"><h4><i class="fa fa-calendar"></i><a href="#">Jan 01 2021</a></h4></div>
                            <div class="meta-list"><h4><i class="fa fa-user"></i><a href="#">Jonathan Smith</a></h4></div>
                        </div>
                        <h3><a href="blog-single.html">How to go about initiating  an  start-up in few days.</a></h3>
                        <p>Financial experts support or help you to to find out which way you can raise your funds more.</p>
                        <a href="blog-single.html" class="read-more">Read More<i class="las la-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="blog-item">
                    <div class="blog-thumb">
                        <img src="{{asset('front_assets/img/post-2.jpg')}}" alt="post">
                        <span class="category"><a href="blog-grid.html">Finance</a></span>
                    </div>
                    <div class="blog-content">
                        <div class="post-meta">
                            <div class="meta-list"><h4><i class="fa fa-calendar"></i><a href="#">Jan 01 2021</a></h4></div>
                            <div class="meta-list"><h4><i class="fa fa-user"></i><a href="#">Jonathan Smith</a></h4></div>
                        </div>
                        <h3><a href="blog-single.html">Financial experts support or help you to to find out way.</a></h3>
                        <p>Financial experts support or help you to to find out which way you can raise your funds more.</p>
                        <a href="blog-single.html" class="read-more">Read More<i class="las la-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 padding-15">
                <div class="blog-item">
                    <div class="blog-thumb">
                        <img src="{{asset('front_assets/img/post-3.jpg')}}" alt="post">
                        <span class="category"><a href="blog-grid.html">Branding</a></span>
                    </div>
                    <div class="blog-content">
                        <div class="post-meta">
                            <div class="meta-list"><h4><i class="fa fa-calendar"></i><a href="#">Jan 01 2021</a></h4></div>
                            <div class="meta-list"><h4><i class="fa fa-user"></i><a href="#">Jonathan Smith</a></h4></div>
                        </div>
                        <h3><a href="blog-single.html">Innovative helping your business all over the world.</a></h3>
                        <p>Financial experts support or help you to to find out which way you can raise your funds more.</p>
                        <a href="blog-single.html" class="read-more">Read More<i class="las la-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/. blog-section -->

@endsection



