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
            <form action="" method="post">
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" style="width: 150px"
                                                           id="basic-addon1">Наименование</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Наименование" aria-label="title"
                           aria-describedby="basic-addon1">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text" style="width: 150px">Описание</span>
                    </div>
                    <textarea class="form-control" aria-label="description" rows="10"></textarea>
                </div>
                <div class="input-group">
                    <button type="submit" class="btn btn-outline-secondary w-100 mt-5">Создать</button>
                </div>
            </form>
        </div>
    </div>


@endsection

