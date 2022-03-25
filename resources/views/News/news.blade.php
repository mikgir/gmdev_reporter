@extends('layouts.main')
@section('title', 'Все новости')
@section('content')
    <main class="site-main">
        <div class="container-fluid no-left-padding no-right-padding slider-section">
            <div class="container">
                <div class="row">
                    <!-- Section Header -->
                    <div class="carousel-inner">
                        <div class="item active ">
                            <div class="col-md-6 col-sm-6 col-xs-6 big-post">
                                <!-- Type Post -->
                                <div class="type-post color-1">
                                    <div class="entry-cover"><a href="{{ route('news.show', $bigNews['id']) }}"><img
                                                src="{{ $bigNews['image'] }}"
                                                alt="Post"/></a>
                                    </div>
                                    <div class="entry-content">
                                        <div class="post-category"><a href="#" title="World">World</a></div>
                                        <h3 class="entry-title"><a href="#">{{ $bigNews['title'] }}</a></h3>
                                        <p>{{ $bigNews['description'] }}</p>
                                        <div class="entry-footer">
                                            <span class="post-date"><a href="#">{{ date('Y-m-d') }}</a></span>
                                            <span class="post-like"><i class="fa fa-heart-o"></i><a
                                                    href="#">356</a></span>
                                            <span class="post-view"><i class="fa fa-eye"></i><a
                                                    href="#">589</a></span>
                                        </div>
                                        <a href="{{ route('news.show', $bigNews['id']) }}" title="Read More">узнать
                                            больше
                                            <i
                                                class="fa fa-angle-right"></i></a>
                                    </div>
                                </div><!-- Type Post /- -->
                            </div>
                            @foreach( $thumbNews as $thumbNew)
                                <div class="col-md-3 col-sm-3 col-xs-6 thumb-post">
                                    <!-- Type Post -->
                                    <div class="type-post color-2">
                                        <div class="entry-cover"><a
                                                href="{{ route('news.show', $thumbNew['id']) }}"><img
                                                    src="{{ $thumbNew['image'] }}"
                                                    alt="Post"/></a></div>
                                        <div class="entry-content">
                                            <div class="post-category"><a href="#" title="Travel">Travel</a></div>
                                            <h3 class="entry-title"><a href="#">{{ $thumbNew['title'] }}</a></h3>
                                            <p>{{ $thumbNew['description'] }}</p>
                                            <div class="entry-footer">
                                                <span class="post-date"><a href="#">{{ date('Y-m-d') }}</a></span>
                                                <span class="post-like"><i class="fa fa-heart-o"></i><a
                                                        href="#">106</a></span>
                                                <span class="post-view"><i class="fa fa-eye"></i><a
                                                        href="#">256</a></span>
                                            </div>
                                            <a href="{{ route('news.show', $thumbNew['id']) }}" title="Read More">читать
                                                больше <i
                                                    class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div><!-- Type Post /- -->
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="section-header">
                        <h3>НОВОСТИ МИРА</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="carousel-inner">
                        <div class="item active ">
                            <div class="col-md-6 col-sm-6 col-xs-6 big-post">
                                <!-- Type Post -->
                                <div class="type-post color-1">
                                    <div class="entry-cover"><a href="{{ route('news.show', $bigNews['id']) }}"><img
                                                src="{{ $bigNews['image'] }}"
                                                alt="Post"/></a>
                                    </div>
                                    <div class="entry-content">
                                        <div class="post-category"><a href="#" title="World">World</a></div>
                                        <h3 class="entry-title"><a href="#">{{ $bigNews['title'] }}</a></h3>
                                        <p>{{ $bigNews['description'] }}</p>
                                        <div class="entry-footer">
                                            <span class="post-date"><a href="#">{{ date('Y-m-d') }}</a></span>
                                            <span class="post-like"><i class="fa fa-heart-o"></i><a
                                                    href="#">356</a></span>
                                            <span class="post-view"><i class="fa fa-eye"></i><a
                                                    href="#">589</a></span>
                                        </div>
                                        <a href="{{ route('news.show', $bigNews['id']) }}" title="Read More">узнать
                                            больше
                                            <i
                                                class="fa fa-angle-right"></i></a>
                                    </div>
                                </div><!-- Type Post /- -->
                            </div>
                            @foreach( $thumbNews as $thumbNew)
                                <div class="col-md-3 col-sm-3 col-xs-6 thumb-post">
                                    <!-- Type Post -->
                                    <div class="type-post color-2">
                                        <div class="entry-cover"><a
                                                href="{{ route('news.show', $thumbNew['id']) }}"><img
                                                    src="{{ $thumbNew['image'] }}"
                                                    alt="Post"/></a></div>
                                        <div class="entry-content">
                                            <div class="post-category"><a href="#" title="Travel">Travel</a></div>
                                            <h3 class="entry-title"><a href="#">{{ $thumbNew['title'] }}</a></h3>
                                            <p>{{ $thumbNew['description'] }}</p>
                                            <div class="entry-footer">
                                                <span class="post-date"><a href="#">{{ date('Y-m-d') }}</a></span>
                                                <span class="post-like"><i class="fa fa-heart-o"></i><a
                                                        href="#">106</a></span>
                                                <span class="post-view"><i class="fa fa-eye"></i><a
                                                        href="#">256</a></span>
                                            </div>
                                            <a href="{{ route('news.show', $thumbNew['id']) }}" title="Read More">читать
                                                больше <i
                                                    class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div><!-- Type Post /- -->
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="section-header">
                        <h3>НОВОСТИ ПОЛИТИКИ</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="carousel-inner">
                        <div class="item active ">
                            <div class="col-md-6 col-sm-6 col-xs-6 big-post">
                                <!-- Type Post -->
                                <div class="type-post color-1">
                                    <div class="entry-cover"><a href="{{ route('news.show', $bigNews['id']) }}"><img
                                                src="{{ $bigNews['image'] }}"
                                                alt="Post"/></a>
                                    </div>
                                    <div class="entry-content">
                                        <div class="post-category"><a href="#" title="World">World</a></div>
                                        <h3 class="entry-title"><a href="#">{{ $bigNews['title'] }}</a></h3>
                                        <p>{{ $bigNews['description'] }}</p>
                                        <div class="entry-footer">
                                            <span class="post-date"><a href="#">{{ date('Y-m-d') }}</a></span>
                                            <span class="post-like"><i class="fa fa-heart-o"></i><a
                                                    href="#">356</a></span>
                                            <span class="post-view"><i class="fa fa-eye"></i><a
                                                    href="#">589</a></span>
                                        </div>
                                        <a href="{{ route('news.show', $bigNews['id']) }}" title="Read More">узнать
                                            больше
                                            <i
                                                class="fa fa-angle-right"></i></a>
                                    </div>
                                </div><!-- Type Post /- -->
                            </div>
                            @foreach( $thumbNews as $thumbNew)
                                <div class="col-md-3 col-sm-3 col-xs-6 thumb-post">
                                    <!-- Type Post -->
                                    <div class="type-post color-2">
                                        <div class="entry-cover"><a
                                                href="{{ route('news.show', $thumbNew['id']) }}"><img
                                                    src="{{ $thumbNew['image'] }}"
                                                    alt="Post"/></a></div>
                                        <div class="entry-content">
                                            <div class="post-category"><a href="#" title="Travel">Travel</a></div>
                                            <h3 class="entry-title"><a href="#">{{ $thumbNew['title'] }}</a></h3>
                                            <p>{{ $thumbNew['description'] }}</p>
                                            <div class="entry-footer">
                                                <span class="post-date"><a href="#">{{ date('Y-m-d') }}</a></span>
                                                <span class="post-like"><i class="fa fa-heart-o"></i><a
                                                        href="#">106</a></span>
                                                <span class="post-view"><i class="fa fa-eye"></i><a
                                                        href="#">256</a></span>
                                            </div>
                                            <a href="{{ route('news.show', $thumbNew['id']) }}" title="Read More">читать
                                                больше <i
                                                    class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div><!-- Type Post /- -->
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="section-header">
                        <h3>НОВОСТИ КУЛЬТУРЫ</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="carousel-inner">
                        <div class="item active ">
                            <div class="col-md-6 col-sm-6 col-xs-6 big-post">
                                <!-- Type Post -->
                                <div class="type-post color-1">
                                    <div class="entry-cover"><a href="{{ route('news.show', $bigNews['id']) }}"><img
                                                src="{{ $bigNews['image'] }}"
                                                alt="Post"/></a>
                                    </div>
                                    <div class="entry-content">
                                        <div class="post-category"><a href="#" title="World">World</a></div>
                                        <h3 class="entry-title"><a href="#">{{ $bigNews['title'] }}</a></h3>
                                        <p>{{ $bigNews['description'] }}</p>
                                        <div class="entry-footer">
                                            <span class="post-date"><a href="#">{{ date('Y-m-d') }}</a></span>
                                            <span class="post-like"><i class="fa fa-heart-o"></i><a
                                                    href="#">356</a></span>
                                            <span class="post-view"><i class="fa fa-eye"></i><a
                                                    href="#">589</a></span>
                                        </div>
                                        <a href="{{ route('news.show', $bigNews['id']) }}" title="Read More">узнать
                                            больше
                                            <i
                                                class="fa fa-angle-right"></i></a>
                                    </div>
                                </div><!-- Type Post /- -->
                            </div>
                            @foreach( $thumbNews as $thumbNew)
                                <div class="col-md-3 col-sm-3 col-xs-6 thumb-post">
                                    <!-- Type Post -->
                                    <div class="type-post color-2">
                                        <div class="entry-cover"><a
                                                href="{{ route('news.show', $thumbNew['id']) }}"><img
                                                    src="{{ $thumbNew['image'] }}"
                                                    alt="Post"/></a></div>
                                        <div class="entry-content">
                                            <div class="post-category"><a href="#" title="Travel">Travel</a></div>
                                            <h3 class="entry-title"><a href="#">{{ $thumbNew['title'] }}</a></h3>
                                            <p>{{ $thumbNew['description'] }}</p>
                                            <div class="entry-footer">
                                                <span class="post-date"><a href="#">{{ date('Y-m-d') }}</a></span>
                                                <span class="post-like"><i class="fa fa-heart-o"></i><a
                                                        href="#">106</a></span>
                                                <span class="post-view"><i class="fa fa-eye"></i><a
                                                        href="#">256</a></span>
                                            </div>
                                            <a href="{{ route('news.show', $thumbNew['id']) }}" title="Read More">читать
                                                больше <i
                                                    class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div><!-- Type Post /- -->
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="section-header">
                        <h3>НОВОСТИ СПОРТА</h3>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

