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

    <div class="row">
        <div class="col-xl-12 mx-auto">
            <h6 class="mb-0 text-uppercase">Список новостей</h6>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Категория</th>
                            <th scope="col">Заголовок</th>
                            <th scope="col">Описание</th>
                            <th scope="col">Опции</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse( $newsList as $news )
                            <tr>
                                <td>{{ $news->id }}</td>
                                <td>{{ $news->category_id }}</td>
                                <td>{{ $news->title }}</td>
                                <td>{{ $news->description }}</td>
                                <td>
                                    <a href="{{ route('admin.news.edit', $news->id) }}" class="link">ред.</a>&nbsp;
                                    <a href="{{ route('admin.news.destroy', $news->id) }}" class="link">удал.</a>
                                </td>
                            </tr>
                        @empty
                            <tr><th colspan="4">записей нет</th></tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

