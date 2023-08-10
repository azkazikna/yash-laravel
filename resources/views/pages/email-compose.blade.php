@extends('layouts/master')

@section('title', 'Email Compose')

@section('vendor-style')
	<link href="{{ asset('assets/vendor/dropzone/dist/dropzone.css') }}" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css" rel="stylesheet">
@endsection

@section('vendor-script')
    <!-- Required vendors -->
     
	<script src="{{ asset('assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/dropzone/dist/dropzone.js') }}"></script>
@endsection

@section('page-script')
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card mb-0 h-auto">
            <div class="card-body py-0">
                <div class="row gx-0">
                    <!-- column -->
                    <div class="col-xl-2 col-xxl-3 col-lg-3">
                        <div class="email-left-box dz-scroll pt-3 ps-0" id="email-left">
                            <div class="p-0">
                                <a href="email-compose.html" class="btn text-white btn-block"><i class="fa-solid fa-plus me-2"></i>Compose Email</a>
                            </div>
                            <div class="mail-list rounded ">
                                <a href="email-inbox.html" class="list-group-item active"><i class="fa-regular fa-envelope align-middle"></i>Inbox <span class="badge badge-purple badge-sm float-end rounded">2</span> </a>
                                <a href="javascript:void(0);" class="list-group-item"><i class="fa-regular fa-paper-plane align-middle"></i>Sent</a> 	
                                <a href="javascript:void(0);" class="list-group-item"><i class="fa-regular fa-star align-middle"></i>Favorite </a>
                                <a href="javascript:void(0);" class="list-group-item"><i class="fa-regular fa-file align-middle"></i>Draft</a>
                                <a href="javascript:void(0);" class="list-group-item ">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                    <path d="M15.4425 10.0575L10.065 15.435C9.92569 15.5745 9.76026 15.6851 9.57816 15.7606C9.39606 15.8361
                                    9.20087 15.8749 9.00375 15.8749C8.80663 15.8749 8.61144 15.8361 8.42934 15.7606C8.24724 15.6851 8.08181 15.5745 7.9425 15.435L1.5 9V1.5H9L15.4425
                                    7.9425C15.7219 8.22354 15.8787 8.60372 15.8787 9C15.8787 9.39628 15.7219 9.77646 15.4425 10.0575Z"
                                    stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5.25 5.25H5.268" stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>Important</a>		
                                <a href="javascript:void(0);" class="list-group-item"><i class="fa-regular fa-clock align-middle"></i> Scheduled</a>
                                    
                                
                                <a href="javascript:void(0);" class="list-group-item">
                                    <svg width="15" height="15" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.5 8.25L11 13.75L16.5 8.25" stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Move
                                </a>
                            </div>
                            <div class="mail-list rounded overflow-hidden mt-4">
                                <div class="intro-title d-flex justify-content-between my-0">
                                    <h5>Categories</h5>
                                </div>
                                <a href="email-inbox.html" class="list-group-item change">Work </a>
                                <a href="email-inbox.html" class="list-group-item change">Private </a>
                                <a href="email-inbox.html" class="list-group-item change">Support </a>
                                <a href="email-inbox.html" class="list-group-item change">Social </a>
                            </div>
                        </div>
                    </div>
                    <!-- /column -->
                    <div class="col-lg-9 col-xl-10 col-xxl-9">
                        <div class="email-right-box ms-0 ">
                            <div class="compose-wrapper mt-3 " id="compose-content">
                                <div class="compose-content">
                                    <form action="#">
                                        <div class="mb-3">
                                            <input type="text" class="form-control bg-transparent" placeholder=" To:">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control bg-transparent" placeholder=" Subject:">
                                        </div>
                                        <div class="mb-3">
                                            <textarea id="email-compose-editor" class="textarea_editor form-control bg-transparent" rows="5" placeholder="Enter text ..."></textarea>
                                        </div>
                                    </form>
                                    <h5 class="my-3"><i class="fa fa-paperclip me-2"></i> Attatchment</h5>
                                    <form action="#" class="dropzone">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple>
                                        </div>
                                    </form>
                                </div>
                                <div class="text-start mt-4 mb-3">
                                    <button class="btn btn-primary btn-sl-sm me-2" type="button"><span class="me-2"><i class="fa fa-paper-plane"></i></span>Send</button>
                                    <button class="btn btn-danger light btn-sl-sm" type="button"><span class="me-2"><i class="fa fa-times"></i></span>Discard</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection