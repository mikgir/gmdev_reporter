@extends('layouts.main')
@section('title', 'Вход')

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
    <div class="container">
        <div class="row justify-content-center h-100">
            <div class="col-md-12 mx-auto">
                <div class="align-items-center">
                    <div class="text-center">
                        <h2>{{ __('Вход') }}</h2>
                    </div>

                    <div class="col-lg-12">
                        <div class="contact-form text-center">
                            <h4>Авторизоваться через <br> социальные сети</h4>
                            <div class="form-group">
                                <a href="{{ route('auth.redirect', ['network'=>'vkontakte']) }}"
                                   style="width: 30px; height: 30px; font-size: large; margin: 5px"><i
                                        class="fa fa-vk"></i></a>
                                <a href="{{ route('auth.redirect', ['network'=>'github']) }}"
                                   style="width: 30px; height: 30px; font-size: large; margin: 5px"><i
                                        class="fa fa-github"></i></a>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="">{{ __('Email адрес') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password"
                                       class="">{{ __('Пароль') }}</label>
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember"
                                           id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Запомнить меня') }}
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary form-control">
                                    {{ __('Войти') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Забыли пароль?') }}
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
