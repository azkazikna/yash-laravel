@extends('layouts/master')

@section('title', 'User')

@section('vendor-style')
    <link href="{{ asset('assets/vendor/lightgallery/css/lightgallery.min.css') }}" rel="stylesheet">
@endsection

@section('vendor-script')
    <!-- Required vendors -->
     
	<script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/lightgallery/js/lightgallery-all.min.js') }}"></script>
@endsection

@section('page-script')
    <!-- code-highlight -->
    <script src="{{ asset('assets/js/plugins-init/toastr-init.js') }}"></script>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Light Gallery</h4>
            </div>
            <div class="card-body pb-1">
                <div id="lightgallery" class="row">
                    <a href="{{ asset('assets/images/big/img1.jpg') }}" data-exthumbimage="{{ asset('assets/images/big/img1.jpg') }}" data-src="{{ asset('assets/images/big/img1.jpg') }}" class="col-lg-3 col-md-6 mb-4">
                        <img src="{{ asset('assets/images/big/img1.jpg') }}" alt="" style="width:100%;">
                    </a>
                    <a href="{{ asset('assets/images/big/img2.jpg') }}" data-exthumbimage="{{ asset('assets/images/big/img2.jpg') }}" data-src="{{ asset('assets/images/big/img2.jpg') }}" class="col-lg-3 col-md-6 mb-4">
                        <img src="{{ asset('assets/images/big/img2.jpg') }}" alt="" style="width:100%;">
                    </a>
                    <a href="{{ asset('assets/images/big/img3.jpg') }}" data-exthumbimage="{{ asset('assets/images/big/img3.jpg') }}" data-src="{{ asset('assets/images/big/img3.jpg') }}" class="col-lg-3 col-md-6 mb-4">
                        <img src="{{ asset('assets/images/big/img3.jpg') }}" alt="" style="width:100%;">
                    </a>
                    <a href="{{ asset('assets/images/big/img4.jpg') }}" data-exthumbimage="{{ asset('assets/images/big/img4.jpg') }}" data-src="{{ asset('assets/images/big/img4.jpg') }}" class="col-lg-3 col-md-6 mb-4">
                        <img src="{{ asset('assets/images/big/img4.jpg') }}" alt="" style="width:100%;">
                    </a>
                    <a href="{{ asset('assets/images/big/img5.jpg') }}" data-exthumbimage="{{ asset('assets/images/big/img5.jpg') }}" data-src="{{ asset('assets/images/big/img5.jpg') }}" class="col-lg-3 col-md-6 mb-4">
                        <img src="{{ asset('assets/images/big/img5.jpg') }}" alt="" style="width:100%;">
                    </a>
                    <a href="{{ asset('assets/images/big/img6.jpg') }}" data-exthumbimage="{{ asset('assets/images/big/img6.jpg') }}" data-src="{{ asset('assets/images/big/img6.jpg') }}" class="col-lg-3 col-md-6 mb-4">
                        <img src="{{ asset('assets/images/big/img6.jpg') }}" alt="" style="width:100%;">
                    </a>
                    <a href="{{ asset('assets/images/big/img7.jpg') }}" data-exthumbimage="{{ asset('assets/images/big/img7.jpg') }}" data-src="{{ asset('assets/images/big/img7.jpg') }}" class="col-lg-3 col-md-6 mb-4">
                        <img src="{{ asset('assets/images/big/img7.jpg') }}" alt="" style="width:100%;">
                    </a>
                    <a href="{{ asset('assets/images/big/img8.jpg') }}" data-exthumbimage="{{ asset('assets/images/big/img8.jpg') }}" data-src="{{ asset('assets/images/big/img8.jpg') }}" class="col-lg-3 col-md-6 mb-4">
                        <img src="{{ asset('assets/images/big/img8.jpg') }}" alt="" style="width:100%;">
                    </a>
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
</div>
@endsection