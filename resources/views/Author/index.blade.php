@extends('layouts.main')
@section('title', 'Авторы')
@section('content')
    <main class="site-main">
        <div role="tabpanel" class="tab-pane active" id="about-me">
            <div class="container">
                <!-- We Are Doing -->
                <div class="container-fluid we-are-doing-section">
                    <!-- Author Content -->
                    @foreach( $authors as $author)
                        <div class="col-md-6 author-content">
                            <h3><a href="{{ route('author.show', $author['id']) }}"
                                   class="nav-link">{{ $author['name'] }}</a></h3>
                            <p>{{ $author['description'] }}</p>
                            <a href="#" title="Contact Us">написать автору</a>
                            <a href="{{ route('author.show', $author['id']) }}" title="View My Post">публикации</a>
                        </div><!-- Author Content -->
                        <div class="col-md-6 author-image-block">
                            <i><a href="{{ route('author.show', $author['id']) }}"><img src="{{ $author['image'] }}"
                                                                                        alt="Author Image"/></a></i>
                        </div>
                    @endforeach
                </div><!-- We Are Doing /- -->
            </div><!-- About Me /- -->
        </div>
    </main>
@endsection
