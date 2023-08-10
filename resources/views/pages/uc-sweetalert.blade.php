@extends('layouts/master')

@section('title', 'User')

@section('vendor-style')
    <link href="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">
@endsection

@section('vendor-script')
    <!-- Required vendors -->
     
	<script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
@endsection

@section('page-script')
    <!-- code-highlight -->
    <script src="{{ asset('assets/js/plugins-init/sweetalert.init.js') }}"></script>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Sweet Wrong</h4>
                <div class="card-content">
                    <div class="sweetalert">
                        <button class="btn btn-danger btn sweet-wrong">Sweet Wrong</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->
    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Sweet Message</h4>
                <div class="card-content">
                    <div class="sweetalert">
                        <button class="btn btn-info btn sweet-message">Sweet Message</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->
    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Sweet Text</h4>
                <div class="card-content">
                    <div class="sweetalert">
                        <button class="btn btn-primary btn sweet-text">Sweet Text</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->
    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Sweet Success</h4>
                <div class="card-content">
                    <div class="sweetalert">
                        <button class="btn btn-success btn sweet-success">Sweet Success</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->
    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Sweet Confirm</h4>
                <div class="card-content">
                    <div class="sweetalert">
                        <button class="btn btn-warning btn sweet-confirm">Sweet Confirm</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->
    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Sweet Confirm Or Cancel</h4>
                <div class="card-content">
                    <div class="sweetalert5">
                        <button class="btn btn-warning btn sweet-success-cancel">Sweet Confirm Or
                            Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->
    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Sweet Image Message</h4>
                <div class="card-content">
                    <div class="sweetalert">
                        <button class="btn btn-info btn sweet-image-message">Sweet Image
                            Message</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->
    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Sweet HTML</h4>
                <div class="card-content">
                    <div class="sweetalert">
                        <button class="btn btn-primary btn sweet-html">Sweet HTML</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Sweet Auto Close</h4>
                <div class="card-content">
                    <div class="sweetalert">
                        <button class="btn btn-danger btn sweet-auto">Sweet Auto btn-close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Sweet Prompt</h4>
                <div class="card-content">
                    <div class="sweetalert">
                        <button class="btn btn-success btn sweet-prompt">Sweet Prompt</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Sweet Ajax</h4>
                <div class="card-content"></div>
                <div class="sweetalert">
                    <button class="btn btn-info btn sweet-ajax">Sweet Ajax</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection