@extends('layouts/master')

@section('title', 'Dashboard 4')

@section('vendor-style')
     
@endsection

@section('vendor-script')
    <!-- Required vendors -->
     
	<script src="{{ asset('assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/apexchart/apexchart.js') }}"></script>
@endsection

@section('page-script')
	<script src="{{ asset('assets/js/dashboard/dashboard-4.js') }}"></script>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-7">
        <div class="card">
            <div class="card-header border-0">
                <h4 class="heading mb-0">Traffic Update</h4>
            </div>
            <div class="card-body py-0 custome-tooltip">
                <div class="row">
                    <div class="col-xl-4 col-sm-4">
                        <div class="card">
                            <div class="card-header p-2 border-0">
                                <div class="d-flex">
                                    <div class="icon-box bg-primary-light rounded-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="var(--primary)" fill-rule="nonzero" opacity="0.3"/>
                                                <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="var(--primary)" fill-rule="nonzero"/>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="ms-2 add-visit">
                                        <h6 class="mb-0">Add visitors</h6>
                                        <span>3,569</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0 custome-tooltip">
                                <div id="VisitorsChart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-4">
                        <div class="card">
                            <div class="card-header p-2 border-0">
                                <div class="d-flex">
                                    <div class="icon-box bg-secondary-light rounded-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M10.9630156,7.5 L11.0475062,7.5 C11.3043819,7.5 11.5194647,7.69464724 11.5450248,7.95024814 L12,12.5 L15.2480695,14.3560397 C15.403857,14.4450611 15.5,14.6107328 15.5,14.7901613 L15.5,15 C15.5,15.2109164 15.3290185,15.3818979 15.1181021,15.3818979 C15.0841582,15.3818979 15.0503659,15.3773725 15.0176181,15.3684413 L10.3986612,14.1087258 C10.1672824,14.0456225 10.0132986,13.8271186 10.0316926,13.5879956 L10.4644883,7.96165175 C10.4845267,7.70115317 10.7017474,7.5 10.9630156,7.5 Z" fill="var(--secondary)"/>
                                                <path d="M7.38979581,2.8349582 C8.65216735,2.29743306 10.0413491,2 11.5,2 C17.2989899,2 22,6.70101013 22,12.5 C22,18.2989899 17.2989899,23 11.5,23 C5.70101013,23 1,18.2989899 1,12.5 C1,11.5151324 1.13559454,10.5619345 1.38913364,9.65805651 L3.31481075,10.1982117 C3.10672013,10.940064 3,11.7119264 3,12.5 C3,17.1944204 6.80557963,21 11.5,21 C16.1944204,21 20,17.1944204 20,12.5 C20,7.80557963 16.1944204,4 11.5,4 C10.54876,4 9.62236069,4.15592757 8.74872191,4.45446326 L9.93948308,5.87355717 C10.0088058,5.95617272 10.0495583,6.05898805 10.05566,6.16666224 C10.0712834,6.4423623 9.86044965,6.67852665 9.5847496,6.69415008 L4.71777931,6.96995273 C4.66931162,6.97269931 4.62070229,6.96837279 4.57348157,6.95710938 C4.30487471,6.89303938 4.13906482,6.62335149 4.20313482,6.35474463 L5.33163823,1.62361064 C5.35654118,1.51920756 5.41437908,1.4255891 5.49660017,1.35659741 C5.7081375,1.17909652 6.0235153,1.2066885 6.2010162,1.41822583 L7.38979581,2.8349582 Z" fill="var(--secondary)" opacity="0.3"/>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="ms-2 add-visit">
                                        <h6 class="mb-0">sessions Start</h6>
                                        <span>8:30 PM</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0 custome-tooltip">
                                <div id="sessionsChart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-4">
                        <div class="card">
                            <div class="card-header p-2 border-0">
                                <div class="d-flex">
                                    <div class="icon-box bg-info-light rounded-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#58bad7" fill-rule="nonzero" opacity="0.3"/>
                                                <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#58bad7" fill-rule="nonzero"/>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="ms-2 add-visit">
                                        <h6 class="mb-0">Total Live</h6>
                                        <span>5,586
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0 custome-tooltip">
                                <div id="LiveChart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="chartBarRunning"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-5">
        <div class="card">
            <div class="card-header border-0">
                <h4 class="heading mb-0">Sales statistics</h4>
            </div>
            <div class="card-body custome-tooltip">
                <div class="row">
                    <div class="col-xl-3 col-3 or-series">
                        <div class="card text-center">
                            <div class="card-body p-2">
                                <h6>Orders</h6>
                                <span>5,2862</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-3 or-series">
                        <div class="card text-center">
                            <div class="card-body p-2">
                                <h6>Month</h6>
                                <span>5,2862</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-3 or-series">
                        <div class="card text-center">
                            <div class="card-body p-2">
                                <h6>Year</h6>
                                <span>6,2862</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-3 or-series">
                        <div class="card text-center">
                            <div class="card-body p-2">
                                <h6>Profit</h6>
                                <span>$2,545</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Statistics"></div>
            </div>
        </div>
    </div>	
    <div class="col-xl-8">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive active-projects task-table">
                            <div class="tbl-caption">
                                <h4 class="heading mb-0">Market Update</h4>
                            </div>
                            <table id="empoloyeestbl2" class="table market-update">
                                <thead>
                                    <tr>
                                        <th>Company Name</th>
                                        <th>Client</th>
                                        <th>Changes</th>
                                        <th>Budget</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="heading-data">
                                        <td colspan="5" class="text-start">Today</td>
                                        <td>
                                            <?xml version="1.0"?>
                                                <svg xmlns="http://www.w3.org/2000/svg" id="Icons" viewBox="0 0 60 60" width="22" height="22"><path d="M2.245,29H4a1,1,0,0,1,1,1A24.943,24.943,0,0,0,17.2,51.465a6.144,6.144,0,0,1,1.976-3.195l.188-.163A20.9,20.9,0,0,1,9,30a1,1,0,0,1,1-1h1.755a.229.229,0,0,0,.222-.141.218.218,0,0,0-.037-.25L7.186,23.084a.247.247,0,0,0-.371,0L2.06,28.609a.218.218,0,0,0-.037.25A.229.229,0,0,0,2.245,29Z"/><path d="M11.738,19.167l.163.19A20.869,20.869,0,0,1,30,9a1,1,0,0,1,1,1v1.755a.229.229,0,0,0,.141.222.219.219,0,0,0,.25-.037l5.524-4.754a.247.247,0,0,0,0-.372L31.391,2.06a.221.221,0,0,0-.25-.037A.229.229,0,0,0,31,2.245V4a1,1,0,0,1-1,1A24.94,24.94,0,0,0,8.535,17.2a6.2,6.2,0,0,1,3.2,1.971Z"/><path d="M28.859,48.023a.252.252,0,0,0-.1-.023.223.223,0,0,0-.147.06l-5.526,4.754a.248.248,0,0,0,0,.372l5.525,4.754a.221.221,0,0,0,.25.037A.229.229,0,0,0,29,57.755V56a1,1,0,0,1,1-1A24.943,24.943,0,0,0,51.466,42.8a6.246,6.246,0,0,1-3.2-1.98v0l-.155-.179A20.9,20.9,0,0,1,30,51a1,1,0,0,1-1-1V48.245A.229.229,0,0,0,28.859,48.023Z"/><path d="M51,30a1,1,0,0,1-1,1H48.245a.229.229,0,0,0-.222.141.218.218,0,0,0,.037.25l4.754,5.524a.216.216,0,0,0,.371,0l4.755-5.525a.218.218,0,0,0,.037-.25A.229.229,0,0,0,57.755,31H56a1,1,0,0,1-1-1A24.941,24.941,0,0,0,42.8,8.534a6.239,6.239,0,0,1-1.98,3.2l-.181.156A20.9,20.9,0,0,1,51,30Z"/></svg>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('assets/images/crm/dribble.png') }}" class="avatar avatar-lg" alt="">
                                                <div class="ms-2 dr-data">
                                                    <h6 class="mb-0">Dribble</h6>
                                                    <span>50 Template</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Meta</td>
                                        <td class="text-success"><i class="fa-solid fa-arrow-trend-up me-1"></i> 2.556</td>
                                        <td>$4,3655</td>
                                        <td><span class="badge badge-success light border-0">Active</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <div class="btn-link" data-bs-toggle="dropdown" >
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right" style="">
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('assets/images/crm/facebook.png') }}" class="avatar avatar-lg" alt="">
                                                <div class="ms-2 dr-data">
                                                    <h6 class="mb-0">Facebook</h6>
                                                    <span>40 Ads</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Space</td>
                                        <td class="text-danger"><i class="fa-solid fa-arrow-trend-down me-1"></i> 2.556</td>
                                        <td>$3,2342</td>
                                        <td><span class="badge badge-danger light border-0">Inactive</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <div class="btn-link" data-bs-toggle="dropdown" >
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right" style="">
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('assets/images/crm/instagram.png') }}" class="avatar avatar-lg" alt="">
                                                <div class="ms-2 dr-data">
                                                    <h6 class="mb-0">Facebook</h6>
                                                    <span>60 Ads</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Meta</td>
                                        <td class="text-success"><i class="fa-solid fa-arrow-trend-down me-1"></i> 4.556</td>
                                        <td>$4,3655</td>
                                        <td><span class="badge badge-success light border-0">DeActive</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <div class="btn-link" data-bs-toggle="dropdown" >
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right" style="">
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('assets/images/crm/linkedin.png') }}" class="avatar avatar-lg" alt="">
                                                <div class="ms-2 dr-data">
                                                    <h6 class="mb-0">Linkedin</h6>
                                                    <span>60 Ads</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Meta</td>
                                        <td class="text-success"><i class="fa-solid fa-arrow-trend-down me-1"></i> 2.556</td>
                                        <td>$4,3655</td>
                                        <td><span class="badge badge-success light border-0">DeActive</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <div class="btn-link" data-bs-toggle="dropdown" >
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right" style="">
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="heading-data">
                                        <td colspan="5" class="text-start">Yesterday</td>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" id="Icons1" viewBox="0 0 60 60" width="22" height="22"><path d="M2.245,29H4a1,1,0,0,1,1,1A24.943,24.943,0,0,0,17.2,51.465a6.144,6.144,0,0,1,1.976-3.195l.188-.163A20.9,20.9,0,0,1,9,30a1,1,0,0,1,1-1h1.755a.229.229,0,0,0,.222-.141.218.218,0,0,0-.037-.25L7.186,23.084a.247.247,0,0,0-.371,0L2.06,28.609a.218.218,0,0,0-.037.25A.229.229,0,0,0,2.245,29Z"/><path d="M11.738,19.167l.163.19A20.869,20.869,0,0,1,30,9a1,1,0,0,1,1,1v1.755a.229.229,0,0,0,.141.222.219.219,0,0,0,.25-.037l5.524-4.754a.247.247,0,0,0,0-.372L31.391,2.06a.221.221,0,0,0-.25-.037A.229.229,0,0,0,31,2.245V4a1,1,0,0,1-1,1A24.94,24.94,0,0,0,8.535,17.2a6.2,6.2,0,0,1,3.2,1.971Z"/><path d="M28.859,48.023a.252.252,0,0,0-.1-.023.223.223,0,0,0-.147.06l-5.526,4.754a.248.248,0,0,0,0,.372l5.525,4.754a.221.221,0,0,0,.25.037A.229.229,0,0,0,29,57.755V56a1,1,0,0,1,1-1A24.943,24.943,0,0,0,51.466,42.8a6.246,6.246,0,0,1-3.2-1.98v0l-.155-.179A20.9,20.9,0,0,1,30,51a1,1,0,0,1-1-1V48.245A.229.229,0,0,0,28.859,48.023Z"/><path d="M51,30a1,1,0,0,1-1,1H48.245a.229.229,0,0,0-.222.141.218.218,0,0,0,.037.25l4.754,5.524a.216.216,0,0,0,.371,0l4.755-5.525a.218.218,0,0,0,.037-.25A.229.229,0,0,0,57.755,31H56a1,1,0,0,1-1-1A24.941,24.941,0,0,0,42.8,8.534a6.239,6.239,0,0,1-1.98,3.2l-.181.156A20.9,20.9,0,0,1,51,30Z"/></svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('assets/images/crm/bing.png') }}" class="avatar avatar-lg" alt="">
                                                <div class="ms-2 dr-data">
                                                    <h6 class="mb-0">Bing</h6>
                                                    <span>30-50 Ads</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Meta</td>
                                        <td class="text-success"><i class="fa-solid fa-arrow-trend-down me-1"></i> 2.556</td>
                                        <td>$4,3655</td>
                                        <td><span class="badge badge-primary light border-0">Pending</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <div class="btn-link" data-bs-toggle="dropdown" >
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right" style="">
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('assets/images/crm/twitter.png') }}" class="avatar avatar-lg" alt="">
                                                <div class="ms-2 dr-data">
                                                    <h6 class="mb-0">Twitter Ads</h6>
                                                    <span>20-60 Ads</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Tesla</td>
                                        <td class="text-danger"><i class="fa-solid fa-arrow-trend-down me-1"></i> 2.556</td>
                                        <td>$4,3655</td>
                                        <td><span class="badge badge-danger light border-0">Pending</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <div class="btn-link" data-bs-toggle="dropdown" >
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right" style="">
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('assets/images/crm/whatsapp.png') }}" class="avatar avatar-lg" alt="">
                                                <div class="ms-2 dr-data">
                                                    <h6 class="mb-0">Whatsapp Ads</h6>
                                                    <span>20-60 Ads</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Meta</td>
                                        <td class="text-success"><i class="fa-solid fa-arrow-trend-down me-1"></i> 2.556</td>
                                        <td>$4,3655</td>
                                        <td><span class="badge badge-danger light border-0">Pending</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <div class="btn-link" data-bs-toggle="dropdown" >
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right" style="">
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="card sale-card">
                    <div class="card-header pb-0 border-0 align-items-baseline">
                        <div>
                            <span>Total Sale</span>
                            <h4>$1,255 <i class="fa-solid fa-arrow-trend-up ms-1"></i></h4>
                        </div>
                        <span class="badge badge-primary border-0">3.5<i class="fa-solid fa-caret-up ms-1"></i></span>
                    </div>
                    <div class="card-body p-0 custome-tooltip">
                        <div id="totalSale"></div>
                    </div>
                    <div class="card-footer border-0">
                        <span class="tag bg-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                        </span>
                    </div>	
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="card sale-card">
                    <div class="card-header pb-0 border-0 align-items-baseline">
                        <div>
                            <span>Total Purchase</span>
                            <h4>5,552k <i class="fa-solid fa-arrow-trend-down ms-1"></i></h4>
                        </div>
                        <span class="badge badge-secondary border-0">5.5<i class="fa-solid fa-caret-down ms-1"></i></span>
                    </div>
                    <div class="card-body p-0 custome-tooltip">
                        <div id="totalPurchase"></div>
                    </div>
                    <div class="card-footer border-0">
                        <span class="tag bg-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                        </span>
                    </div>	
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="card sale-card">
                    <div class="card-header pb-0 border-0 align-items-baseline">
                        <div>
                            <span>Active Customers</span>
                            <h4>3,431k <i class="fa-solid fa-arrow-trend-down ms-1"></i></h4>
                        </div>
                        <span class="badge badge-info border-0">6.5<i class="fa-solid fa-caret-down ms-1"></i></span>
                    </div>
                    <div class="card-body p-0 custome-tooltip">
                        <div id="activeCustomers"></div>
                    </div>
                    <div class="card-footer border-0">
                        <span class="tag bg-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                        </span>
                    </div>	
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header border-0 chart-card">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/crm/pie-chart.png') }}" alt="">
                            <div class="ms-2">
                                <h4 class="mb-0">1,555k <small class="fs-12 text-success"><i class="fa-solid fa-arrow-trend-down mx-2"></i>(3.56)</small></h4>
                                <span>Lorem Ipsum</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="icon-box bg-primary-light rounded-circle">
                                <svg width="20" height="20" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M32.8961 26.5849C34.1612 26.5849 35.223 27.629 35.0296 28.8783C33.8947 36.2283 27.6026 41.6855 20.0138 41.6855C11.6178 41.6855 4.8125 34.8803 4.8125 26.4862C4.8125 19.5704 10.0664 13.1283 15.9816 11.6717C17.2526 11.3579 18.5553 12.252 18.5553 13.5605C18.5553 22.4263 18.8533 24.7197 20.5368 25.9671C22.2204 27.2145 24.2 26.5849 32.8961 26.5849Z" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M41.1733 19.2019C41.2739 13.5059 34.2772 4.32428 25.7509 4.48217C25.0877 4.49402 24.5568 5.04665 24.5272 5.70783C24.3121 10.3914 24.6022 16.4605 24.764 19.2118C24.8134 20.0684 25.4864 20.7414 26.341 20.7907C29.1693 20.9526 35.4594 21.1736 40.0759 20.4749C40.7035 20.3802 41.1634 19.8355 41.1733 19.2019Z" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <div class="ms-2">
                                <h4 class="mb-0">1,5832k <small class="fs-12 text-success"><i class="fa-solid fa-arrow-trend-up mx-2"></i>(5.66)</small></h4>
                                <span>Lorem Ipsum</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="icon-box bg-secondary-light rounded-circle">
                                <svg width="20" height="20" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.9717 41.0539C22.9717 41.0539 37.3567 36.6983 37.3567 24.6908C37.3567 12.6814 37.878 11.7439 36.723 10.5889C35.5699 9.43391 24.858 5.69891 22.9717 5.69891C21.0855 5.69891 10.3736 9.43391 9.21863 10.5889C8.0655 11.7439 8.58675 12.6814 8.58675 24.6908C8.58675 36.6983 22.9717 41.0539 22.9717 41.0539Z" stroke="var(--secondary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M26.4945 26.4642L19.4482 19.4179" stroke="var(--secondary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M19.4487 26.4642L26.495 19.4179" stroke="var(--secondary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <div class="ms-2">
                                <h4 class="mb-0">5:22:23<small class="fs-12 text-success"><i class="fa-solid fa-arrow-trend-down mx-2"></i>(3.56)</small></h4>
                                <span>Total Time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="row">
            <div class="col-xl-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="icon-box bg-primary-light rounded-circle">
                                <svg width="20" height="20" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M32.8961 26.5849C34.1612 26.5849 35.223 27.629 35.0296 28.8783C33.8947 36.2283 27.6026 41.6855 20.0138 41.6855C11.6178 41.6855 4.8125 34.8803 4.8125 26.4862C4.8125 19.5704 10.0664 13.1283 15.9816 11.6717C17.2526 11.3579 18.5553 12.252 18.5553 13.5605C18.5553 22.4263 18.8533 24.7197 20.5368 25.9671C22.2204 27.2145 24.2 26.5849 32.8961 26.5849Z" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M41.1733 19.2019C41.2739 13.5059 34.2772 4.32428 25.7509 4.48217C25.0877 4.49402 24.5568 5.04665 24.5272 5.70783C24.3121 10.3914 24.6022 16.4605 24.764 19.2118C24.8134 20.0684 25.4864 20.7414 26.341 20.7907C29.1693 20.9526 35.4594 21.1736 40.0759 20.4749C40.7035 20.3802 41.1634 19.8355 41.1733 19.2019Z" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <div class="total-projects">
                                <h4 class="text-primary count">67%</h4> 
                                <span class="d-block">Free Hours</span>
                                <small>56% average</small>
                            </div>
                        </div>
                        <canvas id="activeUser"></canvas>
                    </div>
                </div>
            
            </div>
            <div class="col-xl-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="icon-box bg-secondary-light rounded-circle">
                                <svg width="20" height="20" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.9717 41.0539C22.9717 41.0539 37.3567 36.6983 37.3567 24.6908C37.3567 12.6814 37.878 11.7439 36.723 10.5889C35.5699 9.43391 24.858 5.69891 22.9717 5.69891C21.0855 5.69891 10.3736 9.43391 9.21863 10.5889C8.0655 11.7439 8.58675 12.6814 8.58675 24.6908C8.58675 36.6983 22.9717 41.0539 22.9717 41.0539Z" stroke="var(--secondary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M26.4945 26.4642L19.4482 19.4179" stroke="var(--secondary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M19.4487 26.4642L26.495 19.4179" stroke="var(--secondary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <div class="total-projects">
                                <h4 class="text-secondary count">57%</h4> 
                                <span class="d-block">Productiveness</span>
                                <small>61% average</small>
                            </div>
                        </div>
                        <canvas id="activeUser1"></canvas>
                    </div>
                </div>
            
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <h4 class="heading mb-0">Sales figures</h4>
                        <h4 class="heading mb-0 text-success">$3,85k</h4>
                    </div>
                    <div class="card-body p-0">
                        <div id="salesFigures"></div>
                        <div>
                            <div class="table-responsive active-projects task-table">
                                <table id="empoloyeestbl3" class="table market-update">
                                    <thead>
                                        <tr>
                                            <th>App Name</th>
                                            <th>Date</th>
                                            <th>Budget</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('assets/images/crm/dribble.png') }}" class="avatar avatar-lg" alt="">
                                                    <div class="ms-2 dr-data">
                                                        <h6 class="mb-0">Dribble</h6>
                                                        <span>Social Networking</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>22 April 2023</td>
                                            <td>$3,55k</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('assets/images/crm/whatsapp.png') }}" class="avatar avatar-lg" alt="">
                                                    <div class="ms-2 dr-data">
                                                        <h6 class="mb-0">Whatsapp Ads</h6>
                                                        <span>Service Provider</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>25 May 2023</td>
                                            <td>$3,55k</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('assets/images/crm/instagram.png') }}" class="avatar avatar-lg" alt="">
                                                    <div class="ms-2 dr-data">
                                                        <h6 class="mb-0">Facebook</h6>
                                                        <span>Social Networking</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>27 June 2023</td>
                                            <td>$8,58k</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('assets/images/crm/bing.png') }}" class="avatar avatar-lg" alt="">
                                                    <div class="ms-2 dr-data">
                                                        <h6 class="mb-0">Bing</h6>
                                                        <span>Search Engine</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>25 July 2022</td>
                                            <td>$8,58k</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('assets/images/crm/linkedin.png') }}" class="avatar avatar-lg" alt="">
                                                    <div class="ms-2 dr-data">
                                                        <h6 class="mb-0">Linkedin</h6>
                                                        <span>Social Networking</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>22 April 2023</td>
                                            <td>$9,68k</td>
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
</div>
@endsection