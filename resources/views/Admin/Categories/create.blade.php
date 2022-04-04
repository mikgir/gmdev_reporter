@extends('layouts/admin')

@section('title', 'Создание категории')

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
                <h4 class="mb-0">Добавить категорию</h4>
            </div>
            <hr/>
           @include('inc.messages')
            <form action="{{ route('admin.categories.store') }}" method="post">
                @csrf
                @error('title')<span class="color-2">{{ $message }}</span> @enderror
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" style="width: 150px"
                                                           id="basic-addon1">Наименование</span>
                    </div>
                    <input type="text" class="form-control @if( $errors->has('title')) border-danger @endif" name="title" id="title" placeholder="Наименование" aria-label="title"
                           aria-describedby="basic-addon1" value="{{ old('title') }}">
                </div>
                @error('description')<span class="color-2">{{ $message }}</span> @enderror
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text" style="width: 150px">Описание</span>
                    </div>
                    <textarea class="form-control @if( $errors->has('description')) border-danger @endif" name="description" id="description" aria-label="description" rows="10">{{ old('description') }}</textarea>
                </div>
                <div class="input-group">
                    <button type="submit" class="btn btn-outline-secondary w-100 mt-5">Создать</button>
                </div>
            </form>
        </div>
    </div>


@endsection

