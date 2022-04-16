@extends('layouts.main')
@section('title', 'Аккаунт')
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
