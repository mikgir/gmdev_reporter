<div>
    <div class="alert alert-{{ $type }} alert-dismissible fade show" role="alert">
        <i class="bx bx-smile @if( $errors->any()) bx-error @endif mr-5"></i><p>{{ $message }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>

