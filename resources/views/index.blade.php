@extends('web_layout')
@section('content')



<!--Search Popup-->
<div id="search-popup" class="search-popup">
    <div class="close-search theme-btn"><i class="fal fa-times"></i></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
            <form method="post" action="index.html">
                <div class="form-group">
                    <fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here"
                            required>
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bnner Section -->
<section class="banner-section">
    <div class="swiper-container banner-slider">
        <div class="swiper-wrapper">
            <!-- Slide Item -->
            <div class="swiper-slide" style="background-image: url(https://html.tonatheme.com/2022/tayler/assets/images/main-slider/image-1.jpg);">
                <div class="content-outer">
                    <div class="content-box">
                        <div class="inner">
                            <h4>Welcome to Quality Tayler</h4>
                            <h1>our Personal <br>
                                Quality tayler</h1>
                            <div class="link-box">
                                <a href="services.html" class="theme-btn btn-style-one"><span>discover more</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Item -->
            <div class="swiper-slide" style="background-image: url(https://html.tonatheme.com/2022/tayler/assets/images/main-slider/image-2.jpg);">
                <div class="content-outer">
                    <div class="content-box">
                        <div class="inner">
                            <h4>Welcome to Quality Tayler</h4>
                            <h1>Create your <br> own Personal Style</h1>
                            <div class="link-box">
                                <a href="services.html" class="theme-btn btn-style-one"><span>discover more</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-slider-nav">
        <div class="banner-slider-control banner-slider-button-prev"><span><i class="fas fa-arrow-right"></i></span>
        </div>
        <div class="banner-slider-control banner-slider-button-next"><span><i class="fas fa-arrow-right"></i></span>
        </div>
    </div>
</section>
<!-- End Bnner Section -->

<!-- Welcome Section -->
<section class="welcome-section">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-7">
                <div class="image-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="image-one" data-parallax='{"y": -30}'><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-2.jpg" alt=""></div>
                        </div>
                        <div class="col-md-6">
                            <div class="image-two" data-parallax='{"y": 30}'><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-1.jpg" alt=""></div>
                        </div>
                    </div>
                    <div class="experience-year">
                        <h3>20</h3>Years of <br>Practicing
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="sec-title-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="sec-title-dec"><img src="https://html.tonatheme.com/2022/tayler/assets//images/shape/shape-1.png" alt=""></div>
                    <div class="sub-title">Checkout our services</div>
                    <h2 class="sec-title mb-35">Introducing the Quality Taylers in Town</h2>
                </div>
                <div class="text">Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua lonm andhn.</div>
                <ul class="list">
                    <li><img src="https://html.tonatheme.com/2022/tayler/assets/images/shape/shape-2.png" alt=""> Nsectetur cing elit.</li>
                    <li><img src="https://html.tonatheme.com/2022/tayler/assets/images/shape/shape-2.png" alt="">Suspe ndisse suscipit sagittis leo.</li>
                    <li><img src="https://html.tonatheme.com/2022/tayler/assets/images/shape/shape-2.png" alt="">Entum estibulum dignissim posuere.</li>
                    <li><img src="https://html.tonatheme.com/2022/tayler/assets/images/shape/shape-2.png" alt="">Donec eros libero, dignissim eget.</li>
                </ul>
                <div class="author-wrapper wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="author-thumb"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-1.png" alt=""></div>
                    <div class="signature"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-2.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our services -->
<section class="services-section" style="background-image: url(https://html.tonatheme.com/2022/tayler/assets/images/background/bg-2.jpg);">
    <div class="auto-container">
        <div class="sec-title-box text-center">
            <div class="sec-title-dec"><img src="https://html.tonatheme.com/2022/tayler/assets//images/shape/shape-1.png" alt=""></div>
            <div class="sub-title">Checkout our services</div>
            <h2 class="sec-title">Services We Offer</h2>
        </div>
        <div class="theme_carousel owl-theme owl-carousel owl-style-one"
            data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "480" :{ "items" : "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "2" } , "992":{ "items" : "3", "center": true }, "1200":{ "items" : "3", "center": true }}}'>
            <div class="col-lg-12 service-block-one">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image img_hover_1"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-3.jpg" alt=""></div>
                    <h4><a href="suits-shirts.html">Suits & Shirts</a></h4>
                    <div class="text">Donec suscipit ipsum quis est <br> mentum, quis sollicitudin libero <br> dmes
                        tempus.</div>
                </div>
            </div>
            <div class="col-lg-12 service-block-one">
                <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="image img_hover_1"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-4.jpg" alt=""></div>
                    <h4><a href="wedding-dresses.html">Wedding Dresses</a></h4>
                    <div class="text">Donec suscipit ipsum quis est <br> mentum, quis sollicitudin libero <br> dmes
                        tempus.</div>
                </div>
            </div>
            <div class="col-lg-12 service-block-one">
                <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="image img_hover_1"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-5.jpg" alt=""></div>
                    <h4><a href="stylish-clothing.html">Stylish Clothing</a></h4>
                    <div class="text">Donec suscipit ipsum quis est <br> mentum, quis sollicitudin libero <br> dmes
                        tempus.</div>
                </div>
            </div>
            <div class="col-lg-12 service-block-one">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image img_hover_1"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-3.jpg" alt=""></div>
                    <h4><a href="suits-shirts.html">Suits & Shirts</a></h4>
                    <div class="text">Donec suscipit ipsum quis est <br> mentum, quis sollicitudin libero <br> dmes
                        tempus.</div>
                </div>
            </div>
            <div class="col-lg-12 service-block-one">
                <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="image img_hover_1"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-4.jpg" alt=""></div>
                    <h4><a href="wedding-dresses.html">Wedding Dresses</a></h4>
                    <div class="text">Donec suscipit ipsum quis est <br> mentum, quis sollicitudin libero <br> dmes
                        tempus.</div>
                </div>
            </div>
            <div class="col-lg-12 service-block-one">
                <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="image img_hover_1"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-5.jpg" alt=""></div>
                    <h4><a href="stylish-clothing.html">Stylish Clothing</a></h4>
                    <div class="text">Donec suscipit ipsum quis est <br> mentum, quis sollicitudin libero <br> dmes
                        tempus.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Funfacts -->
<section class="funfacts-section">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="funfacts-block wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms"
                            style="background-image: url(https://html.tonatheme.com/2022/tayler/assets/images/resource/image-6.jpg);">
                            <div class="content-middle">
                                <div class="funfacts-block_icon"><i class="flaticon-suit"></i></div>
                                <h4 class="funfacts-block_title">Suits Stich</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="funfacts-block wow fadeInDown" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="content-middle">
                                <div class="count-outer count-box funfacts-block_number">
                                    <span class="count-text" data-speed="3000" data-stop="8800">0</span>
                                </div>
                                <h4 class="funfacts-block_title">Dresses Stitched</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="funfacts-block wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms"
                            style="background-image: url(https://html.tonatheme.com/2022/tayler/assets/images/resource/image-7.jpg);">
                            <div class="content-middle">
                                <div class="funfacts-block_icon"><i class="flaticon-measuring"></i></div>
                                <h4 class="funfacts-block_title">Body Measure</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="funfacts-block wow fadeInDown" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="content-middle">
                                <div class="count-outer count-box funfacts-block_number">
                                    <span class="count-text" data-speed="3000" data-stop="24">0</span><span
                                        class="plus">+</span>
                                </div>
                                <h4 class="funfacts-block_title">Expert Taylers</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services two -->
<section class="services-two-section pt-0">
    <div class="top-area">
        <div class="auto-container full-width">
            <div class="row no-gutters">
                <div class="col-lg-6 image-bg" style="background-image: url(https://html.tonatheme.com/2022/tayler/assets/images/resource/image-8.jpg);">
                    <div class="image d-lg-none"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-8.jpg" alt=""></div>
                </div>
                <div class="col-lg-6">
                    <div class="inner-container">
                        <div class="sec-title-dec"><img src="https://html.tonatheme.com/2022/tayler/assets/images/shape/shape-1.png" alt=""></div>
                        <div class="sub-title light">Checkout our services</div>
                        <h2 class="sec-title light mb-30">Wedding or Causual <br> Suits Services?</h2>
                        <div class="text light mb-30">Lorem ipsum dolor sit amet, consectetur notted <br> adipisicing
                            elit sed do eiusmod tempor incididunt ut <br> labore et dolore magna aliqua lonm andhn.
                        </div>
                        <div class="link-btn"><a href="services.html" class="btn-style-one">discover more</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-area">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="service-block-two wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="service-block-two_icon"><i class="flaticon-botton"></i></div>
                        <h4 class="service-block-two_title">Quality Fabric</h4>
                        <div class="service-block-two_text">Lorem ipsum dolor sit amet con adipisicing elit sed do
                            eiusmod tempor. nec fini ante pretium quis.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-block-two wow fadeInDown" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="service-block-two_icon"><i class="flaticon-seam-ripper"></i></div>
                        <h4 class="service-block-two_title">Finest Work</h4>
                        <div class="service-block-two_text">Lorem ipsum dolor sit amet con adipisicing elit sed do
                            eiusmod tempor. nec fini ante pretium quis.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-block-two wow fadeInDown" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="service-block-two_icon"><i class="flaticon-embroidery"></i></div>
                        <h4 class="service-block-two_title">Unique Design</h4>
                        <div class="service-block-two_text">Lorem ipsum dolor sit amet con adipisicing elit sed do
                            eiusmod tempor. nec fini ante pretium quis.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-block-two wow fadeInDown" data-wow-delay="700ms" data-wow-duration="1500ms">
                        <div class="service-block-two_icon"><i class="flaticon-thread"></i></div>
                        <h4 class="service-block-two_title">Timely Deliver</h4>
                        <div class="service-block-two_text">Lorem ipsum dolor sit amet con adipisicing elit sed do
                            eiusmod tempor. nec fini ante pretium quis.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="testimonials-section">
    <div class="auto-container full-width">
        <div class="row no-gutters">
            <div class="col-xl-6">
                <div class="testimonial-block-wrapper">
                    <div class="sec-bg" style="background-image: url(https://html.tonatheme.com/2022/tayler/assets/images/background/bg-1.jpg);"></div>
                    <div class="testimonial-block">
                        <h4 class="testimonial-block_title">What They’re Saying</h4>
                        <div class="swiper-container testimonial-thumbs">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="author-thumb"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-3.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="author-thumb"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-4.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="author-thumb"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-5.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Swiper -->
                        <div class="swiper-container testimonial-content">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-block_text">“Aliquam erat volutpat. Suspendisse suscipit
                                        <br> vestibulum leo a aliquam. In risus di pharetra <br> sed felis nec, euismod
                                        faucibus velit. Fusce id <br> laoreet nisl. Duis lacinia eleifend.”</div>
                                    <div class="testimonial-block_name"> Christine Eve</div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-block_text">“Aliquam erat volutpat. Suspendisse suscipit
                                        <br> vestibulum leo a aliquam. In risus di pharetra <br> sed felis nec, euismod
                                        faucibus velit. Fusce id <br> laoreet nisl. Duis lacinia eleifend.”</div>
                                    <div class="testimonial-block_name"> Christine Eve</div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-block_text">“Aliquam erat volutpat. Suspendisse suscipit
                                        <br> vestibulum leo a aliquam. In risus di pharetra <br> sed felis nec, euismod
                                        faucibus velit. Fusce id <br> laoreet nisl. Duis lacinia eleifend.”</div>
                                    <div class="testimonial-block_name"> Christine Eve</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="ml-lg-30">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="image-100 img_hover_3"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-9.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image-100 img_hover_3"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-25.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image-100 img_hover_3"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-10.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image-100 img_hover_3"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-26.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Team Section -->
<section class="our-team-section">
    <div class="auto-container">
        <div class="sec-title-box text-center">
            <div class="sec-title-dec"><img src="https://html.tonatheme.com/2022/tayler/assets//images/shape/shape-1.png" alt=""></div>
            <div class="sub-title">Our taylers</div>
            <h2 class="sec-title">Meet the Taylers</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 team-block-one">
                <div class="inner-box">
                    <div class="team-block-one_image img_hover_1"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-11.jpg" alt="">
                    </div>
                    <div class="team-block-one_lower-content">
                        <div class="team-block-one_name">Robert Smith</div>
                        <div class="team-block-one_designation">Trailor</div>
                        <ul class="team-block-one_social-links">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 team-block-one">
                <div class="inner-box">
                    <div class="team-block-one_image img_hover_1"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-12.jpg" alt="">
                    </div>
                    <div class="team-block-one_lower-content">
                        <div class="team-block-one_name">Kevin Martin</div>
                        <div class="team-block-one_designation">Trailor</div>
                        <ul class="team-block-one_social-links">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 team-block-one">
                <div class="inner-box">
                    <div class="team-block-one_image img_hover_1"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-13.jpg" alt="">
                    </div>
                    <div class="team-block-one_lower-content">
                        <div class="team-block-one_name">Mike Hardson</div>
                        <div class="team-block-one_designation">Trailor</div>
                        <ul class="team-block-one_social-links">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map-section pb-0 pt-0">
    <div class="auto-container full-width">
        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55945.16225505631!2d-73.90847969206546!3d40.66490264739892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1601263396347!5m2!1sen!2sbd"
                width="600" height="500" frameborder="0" style="border:0; width: 100%" allowfullscreen=""
                aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</section>

<!-- Cta -->
<section class="cta-section">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-5">
                <div class="cta-block-one_icon-box">
                    <div class="cta-block-one_icon"><i class="flaticon-phone-call"></i></div>
                    <div class="cta-block-one_text-two">Need tayler? Call us</div>
                    <a class="cta-block-one_phone" href="tel:+1-(246)3330089">+ 1- (246) 333-0089</a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="cta-block-one_inner-box">
                    <div class="cta-block-one_text">Lorem ipsum dolor sit amet nsectetur <br>
                        cing elituspe ndisse suscipit sagitis <br>
                        leo sit.</div>
                    <div class="link-btn"><a href="contact.html"
                            class="theme-btn btn-style-one cta-block-one_btn">discover more</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="news-section">
    <div class="left-outer-container">
        <div class="row">
            <div class="col-xl-3">
                <div class="sec-title-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="sec-title-dec"><img src="https://html.tonatheme.com/2022/tayler/assets//images/shape/shape-1.png" alt=""></div>
                    <div class="sub-title">Latest Blog Posts</div>
                    <h2 class="sec-title">Latest News & <br> Articles from the <br> Blog Posts</h2>
                    <div class="text mb-30">Lorem ipsum dolor sit amet, consectetur <br> notted adipisicing elit sed do
                        eiusmod <br> tempor incididunt ut labore et dolore <br> magna aliqua lonm andhn.</div>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="theme_carousel owl-theme owl-carousel owl-style-one"
                    data-options='{"loop": true, "center": false, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "480" :{ "items" : "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "2" } , "992":{ "items" : "3" }, "1200":{ "items" : "3" }}}'>
                    <div class="col-lg-12 news-block-one">
                        <div class="news-block-one_inner-box">
                            <div class="news-block-one_image image-100 img_hover_3"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/news-1.jpg" alt=""></div>
                            <div class="news-block-one_lower-content">
                                <div class="news-block-one_date">20 Setember, 2021</div>
                                <div class="news-block-one_box">
                                    <div class="news-block-one_post-meta"> <i class="fal fa-user-circle"></i>
                                        <span>Admin</span> <i class="fal fa-comments"></i><span>2 Comments</span> </div>
                                    <h4 class="news-block-one_title"><a href="blog-details.html">How to Take Care of
                                            <br> Leather Jackets</a></h4>
                                    <div class="news-block-one_text">Lorem ipsum dolor sit amet, coned sectetur notted
                                        elit do</div>
                                    <div class="button-link"><a href="blog-details.html"
                                            class="news-block-one_read_more_link">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 news-block-one">
                        <div class="news-block-one_inner-box">
                            <div class="news-block-one_image image-100 img_hover_3"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/news-2.jpg" alt=""></div>
                            <div class="news-block-one_lower-content">
                                <div class="news-block-one_date">20 Setember, 2021</div>
                                <div class="news-block-one_box">
                                    <div class="news-block-one_post-meta"> <i class="fal fa-user-circle"></i>
                                        <span>Admin</span> <i class="fal fa-comments"></i><span>2 Comments</span> </div>
                                    <h4 class="news-block-one_title"><a href="blog-details.html">How to Take Care of
                                            <br> Leather Jackets</a></h4>
                                    <div class="news-block-one_text">Lorem ipsum dolor sit amet, coned sectetur notted
                                        elit do</div>
                                    <div class="button-link"><a href="blog-details.html"
                                            class="news-block-one_read_more_link">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 news-block-one">
                        <div class="news-block-one_inner-box">
                            <div class="news-block-one_image image-100 img_hover_3"><img src="assets/images/resource/news-3.jpg" alt=""></div>
                            <div class="news-block-one_lower-content">
                                <div class="news-block-one_date">20 Setember, 2021</div>
                                <div class="news-block-one_box">
                                    <div class="news-block-one_post-meta"> <i class="fal fa-user-circle"></i>
                                        <span>Admin</span> <i class="fal fa-comments"></i><span>2 Comments</span> </div>
                                    <h4 class="news-block-one_title"><a href="blog-details.html">How to Take Care of
                                            <br> Leather Jackets</a></h4>
                                    <div class="news-block-one_text">Lorem ipsum dolor sit amet, coned sectetur notted
                                        elit do</div>
                                    <div class="button-link"><a href="blog-details.html"
                                            class="news-block-one_read_more_link">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Client Logo -->
<section class="client-logo">
    <div class="auto-container">
        <div class="theme_carousel owl-theme owl-carousel"
            data-options='{"loop": true, "center": false, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "480" :{ "items" : "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "3" } , "992":{ "items" : "4" }, "1200":{ "items" : "5" }}}'>
            <div class="column">
                <div class="image"><img src="https://html.tonatheme.com/2022/tayler/assets/images/client-logo/client-logo.png" alt=""></div>
            </div>
            <div class="column">
                <div class="image"><img src="https://html.tonatheme.com/2022/tayler/assets/images/client-logo/client-logo.png" alt=""></div>
            </div>
            <div class="column">
                <div class="image"><img src="https://html.tonatheme.com/2022/tayler/assets/images/client-logo/client-logo.png" alt=""></div>
            </div>
            <div class="column">
                <div class="image"><img src="https://html.tonatheme.com/2022/tayler/assets/images/client-logo/client-logo.png" alt=""></div>
            </div>
            <div class="column">
                <div class="image"><img src="https://html.tonatheme.com/2022/tayler/assets/images/client-logo/client-logo.png" alt=""></div>
            </div>
        </div>
    </div>
</section>







@endsection