<div class="container-fluid">
    <div class="row" style="height: 86vh;">
        <div id="slider-1" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @foreach( $news as $key => $item )
                    <div class='item {{ $key === 0 ? 'active' : '' }}'>
                        <div class="big-post container-fluid no-padding" style="position: relative">
                            <!-- Type Post -->
                            <div class="type-post color-{{ $item->category_id }}">
                                <div class="entry-cover">
                                    <img src="https://imgholder.ru/376x299/8493a8/adb9ca&text=image&font=kelson&fz=21
                                                        @if( !empty($item->image) )
                                    {{ \Illuminate\Support\Facades\Storage::disk('public')->url($item->image) }}
                                    @endif"
                                         style="width: 100vw; height: 88vh"
                                         alt="Post"/>
                                </div>
                                <div class="entry-content" style="position: absolute; top: 150px; left: 100px; width: 550px">
                                    <div class="post-category">
                                        <a href="#"
                                           title="{{ $item->category->title }}">{{ $item->category->title }}</a>
                                    </div>
                                    <h1 class="entry-title"><a class="text-decoration-none" href="#">{{ $item->title }}</a></h1>
                                    <a href="{{ route('news.show', $item->id) }}" title="Read More">узнать
                                        больше <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div><!-- Type Post /- -->
                        </div>
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
    <!-- Container -->
    {{--            <div class="container">--}}
    {{--                <!-- Row -->--}}
    {{--                <div class="row">--}}
    {{--                    <div class="col-md-4 logo-block">--}}
    {{--                        <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="Logo"/></a>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-md-8 add-block-banner">--}}
    {{--                        <a href="#"><img src="{{ asset('images/top-banner.jpg') }}" alt="Banner"/></a>--}}
    {{--                    </div>--}}
    {{--                </div><!-- Row /- -->--}}
    {{--            </div><!-- Container /- -->--}}
</div>
