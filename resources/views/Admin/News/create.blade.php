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
{{--            @include('inc.messages')--}}
            <form action="{{ route('admin.news.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @error('category_id')<span class="error-section">{{ $message }}</span>@enderror
                <div class="input-group-prepend mt-3 d-flex">
                    <label class="input-group" for="status">
                        <div class="input-group-prepend"><span class="input-group-text"
                                                               style="width: 150px">Категория</span>
                        </div>
                        <select class="form-control @if( $errors->has('category_id') ) border-danger @endif" name="category_id" id="category_id">
                            @foreach( $categories as $category)
                            <option value="{{ $category->id }}" @if( $category->id === old('category_id')) selected @endif>{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
                @error('source_id')<span class="error-section">{{ $message }}</span>@enderror
                <div class="input-group-prepend mt-3 d-flex">
                    <label class="input-group" for="status">
                        <div class="input-group-prepend"><span class="input-group-text"
                                                               style="width: 150px">Категория</span>
                        </div>
                        <select class="form-control @if( $errors->has('source_id') ) border-danger @endif"
                                name="source_id" id="source_id">
                            @foreach( $sources as $source)
                                <option value="{{ $source->id }}" @if( $source->id === old('source_id')) selected @endif>{{ $source->title }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
                @error('image')<span class="error-section">{{ $message }}</span>@enderror
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" style="width: 150px"
                                                           id="basic-addon1">Изображение</span>
                    </div>
                    <input type="file" class="form-control @if( $errors->has('image') ) border-danger @endif" aria-label="image"
                           aria-describedby="basic-addon1" name="image" id="image" value="{{ old('image') }}">
                </div>
                @error('title')<span class="error-section">{{ $message }}</span>@enderror
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" style="width: 150px"
                                                           id="basic-addon1">Наименование</span>
                    </div>
                    <input type="text" class="form-control @if( $errors->has('title') ) border-danger @endif" placeholder="Наименование" aria-label="title"
                           aria-describedby="basic-addon1" name="title" id="title" value="{{ old('title') }}">
                </div>
                @error('description')<span class="error-section">{{ $message }}</span>@enderror
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"
                                                           style="width: 150px">Текст</span>
                    </div>
                    <textarea class="form-control @if( $errors->has('description') ) border-danger @endif" aria-label="description" rows="10" name="description"
                              id="description">{!! old('description') !!}</textarea>
                </div>
                <div class="input-group">
                    <button type="submit" class="btn btn-outline-secondary w-100 mt-5">Создать</button>
                </div>
            </form>
        </div>
    </div>
@endsection

