@extends('layouts/master')

@section('title', 'Chart Flot')

@section('vendor-style')
    <link href="{{ asset('assets/vendor/chartist/css/chartist.min.css') }}" rel="stylesheet">
@endsection

@section('vendor-script')
    <!-- Required vendors -->
     
	<script src="{{ asset('assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/apexchart/apexchart.js') }}"></script>
    <!-- Chart JS plugin files -->
	<script src="{{ asset('assets/vendor/chartist/js/chartist.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js') }}"></script>

@endsection

@section('page-script')
    <script src="{{ asset('assets/js/plugins-init/chartist-init.js') }}"></script>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Advanced Smil Animation</h4>
                    </div>
                    <div class="card-body">
                        <div id="smil-animations" class="ct-chart ct-golden-section chartlist-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Simple line chart</h4>
                    </div>
                    <div class="card-body">
                        <div id="simple-line-chart" class="ct-chart ct-golden-section chartlist-chart" ></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Line Scatter Diagram</h4>
                    </div>
                    <div class="card-body">
                        <div id="scatter-diagram" class="ct-chart ct-golden-section chartlist-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Line chart with tooltips</h4>
                    </div>
                    <div class="card-body">
                        <div id="line-chart-tooltips" class="ct-chart ct-golden-section chartlist-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Line chart with area</h4>
                    </div>
                    <div class="card-body">
                        <div id="chart-with-area" class="ct-chart ct-golden-section chartlist-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bi-polar Line chart with area only</h4>
                    </div>
                    <div class="card-body">
                        <div id="bi-polar-line" class="ct-chart ct-golden-section chartlist-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">SVG Path animation</h4>
                    </div>
                    <div class="card-body">
                        <div id="svg-animation" class="ct-chart ct-golden-section chartlist-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Line Interpolation / Smoothing</h4>
                    </div>
                    <div class="card-body">
                        <div id="line-smoothing" class="ct-chart ct-golden-section chartlist-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Different configuration for different series</h4>
                    </div>
                    <div class="card-body">
                        <div id="different-series" class="ct-chart ct-golden-section chartlist-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">SVG Animations chart</h4>
                    </div>
                    <div class="card-body">
                        <div id="svg-dot-animation" class="ct-chart ct-golden-section chartlist-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bi-polar bar chart</h4>
                    </div>
                    <div class="card-body">
                        <div id="bi-polar-bar" class="ct-chart ct-golden-section chartlist-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Overlapping bars on mobile</h4>
                    </div>
                    <div class="card-body">
                        <div id="overlapping-bars" class="ct-chart ct-golden-section chartlist-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Multi-line labels</h4>
                    </div>
                    <div class="card-body">
                        <div id="multi-line-chart" class="ct-chart ct-golden-section chartlist-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Stacked bar chart</h4>
                    </div>
                    <div class="card-body">
                        <div id="stacked-bar-chart" class="ct-chart ct-golden-section chartlist-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Horizontal bar chart</h4>
                    </div>
                    <div class="card-body">
                        <div id="horizontal-bar-chart" class="ct-chart ct-golden-section chartlist-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Extreme responsive configuration</h4>
                    </div>
                    <div class="card-body">
                        <div id="extreme-chart" class="ct-chart ct-golden-section chartlist-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Label placement</h4>
                    </div>
                    <div class="card-body">
                        <div id="label-placement-chart" class="ct-chart ct-golden-section chartlist-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Animating a Donut with Svg.animate</h4>
                    </div>
                    <div class="card-body">
                        <div id="animating-donut" class="ct-chart ct-golden-section chartlist-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Simple pie chart</h4>
                    </div>
                    <div class="card-body">
                        <div id="simple-pie" class="ct-chart ct-golden-section simple-pie-chart-chartist chartlist-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pie chart with custom labels</h4>
                    </div>
                    <div class="card-body">
                        <div id="pie-chart" class="ct-chart ct-golden-section chartlist-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Gauge chart</h4>
                    </div>
                    <div class="card-body">
                        <div id="gauge-chart" class="ct-chart ct-golden-section chartlist-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection