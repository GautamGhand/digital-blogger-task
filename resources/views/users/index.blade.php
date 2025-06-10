@extends('layouts.app', ['title' => 'Users'])

@section('content')
    <div id="advanced-table">
        <div class="table-responsive text-nowrap ctm-style-table">
            {!! $dataTable->table(['class' => 'table table-bordered']) !!}
        </div>
    </div>
    @push('scripts')
       {{ $dataTable->scripts() }}
    @endpush
@endsection
