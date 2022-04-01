@extends('layouts.admin')

@section('title', 'Создание новости')

@section('content')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Новости</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('admin.news.index') }}" type="button"
                   class="btn btn-sm btn-outline-secondary">Назад</a>
            </div>
        </div>
    </div>
    <div class="card radius-15">
        <div class="card-body">
            <div class="card-title">
                <h4 class="mb-0">Добавить новость</h4>
            </div>
            <hr/>
            @if( Session::has('success'))
                <x-alert type="success" message="{{ session('success') }}"></x-alert>
            @endif
            @if( Session::has('error'))
                <x-alert type="danger" message="{{ session('error') }}"></x-alert>
            @endif
            @if( $errors->any() )
                @foreach( $errors as $error )
                    <x-alert type="error" message="{{ $error }}"></x-alert>
                @endforeach
            @endif
            <form action="{{ route('admin.news.store') }}" method="post">
                @csrf
                <div class="input-group-prepend mt-3 d-flex">
                    <label class="input-group" for="status">
                        <div class="input-group-prepend"><span class="input-group-text"
                                                               style="width: 150px">Категория</span>
                        </div>
                        <select class="form-control" name="category_id" id="category_id">
                            @foreach( $categories as $category)
                            <option value="{{ $category->id }}" @if( $category->id === old('category_id')) selected @endif>{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </label>

                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" style="width: 150px"
                                                           id="basic-addon1">Изображение</span>
                    </div>
                    <input type="file" class="form-control" aria-label="image"
                           aria-describedby="basic-addon1" name="image" id="image" value="{{ old('image') }}">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" style="width: 150px"
                                                           id="basic-addon1">Заголовок</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Наименование" aria-label="title"
                           aria-describedby="basic-addon1" name="title" id="title" value="{{ old('title') }}">
                </div>
                <div class=" input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" style="width: 150px"
                                                           id="basic-addon1">Автор</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Автор" aria-label="author"
                           aria-describedby="basic-addon1" name="author" id="author"
                           value="{{ old('author') }}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"
                                                           style="width: 150px">Текст</span>
                    </div>
                    <textarea class="form-control" aria-label="description" rows="10" name="description"
                              id="description"></textarea>
                </div>
                <div class="input-group mt-3 d-flex">
                    <label class="input-group" for="status">
                        <div class="input-group-prepend"><span class="input-group-text"
                                                               style="width: 150px">Статус</span>
                        </div>
                        <select class="form-control" name="status" id="status">
                            <option>Выбрать</option>
                            <option @if( old('status') === 'ACTIVE') selected @endif>ACTIVE</option>
                            <option @if( old('status') === 'DRAFT') selected @endif>DRAFT</option>
                            <option @if( old('status') === 'BLOCKED') selected @endif>BLOCKED</option>
                        </select>
                    </label>

                </div>
                <div class="input-group">
                    <button type="submit" class="btn btn-outline-secondary w-100 mt-5">Создать</button>
                </div>
            </form>
        </div>
    </div>
@endsection

