@if( Session::has('success') )
    <x-alert type="success" :messsge="{{ Session::get('success') }}"></x-alert>
@endif

@if( Session::has('error') )
    <x-alert type="danger" :messsge="{{ Session::get('error') }}"></x-alert>
@endif

@if( $errors->any() )
    @foreach( $errors as $error)
    <x-alert type="error" :messsge="$error"></x-alert>
    @endforeach
@endif
