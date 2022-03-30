@extends('layouts.main')
@section('title', 'Все новости')
@section('content')
    <main class="site-main">
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
                            </div><!-- Section Header /- -->
                            <!-- Row -->
                            <div class="row">
                                @forelse( $newsList as $news)
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <!-- Type Post -->
                                    <div class="type-post larg-post color-7">
                                        <div class="entry-cover"><a href="#"><img src="{{ $news->image }}" alt="Post" /></a></div>
                                        <div class="entry-content">
                                            <div class="post-category"><a href="#" title="ECONOMIC">ECONOMIC</a></div>
                                            <h3 class="entry-title"><a href="#">{{ $news->title }}</a></h3>
                                            <p>{{ $news->description }}</p>
                                            <div class="entry-footer">
                                                <span class="post-date"><a href="#">{{ date('Y-m-d') }}</a></span>
                                                <span class="post-like"><i class="fa fa-heart-o"></i><a href="#">651</a></span>
                                                <span class="post-view"><i class="fa fa-eye"></i><a href="#">253</a></span>
                                            </div>
                                            <a href="{{ route('news.show', $news->id) }}" title="Read More">Читать <i class="fa fa-angle-right"></i></a>
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
    </main>
@endsection

