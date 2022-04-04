@extends('layouts/admin')

@section('title', 'Админ категории')

@section('content')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Категории</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('admin.categories.create') }}" type="button" class="btn btn-sm btn-outline-secondary">Добавить</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 mx-auto">
            <h6 class="mb-0 text-uppercase">Список категорий</h6>
            <hr/>
            @include('inc.messages')
            <div class="card">
                <div class="card-body">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th class="text-center" scope="col">#ID</th>
                            <th class="text-center" scope="col">Заголовок</th>
                            <th class="text-center" scope="col">Кол-во новостей</th>
                            <th class="text-center" scope="col">Описание</th>
                            <th class="text-center" scope="col">Дата ред.</th>
                            <th class="text-center" scope="col">Опции</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse( $categories as $category )
                            <tr>
                            <td class="text-center">{{ $category->id }}</td>
                            <td class="text-center">{{ $category->title }}</td>
                            <td class="text-center">{{ $category->news->count()}}</td>
                            <td class="text-center">{{ $category->description }}</td>
                            <td class="text-center">@if( $category->updated_at) {{ $category->updated_at->format('Y-m-d H:i') }}@endif</td>
                            <td class="text-center">
                                    <button class="btn btn-xs btn-outline-secondary"><a href="{{ route('admin.categories.edit', $category->id) }}" class="link" style="color: #0c675e"><i class="bx bx-refresh"></i></a></button>
                                    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="post">
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
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

