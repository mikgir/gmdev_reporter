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
                        @foreach( $categories as $category)
                        <div class="container">
                            <!-- Section Header -->
                            <div class="section-header">
                                <h3>{{ $category->title }}</h3>
                            </div><!-- Section Header /- -->
                            <!-- Row -->
                            <div class="row">
                                @forelse( $category->news as $news)
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <!-- Type Post -->
                                        <div class="type-post larg-post color-{{ $category->id }}">
                                            <div class="entry-cover"><a href="#"><img src="{{ $news->image }}"
                                                                                      style="width: 376px; height: 500px"
                                                                                      alt="Post"/></a></div>
                                            <div class="entry-content">
                                                <div class="post-category"><a href="#" title="{{ $category->title }}">{{ $category->title }}</a>
                                                </div>
                                                <h3 class="entry-title"><a href="#">{{ $news->title }}</a></h3>
                                                <p>{!! $news->description !!}</p>
                                                <div class="entry-footer">
                                                    <span class="post-date"><a href="#">{{ date('Y-m-d') }}</a></span>
                                                    <span class="post-like"><i class="fa fa-heart-o"></i><a
                                                            href="#">651</a></span>
                                                    <span class="post-view"><i class="fa fa-eye"></i><a href="#">253</a></span>
                                                </div>
                                                <a href="{{ route('news.show', $news->id) }}" title="Read More">Читать
                                                    <i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div><!-- Type Post /- -->
                                    </div>
                                @empty
                                    <div class="container">
                                        <h3 class="text-center">Новостей пока нет</h3>
                                    </div>
                                @endforelse
                            </div><!-- Row /- -->
                        </div><!-- Container /- -->
                            {{ $categories->links() }}
                        @endforeach
                    </div><!-- Largest Post /- -->

                </div>
            </div>
        </div>
    </main>
@endsection

