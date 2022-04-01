@extends('layouts/admin')

@section('title', 'Редактирование категории')

@section('content')
    <!--page-wrapper-->
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Категории</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('admin.categories.index') }}" type="button"
                   class="btn btn-sm btn-outline-secondary">Назад</a>
            </div>
        </div>
    </div>

    <div class="card radius-15">
        <div class="card-body">
            <div class="card-title">
                <h4 class="mb-0">Редактировать категорию</h4>
            </div>
            <hr/>
{{--            @if( Session::has('success'))--}}
{{--                <x-alert type="success" :message="{{ session('success') }}"></x-alert>--}}
{{--            @endif--}}
{{--            @if( Session::has('error'))--}}
{{--                <x-alert type="danger" :message="{{ session('error') }}"></x-alert>--}}
{{--            @endif--}}
{{--            @if( $errors->any() )--}}
{{--                @foreach( $errors as $error )--}}
{{--                    <x-alert type="error" :message="{{ $error }}"></x-alert>--}}
{{--                @endforeach--}}
{{--            @endif--}}
            <form action="{{ route('admin.categories.update', [ 'category' => $category]) }}" method="post">
                @csrf
                @method('put')
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" style="width: 150px"
                                                           id="basic-addon1">Наименование</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Наименование" aria-label="title"
                           aria-describedby="basic-addon1" name="title" id="title" value="{{ $category->title }}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text" style="width: 150px">Описание</span>
                    </div>
                    <textarea class="form-control" name="description" id="description" aria-label="description"
                              rows="10">{{ $category->description }}</textarea>
                </div>
                <div class="input-group">
                    <button type="submit" class="btn btn-outline-secondary w-100 mt-5">Обновить</button>
                </div>
            </form>
        </div>
    </div>
@endsection



