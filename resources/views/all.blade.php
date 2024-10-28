@extends('web_layout')
@section('content')
<style>
    .feature-block_hover-content {
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3) !important; /* Adjust the values as needed */
    padding: 15px !important; /* Optional: Add padding to give some space around the content */
    border-radius: 5px !important; /* Optional: Add rounded corners */
    background-color: #000000 !important; /* Optional: Set background color */
    }
</style>
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
    <div class="bg" data-parallax='{"y": 50}'
        style="background-image: url(https://html.tonatheme.com/2022/tayler/assets/images/background/bg-7.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <div class="content-wrapper">
                <ul class="bread-crumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Gallery</li>
                </ul>
                <div class="title">
                    <h1>{{ $category ? ucfirst($category) . ' Products' : 'All Products' }}</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery -->
{{-- <section class="gallery-section-two">
    <div class="auto-container">
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6">
                <div class="gallery-block gallery-overlay">
                    <div class="gallery-block_image"><img
                            src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-32.jpg" alt="">
                    </div>
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <a href="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-32.jpg"
                                    class="lightbox-image link" data-fancybox="gallery"><span
                                        class="icon fal fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           @endforeach
        </div>
    </div>
</section> --}}
<section class="features-section">
    <div class="auto-container">
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-lg-4">
                <div class="feature-block">
                    <div class="feature-block_image"><img src="{{ asset('/' . $blog->image_path) }}" alt=""></div>
                   <h4 style="color: black; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);" class="feature-block_title">{{ $blog->title }}
                </h4>
                    <div class="feature-block_hover-content">
                        <h4 class="feature-block_title">{{$blog->title}}</h4>
                        <div class="feature-block_text">{{ $blog->desc }}</div>
                    </div>
                </div>
            </div>
           @endforeach
        </div>
    </div>
</section>

@endsection