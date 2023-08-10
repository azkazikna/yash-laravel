<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Dashboard
Route::get('/', function () {
    return view('pages.index');
});
Route::get('/index-dark', function () {
    return view('pages.index-dark');
});
Route::get('/index-2', function () {
    return view('pages.index-2');
});
Route::get('/index-3', function () {
    return view('pages.index-3');
});
Route::get('/index-4', function () {
    return view('pages.index-4');
});
Route::get('/crm', function () {
    return view('pages.crm');
});
Route::get('/analytics', function () {
    return view('pages.analytics');
});
Route::get('/products', function () {
    return view('pages.products');
});
Route::get('/sales', function () {
    return view('pages.sales');
});
Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/task', function () {
    return view('pages.task');
});
Route::get('/project', function () {
    return view('pages.project');
});

// Apps
Route::get('/chat', function () {
    return view('pages.chat');
});
Route::get('/user', function () {
    return view('pages.user');
});
Route::get('/edit-profile', function () {
    return view('pages.edit-profile');
});
Route::get('/app-profile-1', function () {
    return view('pages.app-profile-1');
});
Route::get('/app-profile-2', function () {
    return view('pages.app-profile-2');
});
Route::get('/post-details', function () {
    return view('pages.post-details');
});
Route::get('/email-compose', function () {
    return view('pages.email-compose');
});
Route::get('/email-inbox', function () {
    return view('pages.email-inbox');
});
Route::get('/email-read', function () {
    return view('pages.email-read');
});
Route::get('/app-calendar', function () {
    return view('pages.app-calendar');
});
Route::get('/ecom-product-grid', function () {
    return view('pages.ecom-product-grid');
});
Route::get('/ecom-product-list', function () {
    return view('pages.ecom-product-list');
});
Route::get('/ecom-product-detail', function () {
    return view('pages.ecom-product-detail');
});
Route::get('/ecom-product-order', function () {
    return view('pages.ecom-product-order');
});
Route::get('/ecom-checkout', function () {
    return view('pages.ecom-checkout');
});
Route::get('/ecom-invoice', function () {
    return view('pages.ecom-invoice');
});
Route::get('/ecom-customers', function () {
    return view('pages.ecom-customers');
});

// Charts
Route::get('/chart-flot', function () {
    return view('pages.chart-flot');
});
Route::get('/chart-morris', function () {
    return view('pages.chart-morris');
});
Route::get('/chart-chartjs', function () {
    return view('pages.chart-chartjs');
});
Route::get('/chart-chartist', function () {
    return view('pages.chart-chartist');
});
Route::get('/chart-sparkline', function () {
    return view('pages.chart-sparkline');
});
Route::get('/chart-peity', function () {
    return view('pages.chart-peity');
});

// Bootstrap
Route::get('/ui-accordion', function () {
    return view('pages.ui-accordion');
});
Route::get('/ui-alert', function () {
    return view('pages.ui-alert');
});
Route::get('/ui-badge', function () {
    return view('pages.ui-badge');
});
Route::get('/ui-button', function () {
    return view('pages.ui-button');
});
Route::get('/ui-modal', function () {
    return view('pages.ui-modal');
});
Route::get('/ui-button-group', function () {
    return view('pages.ui-button-group');
});
Route::get('/ui-list-group', function () {
    return view('pages.ui-list-group');
});
Route::get('/ui-card', function () {
    return view('pages.ui-card');
});
Route::get('/ui-carousel', function () {
    return view('pages.ui-carousel');
});
Route::get('/ui-dropdown', function () {
    return view('pages.ui-dropdown');
});
Route::get('/ui-popover', function () {
    return view('pages.ui-popover');
});
Route::get('/ui-progressbar', function () {
    return view('pages.ui-progressbar');
});
Route::get('/ui-tab', function () {
    return view('pages.ui-tab');
});
Route::get('/ui-typography', function () {
    return view('pages.ui-typography');
});
Route::get('/ui-pagination', function () {
    return view('pages.ui-pagination');
});
Route::get('/ui-grid', function () {
    return view('pages.ui-grid');
});

// Plugins
Route::get('/uc-select2', function () {
    return view('pages.uc-select2');
});
Route::get('/uc-nestable', function () {
    return view('pages.uc-nestable');
});
Route::get('/uc-noui-slider', function () {
    return view('pages.uc-noui-slider');
});
Route::get('/uc-sweetalert', function () {
    return view('pages.uc-sweetalert');
});
Route::get('/uc-toastr', function () {
    return view('pages.uc-toastr');
});
Route::get('/map-jqvmap', function () {
    return view('pages.map-jqvmap');
});
Route::get('/uc-lightgallery', function () {
    return view('pages.uc-lightgallery');
});

// Widget
Route::get('/widget-basic', function () {
    return view('pages.widget-basic');
});

// Forms
Route::get('/form-element', function () {
    return view('pages.form-element');
});
Route::get('/form-wizard', function () {
    return view('pages.form-wizard');
});
Route::get('/form-ckeditor', function () {
    return view('pages.form-ckeditor');
});
Route::get('/form-pickers', function () {
    return view('pages.form-pickers');
});
Route::get('/form-validation', function () {
    return view('pages.form-validation');
});

// Table
Route::get('/table-bootstrap-basic', function () {
    return view('pages.table-bootstrap-basic');
});
Route::get('/table-datatable-basic', function () {
    return view('pages.table-datatable-basic');
});

// Pages
Route::get('/page-login', function () {
    return view('pages.page-login');
});
Route::get('/page-register', function () {
    return view('pages.page-register');
});
Route::get('/page-error-400', function () {
    return view('pages.page-error-400');
});
Route::get('/page-error-403', function () {
    return view('pages.page-error-403');
});
Route::get('/page-error-404', function () {
    return view('pages.page-error-404');
});
Route::get('/page-error-500', function () {
    return view('pages.page-error-500');
});
Route::get('/page-error-503', function () {
    return view('pages.page-error-503');
});
Route::get('/page-lock-screen', function () {
    return view('pages.page-lock-screen');
});
Route::get('/empty-page', function () {
    return view('pages.empty-page');
});