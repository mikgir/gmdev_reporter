@extends('layouts/admin')

@section('title', 'Список новостей')

@section('content')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Новости</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('admin.news.create') }}" type="button" class="btn btn-sm btn-outline-secondary">Добавить</a>
            </div>
        </div>
    </div>

    <div class="album py-5 bg-light">
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach($newsList as $news )
                        <div class="col">
                            <div class="card shadow-sm d-flex flex-column justify-content-between">
                                <img src="{{ $news ['image'] }}" alt="photo">
                                <div class="card-body">
                                    <h4>{{ $news ['title'] }}</h4>
                                    <p class="card-text">{{ $news ['description'] }}</p>
                                    <div class="d-flex flex-column justify-content-between align-items-center">
                                        <div class="btn-group mb-2 d-flex justify-content-between w-100">
                                            <a href="{{ route('admin.news.edit', $news['id']) }}" type="button"
                                               class="btn btn-sm btn-outline-secondary mr-1"
                                               style="display: inline-block">обновить</a>
                                            <a href="{{ route('admin.news.destroy', $news['id']) }}"
                                               type="button"
                                               class="btn btn-sm btn-outline-secondary ml-1"
                                               style="display: inline-block">удалить</a>
                                        </div>
                                        <div class="card-footer d-flex w-100 justify-content-between">
                                            <small class="text-muted">статус: {{ $news ['status'] }}</small>
                                            <small class="text-muted">автор: {{ $news ['author'] }}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

