@if ($message = Session::get('primary'))
    <div class="alert message-alert alert-primary alert-dismissible" role="alert">
        {!! $message !!}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if ($message = Session::get('success'))
    <div class="alert message-alert alert-success alert-dismissible" role="alert">
        {!! $message !!}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if ($message = Session::get('info'))
    <div class="alert message-alert alert-info alert-dismissible" role="alert">
        {!! $message !!}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="alert message-alert alert-warning alert-dismissible" role="alert">
        {!! $message !!}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="alert message-alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        {!! $message !!}
    </div>
@endif

@if ($message = Session::get('verify-error'))
    <div class="alert message-alert alert-danger alert-dismissible" role="alert">
        {!! $message !!}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
