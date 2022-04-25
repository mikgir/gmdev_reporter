@extends('layouts.main')
@section('title', 'Репортер')

@section('middle-header')
    <x-header-slider></x-header-slider>
@endsection

@section('content')
    <main class="site-main">
        <!-- Slider Section -->
        <div class="container-fluid no-left-padding no-right-padding slider-section">
            <!-- Container -->
            <div class="container">
                <div id="slider-1" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        @foreach( $bigNews as $key => $news )
                            <div class='item {{ $key === 0 ? 'active' : '' }}'>
                                <div class="col-md-6 col-sm-6 col-xs-6 big-post">
                                    <!-- Type Post -->
                                    <div class="type-post color-{{ $news->category_id }}">
                                        <div class="entry-cover">
                                            <a href="{{ route('news.show', $news->id) }}">
                                                <img src="https://imgholder.ru/376x299/8493a8/adb9ca&text=image&font=kelson&fz=21
                                                        @if( !empty($news->image) )
                                                {{ \Illuminate\Support\Facades\Storage::disk('public')->url($news->image) }}
                                                @endif"
                                                     style="width: 620px; height: 519px"
                                                     alt="Post"/>
                                            </a>
                                        </div>
                                        <div class="entry-content">
                                            <div class="post-category">
                                                <a href="#"
                                                   title="{{ $news->category->title }}">{{ $news->category->title }}</a>
                                            </div>
                                            <h3 class="entry-title"><a href="#">{{ $news->title }}</a></h3>
                                            <p>{{ $news->description }}</p>
                                            <div class="entry-footer">
                                                <span class="post-date"><a href="#">{{ date('Y-m-d') }}</a></span>
                                                <span class="post-like"><i class="fa fa-heart-o"></i><a
                                                        href="#">356</a></span>
                                                <span class="post-view"><i class="fa fa-eye"></i><a
                                                        href="#">589</a></span>
                                            </div>
                                            <a href="{{ route('news.show', $news->id) }}" title="Read More">узнать
                                                больше <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div><!-- Type Post /- -->
                                </div>
                                @foreach( $thumbNews as $news )
                                    <div class="col-md-3 col-sm-3 col-xs-6 thumb-post">
                                        <!-- Type Post -->
                                        <div class="type-post color-{{ $news->category_id }}">
                                            <div class="entry-cover">
                                                <a href="{{ route('news.show', $news->id) }}">
                                                    <img src="https://imgholder.ru/376x299/8493a8/adb9ca&text=image&font=kelson&fz=21
                                                        @if( !empty($news->image) )
                                                    {{ \Illuminate\Support\Facades\Storage::disk('public')->url($news->image) }}
                                                    @endif"
                                                         style="width: 270px; height: 257px" alt="Post"/>
                                                </a>
                                            </div>
                                            <div class="entry-content">
                                                <div class="post-category">
                                                    <a href="#" title="{{ $news->category->title }}">
                                                        {{ $news->category->title }}
                                                    </a>
                                                </div>
                                                <h3 class="entry-title">
                                                    <a href="#">{{ $news->title }}</a>
                                                </h3>
                                                <p>{{ $news->description }}</p>
                                                <div class="entry-footer">
                                                    <span class="post-date"><a href="#">{{ date('Y-m-d') }}</a></span>
                                                    <span class="post-like">
                                                        <i class="fa fa-heart-o"></i>
                                                        <a href="#">106</a>
                                                    </span>
                                                    <span class="post-view">
                                                        <i class="fa fa-eye"></i>
                                                        <a href="#">256</a>
                                                    </span>
                                                </div>
                                                <a href="{{ route('news.show', $news->id) }}" title="Read More">
                                                    читать больше
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </div><!-- Type Post /- -->
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#slider-1" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-1" data-slide-to="1"></li>
                        <li data-target="#slider-1" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
            <!-- Slider Section -->
            <!-- Section News -->
            <div class="container-fluid no-left-padding no-right-padding slider-section">
                <div class="container">
                    <div class="row">
                        <!-- Largest Post -->
                        <div class="container-fluid no-left-padding no-right-padding largest-post-block">
                            <!-- Container -->
                            <div class="container">
                                <!-- Section Header -->
                                <div class="section-header">
                                    <h3>Новости</h3>
                                </div>
                                <!-- Section Header /- -->
                                <!-- Row -->
                                <div class="row">
                                    @forelse( $newsList as $news)
                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <!-- Type Post -->
                                            <div class="type-post larg-post color-{{ $news->category_id }}">
                                                <div class="entry-cover"><a href="#">
                                                        <img src="https://imgholder.ru/376x299/8493a8/adb9ca&text=image&font=kelson&fz=21
                                                        @if( !empty($news->image) )
                                                        {{ \Illuminate\Support\Facades\Storage::disk('public')->url($news->image) }}
                                                        @endif"
                                                             style="width: 376px; height: 400px" alt="Post"/>
                                                    </a>
                                                </div>
                                                <div class="entry-content">
                                                    <div class="post-category">
                                                        <a href="#" title="{{ $news->category->title }}">
                                                            {{ $news->category->title }}
                                                        </a>
                                                    </div>
                                                    <h3 class="entry-title">
                                                        <a href="#">{{ $news->title }}</a>
                                                    </h3>
                                                    <p>{!! $news->description !!}</p>
                                                    <div class="entry-footer">
                                                        <span class="post-date">
                                                            <a href="#">{{ date('Y-m-d') }}</a>
                                                        </span>
                                                        <span class="post-like">
                                                            <i class="fa fa-heart-o"></i>
                                                            <a href="#">651</a>
                                                        </span>
                                                        <span class="post-view">
                                                            <i class="fa fa-eye"></i>
                                                            <a href="#">253</a>
                                                        </span>
                                                    </div>
                                                    <a href="{{ route('news.show', $news->id) }}" title="Read More">
                                                        Читать
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </div>
                                            </div><!-- Type Post /- -->
                                        </div>
                                    @empty
                                        <h3>Новостей пока нет</h3>
                                    @endforelse
                                </div><!-- Row /- -->
                            </div><!-- Container /- -->
                        </div><!-- Largest Post /- -->
                    </div>
                </div>
            </div>
            <!-- Section News -->
            <!-- Latest News -->
            <div class="container-fluid no-left-padding no-right-padding latest-video-block">
                <!-- Container -->
                <div class="container">
                    <!-- Section Header -->
                    <div class="section-header">
                        <h3>ПОСЛЕДНИЕ НОВОСТИ</h3>
                        <div class="lr-nav">
                            <a href="javascript:void(0);" class="nav-left">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a href="javascript:void(0);" class="nav-right">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Section Header /- -->
                    <!-- Row -->
                    <div class="row">
                        <div id="latest_video_block">
                            @foreach($newsList as $news )
                                <div class="col-xs-12">
                                    <!-- Type Post -->
                                    <div class="type-post color-{{ $news->category_id }}">
                                        <div class="entry-cover">
                                            <a href="{{ route('news.show', $news->id) }}">
                                                <img src="https://imgholder.ru/376x299/8493a8/adb9ca&text=image&font=kelson&fz=21
                                                        @if( !empty($news->image) )
                                                {{ \Illuminate\Support\Facades\Storage::disk('public')->url($news->image) }}
                                                @endif"
                                                     style="width: 100%" alt="Post"/>
                                            </a>
                                        </div>
                                        <div class="entry-content">
                                            <div class="post-category">
                                                <a href="#" title="{{ $news->category->title }}">
                                                    {{ $news->category->title }}
                                                </a>
                                            </div>
                                            <h3 class="entry-title">
                                                <a href="#">{{ $news->title }}</a>
                                            </h3>
                                            <p>{!! $news->description !!}</p>
                                            <div class="entry-footer">
                                                <span class="post-date">
                                                    <a href="#">{{ date('Y-m-d') }}</a>
                                                </span>
                                                <span class="post-like">
                                                    <i class="fa fa-heart-o"></i>
                                                    <a href="#">127</a>
                                                </span>
                                                <span class="post-view">
                                                    <i class="fa fa-eye"></i>
                                                    <a href="#">756</a>
                                                </span>
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
        </div>
    </main>
@endsection

