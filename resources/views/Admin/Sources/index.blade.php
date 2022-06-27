@extends('layouts/admin')

@section('title', 'Список ресурсов')

@section('content')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Источник</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('admin.source.create') }}" type="button" class="btn btn-sm btn-outline-secondary">Добавить</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 mx-auto">
            <h6 class="mb-0 text-uppercase">Список источников</h6>
            <hr/>
            @include('inc.messages')
            <div class="card">
                <div class="card-body">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th class="text-center" scope="col">#ID</th>
                            <th class="text-center" scope="col">Logo</th>
                            <th class="text-center" scope="col">Наименование</th>
                            <th class="text-center" scope="col">Описание</th>
                            <th class="text-center" scope="col">Ссылка</th>
                            <th class="text-center" scope="col">Статус</th>
                            <th class="text-center" scope="col">дата ред.</th>
                            <th class="text-center" scope="col">Опции</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse( $sources as $source )
                            <tr>
                                <td class="text-center">{{ $source->id }}</td>
                                <td class="text-center">@if($source->image)<img src="{{ $source->image }}"
                                                             alt="logo"
                                                             style="width: 100px; height: 50px">@endif
                                </td>
                                <td class="text-center">{{ $source->title }}</td>
                                <td class="text-center">{{ $source->description }}</td>
                                <td class="text-center">{{ $source->link }}</td>
                                <td class="text-center">{{ $source->status }}</td>
                                <td class="text-center">@if( $source->updated_at) {{ $source->updated_at->format('Y-m-d H:i') }}@endif</td>
                                <td class="text-center">
                                   <button class="btn btn-xs btn-outline-secondary"><a href="{{ route('admin.source.edit', $source->id) }}" class="link" style="color: #0c675e"><i class="bx bx-refresh"></i></a></button>
                                    <form action="{{ route('admin.source.destroy', $source->id) }}" method="post">
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
{{--                        {{ $sources->links() }}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

