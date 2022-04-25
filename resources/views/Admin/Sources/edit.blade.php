@extends('layouts.admin')

@section('title', 'Редактирование ресурса')

@section('content')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Новости</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('admin.source.index') }}" type="button"
                   class="btn btn-sm btn-outline-secondary">Назад</a>
            </div>
        </div>
    </div>
    <div class="card radius-15">
        <div class="card-body">
            <div class="card-title">
                <h4 class="mb-0">Редактировать источник - {{ $source->title }}</h4>
            </div>
            <hr/>
{{--            @include('inc.messages')--}}
            <form action="{{ route('admin.source.update', ['source'=>$source]) }}" method="post">
                @csrf
                @method('put')
                @error('category_id')<span class="error-section">{{ $message }}</span>@enderror
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" style="width: 150px"
                                                           id="basic-addon1">Категория</span>
                    </div>
                    <select class="form-control @if( $errors->has('category_id') ) border-danger @endif" aria-label="category_id"
                            aria-describedby="basic-addon1" name="category_id" id="category_id">
                        @foreach( $categories as $category )
                            <option value="{{ $category->id }}">
                                @if( $category->id === $source->category_id ) selected @endif>{{ $category->title }}
                            </option>
                        @endforeach
                    </select>
                </div>
                @error('image')<span class="error-section">{{ $message }}</span>@enderror
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" style="width: 150px"
                                                           id="basic-addon1">Изображение</span>
                    </div>
                    <input type="file" class="form-control @if( $errors->has('image') ) border-danger @endif" aria-label="image"
                           aria-describedby="basic-addon1" name="image" id="image" value="{{ $source->image }}">
                </div>
                @error('title')<span class="error-section">{{ $message }}</span>@enderror
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" style="width: 150px"
                                                           id="basic-addon1">Наименование</span>
                    </div>
                    <input type="text" class="form-control @if( $errors->has('title') ) border-danger @endif" placeholder="Наименование" aria-label="title"
                           aria-describedby="basic-addon1" name="title" id="title" value="{{ $source->title }}">
                </div>
                @error('source_link')<span class="error-section">{{ $message }}</span>@enderror
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" style="width: 150px"
                                                           id="basic-addon1">Ссылка</span>
                    </div>
                    <input type="text" class="form-control @if( $errors->has('source_link') ) border-danger @endif" placeholder="Наименование" aria-label="source_link"
                           aria-describedby="basic-addon1" name="source_link" id="source_link" value="{{ $source->source_link }}">
                </div>
                @error('description')<span class="error-section">{{ $message }}</span>@enderror
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"
                                                           style="width: 150px">Текст</span>
                    </div>
                    <textarea class="form-control @if( $errors->has('description') ) border-danger @endif" aria-label="description" rows="10" name="description"
                              id="description">{!! $source->description !!}</textarea>
                </div>
                <div class="input-group">
                    <button type="submit" class="btn btn-outline-secondary w-100 mt-5">Обновить</button>
                </div>
            </form>
        </div>
    </div>
@endsection



