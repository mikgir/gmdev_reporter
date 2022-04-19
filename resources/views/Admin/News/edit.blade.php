@extends('layouts.admin')

@section('title', 'Редактирование новости')

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
                <h4 class="mb-0">Редактировать новость - {{ $news->title }}</h4>
            </div>
            <hr/>
{{--            @include('inc.messages')--}}
            <form action="{{ route('admin.news.update', ['news'=>$news]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
{{--                @error('category_id')<span class="error-section">{{ $message }}</span>@enderror--}}
{{--                <div class="input-group-prepend mt-3 d-flex">--}}
{{--                    <label class="input-group" for="status">--}}
{{--                        <div class="input-group-prepend"><span class="input-group-text"--}}
{{--                                                               style="width: 150px">Категория</span>--}}
{{--                        </div>--}}
{{--                        <select class="form-control @if( $errors->has('category_id') ) border-danger @endif" name="category_id" id="category_id">--}}
{{--                            @foreach( $categories as $category)--}}
{{--                                <option value="{{ $category->id }}" @if( $category->id === $news->category_id ) selected @endif>{{ $category->title }}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </label>--}}
{{--                </div>--}}
                @error('image')<span class="error-section">{{ $message }}</span>@enderror
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" style="width: 150px"
                                                           id="basic-addon1">Изображение</span>
                    </div>
                    <input type="file" class="form-control @if( $errors->has('image') ) border-danger @endif"
                           aria-label="image"
{{--                           aria-describedby="basic-addon1"--}}
                           name="image" id="image" value="{{ $news->image }}">
                </div>
                @error('title')<span class="error-section">{{ $message }}</span>@enderror
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" style="width: 150px"
                                                           id="basic-addon1">Наименование</span>
                    </div>
                    <input type="text" class="form-control @if( $errors->has('title') ) border-danger @endif" placeholder="Наименование" aria-label="title"
                           aria-describedby="basic-addon1" name="title" id="title" value="{{ $news->title }}">
                </div>
                @error('author')<span class="error-section">{{ $message }}</span>@enderror
                <div class=" input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" style="width: 150px"
                                                           id="basic-addon1">Автор</span>
                    </div>
                    <input type="text" class="form-control @if( $errors->has('author') ) border-danger @endif" placeholder="Автор" aria-label="author"
                           aria-describedby="basic-addon1" name="author" id="author"
                           value="{{ $news->author }}">
                </div>
                @error('description')<span class="error-section">{{ $message }}</span>@enderror
{{--                <div class="input-group">--}}
{{--                    <div class="input-group-prepend"><span class="input-group-text"--}}
{{--                                                           style="width: 150px">Текст</span>--}}
{{--                    </div>--}}
{{--                    --}}
{{--                </div>--}}
                <textarea class="form-control @if( $errors->has('description') ) border-danger @endif" aria-label="description" rows="10" name="description"
                          id="editor">{!! $news->description !!}</textarea>
                @error('status')<span class="error-section">{{ $message }}</span>@enderror
                <div class="input-group mt-3 d-flex">
                    <label class="input-group" for="status">
                        <div class="input-group-prepend"><span class="input-group-text"
                                                               style="width: 150px">Статус</span>
                        </div>
                        <select class="form-control @if( $errors->has('status') ) border-danger @endif" name="status" id="status">
                            <option>Выбрать</option>
                            <option @if( $news->status === 'ACTIVE') selected @endif>ACTIVE</option>
                            <option @if( $news->status === 'DRAFT') selected @endif>DRAFT</option>
                            <option @if( $news->status === 'BLOCKED') selected @endif>BLOCKED</option>
                        </select>
                    </label>
                </div>
                <div class="input-group">
                    <button type="submit" class="btn btn-outline-secondary w-100 mt-5">Обновить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script type="text/javascript">
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
        ClassicEditor
            .create( document.querySelector( '#editor' ), {
                toolbar: [ 'heading', '|', 'bold', 'italic', 'images', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                    ]
                }
            })
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection



