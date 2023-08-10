@extends('layouts/master')

@section('title', 'Products')

@section('vendor-style')
     
	<link href="{{ asset('assets/vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/jvmap/jquery-jvectormap.css') }}" rel="stylesheet">
	<link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
@endsection

@section('vendor-script')
    <!-- Required vendors -->
     
	<script src="{{ asset('assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/swiper/js/swiper-bundle.min.js') }}"></script>
	 
	<script src="{{ asset('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/datatables/js/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/datatables/js/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/datatables/js/jszip.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugins-init/datatables.init.js') }}"></script>
   
@endsection

@section('page-script')
	<script src="{{ asset('assets/js/dashboard/products.js') }}"></script>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="row">
            <div class="col-xl-3 col-sm-6">
                <div class="card box-hover">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="icon-box icon-box-lg bg-success-light rounded">
                                <i class="fa-solid fa-briefcase text-success"></i>
                            </div>
                            <div class="total-projects ms-3">
                                <h3 class="text-success count">200+</h3> 
                                <span>Total Projects</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card box-hover">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="icon-box icon-box-lg bg-primary-light rounded">
                                <i class="fa-solid fa-cart-shopping text-primary"></i>

                            </div>
                            <div class="total-projects ms-3">
                                <h3 class="text-primary count">1560</h3> 
                                <span>Total Orders</span>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card box-hover">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="icon-box icon-box-lg bg-warning-light rounded">
                                <i class="fa-solid fa-users text-warning"></i>
                            </div>
                            <div class="total-projects ms-3">
                                <h3 class="text-warning count">400</h3> 
                                <span>Total User</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card box-hover">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="icon-box icon-box-lg bg-danger-light rounded">
                                <i class="fa-solid fa-hand-holding-dollar text-danger"></i>
                            </div>
                            <div class="total-projects ms-3">
                                <h3 class="text-danger count">$1500</h3> 
                                <span>Total Sales</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">		
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive active-projects">
                            <div class="tbl-caption">
                                <h4 class="heading mb-0">Best Seller</h4>
                            </div>
                            <table id="projects-tbl" class="table">
                                <thead>
                                    <tr>
                                        <th>SELLER NAME</th>
                                        <th>PRODUCT</th>
                                        <th>COMPANY</th>
                                        <th>REVENUE</th>
                                        <th>STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('assets') }}/images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                <p class="mb-0 ms-2">Daniel Arran</p>	
                                            </div>
                                        </td>	
                                        <td>Laptop</td>
                                        <td>Apple</td>
                                        <td>$17,00</td>
                                        <td>
                                            <span class="badge badge-primary light border-0">Inprogress</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('assets') }}/images/contacts/pic2.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                <p class="mb-0 ms-2">Daniel Arran</p>	
                                            </div>
                                        </td>	
                                        <td>Mobile</td>
                                        <td>Samsung</td>
                                        <td>$17,625</td>
                                        <td>
                                            <span class="badge badge-success light border-0">Success</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('assets') }}/images/contacts/pic3.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                <p class="mb-0 ms-2">Daniel Arran</p>	
                                            </div>
                                        </td>	
                                        <td>Ac</td>
                                        <td>Panasonic</td>
                                        <td>$1,665</td>
                                        <td>
                                            <span class="badge badge-warning light border-0">Pending</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('assets') }}/images/contacts/pic3.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                <p class="mb-0 ms-2">Daniel Arran</p>	
                                            </div>
                                        </td>	
                                        <td>Touch Screen</td>
                                        <td>Google</td>
                                        <td>$1,6565</td>
                                        <td>
                                            <span class="badge badge-danger light border-0">Cancle</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header border-0">
                        <h4 class="heading mb-0">Source Of Revenue Generat</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive active-projects">
                            <table id="projects-tbl3" class="table">
                                <thead>
                                    <tr>
                                        <th>SOURCE</th>
                                        <th>VISITORS</th>
                                        <th>PAGE VIEW</th>
                                        <th>REVENUE</th>
                                        <th>TRENDING</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="icon-box icon-box-sm bg-primary">
                                                    <i class="fa-brands fa-facebook-f text-white"></i>
                                                </div>
                                                <p class="mb-0 ms-2 font-w500">Facebook</p>	
                                            </div>
                                        </td>	
                                        <td>25,255</td>
                                        <td>1,205</td>
                                        <td>$955</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-primary" style="width:50%; height:5px; border-radius:4px;" role="progressbar"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="icon-box icon-box-sm bg-secondary">
                                                    <i class="fa-brands fa-google text-white"></i>
                                                </div>
                                                <p class="mb-0 ms-2 font-w500">Google</p>	
                                            </div>
                                        </td>	
                                        <td>25,655</td>
                                        <td>1,255</td>
                                        <td>$9555</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-secondary" style="width:60%; height:5px; border-radius:4px;" role="progressbar"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="icon-box icon-box-sm bg-info">
                                                    <i class="fa-brands fa-linkedin-in text-white"></i>
                                                </div>
                                                <p class="mb-0 ms-2">Linkedin</p>	
                                            </div>
                                        </td>	
                                        <td>55,655</td>
                                        <td>2,255</td>
                                        <td>$8855</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-info" style="width:30%; height:5px; border-radius:4px;" role="progressbar"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="icon-box icon-box-sm bg-warning">
                                                    <i class="fa-brands fa-instagram text-white"></i>
                                                </div>
                                                <p class="mb-0 ms-2">Daniel Arran</p>	
                                            </div>
                                        </td>	
                                        <td>42,655</td>
                                        <td>9,255</td>
                                        <td>$9855</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" style="width:80%; height:5px; border-radius:4px;" role="progressbar"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header border-0">
                        <h4 class="heading mb-0">New Product</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive active-projects">
                            <table id="projects-tbl4" class="table">
                                <thead>
                                    <tr>
                                        <th>PRDUCTS NAME</th>
                                        <th>PRICE</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="products">
                                                <img src="{{ asset('assets') }}/images/contacts/d14.jpg" class="avatar avatar-sm" alt="">
                                                <div>
                                                    <h6><a href="javascript:void(0)">Air Conditioner</a></h6>
                                                    <span>24 Apr 2021</span>	
                                                </div>	
                                            </div>
                                        </td>	
                                        <td>$655</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="products">
                                                <img src="{{ asset('assets') }}/images/contacts/d10.jpg" class="avatar avatar-sm" alt="">
                                                <div>
                                                    <h6><a href="javascript:void(0)">Air Conditioner</a></h6>
                                                    <span>24 Apr 2021</span>	
                                                </div>	
                                            </div>
                                        </td>	
                                        <td>$655</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="products">
                                                <img src="{{ asset('assets') }}/images/contacts/d11.jpg" class="avatar avatar-sm" alt="">
                                                <div>
                                                    <h6><a href="javascript:void(0)">Bag Pack</a></h6>
                                                    <span>24 Apr 2021</span>	
                                                </div>	
                                            </div>
                                        </td>	
                                        <td>$699</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="products">
                                                <img src="{{ asset('assets') }}/images/contacts/d12.jpg" class="avatar avatar-sm" alt="">
                                                <div>
                                                    <h6><a href="javascript:void(0)">Black Dress</a></h6>
                                                    <span>24 Apr 2021</span>	
                                                </div>	
                                            </div>
                                        </td>	
                                        <td>$955</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="products">
                                                <img src="{{ asset('assets') }}/images/contacts/d14.jpg" class="avatar avatar-sm" alt="">
                                                <div>
                                                    <h6><a href="javascript:void(0)">Air Conditioner</a></h6>
                                                    <span>24 Apr 2021</span>	
                                                </div>	
                                            </div>
                                        </td>	
                                        <td>$655</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-header border-0">
                        <h4 class="heading mb-0">Top Selling Products</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive active-projects">
                            <table id="projects-tbl2" class="table">
                                <thead>
                                    <tr>
                                        <th>PRDUCTS NAME</th>
                                        <th>PRICE</th>
                                        <th>SOLD</th>
                                        <th>REVENUE</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="products">
                                                <img src="{{ asset('assets') }}/images/contacts/d1.jpg" class="avatar avatar-sm" alt="">
                                                <div>
                                                    <h6><a href="javascript:void(0)">Air Conditioner</a></h6>
                                                    <span>24 Apr 2021</span>	
                                                </div>	
                                            </div>
                                        </td>	
                                        <td>$655</td>
                                        <td>55</td>
                                        <td>$5,956</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="products">
                                                <img src="{{ asset('assets') }}/images/contacts/d10.jpg" class="avatar avatar-sm" alt="">
                                                <div>
                                                    <h6><a href="javascript:void(0)">Bag Pack</a></h6>
                                                    <span>24 Apr 2021</span>	
                                                </div>	
                                            </div>
                                        </td>	
                                        <td>$585</td>
                                        <td>485</td>
                                        <td>$9,956</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="products">
                                                <img src="{{ asset('assets') }}/images/contacts/d11.jpg" class="avatar avatar-sm" alt="">
                                                <div>
                                                    <h6><a href="javascript:void(0)">Bag Pack</a></h6>
                                                    <span>24 Apr 2021</span>	
                                                </div>	
                                            </div>
                                        </td>	
                                        <td>$852</td>
                                        <td>5525</td>
                                        <td>$8,525</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="products">
                                                <img src="{{ asset('assets') }}/images/contacts/d12.jpg" class="avatar avatar-sm" alt="">
                                                <div>
                                                    <h6><a href="javascript:void(0)">Black Dress</a></h6>
                                                    <span>24 Apr 2021</span>	
                                                </div>	
                                            </div>
                                        </td>	
                                        <td>$852</td>
                                        <td>5985</td>
                                        <td>$8,525</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="products">
                                                <img src="{{ asset('assets') }}/images/contacts/d14.jpg" class="avatar avatar-sm" alt="">
                                                <div>
                                                    <h6><a href="javascript:void(0)">Air Conditioner</a></h6>
                                                    <span>24 Apr 2021</span>	
                                                </div>	
                                            </div>
                                        </td>	
                                        <td>$182</td>
                                        <td>525</td>
                                        <td>$6,525</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection