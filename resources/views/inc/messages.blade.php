@if( session('success') )
    <x-alert type="success" messsge="{{ session('success') }}"></x-alert>
@endif

@if( $errors->any() )
    @foreach( $errors as $error)
    <x-alert type="error" :messsge="$error"></x-alert>
    @endforeach
@endif
