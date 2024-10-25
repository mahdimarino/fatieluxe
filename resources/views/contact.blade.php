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
                    <li>Contact</li>
                </ul>
                <div class="title">
                    <h1>Contact</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map-section pb-0">
    <div class="auto-container">
        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55945.16225505631!2d-73.90847969206546!3d40.66490264739892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1601263396347!5m2!1sen!2sbd"
                width="600" height="500" frameborder="0" style="border:0; width: 100%" allowfullscreen=""
                aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</section>

<!-- Contact info Section -->
<section class="contact-info-section pt-0">
    <div class="auto-container">
        <div class="contact-info-wrapper">
            <div class="row">
                <div class="col-lg-4 col-md-6 icon_box">
                    <div class="inner-box">
                        <div class="contact-info-section_text">Send Email</div>
                        <h4 class="contact-info-section_title"><a
                                href="mailto:neehelp@company.com">neehelp@company.com</a></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 icon_box">
                    <div class="inner-box">
                        <div class="contact-info-section_text">Call 24/7</div>
                        <h4 class="contact-info-section_title"><a href="tel:+1(246)3330791">+1 (246) 333 0791</a></h4>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 icon_box">
                    <div class="inner-box">
                        <div class="contact-info-section_text">Visit Anytime</div>
                        <h4 class="contact-info-section_title">66 Road Broklyn Street, New York</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Contact Form section -->
<section class="contact-form-section">
    <div class="auto-container">
        <div class="contact-form-section_sec-title-area">
            <h2 class="sec-title">Send us a Message <br> Anytime</h2>
            <div class="contact-form-section_description">Quisque id tempus nibh, in varius nunc. Mauris non convallis
                nulla. <br> Morbi at urna hendrerit, finibus justo a, pellentesque diam. Vivamus <br> lacus metus,
                placerat ullamcorper turpis et.</div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <!--Contact Form-->
                <div class="contact-form">
                    <form method="post" action="assets/inc/sendmail.php" id="contact-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="form_name" value=""
                                    placeholder="Your Name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="form_email" value=""
                                    placeholder="Your Email" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="form_phone" value=""
                                    placeholder="Phone Number" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="form_subject" value=""
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="form_message" class="form-control"
                                    placeholder="Write a massage"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden"
                                    value="">
                                <button class="btn-style-one dark" type="submit"
                                    data-loading-text="Please wait..."><span>Send a Message</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="contact-author">
                    <div class="contact-author_thumb"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-38.jpg" alt=""></div>
                    <div class="contact-author_name">Kevin Martin</div>
                    <div class="contact-author_designation">Expert Tayler</div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection