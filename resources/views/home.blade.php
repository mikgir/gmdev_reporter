@extends('layouts.main')
@section('title', 'home')
@section('content')
    <main class="site-main">

        <!-- Slider Section -->
        <div class="container-fluid no-left-padding no-right-padding slider-section">
            <!-- Container -->
            <div class="container">
                <div id="slider-1" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
{{--                    <div class="carousel-inner" role="listbox">--}}
{{--                        <div class="item active">--}}
{{--                            <div class="col-md-6 col-sm-6 col-xs-6 big-post">--}}
{{--                                <!-- Type Post -->--}}
{{--                                <div class="type-post color-1">--}}
{{--                                    <div class="entry-cover"><a href="{{ route('news.show', $bigNews['id']) }}"><img--}}
{{--                                                src="{{ $bigNews['big_image'] }}"--}}
{{--                                                alt="Post"/></a></div>--}}
{{--                                    <div class="entry-content">--}}
{{--                                        <div class="post-category"><a href="#" title="World">World</a></div>--}}
{{--                                        <h3 class="entry-title"><a href="#">{{ $bigNews['title'] }}</a></h3>--}}
{{--                                        <p>{{ $bigNews['description'] }}</p>--}}
{{--                                        <div class="entry-footer">--}}
{{--                                            <span class="post-date"><a href="#">{{ date('Y-m-d') }}</a></span>--}}
{{--                                            <span class="post-like"><i class="fa fa-heart-o"></i><a--}}
{{--                                                    href="#">356</a></span>--}}
{{--                                            <span class="post-view"><i class="fa fa-eye"></i><a--}}
{{--                                                    href="#">589</a></span>--}}
{{--                                        </div>--}}
{{--                                        <a href="{{ route('news.show', $bigNews['id']) }}" title="Read More">узнать--}}
{{--                                            больше <i--}}
{{--                                                class="fa fa-angle-right"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div><!-- Type Post /- -->--}}
{{--                            </div>--}}
{{--                            @foreach( $thumbNews as $thumbNew)--}}
{{--                                <div class="col-md-3 col-sm-3 col-xs-6 thumb-post">--}}
{{--                                    <!-- Type Post -->--}}
{{--                                    <div class="type-post color-2">--}}
{{--                                        <div class="entry-cover"><a--}}
{{--                                                href="{{ route('news.show', $thumbNew['id']) }}"><img--}}
{{--                                                    src="{{ $thumbNew['thumb_image'] }}"--}}
{{--                                                    alt="Post"/></a></div>--}}
{{--                                        <div class="entry-content">--}}
{{--                                            <div class="post-category"><a href="#" title="Travel">Travel</a></div>--}}
{{--                                            <h3 class="entry-title"><a href="#">{{ $thumbNew['title'] }}</a></h3>--}}
{{--                                            <p>{{ $thumbNew['description'] }}</p>--}}
{{--                                            <div class="entry-footer">--}}
{{--                                                <span class="post-date"><a href="#">{{ date('Y-m-d') }}</a></span>--}}
{{--                                                <span class="post-like"><i class="fa fa-heart-o"></i><a--}}
{{--                                                        href="#">106</a></span>--}}
{{--                                                <span class="post-view"><i class="fa fa-eye"></i><a--}}
{{--                                                        href="#">256</a></span>--}}
{{--                                            </div>--}}
{{--                                            <a href="{{ route('news.show', $thumbNew['id']) }}" title="Read More">читать--}}
{{--                                                больше <i--}}
{{--                                                    class="fa fa-angle-right"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div><!-- Type Post /- -->--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="col-md-6 col-sm-6 col-xs-6 big-post">--}}
{{--                                <!-- Type Post -->--}}
{{--                                <div class="type-post color-1">--}}
{{--                                    <div class="entry-cover"><a href="{{ route('news.show', $bigNews['id']) }}"><img--}}
{{--                                                src="{{ $bigNews['image'] }}"--}}
{{--                                                alt="Post"/></a></div>--}}
{{--                                    <div class="entry-content">--}}
{{--                                        <div class="post-category"><a href="#" title="World">World</a></div>--}}
{{--                                        <h3 class="entry-title"><a href="#">{{ $bigNews['title'] }}</a></h3>--}}
{{--                                        <p>{{ $bigNews['description'] }}</p>--}}
{{--                                        <div class="entry-footer">--}}
{{--                                            <span class="post-date"><a href="#">{{ date('Y-m-d') }}</a></span>--}}
{{--                                            <span class="post-like"><i class="fa fa-heart-o"></i><a--}}
{{--                                                    href="#">356</a></span>--}}
{{--                                            <span class="post-view"><i class="fa fa-eye"></i><a--}}
{{--                                                    href="#">589</a></span>--}}
{{--                                        </div>--}}
{{--                                        <a href="{{ route('news.show', $bigNews['id']) }}" title="Read More">узнать--}}
{{--                                            больше <i--}}
{{--                                                class="fa fa-angle-right"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div><!-- Type Post /- -->--}}
{{--                            </div>--}}
{{--                            @foreach( $thumbNews as $thumbNew)--}}
{{--                                <div class="col-md-3 col-sm-3 col-xs-6 thumb-post">--}}
{{--                                    <!-- Type Post -->--}}
{{--                                    <div class="type-post color-2">--}}
{{--                                        <div class="entry-cover"><a--}}
{{--                                                href="{{ route('news.show', $thumbNew['id']) }}"><img--}}
{{--                                                    src="{{ $thumbNew['image'] }}"--}}
{{--                                                    alt="Post"/></a></div>--}}
{{--                                        <div class="entry-content">--}}
{{--                                            <div class="post-category"><a href="#" title="Travel">Travel</a></div>--}}
{{--                                            <h3 class="entry-title"><a href="#">{{ $thumbNew['title'] }}</a></h3>--}}
{{--                                            <p>{{ $thumbNew['description'] }}</p>--}}
{{--                                            <div class="entry-footer">--}}
{{--                                                <span class="post-date"><a href="#">{{ date('Y-m-d') }}</a></span>--}}
{{--                                                <span class="post-like"><i class="fa fa-heart-o"></i><a--}}
{{--                                                        href="#">106</a></span>--}}
{{--                                                <span class="post-view"><i class="fa fa-eye"></i><a--}}
{{--                                                        href="#">256</a></span>--}}
{{--                                            </div>--}}
{{--                                            <a href="{{ route('news.show', $thumbNew['id']) }}" title="Read More">читать--}}
{{--                                                больше <i--}}
{{--                                                    class="fa fa-angle-right"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div><!-- Type Post /- -->--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="col-md-6 col-sm-6 col-xs-6 big-post">--}}
{{--                                <!-- Type Post -->--}}
{{--                                <div class="type-post color-1">--}}
{{--                                    <div class="entry-cover"><a href="{{ route('news.show', $bigNews['id']) }}"><img--}}
{{--                                                src="{{ $bigNews['image'] }}"--}}
{{--                                                alt="Post"/></a></div>--}}
{{--                                    <div class="entry-content">--}}
{{--                                        <div class="post-category"><a href="#" title="World">World</a></div>--}}
{{--                                        <h3 class="entry-title"><a href="#">{{ $bigNews['title'] }}</a></h3>--}}
{{--                                        <p>{{ $bigNews['description'] }}</p>--}}
{{--                                        <div class="entry-footer">--}}
{{--                                            <span class="post-date"><a href="#">{{ date('Y-m-d') }}</a></span>--}}
{{--                                            <span class="post-like"><i class="fa fa-heart-o"></i><a--}}
{{--                                                    href="#">356</a></span>--}}
{{--                                            <span class="post-view"><i class="fa fa-eye"></i><a--}}
{{--                                                    href="#">589</a></span>--}}
{{--                                        </div>--}}
{{--                                        <a href="{{ route('news.show', $bigNews['id']) }}" title="Read More">узнать--}}
{{--                                            больше <i--}}
{{--                                                class="fa fa-angle-right"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div><!-- Type Post /- -->--}}
{{--                            </div>--}}
{{--                            @foreach( $thumbNews as $thumbNew)--}}
{{--                                <div class="col-md-3 col-sm-3 col-xs-6 thumb-post">--}}
{{--                                    <!-- Type Post -->--}}
{{--                                    <div class="type-post color-2">--}}
{{--                                        <div class="entry-cover"><a--}}
{{--                                                href="{{ route('news.show', $thumbNew['id']) }}"><img--}}
{{--                                                    src="{{ $thumbNew['image'] }}"--}}
{{--                                                    alt="Post"/></a></div>--}}
{{--                                        <div class="entry-content">--}}
{{--                                            <div class="post-category"><a href="#" title="Travel">Travel</a></div>--}}
{{--                                            <h3 class="entry-title"><a href="#">{{ $thumbNew['title'] }}</a></h3>--}}
{{--                                            <p>{{ $thumbNew['description'] }}</p>--}}
{{--                                            <div class="entry-footer">--}}
{{--                                                <span class="post-date"><a href="#">{{ date('Y-m-d') }}</a></span>--}}
{{--                                                <span class="post-like"><i class="fa fa-heart-o"></i><a--}}
{{--                                                        href="#">106</a></span>--}}
{{--                                                <span class="post-view"><i class="fa fa-eye"></i><a--}}
{{--                                                        href="#">256</a></span>--}}
{{--                                            </div>--}}
{{--                                            <a href="{{ route('news.show', $thumbNew['id']) }}" title="Read More">читать--}}
{{--                                                больше <i--}}
{{--                                                    class="fa fa-angle-right"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div><!-- Type Post /- -->--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#slider-1" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-1" data-slide-to="1"></li>
                        <li data-target="#slider-1" data-slide-to="2"></li>
                    </ol>
                </div>
            </div><!-- Container /- -->
        </div><!-- Slider Section -->
        <!-- Section Submit -->

        <!-- Section Submit -->
        <!-- Latest News -->
        <div class="container-fluid no-left-padding no-right-padding latest-video-block">
            <!-- Container -->
            <div class="container">
                <!-- Section Header -->
                <div class="section-header">
                    <h3>ПОСЛЕДНИЕ НОВОСТИ</h3>
                    <div class="lr-nav">
                        <a href="javascript:void(0);" class="nav-left"><i class="fa fa-angle-left"></i></a>
                        <a href="javascript:void(0);" class="nav-right"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div><!-- Section Header /- -->
                <!-- Row -->
                <div class="row">
                    <div id="latest_video_block">
                        @foreach($newsList as $news )
                            <div class="col-xs-12">
                                <!-- Type Post -->
                                <div class="type-post color-6">
                                    <div class="entry-cover"><a href="{{ route('news.show', $news->id) }}"><img
                                                src="{{ $news->image }}"
                                                style="width: 100%"
                                                alt="Post"/></a>
                                    </div>
                                    <div class="entry-content">
                                        <div class="post-category"><a href="#" title="Technology">Technology</a></div>
                                        <h3 class="entry-title"><a href="#">{{ $news->title }}</a></h3>
                                        <p>{{ $news->description }}</p>
                                        <div class="entry-footer">
                                            <span class="post-date"><a href="#">{{ date('Y-m-d') }}</a></span>
                                            <span class="post-like"><i class="fa fa-heart-o"></i><a
                                                    href="#">127</a></span>
                                            <span class="post-view"><i class="fa fa-eye"></i><a href="#">756</a></span>
                                        </div>
                                        <a href="{{ route('news.show', $news->id) }}" title="WATCH NOW">Читать</a>
                                    </div>
                                </div>
                                <!-- Type Post /- -->
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- Row /- -->
                <div class="col-md-12 load-more">
                    <a href="{{ route('news') }}" title="Load More">БОЛЬШЕ НОВОСТЕЙ</a>
                </div>
            </div>
            <!-- Container /- -->
        </div>
        <!-- Latest News /- -->
    </main>
@endsection

