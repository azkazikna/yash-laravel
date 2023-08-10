@extends('layouts/master')

@section('title', 'Chart Flot')

@section('vendor-style')
@endsection

@section('vendor-script')
    <!-- Required vendors -->
     
	<script src="{{ asset('assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/apexchart/apexchart.js') }}"></script>
    <!-- Chart Morris plugin files -->
	<script src="{{ asset('assets/vendor/raphael/raphael.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/morris/morris.min.js') }}"></script>

@endsection

@section('page-script')
    <script src="{{ asset('assets/js/plugins-init/morris-init.js') }}"></script>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Donught Chart</h4>
                    </div>
                    <div class="card-body">
                        <div id="morris_donught" class="morris_chart_height"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Line Chart</h4>
                    </div>
                    <div class="card-body p-0">
                        <div id="morris_line" class="morris_chart_height"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bar Chart</h4>
                    </div>
                    <div class="card-body">
                        <div id="morris_bar" class="morris_chart_height"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Line Chart</h4>
                    </div>
                    <div class="card-body">
                        <div id="line_chart_2" class="morris_chart_height"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bar Chart</h4>
                    </div>
                    <div class="card-body">
                        
                        <div id="morris_bar_stalked" class="morris_chart_height"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Area Chart</h4>
                    </div>
                    <div class="card-body">
                        <div id="morris_area" class="morris_chart_height"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection