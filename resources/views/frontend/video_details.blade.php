@extends('frontend.layouts.main')

@section('content')
<style>
    
</style>
    <div class="ms-breadcrumb-wrapper text-center ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="ms-breadcrumb-container">
                        <h1>Video Details</h1>
                        <ul>
                            <li><a href="https://demo.kamleshyadav.com/themeforest/videospire/videospire-rtl">Home</a></li>
                            <li>Video Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main id="primary" class="site-main">
        <section class="ms-single-blog ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="ms-blog-columns">
                            <article id="post-258"
                                class="post-258 movie type-movie status-publish has-post-thumbnail hentry language-german language-spanish starring-alies-vhaess starring-kassah-napwer genre-drama genre-international subtitle-hindi subtitle-urdu movie_categories-movie-overview movie_categories-top-movies movie_categories-top-picks">
                                <!-- movies overview section start -->
                                <div class="ms-overview-wrapper ms-overview-index-2">
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-lg-7">
                                                <div class="ms-overview-left ms-overview-index3">
                                                    <a href="javascript:void(0);" class="ms-video-play" data-videoid="258"
                                                        data-videotype="movie">
                                                        <video width="100%" height="400" controls
                                                            poster="{{ asset('storage/'.$video->thumbnail) }}">
                                                            <source src="{{ asset('storage/'.$video->video_path) }}" type="video/mp4">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                        <span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="60"
                                                                height="60" viewBox="0 0 60 60">
                                                                <path class="cls-1"
                                                                    d="M693.994,406.239l-11.964-6.931a4.338,4.338,0,0,0-6.51,3.76v13.863a4.359,4.359,0,0,0,4.338,4.353h0a4.338,4.338,0,0,0,2.17-.592h0l11.964-6.931A4.348,4.348,0,0,0,693.994,406.239Zm-1.682,4.613-11.966,6.933a0.973,0.973,0,0,1-.485.133,0.991,0.991,0,0,1-.489-0.133,0.966,0.966,0,0,1-.492-0.854V403.068a0.989,0.989,0,0,1,.98-0.988h0.007a0.943,0.943,0,0,1,.468.129l0.011,0.006,11.964,6.931A0.988,0.988,0,0,1,692.312,410.852Zm13.9-22.065a30,30,0,1,0-5.691,46.89,1.68,1.68,0,1,0-1.74-2.874,26.868,26.868,0,1,1,8.342-8.017,1.68,1.68,0,1,0,2.792,1.868A29.923,29.923,0,0,0,706.213,388.787Z"
                                                                    transform="translate(-655 -380)" />
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="ms-overview-right">
                                                    <div class="ms-overview-heading">
                                                        <h2>{{$video->title}}</h2>
                                                        <p>{{$video->description}}</p>
                                                    </div>
                                                    
                                                    <div class="ms-overview-right-footer">
                                                        <ul>
                                                            <li>
                                                                {{-- <a href="javascript:;" class="ms-download"
                                                                    data-movies="258">
                                                                    <span>
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16"
                                                                            viewBox="0 0 16 16">

                                                                            <path class="cls-1"
                                                                                d="M1307,630.689v-7.6a1,1,0,1,1,2,0v7.623c0.64-.638,1.22-1.216,1.79-1.8a1.011,1.011,0,0,1,.88-0.325,1,1,0,0,1,.57,1.708c-0.74.746-1.49,1.488-2.23,2.231-0.42.42-.84,0.842-1.26,1.257a0.993,0.993,0,0,1-1.5,0q-1.74-1.728-3.46-3.467a0.982,0.982,0,0,1-.03-1.448,0.993,0.993,0,0,1,1.45.047c0.51,0.5,1.01,1.015,1.52,1.522C1306.8,630.512,1306.88,630.577,1307,630.689Zm1,7.307q-3.465,0-6.93,0a1,1,0,1,1-.07-2c0.38-.007.75,0,1.13,0q6.33,0,12.67,0a1.875,1.875,0,0,1,.47.042,0.989,0.989,0,0,1,.73,1.063,1.011,1.011,0,0,1-.94.889c-0.24.014-.48,0-0.72,0H1308Z"
                                                                                transform="translate(-1300 -622)" />
                                                                        </svg>
                                                                    </span>
                                                                    Download App
                                                                </a> --}}
                                                                <a href="javascript:;" class="ms-btn" style="color: aliceblue !important" data-bs-toggle="modal"
                                                                    data-bs-target="#loginModal">
                                                                    <i class="fa fa-download me-2"></i> Download App
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- more like section start -->
                                <div class="ms-videospire-selection-wrapper ms-likethis-player ms-most-liked-series">
                                    <div class="container-fluid">
                                        <div class="ms-top-movies-heading">
                                            <h2 class="heading">Related Videos</h2>
                                        </div>
                                        <div class="ms-latest-top-movies-slider">
                                            <div class="swiper mySwiper">
                                                <div class="swiper-wrapper">
                                                    @foreach ($relatedVideos  as $item)
                                                        <div class="swiper-slide">
                                                            <div class="ms-exclusive-movie-box">
                                                                <div class="ms-exclusive-movie-box-inner">
                                                                    <div class="ms-exclusive-movie-img">
                                                                        <a
                                                                            href="{{route('video-details',$item->id)}}">
                                                                            <img src="{{ asset('storage/'.$item->thumbnail) }}"
                                                                                alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="ms-exclusive-movie-content">
                                                                        <a
                                                                            href="">
                                                                            <h4>{{$item->title}}</h4>
                                                                        </a>
                                                                        {{-- <p>2020/ Action, Adventure, Drama, Comedy.</p> --}}
                                                                        <div class="ms-exclusive-rating">
                                                                            <span>
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="12" height="12"
                                                                                    viewBox="0 0 12 12">
                                                                                    <path class="cls-1"
                                                                                        d="M561.983,1176.56a0.347,0.347,0,0,0-.284-0.25l-3.72-.57-1.664-3.54a0.348,0.348,0,0,0-.63,0l-1.664,3.54-3.719.57a0.344,0.344,0,0,0-.284.25,0.365,0.365,0,0,0,.089.37l2.691,2.75-0.635,3.89a0.373,0.373,0,0,0,.14.36,0.32,0.32,0,0,0,.207.07,0.315,0.315,0,0,0,.163-0.04l3.327-1.84,3.327,1.84a0.355,0.355,0,0,0,.371-0.03,0.372,0.372,0,0,0,.139-0.36l-0.635-3.89,2.692-2.75A0.365,0.365,0,0,0,561.983,1176.56Z"
                                                                                        transform="translate(-550 -1172)" />
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-prmum-tag">
                                                                    <span>
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 32 32">
                                                                            <g>
                                                                                <path
                                                                                    d="M27.488 23l-.513 2.225A1 1 0 0126 26H6a1 1 0 01-.975-.775L4.512 23zM29.975 12.225L27.95 21H4.05l-2.025-8.775a1.001 1.001 0 011.471-1.093l6.189 3.537 5.482-8.223c.179-.268.475-.434.796-.446a.99.99 0 01.826.386l6.429 8.266 5.227-3.484a1.002 1.002 0 011.53 1.057z" />
                                                                            </g>
                                                                        </svg>
                                                                    </span>
                                                                    <p>Premium</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="ms-letest-top-navigation">
                                                    <div class="swiper-button-next">
                                                        <span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="7"
                                                                height="12" viewBox="0 0 7 12">
                                                                <path class="cls-1"
                                                                    d="M1909.81,2028.53l-5.3-5.34a0.66,0.66,0,0,0-.46-0.19,0.642,0.642,0,0,0-.46.19l-0.39.39a0.652,0.652,0,0,0,0,.93l4.45,4.49-4.46,4.49a0.652,0.652,0,0,0,0,.92l0.39,0.4a0.66,0.66,0,0,0,.46.19,0.642,0.642,0,0,0,.46-0.19l5.31-5.35a0.66,0.66,0,0,0,.19-0.46A0.683,0.683,0,0,0,1909.81,2028.53Z"
                                                                    transform="translate(-1903 -2023)" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="swiper-button-prev">
                                                        <span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="7"
                                                                height="12" viewBox="0 0 7 12">
                                                                <path class="cls-1"
                                                                    d="M1909.81,2028.53l-5.3-5.34a0.66,0.66,0,0,0-.46-0.19,0.642,0.642,0,0,0-.46.19l-0.39.39a0.652,0.652,0,0,0,0,.93l4.45,4.49-4.46,4.49a0.652,0.652,0,0,0,0,.92l0.39,0.4a0.66,0.66,0,0,0,.46.19,0.642,0.642,0,0,0,.46-0.19l5.31-5.35a0.66,0.66,0,0,0,.19-0.46A0.683,0.683,0,0,0,1909.81,2028.53Z"
                                                                    transform="translate(-1903 -2023)" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- more like section end -->

                            </article>
                           
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>
    <script>
        document.querySelector('.play-btn').addEventListener('click', function () {
            let video = document.querySelector('video');
            video.play();
            video.setAttribute('controls', 'controls');
        });
    </script>

@endsection
