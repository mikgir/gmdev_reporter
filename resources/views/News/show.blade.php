@extends('layouts.main')
@section('title'){{ $news->title }}@endsection

@section('middle-header')
    <div class="container-fluid no-left-padding no-right-padding middle-header">
        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <div class="col-md-4 logo-block">
                    <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}"
                                                       alt="Logo"/></a>
                </div>
                <div class="col-md-8 add-block-banner">
                </div>
            </div><!-- Row /- -->
        </div><!-- Container /- -->
    </div><!-- Middle Header /- -->
@endsection

@section('content')
    <main class="site-main">
        <!-- Single Post -->
        <div class="container-fluid no-left-padding no-right-padding single-post">
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <!-- Content Area -->
                    <div class="col-md-8 col-sm-6 col-xs-6 content-area">
                        <article class="type-post color-3">
                            <div class="entry-cover">
                                <img src="https://imgholder.ru/376x299/8493a8/adb9ca&text=image&font=kelson&fz=21
                                                        @if( !empty($news->image) )
                                {{ \Illuminate\Support\Facades\Storage::disk('public')->url($news->image) }}
                                @endif"
                                     alt="Post"
                                     style="width: 100%; height: auto"/>
                                <div class="entry-header">
                                    <div class="post-category"><a href="#" title="Business">Business</a></div>
                                    <h3 class="entry-title">{{ $news->title}}</h3>
                                    <div class="entry-footer">
                                        <span class="post-date"><a href="#">{{ date('Y-m-d') }}</a></span>
                                        <span class="post-like"><i class="fa fa-heart-o"></i><a href="#">356</a></span>
                                        <span class="post-view"><i class="fa fa-eye"></i><a href="#">589</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="content-area">
                                <p class="font-35">{!! $news->description !!}</p>
                            </div>

                            <!-- About Author -->
                            <div class="about-author-box">
                                <h3>Об авторе</h3>
                                <div class="author">
                                    <i><img src="" alt="Author"/></i>
                                    <h4>Author</h4>
                                    <ul>
                                        <li><a href="#" class="fb" title="Facebook"><i class="fa fa-vk"></i></a>
                                        </li>
                                        <li><a href="#" class="tw" title="Twitter"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li><a href="#" class="go" title="Google"><i class="fa fa-telegram"></i></a>
                                        </li>
                                    </ul>
                                    <p>reporter is one of the excellent magazine in the world.Newshub magazine reach
                                        many
                                        readers are very soon by his unique stories in the magazine.</p>
                                </div>
                            </div><!-- About Author /- -->
                        </article>

                        <!-- Comment Area -->
                        <div id="comments" class="comments-area">
                            <h2 class="comments-title">Комментарии <span>(3)</span></h2>
                        {{--                        <ol class="comment-list">--}}
                        {{--                            <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1 parent">--}}
                        {{--                                <div class="comment-body">--}}
                        {{--                                    <footer class="comment-meta">--}}
                        {{--                                        <div class="comment-author vcard">--}}
                        {{--                                            <img alt="img" src="assets/images/comment1.jpg" class="avatar avatar-72 photo"/>--}}
                        {{--                                            <b class="fn">Michel Tei</b>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="comment-metadata"><a href="#">Oct 3, 2016</a></div>--}}
                        {{--                                    </footer>--}}
                        {{--                                    <div class="comment-content">--}}
                        {{--                                        <p>Reporter is one of the excellent magazine in the world.Newshub magazine reached many readers very soon by his unique stories in the magazine.</p>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="reply">--}}
                        {{--                                        <a rel="nofollow" class="comment-reply-link" href="#">Reply</a>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                                <ol class="children">--}}
                        {{--                                    <li class="comment byuser comment-author-admin bypostauthor odd alt depth-2 parent">--}}
                        {{--                                        <div class="comment-body">--}}
                        {{--                                            <footer class="comment-meta">--}}
                        {{--                                                <div class="comment-author vcard">--}}
                        {{--                                                    <img alt="img" src="assets/images/comment2.jpg" class="avatar avatar-72 photo"/>--}}
                        {{--                                                    <b class="fn">Woes katrin</b>--}}
                        {{--                                                </div>--}}
                        {{--                                                <div class="comment-metadata"><a href="#">Oct 8, 2016</a></div>--}}
                        {{--                                            </footer>--}}
                        {{--                                            <div class="comment-content">--}}
                        {{--                                                <p>reporter is one of the excellent magazine in the world.Newshub magazine reach many readers very soon by his unique stories in the magazine.</p>--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="reply">--}}
                        {{--                                                <a rel="nofollow" class="comment-reply-link" href="#">Reply</a>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </li>--}}
                        {{--                                </ol>--}}
                        {{--                            </li>--}}
                        {{--                            <li class="comment byuser comment-author-admin bypostauthor even thread-odd thread-alt depth-1">--}}
                        {{--                                <div class="comment-body">--}}
                        {{--                                    <footer class="comment-meta">--}}
                        {{--                                        <div class="comment-author vcard">--}}
                        {{--                                            <img alt="img" src="assets/images/comment3.jpg" class="avatar avatar-72 photo"/>--}}
                        {{--                                            <b class="fn">David Worth</b>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="comment-metadata"><a href="#">Oct 10, 2016</a></div>--}}
                        {{--                                    </footer>--}}
                        {{--                                    <div class="comment-content">--}}
                        {{--                                        <p>Reporter is one of the excellent magazine in the world.Newshub magazine reached many readers very soon by his unique stories in the magazine.</p>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="reply">--}}
                        {{--                                        <a rel="nofollow" class="comment-reply-link" href="#">Reply</a>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </li>--}}
                        {{--                        </ol><!-- .comment-list -->--}}
                        <!-- Comment Form -->
                            <div id="respond" class="comment-respond">
                                <h2 id="reply-title" class="comment-reply-title">Оставьте комментарий</h2>
                                {{--                                <x-form.comment action="{{ route('admin.news.store') }}" method="post"></x-form.comment>--}}
                            </div><!-- Comment Form /- -->
                        </div><!-- Comment Area /- -->
                    </div><!-- Content Area /- -->
                </div>
            </div><!-- Container /- -->
        </div><!-- Single Post /- -->
    </main>
@endsection


