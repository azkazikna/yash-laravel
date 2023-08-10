@extends('layouts/master')

@section('title', 'User')

@section('vendor-style')
     

    <!-- Daterange picker -->
    <link href="{{ asset('assets') }}/vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="{{ asset('assets') }}/vendor/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="{{ asset('assets') }}/vendor/jquery-asColorPicker/css/asColorPicker.min.css" rel="stylesheet">
    <!-- Material color picker -->
    <link href="{{ asset('assets') }}/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- Pick date -->
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/pickadate/themes/default.date.css">
@endsection

@section('vendor-script')
    <!-- Required vendors -->
     
	<script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>

    <!-- momment js is must -->
    <script src="{{ asset('assets') }}/vendor/moment/moment.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- clockpicker -->
    <script src="{{ asset('assets') }}/vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <!-- asColorPicker -->
    <script src="{{ asset('assets') }}/vendor/jquery-asColor/jquery-asColor.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
    <!-- Material color picker -->
    <script src="{{ asset('assets') }}/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- pickdate -->
    <script src="{{ asset('assets') }}/vendor/pickadate/picker.js"></script>
    <script src="{{ asset('assets') }}/vendor/pickadate/picker.time.js"></script>
    <script src="{{ asset('assets') }}/vendor/pickadate/picker.date.js"></script>

    <!-- Daterangepicker -->
    <script src="{{ asset('assets') }}/js/plugins-init/bs-daterange-picker-init.js"></script>
    <!-- Clockpicker init -->
    <script src="{{ asset('assets') }}/js/plugins-init/clock-picker-init.js"></script>
    <!-- asColorPicker init -->
    <script src="{{ asset('assets') }}/js/plugins-init/jquery-asColorPicker.init.js"></script>
    <!-- Material color picker init -->
    <script src="{{ asset('assets') }}/js/plugins-init/material-date-picker-init.js"></script>
    <!-- Pickdate -->
    <script src="{{ asset('assets') }}/js/plugins-init/pickadate-init.js"></script>
@endsection

@section('page-script')
@endsection

@section('content')
<div class="row">
    <div class="col-xl-9">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Date Picker</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-4 mb-3">
                        <div class="example">
                            <p class="mb-1">Date Range Pick</p>
                            <input class="form-control input-daterange-datepicker" type="text" name="daterange" value="01/01/2015 - 01/31/2015">
                        </div>
                    </div>
                    <div class="col-xl-4 mb-3">
                        <div class="example">
                            <p class="mb-1">Date Range With Time</p>
                            <input type="text" class="form-control input-daterange-timepicker" name="daterange" value="01/01/2015 1:30 PM - 01/01/2015 2:00 PM">
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="example">
                            <p class="mb-1">Limit Selectable Dates</p>
                            <input class="form-control input-limit-datepicker" type="text" name="daterange" value="06/01/2015 - 06/07/2015">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3">
        <!-- Card -->
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Pick-Date picker</h4>
            </div>
            <div class="card-body">
                <p class="mb-1">Default picker</p>
                <input name="datepicker" class="datepicker-default form-control" id="datepicker">
            </div>
        </div>
        <!-- Card -->
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Date picker</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-xl-3 col-xxl-6 mb-3">
                        <label class="form-label">Default Clock Picker</label>
                        <div class="input-group clockpicker">
                            <input type="text" class="form-control" value="09:30"><span class="input-group-text"><i
                                        class="fas fa-clock"></i></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 col-xxl-6 mb-3">
                        <label class="form-label">Auto btn-close Clock Picker</label>
                        <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autobtn-close="true">
                            <input type="text" class="form-control" value="13:14"> 
                            <span class="input-group-text"><i
                                        class="fas fa-clock"></i></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 col-xxl-6 mb-3">
                        <label class="form-label">Now time</label>
                        <div class="input-group">
                            <input class="form-control" id="single-input" value="" placeholder="Now">
                            <button type="button" id="check-minutes" class="btn waves-effect waves-light btn-ft btn-success">Check the minutes</button>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 col-xxl-6">
                        <label class="form-label">Left Placement</label>
                        <div class="input-group clockpicker" data-placement="left" data-align="top" data-autobtn-close="true">
                            <input type="text" class="form-control" value="13:14"> 
                            <span class="input-group-text"><i class="fas fa-clock"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Material Date picker</h4>
            </div>
            <div class="card-body">
                <div class="row form-material">
                    <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                        <label class="form-label">Default Material Date Picker</label>
                        <input type="text" class="form-control" placeholder="2017-06-04" id="mdate">
                    </div>
                    <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                        <label class="form-label">Default Material Date Timepicker</label>
                        <input type="text" id="date-format" class="form-control" placeholder="Saturday 24 June 2017 - 21:44">
                    </div>
                    <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                        <label class="form-label">Time Picker</label>
                        <input class="form-control" id="timepicker" placeholder="Check time">
                    </div>
                    <div class="col-xl-3 col-xxl-6 col-md-6">
                        <label class="form-label">Min Date set</label>
                        <input type="text" class="form-control" placeholder="set min date" id="min-date">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Color Picker</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 mb-3">
                        <div class="example">
                            <p class="mb-1">Simple mode</p>
                            <input type="text" class="as_colorpicker form-control" value="#7ab2fa">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 mb-3">
                        <div class="example">
                            <p class="mb-1">Complex mode</p>
                            <input type="text" class="complex-colorpicker form-control" value="#fa7a7a">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 mb-3">
                        <div class="example">
                            <p class="mb-1">Gradiant mode</p>
                            <input type="text" class="gradient-colorpicker form-control" value="#bee0ab">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection