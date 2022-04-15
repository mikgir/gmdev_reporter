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
            @include('inc.messages')
            <div class="card">
                <div class="card-body">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th class="text-center" scope="col">#ID</th>
                            <th class="text-center" scope="col">Категория</th>
                            <th class="text-center" scope="col">Автор</th>
                            <th class="text-center" scope="col">Заголовок</th>
                            <th class="text-center" scope="col">Описание</th>
                            <th class="text-center" scope="col">Статус</th>
                            <th class="text-center" scope="col">дата ред.</th>
                            <th class="text-center" scope="col">Опции</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse( $newsList as $news )
                            <tr>
                                <td class="text-center">{{ $news->id }}</td>
                                <td class="text-center">{{ $news->category->title }}</td>
                                <td class="text-center">{{ $news->author }}</td>
                                <td class="text-center">{{ $news->title }}</td>
                                <td>{{ $news->description }}</td>
                                <td class="text-center">{{ $news->status }}</td>
                                <td class="text-center">@if( $news->updated_at) {{ $news->updated_at->format('Y-m-d H:i') }}@endif</td>
                                <td class="text-center">
                                   <button class="btn btn-xs btn-outline-secondary"><a href="{{ route('admin.news.edit', $news->id) }}" class="link" style="color: #0c675e"><i class="bx bx-refresh"></i></a></button>
                                    <form action="{{ route('admin.news.destroy', $news->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-xs btn-outline-secondary" style="color: #9e1a1a"><i class="bx bx-block"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr><th colspan="4">записей нет</th></tr>
                        @endforelse
                        </tbody>
                    </table>
                    <div class="pagination-sm">
                        {{ $newsList->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

