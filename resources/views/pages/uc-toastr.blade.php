@extends('layouts/master')

@section('title', 'User')

@section('vendor-style')
     
    <link href="{{ asset('assets/vendor/toastr/css/toastr.min.css') }}" rel="stylesheet">
@endsection

@section('vendor-script')
    <!-- Required vendors -->
     
	<script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/toastr/js/toastr.min.js') }}"></script>
@endsection

@section('page-script')
    <!-- code-highlight -->
    <script src="{{ asset('assets/js/plugins-init/toastr-init.js') }}"></script>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Toastr</h4>
            </div>
            <div class="card-body">
                <button type="button" class="btn btn-dark mb-2 me-2" id="toastr-success-top-right">Top
                    Right</button>
                <button type="button" class="btn btn-dark mb-2  me-2" id="toastr-success-bottom-right">Bottom Right</button>
                <button type="button" class="btn btn-dark mb-2  me-2" id="toastr-success-bottom-left">Bottom Left</button>
                <button type="button" class="btn btn-dark mb-2  me-2" id="toastr-success-top-left">Top
                    Left</button>
                <button type="button" class="btn btn-dark mb-2  me-2" id="toastr-success-top-full-width">Top Full Width</button>
                <button type="button" class="btn btn-dark mb-2  me-2" id="toastr-success-bottom-full-width">Bottom Full Width</button>
                <button type="button" class="btn btn-dark mb-2  me-2" id="toastr-success-top-center">Top
                    Center</button>
                <button type="button" class="btn btn-dark mb-2  me-2" id="toastr-success-bottom-center">Bottom Center</button>
                <button type="button" class="btn btn-info mb-2  me-2" id="toastr-info-top-right">Info</button>
                <button type="button" class="btn btn-warning mb-2  me-2" id="toastr-warning-top-right">Warning</button>
                <button type="button" class="btn btn-danger mb-2  me-2" id="toastr-danger-top-right">Error</button>
            </div>
        </div>
    </div>
</div>
@endsection