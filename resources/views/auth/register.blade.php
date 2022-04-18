@extends('layouts.main')
@section('title', 'Регистрация')
@section('content')
    <div class="container">
        <div class="row justify-content-center h-100">
            <div class="col-md-12 mx-auto">
                <div class="align-items-center">
                    <div class="text-center">
                        <h2>{{ __('Регистрация') }}</h2>
                    </div>

                    <div class="col-lg-12">
                        <div class="contact-form text-center">
                            <h4>Авторизоваться через <br> социальные сети</h4>
                            <div class="form-group">
                                <a href="{{ route('auth.redirect', ['network'=>'vkontakte']) }}" style="width: 30px; height: 30px; font-size: large; margin: 5px"><i
                                        class="fa fa-vk"></i></a>
                                <a href="{{ route('auth.redirect', ['network'=>'github']) }}" style="width: 30px; height: 30px; font-size: large; margin: 5px"><i
                                        class="fa fa-github"></i></a>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="">{{ __('Имя') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email"
                                       class="">{{ __('Email адрес') }}</label>
                                <input id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" required autocomplete="email">
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
                                       required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password-confirm"
                                       class="">{{ __('Повторите пароль') }}</label>
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary form-control">
                                    {{ __('Зарегистрировать') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
