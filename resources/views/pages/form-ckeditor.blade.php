@extends('layouts/master')

@section('title', 'User')

@section('vendor-style')
@endsection

@section('vendor-script')
    <!-- Required vendors -->
     
	<script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>

	<script src="{{ asset('assets/vendor/ckeditor/ckeditor.js') }}"></script>
@endsection

@section('page-script')
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12 col-xxl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form CkEditor</h4>
            </div>
            <div class="card-body custom-ekeditor">
                <div id="ckeditor"></div>
            </div>
        </div>
    </div>
</div>
@endsection