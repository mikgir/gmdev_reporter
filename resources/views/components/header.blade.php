<!-- Header Section -->
<header class="header_s header_s1">
    <!-- SidePanel -->
    <div id="slidepanel">
        <!-- Top Header -->
        <div class="container-fluid no-right-padding no-left-padding top-header">
            <!-- Container -->
            <div class="container">
                <!-- Row -->
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-3 top-menu">
                        <a href="#"><i class="icon_menu"></i> больше</a>
                        <ul>
                            <li><a href="#" title="About">О нас</a></li>
                            <li><a href="#" title="Author">Автор</a></li>
                            <li><a href="#" title="Contact">Контакт</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-3 top-social">
                        <a href="#"><i class="social_share"></i></a>
                        <ul>
                            <li><a href="#" title="Facebook"><i class="fa fa-telegram"></i></a></li>
                            <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" title="Linkedin"><i class="fa fa-vk"></i></a></li>
                            <li><a href="#" title="Google+"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 top-search">
                        <form method="get" class="searchform" action="#">
                            <div class="input-group">
                                <input placeholder="Поиск" class="form-control" required="" type="text">
                                <span class="input-group-btn">
										<button class="btn btn-default" type="submit"><i
                                                class="fa fa-search"></i></button>
									</span>
                            </div>
                        </form>
                    </div>
                </div><!-- Row /- -->
            </div><!-- Container /- -->
        </div><!-- Top Header /- -->
    </div><!-- SidePanel /- -->
@yield('middle-header')
<!-- Ownavigation -->
    <nav class="navbar ownavigation">
        <!-- Container -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Навигация</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('images/logo-2.png') }}"
                                                                        alt="logo"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown active">
                        <a href="{{ route('home') }}" class="dropdown-toggle" role="button" aria-haspopup="true"
                           aria-expanded="false">Главная</a>
                    </li>
                    <li><a href="#" title="About Us">О нас</a></li>
                    <li><a href="{{ route('author') }}" title="About Author">Авторы</a></li>
                    <li class="dropdown">
                        <a href="{{ route('news') }}" class="dropdown-toggle" role="button" aria-haspopup="true"
                           aria-expanded="false">Новости</a>
                        <i class="ddl-switch fa fa-angle-down"></i>
                        <ul class="dropdown-menu">
                            @foreach($categories as $key => $category)
                                <li>
                                    <a href="{{ route('news') . '?page=' . $key+1 }}">{{ $category->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="#" title="Contact Us">Контакты</a>
                    </li>
                </ul>
                <!-- Authentication Links -->
                <ul class="nav navbar-nav right-topbar">
                    @guest
                        @if (Route::has('login'))
                            <li class="">
                                <a class="" href="{{ route('login') }}">{{ __('Вход') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="">
                                <a class="" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Выход') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div><!-- Container /- -->
    </nav><!-- Ownavigation /- -->
</header><!-- Header Section /- -->

