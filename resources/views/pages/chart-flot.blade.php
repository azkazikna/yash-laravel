@extends('layouts/master')

@section('title', 'Chart Flot')

@section('vendor-style')
@endsection

@section('vendor-script')
    <!-- Required vendors -->
     
	<script src="{{ asset('assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/apexchart/apexchart.js') }}"></script>
    
	<script src="{{ asset('assets/vendor/flot/jquery.flot.js') }}"></script>
	<script src="{{ asset('assets/vendor/flot/jquery.flot.pie.js') }}"></script>
	<script src="{{ asset('assets/vendor/flot/jquery.flot.resize.js') }}"></script>
	<script src="{{ asset('assets/vendor/flot/jquery.flot.spline.min.js') }}"></script>

@endsection

@section('page-script')
    <script src="{{ asset('assets/js/plugins-init/flot-init.js') }}"></script>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bar Chart</h4>
                    </div>
                    <div class="card-body">
                        <div id="flotBar1" class="flot-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bar Chart</h4>
                    </div>
                    <div class="card-body">
                        <div id="flotBar2" class="flot-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Line Chart</h4>
                    </div>
                    <div class="card-body">
                        <div id="flotLine1" class="flot-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Line Chart</h4>
                    </div>
                    <div class="card-body">
                        <div id="flotLine2" class="flot-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Line Chart</h4>
                    </div>
                    <div class="card-body">
                        <div id="flotLine3" class="flot-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Area Chart</h4>
                    </div>
                    <div class="card-body">
                        <div id="flotArea1" class="flot-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Area Chart</h4>
                    </div>
                    <div class="card-body">
                        <div id="flotArea2" class="flot-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Realtime Chart</h4>
                    </div>
                    <div class="card-body">
                        <div id="flotRealtime1" class="flot-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Realtime Chart</h4>
                    </div>
                    <div class="card-body">
                        <div id="flotRealtime2" class="flot-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Stacking Chart</h4>
                    </div>
                    <div class="card-body">
                        <div id="flotRealtime3" class="flot-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection