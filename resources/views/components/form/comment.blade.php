<div>
    <div class="card radius-15">
        <div class="card-body">
            <div class="card-title">
                <h4 class="mb-0">Оставить комментарий</h4>
            </div>
            <hr/>
            @if( $errors )
                @foreach( $errors->all() as $error)
                    <x-alert type="danger" :message="$error"></x-alert>
                @endforeach
            @endif

            <form action="{{ $action }}" method="{{ $method }}">
                @csrf
                <div class=" input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" style="width: 150px"
                                                           id="basic-addon1">Имя</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Автор" aria-label="name"
                           aria-describedby="basic-addon1" name="name" id="name"
                           value="{{ old('name') }}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"
                                                           style="width: 150px">Сообщение</span>
                    </div>
                    <textarea class="form-control" aria-label="description" rows="5" name="message"
                              id="message">{!! old('message') !!}</textarea>
                </div>
                <div class="input-group">
                    <button type="submit" class="btn btn-outline-secondary w-100 mt-5">Создать</button>
                </div>
            </form>
        </div>
    </div>
</div>
