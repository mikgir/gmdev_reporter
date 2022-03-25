<div>
    <div class="card radius-15">
        <div class="card-body">
            <div class="card-title">
                <h4 class="mb-0">Отправить заказ</h4>
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
                <div class=" input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" style="width: 150px"
                                                           id="basic-addon1">Телефон</span>
                    </div>
                    <input type="tel" class="form-control" placeholder="+X(XXX)XXX-XX-XX" aria-label="phone"
                           aria-describedby="basic-addon1" name="phone" id="phone"
                           value="{{ old('phone') }}">
                </div>
                <div class=" input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" style="width: 150px"
                                                           id="basic-addon1">Email</span>
                    </div>
                    <input type="email" class="form-control" placeholder="email" aria-label="name"
                           aria-describedby="basic-addon1" name="email" id="email"
                           value="{{ old('email') }}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"
                                                           style="width: 150px">Заказ</span>
                    </div>
                    <textarea class="form-control" aria-label="description" rows="5" name="order"
                              id="order">{!! old('order') !!}</textarea>
                </div>
                <div class="input-group">
                    <button type="submit" class="btn btn-outline-secondary w-100 mt-5">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</div>

