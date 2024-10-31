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
            <div class="swiper-slide" style="background-image: url({{asset('css/website/images/background/imgbgdark.jpg')}});">
                <div class="content-outer">
                    <div class="content-box">
                        <div class="inner">
                           <h4>Welcome to  FatieLuxe</h4>
                            <h1>Where Elegance <br> Meets Styles</h1>
                        
                            <div class="link-box">
                                <a href="index.php#serviceweoffer" class="theme-btn btn-style-one"><span>discover more</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Item -->
             <div class="swiper-slide" style="background-image: url({{asset('css/website/images/background/IMG_3255.jpg')}});">
                <div class="content-outer">
                    <div class="content-box">
                        <div class="inner">
                            <h4>Welcome to FatieLuxe</h4>
                            <h1>Create your <br> own Personal Style</h1>
                            <div class="link-box">
                                <a href="index.php#serviceweoffer" class="theme-btn btn-style-one"><span>discover more</span></a>
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
                            <div class="image-one" data-parallax='{"y": -30}'><img src="{{asset('css/website/images/newimg2.png')}}" alt=""></div>
                        </div>
                        <div class="col-md-6">
                            <div class="image-two" data-parallax='{"y": 30}'><img src="{{asset('css/website/images/IMG_3319.png')}}" alt=""></div>
                        </div>
                    </div>
                    {{-- <div class="experience-year">
                        <h3>20</h3>Years of <br>Practicing
                    </div> --}}
                </div>
            </div>
            <div id="aboutus" class="col-lg-5">
                <div class="sec-title-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="sec-title-dec"><img src="https://html.tonatheme.com/2022/tayler/assets//images/shape/shape-1.png" alt=""></div>
                    {{-- <div class="sub-title">Checkout our services</div> --}}
                    <h2 class="sec-title mb-35">Introducing the FatieLuxe</h2>
                </div>
                <div class="text">Founded in 2024 by a woman with a passion for elegance and style, our apparel company is dedicated to bringing unique,
                high-quality clothing and accessories to life. We offer a curated selection of stylish pieces that can be tailored to
                each customer’s vision, ensuring a personal touch in every detail.  Our
                mission is simple: to celebrate individuality through fashion that feels as good as it looks.</div>
                <ul class="list">
                    <li><img src="https://html.tonatheme.com/2022/tayler/assets/images/shape/shape-2.png" alt=""> Custom Apparel Design</li>
                    <li><img src="https://html.tonatheme.com/2022/tayler/assets/images/shape/shape-2.png" alt="">Premium T-Shirt Printing</li>
                    <li><img src="https://html.tonatheme.com/2022/tayler/assets/images/shape/shape-2.png" alt="">Personalized Accessories</li>
                    <li><img src="https://html.tonatheme.com/2022/tayler/assets/images/shape/shape-2.png" alt="">Product Rebranding</li>
                    <li><img src="https://html.tonatheme.com/2022/tayler/assets/images/shape/shape-2.png" alt="">High-Quality Clothing Customization</li>
                    <li><img src="https://html.tonatheme.com/2022/tayler/assets/images/shape/shape-2.png" alt="">Perfume Bottling</li>
                </ul>
                <div class="author-wrapper wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    {{-- <div class="author-thumb"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-1.png" alt=""></div> --}}
                    {{-- <div class="signature"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-2.png" alt=""></div> --}}
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
        <div  class="theme_carousel owl-theme owl-carousel owl-style-one"
            data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "480" :{ "items" : "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "2" } , "992":{ "items" : "3", "center": true }, "1200":{ "items" : "3", "center": true }}}'>
            <div id="serviceweoffer" class="col-lg-12 service-block-one">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image img_hover_1"><img style="width: 189px !important"  src="{{asset('css/website/images/IMG_3441.png')}}" alt=""></div>
                    <h4><a >Custom Apparel Design</a></h4>
                    <div class="text">Tailored clothing designs allowing customers to choose styles, fabrics, and finishes.</div>
                </div>
            </div>
            <div class="col-lg-12 service-block-one">
                <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="image img_hover_1"><img style="width: 189px !important"  src="{{asset('css/website/images/IMG_3397.png')}}" alt=""></div>
                    <h4><a>Premium T-Shirt Printing</a></h4>
                    <div class="text">High-quality, long-lasting prints for personalized t-shirt designs.
                    Personalized Accessories – Customizable accessories like hats and bags to complete any outfit.</div>
                </div>
            </div>
            <div class="col-lg-12 service-block-one">
                <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="image img_hover_1"><img style="width: 189px !important" src="{{asset('css/website/images/brand.png')}}" alt=""></div>
                    <h4><a >Product Rebranding</a></h4>
                    <div class="text">Revamping and rebranding products to align with customer vision and style.
                    High-Quality Clothing Customization – Detailed alterations and customizations to ensure a perfect fit and style.</div>
                </div>
            </div>
            <div class="col-lg-12 service-block-one">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image img_hover_1"><img style="width: 189px !important" src="{{asset('css/website/images/perfum.png')}}" alt=""></div>
                    <h4><a>Perfume Bottling</a></h4>
                    <div class="text">Customized perfume bottling for personalized and branded fragrance lines</div>
                </div>
            </div>
            {{-- <div class="col-lg-12 service-block-one">
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
            </div> --}}
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
                               <div class="count-outer count-box funfacts-block_number">
                                    <span class="count-text" data-speed="3000" data-stop="50">0</span><span class="plus">+</span>
                                </div>
                                <h4 class="funfacts-block_title">Available Illustration</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="funfacts-block wow fadeInDown" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="content-middle">
                               <div class="count-outer count-box funfacts-block_number">
                                    <span class="count-text" data-speed="3000" data-stop="100">0</span><span class="plus">+</span>
                                </div>
                                <h4 class="funfacts-block_title">Happy Clients</h4>
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
                                <div class="count-outer count-box funfacts-block_number">
                                    <span class="count-text" data-speed="3000" data-stop="3">0</span><span class="plus"></span>
                                </div>
                                <h4 class="funfacts-block_title">branches accross UAE</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="funfacts-block wow fadeInDown" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="content-middle">
                                <div class="count-outer count-box funfacts-block_number">
                                    <span class="count-text" data-speed="3000" data-stop="200">0</span><span
                                        class="plus">+</span>
                                </div>
                                <h4 class="funfacts-block_title">Items Sold</h4>
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
                <div class="col-lg-6 image-bg" style="background-image: url({{asset('css/website/images/IMG_3319.jpg')}});">
                    <div class="image d-lg-none"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-8.jpg" alt=""></div>
                </div>
                <div class="col-lg-6">
                    <div class="inner-container">
                        {{-- <div class="sec-title-dec"><img src="https://html.tonatheme.com/2022/tayler/assets/images/shape/shape-1.png" alt=""></div>
                        <div class="sub-title light">Checkout our services</div> --}}
                        <h2 class="sec-title light mb-30">Why us?</h2>
                        <div class="text light mb-30">Experience the best in customized fashion with Fatieluxe. <br> We offer a diverse range of high-quality clothing,
                        accessories, and personalized perfumes, all tailored to your unique style. <br> With exceptional craftsmanship and timely
                        delivery, we ensure that your fashion is truly yours!
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
                        <h4 class="service-block-two_title">Wide Range of Product Types</h4>
                        <div class="service-block-two_text">We offer diverse products, from clothing and accessories to custom perfumes, catering to various style needs.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-block-two wow fadeInDown" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="service-block-two_icon"><i class="flaticon-seam-ripper"></i></div>
                        <h4 class="service-block-two_title">Premium Quality</h4>
                        <div class="service-block-two_text">From fabrics to prints, we prioritize quality, ensuring every item feels and looks exceptional.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-block-two wow fadeInDown" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="service-block-two_icon"><i class="flaticon-embroidery"></i></div>
                        <h4 class="service-block-two_title">Diverse Services</h4>
                        <div class="service-block-two_text">Offering everything from custom apparel to perfume bottling, we’re a one-stop shop for personalized style.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-block-two wow fadeInDown" data-wow-delay="700ms" data-wow-duration="1500ms">
                        <div class="service-block-two_icon"><i class="flaticon-thread"></i></div>
                        <h4 class="service-block-two_title">Timely Deliver</h4>
                        <div class="service-block-two_text">We prioritize efficient timelines to ensure your customized products are ready when you need them.</div>
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
                    <div class="sec-bg"></div>
                    <div class="testimonial-block">
                        <h4 class="testimonial-block_title">What They’re Saying</h4>
                     <div class="swiper-container testimonial-thumbs">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="author-thumb">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="author-thumb">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="author-thumb">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Swiper -->
                        <div class="swiper-container testimonial-content">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-block_text">“I love my custom t-shirts! The quality is exceptional, and the design process was so easy. I can't wait to order more!”</div>
                                    <div class="testimonial-block_name"> Ahmed M</div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-block_text">"The accessories from this company added the perfect touch to my outfits. Highly recommend for anyone looking to stand
                                    out!"</div>
                                    <div class="testimonial-block_name"> Samah K.</div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-block_text">"Their attention to detail and quick delivery blew me away! Will order again."</div>
                                    <div class="testimonial-block_name"> Amira A.</div>
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
                            <div class="image-100 img_hover_3"><img style="width: 356px; height:310px" src="{{asset('css/website/images/image4.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image-100 img_hover_3"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-25.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image-100 img_hover_3"><img style="width: 356px; height:310px" src="{{asset('css/website/images/image5.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image-100 img_hover_3"><img style="width: 356px; height:310px" src="{{asset('css/website/images/image6.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Team Section -->
{{-- <section class="our-team-section">
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
</section> --}}

<!-- Map Section -->
<section class="map-section pb-0 pt-0">
    <div class="auto-container full-width">
        <div class="contact-map">
            <iframe
               src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.898338568243!2d55.192926575863666!3d25.116095826456234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6bf1895c6183%3A0x6e0c7fbd380a3b17!2sAl%20Barsha%20Night%20Market!5e0!3m2!1sen!2sae!4v1698322593967!5m2!1sen!2sae"
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
                  <a class="cta-block-one_phone" href="tel:+971502238132">+971 50 223 8132</a>
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
{{-- <section class="news-section">
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
</section> --}}

<!-- Client Logo -->
{{-- <section class="client-logo">
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
</section> --}}







@endsection