@extends('layouts/master')

@section('title', 'User')

@section('vendor-style')
     
    <link href="{{ asset('assets/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
@endsection

@section('vendor-script')
    <!-- Required vendors -->
     
	<script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/toastr/js/toastr.min.js') }}"></script>
@endsection

@section('page-script')
    <!-- code-highlight -->
    <script src="{{ asset('assets/js/plugins-init/jqvmap-init.js') }}"></script>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">World Map</h4>
            </div>
            <div class="card-body">
                <div id="world-map"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">USA</h4>
            </div>
            <div class="card-body">
                <div id="usa" style="height: 450px;"></div>
            </div>
        </div>
    </div>
</div>
@endsection