@extends('layouts.main')
@section('title', 'Подтверждение регистрации')

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
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Подтвердите ваш email адрес') }}</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('Ссылка была отправлена на ваш email адрес.') }}
                            </div>
                        @endif

                        {{ __('Для продолжения необходимо подтвердить ваш email адрес .') }}
                        {{ __('Если вы не получили наше письмо') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit"
                                    class="btn btn-link p-0 m-0 align-baseline">{{ __('нажмите здесь для повторной отправки') }}</button>
                            .
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
