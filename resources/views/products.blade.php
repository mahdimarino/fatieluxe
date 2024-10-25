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
                    <li>Gallery</li>
                </ul>
                <div class="title">
                    <h1>Gallery</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery -->
<section class="gallery-section-two">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="gallery-block gallery-overlay">
                    <div class="gallery-block_image"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-32.jpg" alt=""></div>
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <a href="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-32.jpg" class="lightbox-image link"
                                    data-fancybox="gallery"><span class="icon fal fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-block gallery-overlay">
                    <div class="gallery-block_image"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-33.jpg" alt=""></div>
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <a href="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-33.jpg" class="lightbox-image link"
                                    data-fancybox="gallery"><span class="icon fal fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-block gallery-overlay">
                    <div class="gallery-block_image"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-34.jpg" alt=""></div>
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <a href="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-34.jpg" class="lightbox-image link"
                                    data-fancybox="gallery"><span class="icon fal fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-block gallery-overlay">
                    <div class="gallery-block_image"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-35.jpg" alt=""></div>
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <a href="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-35.jpg" class="lightbox-image link"
                                    data-fancybox="gallery"><span class="icon fal fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-block gallery-overlay">
                    <div class="gallery-block_image"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-36.jpg" alt=""></div>
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <a href="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-36.jpg" class="lightbox-image link"
                                    data-fancybox="gallery"><span class="icon fal fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-block gallery-overlay">
                    <div class="gallery-block_image"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-37.jpg" alt=""></div>
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <a href="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-37.jpg" class="lightbox-image link"
                                    data-fancybox="gallery"><span class="icon fal fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection