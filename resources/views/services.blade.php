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
                    <li>Services</li>
                </ul>
                <div class="title">
                    <h1>Services</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="services-section"
    style="background-image: url(https://html.tonatheme.com/2022/tayler/assets/images/background/bg-2.jpg);">
    <div class="auto-container">
        <div class="sec-title-box text-center">
            <div class="sec-title-dec"><img
                    src="https://html.tonatheme.com/2022/tayler/assets//images/shape/shape-1.png" alt=""></div>
            <div class="sub-title">Checkout our services</div>
            <h2 class="sec-title">Services We Offer</h2>
        </div>
        <div class="theme_carousel owl-theme owl-carousel owl-style-one"
            data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "480" :{ "items" : "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "2" } , "992":{ "items" : "3", "center": true }, "1200":{ "items" : "3", "center": true }}}'>
            <div id="serviceweoffer" class="col-lg-12 service-block-one">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image img_hover_1"><img style="width: 189px !important"
                            src="{{asset('css/website/images/IMG_3441.png')}}" alt=""></div>
                    <h4><a>Custom Apparel Design</a></h4>
                    <div class="text">Tailored clothing designs allowing customers to choose styles, fabrics, and finishes.</div>
                </div>
            </div>
            <div class="col-lg-12 service-block-one">
                <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="image img_hover_1"><img style="width: 189px !important"
                            src="{{asset('css/website/images/IMG_3397.png')}}" alt=""></div>
                    <h4><a>Premium T-Shirt Printing</a></h4>
                    <div class="text">High-quality, long-lasting prints for personalized t-shirt designs.
                        Personalized Accessories – Customizable accessories like hats and bags to complete any outfit.</div>
                </div>
            </div>
            <div class="col-lg-12 service-block-one">
                <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="image img_hover_1"><img style="width: 189px !important"
                            src="{{asset('css/website/images/brand.png')}}" alt=""></div>
                    <h4><a>Product Rebranding</a></h4>
                    <div class="text">Revamping and rebranding products to align with customer vision and style.
                        High-Quality Clothing Customization – Detailed alterations and customizations to ensure a perfect fit and
                        style.</div>
                </div>
            </div>
            <div class="col-lg-12 service-block-one">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image img_hover_1"><img style="width: 189px !important"
                            src="{{asset('css/website/images/perfum.png')}}" alt=""></div>
                    <h4><a>Perfume Bottling</a></h4>
                    <div class="text">Customized perfume bottling for personalized and branded fragrance lines</div>
                </div>
            </div>
            {{-- <div class="col-lg-12 service-block-one">
                <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="image img_hover_1"><img
                            src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-4.jpg" alt="">
                    </div>
                    <h4><a href="wedding-dresses.html">Wedding Dresses</a></h4>
                    <div class="text">Donec suscipit ipsum quis est <br> mentum, quis sollicitudin libero <br> dmes
                        tempus.</div>
                </div>
            </div>
            <div class="col-lg-12 service-block-one">
                <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="image img_hover_1"><img
                            src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-5.jpg" alt="">
                    </div>
                    <h4><a href="stylish-clothing.html">Stylish Clothing</a></h4>
                    <div class="text">Donec suscipit ipsum quis est <br> mentum, quis sollicitudin libero <br> dmes
                        tempus.</div>
                </div>
            </div> --}}
        </div>
    </div>
</section>

<!-- Services Offer -->
{{-- <section class="service-offer-section">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="service-block-three">
                    <div class="service-block-three_border_top"></div>
                    <div class="service-block-three_border_left"></div>
                    <div class="service-block-three_border_right"></div>
                    <div class="service-block-three_border_bottom"></div>
                    <div class="service-block-three_image img_hover_2"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-3.jpg"
                            alt=""></div>
                    <h4 class="service-block-three_title"><a href="suits-shirts.html">Suits & Shirts</a></h4>
                    <div class="service-block-three_text">Donec suscipit ipsum quis est mentum, quis sollicitudin libero
                        tempus.</div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-block-three">
                    <div class="service-block-three_border_top"></div>
                    <div class="service-block-three_border_left"></div>
                    <div class="service-block-three_border_right"></div>
                    <div class="service-block-three_border_bottom"></div>
                    <div class="service-block-three_image img_hover_2"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-4.jpg"
                            alt=""></div>
                    <h4 class="service-block-three_title"><a href="stylish-clothing.html">Stylish Clothing</a></h4>
                    <div class="service-block-three_text">Donec suscipit ipsum quis est mentum, quis sollicitudin libero
                        tempus.</div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-block-three">
                    <div class="service-block-three_border_top"></div>
                    <div class="service-block-three_border_left"></div>
                    <div class="service-block-three_border_right"></div>
                    <div class="service-block-three_border_bottom"></div>
                    <div class="service-block-three_image img_hover_2"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-5.jpg"
                            alt=""></div>
                    <h4 class="service-block-three_title"><a href="wedding-dresses.html">Wedding Dresses</a></h4>
                    <div class="service-block-three_text">Donec suscipit ipsum quis est mentum, quis sollicitudin libero
                        tempus.</div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-block-three">
                    <div class="service-block-three_border_top"></div>
                    <div class="service-block-three_border_left"></div>
                    <div class="service-block-three_border_right"></div>
                    <div class="service-block-three_border_bottom"></div>
                    <div class="service-block-three_image img_hover_2"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-9.png"
                            alt=""></div>
                    <h4 class="service-block-three_title"><a href="custom-work.html">Custom Work</a></h4>
                    <div class="service-block-three_text">Donec suscipit ipsum quis est mentum, quis sollicitudin libero
                        tempus.</div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<!-- Our Benefits -->
{{-- <section class="benefits-section">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="sec-title-dec"><img src="https://html.tonatheme.com/2022/tayler/assets/images/shape/shape-1.png" alt=""></div>
                <div class="sub-title light">Our Benefits</div>
                <div class="sec-title light mb-30">Why You Should <br> Choose us?</div>
                <div class="benefits-section_description">There are many variations of passages of Lorem <br> Ipsum
                    available, but the majority have suffered <br> alteration in some form. </div>
                <ul class="benefits-section_list">
                    <li><img src="https://html.tonatheme.com/2022/tayler/assets/images/shape/shape-2.png" alt="">Urgent wedding dresses solutions.</li>
                    <li><img src="https://html.tonatheme.com/2022/tayler/assets/images/shape/shape-2.png" alt="">Top quality services with reasonable price
                    </li>
                    <li><img src="https://html.tonatheme.com/2022/tayler/assets/images/shape/shape-2.png" alt="">Reliable & experienced taylers</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="benefits-section_image">
                    <img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-24.jpg" alt="">
                    <div class="benefits-section_icon-box">
                        <div class="benefits-section_icon"><i class="flaticon-knitting"></i></div>
                        <div class="benefits-section_text">Style <br> According <br> To Your Way</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<!-- Features section -->
{{-- <section class="features-section">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-4">
                <div class="feature-block">
                    <div class="feature-block_image"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-14.jpg" alt=""></div>
                    <h4 class="feature-block_title">True Quality</h4>
                    <div class="feature-block_hover-content">
                        <h4 class="feature-block_title">True Quality</h4>
                        <div class="feature-block_text">Lorem ipsum is not simply <br> free text in market</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-block">
                    <div class="feature-block_image"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-27.jpg" alt=""></div>
                    <h4 class="feature-block_title">Handcrafted Suits</h4>
                    <div class="feature-block_hover-content">
                        <h4 class="feature-block_title">Handcrafted Suits</h4>
                        <div class="feature-block_text">Lorem ipsum is not simply <br> free text in market</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-block">
                    <div class="feature-block_image"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-15.jpg" alt=""></div>
                    <h4 class="feature-block_title">Kevin in Media</h4>
                    <div class="feature-block_hover-content">
                        <h4 class="feature-block_title">Kevin in Media</h4>
                        <div class="feature-block_text">Lorem ipsum is not simply <br> free text in market</div>
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

<!-- Our services -->
{{-- <section class="services-section" style="background-image: url(https://html.tonatheme.com/2022/tayler/assets/images/background/bg-2.jpg);">
    <div class="auto-container">
        <div class="sec-title-box text-center">
            <div class="sec-title-dec"><img src="https://html.tonatheme.com/2022/tayler/assets/images/shape/shape-1.png" alt=""></div>
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
</section> --}}

<!-- Cta -->
{{-- <section class="cta-section">
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
</section> --}}


@endsection