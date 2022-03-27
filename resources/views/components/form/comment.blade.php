<div>
    @if( $errors )
        @foreach( $errors->all() as $error)
            <x-alert type="danger" :message="$error"></x-alert>
        @endforeach
    @endif
    <form method="{{ $method }}" action="{{ $action }}" id="commentform" class="comment-form">
        @csrf

        <p class="comment-form-author">
            <input id="author" name="author" placeholder="Имя *" required="required"
                   type="text"/>
        </p>
        <p class="comment-form-email">
            <input id="email" name="email" placeholder="Your@email.com *"
                   required="required"
                   type="email"/>
        </p>
        <p class="comment-form-comment">
                                    <textarea id="comment" placeholder="Ваш комментарий" name="comment" rows="5"
                                              required="required"></textarea>
        </p>
        <p class="form-submit">
            <input name="submit" class="submit" value="Отправить" type="submit"/>
        </p>
    </form>
</div>
