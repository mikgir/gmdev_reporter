@extends('layouts.main')
@section('title', 'Аккаунт')

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
        <div class="row">
            <h2>Добро пожаловать, {{ \Illuminate\Support\Facades\Auth::user()->name }}</h2>
            <br>
            <a href="{{ route('admin.index') }}">В админку</a>
            @if(\Illuminate\Support\Facades\Auth::user()->avatar)
                <img src="{{ Auth::user()->avatar }}" alt="avatar" style="width: 200px; height: auto">
            @endif
        </div>
    </div>
@endsection
