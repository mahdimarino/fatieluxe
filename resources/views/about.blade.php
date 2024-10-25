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

<!-- Page Title -->
<section class="page-title">
    <div class="bg" data-parallax='{"y": 50}' style="background-image: url(https://html.tonatheme.com/2022/tayler/assets/images/background/bg-7.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <div class="content-wrapper">
                <ul class="bread-crumb">
                    <li><a href="index.html">Home</a></li>
                    <li>About</li>
                </ul>
                <div class="title">
                    <h1>About</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- introduction-section two -->
<section class="introduction-section-two">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="sec-title-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="sec-title-dec"><img src="https://html.tonatheme.com/2022/tayler/assets/images/shape/shape-1.png" alt=""></div>
                    <div class="sub-title">About Us</div>
                    <h2 class="sec-title mb-35">We Only Stitch on Your <br> Demands</h2>
                </div>
                <div class="introduction-section-two_description mb-30">Lorem ipsum dolor sit amet, consectetur notted
                    adipisicing elit sed <br> do eiusmod tempor incididunt ut labore et dolore magna <br> aliqua lonm
                    andhn.</div>
                <div class="progress-levels mb-30">
                    <!--Skill Box-->
                    <div class="progress-box wow fadeIn" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <h5>Material</h5>
                        <div class="inner">
                            <div class="bar">
                                <div class="bar-innner">
                                    <div class="bar-fill" data-percent="88">
                                        <div class="percent"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Skill Box-->
                    <div class="progress-box wow fadeIn" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <h5>Stitching</h5>
                        <div class="inner">
                            <div class="bar">
                                <div class="bar-innner">
                                    <div class="bar-fill" data-percent="65">
                                        <div class="percent"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="introduction-block_contact-info">
                            <div class="introduction-block_phone-title">Call Anytime</div>
                            <div class="introduction-block-phone"><a href="tel:+1-(246)3330089">+ 1- (246) 333-0089</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="introduction-block-two_author-wrapper wow fadeInUp" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <div class="introduction-block-two_author-thumb"><img
                                    src="assets/images/resource/image-1.png" alt=""></div>
                            <div class="introduction-block-two_signature"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-2.png"
                                    alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="introduction-block-two_image-wrapper wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="introduction-block-two_image img_hover_3"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-28.jpg"
                            alt=""></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our testimonials -->
<section class="our-testimonials-section-two style-two">
    <div class="auto-container">
        <div class="text-center">
            <div class="sec-title-dec"><img src="https://html.tonatheme.com/2022/tayler/assets//images/shape/shape-1.png" alt=""></div>
            <div class="sub-title">Our testimonials </div>
            <div class="sec-title">What They’re Saying</div>
        </div>
        <div class="theme_carousel owl-theme owl-carousel owl-style-one"
            data-options='{"loop": true, "center": false, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "480" :{ "items" : "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "2" } , "992":{ "items" : "3" }, "1200":{ "items" : "3" }}}'>
            <div class="testimonial-block-two">
                <div class="testimonial-block-two_image"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-6.png" alt=""></div>
                <div class="testimonial-block-two_text">I was very impresed by the company services lorem ipsum is
                    simply free text available used by copytyping refreshing. Neque porro est qui dolorem ipsum quia.
                </div>
                <div class="testimonial-block-two_name">Mike Hardson</div>
                <div class="testimonial-block-two_dasignation">Customer</div>
            </div>

            <div class="testimonial-block-two">
                <div class="testimonial-block-two_image"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-7.png" alt=""></div>
                <div class="testimonial-block-two_text">I was very impresed by the company services lorem ipsum is
                    simply free text available used by copytyping refreshing. Neque porro est qui dolorem ipsum quia.
                </div>
                <div class="testimonial-block-two_name">Sarah Albert</div>
                <div class="testimonial-block-two_dasignation">Customer</div>
            </div>

            <div class="testimonial-block-two">
                <div class="testimonial-block-two_image"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-8.png" alt=""></div>
                <div class="testimonial-block-two_text">I was very impresed by the company services lorem ipsum is
                    simply free text available used by copytyping refreshing. Neque porro est qui dolorem ipsum quia.
                </div>
                <div class="testimonial-block-two_name">Kevin Martin</div>
                <div class="testimonial-block-two_dasignation">Customer</div>
            </div>
        </div>
    </div>
</section>

<!-- Funfacts -->
<section class="funfacts-section pt-0">
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

<!-- Video -->
<section class="video-section">
    <div class="video-section_bg" data-parallax='{"y": 30}'
        style="background-image: url(https://html.tonatheme.com/2022/tayler/assets/images/background/bg-3.jpg)"></div>
    <div class="auto-container">
        <div class="row">
            <div class="video-btn"><a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s"
                    class="overlay-link play-now ripple" data-fancybox="gallery" data-caption=""><i
                        class="fas fa-play"></i></a></div>
            <h4 class="video-block_title">You Can Depend on Our <br> Taylers to Get a Quality Dresses</h4>
        </div>
    </div>
</section>

<!-- Our Team Section -->
<section class="our-team-section">
    <div class="auto-container">
        <div class="sec-title-box text-center">
            <div class="sec-title-dec"><img src="https://html.tonatheme.com/2022/tayler/assets/images/shape/shape-1.png" alt=""></div>
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