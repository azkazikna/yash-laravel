@extends('layouts/master')

@section('title', 'Dashboard 3')

@section('vendor-style')
     
	<link href="{{ asset('assets/vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css" rel="stylesheet">
	<link href="{{ asset('assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
	<link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
	<link href="{{ asset('assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
@endsection

@section('vendor-script')
    <!-- Required vendors -->
     
	<script src="{{ asset('assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/apexchart/apexchart.js') }}"></script>
	 
	<script src="{{ asset('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/datatables/js/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/datatables/js/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/datatables/js/jszip.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugins-init/datatables.init.js') }}"></script>
   
	<!-- Apex Chart -->
	
	<script src="{{ asset('assets/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
@endsection

@section('page-script')
	<script src="{{ asset('assets/js/dashboard/dashboard-3.js') }}"></script>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="icon-box icon-box-lg bg-success-light rounded-circle">
                        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M22.9715 29.3168C15.7197 29.3168 9.52686 30.4132 9.52686 34.8043C9.52686 39.1953 15.6804 40.331 22.9715 40.331C30.2233 40.331 36.4144 39.2328 36.4144 34.8435C36.4144 30.4543 30.2626 29.3168 22.9715 29.3168Z" stroke="#3AC977" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M22.9714 23.0537C27.7304 23.0537 31.5875 19.1948 31.5875 14.4359C31.5875 9.67694 27.7304 5.81979 22.9714 5.81979C18.2125 5.81979 14.3536 9.67694 14.3536 14.4359C14.3375 19.1787 18.1696 23.0377 22.9107 23.0537H22.9714Z" stroke="#3AC977" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="total-projects ms-3">
                        <h3 class="text-success count">5,652k</h3> 
                        <span>Total Completed</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="icon-box icon-box-lg bg-primary-light rounded-circle">
                        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M32.8961 26.5849C34.1612 26.5849 35.223 27.629 35.0296 28.8783C33.8947 36.2283 27.6026 41.6855 20.0138 41.6855C11.6178 41.6855 4.8125 34.8803 4.8125 26.4862C4.8125 19.5704 10.0664 13.1283 15.9816 11.6717C17.2526 11.3579 18.5553 12.252 18.5553 13.5605C18.5553 22.4263 18.8533 24.7197 20.5368 25.9671C22.2204 27.2145 24.2 26.5849 32.8961 26.5849Z" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M41.1733 19.2019C41.2739 13.5059 34.2772 4.32428 25.7509 4.48217C25.0877 4.49402 24.5568 5.04665 24.5272 5.70783C24.3121 10.3914 24.6022 16.4605 24.764 19.2118C24.8134 20.0684 25.4864 20.7414 26.341 20.7907C29.1693 20.9526 35.4594 21.1736 40.0759 20.4749C40.7035 20.3802 41.1634 19.8355 41.1733 19.2019Z" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>

                    </div>
                    <div class="total-projects ms-3">
                        <h3 class="text-primary count">585k</h3> 
                        <span>Total In Progress</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="icon-box icon-box-lg bg-purple-light rounded-circle">
                        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M22.9717 41.0539C22.9717 41.0539 37.3567 36.6983 37.3567 24.6908C37.3567 12.6814 37.878 11.7439 36.723 10.5889C35.5699 9.43391 24.858 5.69891 22.9717 5.69891C21.0855 5.69891 10.3736 9.43391 9.21863 10.5889C8.0655 11.7439 8.58675 12.6814 8.58675 24.6908C8.58675 36.6983 22.9717 41.0539 22.9717 41.0539Z" stroke="#BB6BD9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M26.4945 26.4642L19.4482 19.4179" stroke="#BB6BD9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M19.4487 26.4642L26.495 19.4179" stroke="#BB6BD9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="total-projects ms-3">
                        <h3 class="text-purple count">5282k</h3> 
                        <span>Total Not Started</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="icon-box icon-box-lg bg-danger-light rounded-circle">
                        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M34.0396 20.974C36.6552 20.6065 38.6689 18.364 38.6746 15.6471C38.6746 12.9696 36.7227 10.7496 34.1633 10.3296" stroke="#FF5E5E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M37.4912 27.262C40.0243 27.6407 41.7925 28.5276 41.7925 30.3557C41.7925 31.6139 40.96 32.4314 39.6137 32.9451" stroke="#FF5E5E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M22.7879 28.0373C16.7616 28.0373 11.6147 28.9504 11.6147 32.5973C11.6147 36.2423 16.7297 37.1817 22.7879 37.1817C28.8141 37.1817 33.9591 36.2779 33.9591 32.6292C33.9591 28.9804 28.846 28.0373 22.7879 28.0373Z" stroke="#FF5E5E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M22.7876 22.8325C26.742 22.8325 29.9483 19.6281 29.9483 15.6719C29.9483 11.7175 26.742 8.51123 22.7876 8.51123C18.8333 8.51123 15.627 11.7175 15.627 15.6719C15.612 19.6131 18.7939 22.8194 22.7351 22.8325H22.7876Z" stroke="#FF5E5E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M11.5344 20.974C8.91691 20.6065 6.90504 18.364 6.89941 15.6471C6.89941 12.9696 8.85129 10.7496 11.4107 10.3296" stroke="#FF5E5E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M8.0825 27.262C5.54937 27.6407 3.78125 28.5276 3.78125 30.3557C3.78125 31.6139 4.61375 32.4314 5.96 32.9451" stroke="#FF5E5E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="total-projects ms-3">
                        <h3 class="text-danger count">5,855k</h3> 
                        <span>Total Not Started</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-5">
        <div class="card">
            <div class="card-header border-0">
                <h4 class="heading mb-0">Social Networking</h4>
            </div>
            <div class="card-body py-0">
                <div id="redial"></div>
                <div class="text-center">
                    <h5 class="mb-0">Total sales made week</h5>
                    <h4>$86</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-sm-4 tg-base">
                        <div class="card text-center">
                            <div class="card-body p-2">
                                <span class="mb-1 d-block">Target</span>
                                <h4 class="mb-0"><i class="fa-solid fa-arrow-up me-1 text-success"></i>$15k</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-4 tg-base">
                        <div class="card text-center">
                            <div class="card-body p-2">
                                <span class="mb-1 d-block">Last week</span>
                                <h4 class="mb-0"><i class="fa-solid fa-arrow-down me-1 text-danger"></i>$55k</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-4 tg-base">
                        <div class="card text-center">
                            <div class="card-body p-2">
                                <span class="mb-1 d-block">Last Year</span>
                                <h4 class="mb-0"><i class="fa-solid fa-arrow-up me-1 text-success"></i>$65k</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8 col-lg-7">
        <div class="card overflow-hidden">
            <div class="card-header border-0 pb-0 flex-wrap">
                <h4 class="heading mb-0">Projects Overview</h4>
                <ul class="nav nav-pills mix-chart-tab" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" data-series="week" id="pills-week-tab" data-bs-toggle="pill" data-bs-target="#pills-week" type="button" role="tab"  aria-selected="true">Week</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" data-series="month" id="pills-month-tab" data-bs-toggle="pill" data-bs-target="#pills-month" type="button" role="tab"  aria-selected="false">Month</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" data-series="year" id="pills-year-tab" data-bs-toggle="pill" data-bs-target="#pills-year" type="button" role="tab"  aria-selected="false">Year</button>
                  </li>
                   <li class="nav-item" role="presentation">
                    <button class="nav-link" data-series="all" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-selected="false">All</button>
                  </li>
                </ul>
            </div>
            <div class="card-body custome-tooltip p-0">
                    <div id="overiewChart"></div>
                <div class="ttl-project ds-chart">
                    <div class="pr-data">
                        <h5>12,721</h5>
                        <span>Number of Projects</span>
                    </div>
                    <div class="pr-data">
                        <h5 class="text-primary">721</h5>
                        <span>Active Projects</span>
                    </div>
                    <div class="pr-data">
                        <h5>$2,50,523</h5>
                        <span>Revenue</span>
                    </div>
                    <div class="pr-data">
                        <h5 class="text-success">12,275h</h5>
                        <span>Working Hours</span>
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
                        <h4 class="heading mb-0">Active Projects</h4>
                    </div>
                    <table id="projects-tbl" class="table">
                        <thead>
                            <tr>
                                <th>Project Name</th>
                                <th>Project Lead</th>
                                <th>Progress</th>
                                <th>Assignee</th>
                                <th>Status</th>
                                <th>Due Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>James Thomas</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                        <p class="mb-0 ms-2">Liam Risher</p>	
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <div class="tbl-progress-box">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" style="width:53%; height:5px; border-radius:4px;" role="progressbar"></div>
                                        </div>
                                        <span class="text-primary">53%</span>
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <div class="avatar-list avatar-list-stacked">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <span class="badge badge-primary light border-0">Inprogress</span>
                                </td>
                                <td>
                                    <span>06 Sep 2021</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Edward John</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                        <p class="mb-0 ms-2">Oliver Noah</p>	
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <div class="tbl-progress-box">
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" style="width:30%; height:5px; border-radius:4px;" role="progressbar"></div>
                                        </div>
                                        <span class="text-danger">30%</span>
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <div class="avatar-list avatar-list-stacked">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <span class="badge badge-danger light border-0">Pending</span>
                                </td>
                                <td>
                                    <span>06 Sep 2021</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Christopher</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                        <p class="mb-0 ms-2">Elijah James</p>	
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <div class="tbl-progress-box">
                                        <div class="progress">
                                            <div class="progress-bar bg-success" style="width:40%; height:5px; border-radius:4px;" role="progressbar"></div>
                                        </div>
                                        <span class="text-success">40%</span>
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <div class="avatar-list avatar-list-stacked">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md  rounded-circle" alt="">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md  rounded-circle" alt="">
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <span class="badge badge-success light border-0">Completed</span>
                                </td>
                                <td>
                                    <span>06 Sep 2021</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Brian</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                        <p class="mb-0 ms-2">William Risher</p>	
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <div class="tbl-progress-box">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" style="width:53%; height:5px; border-radius:4px;" role="progressbar"></div>
                                        </div>
                                        <span class="text-primary">53%</span>
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <div class="avatar-list avatar-list-stacked">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <span class="badge badge-primary light border-0">Inprogress</span>
                                </td>
                                <td>
                                    <span>06 Sep 2021</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Donald</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                        <p class="mb-0 ms-2">Donald Benjamin</p>	
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <div class="tbl-progress-box">
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" style="width:30%; height:5px; border-radius:4px;" role="progressbar"></div>
                                        </div>
                                        <span class="text-danger">30%</span>
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <div class="avatar-list avatar-list-stacked">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <span class="badge badge-danger light border-0">Inprogress</span>
                                </td>
                                <td>
                                    <span>06 Sep 2021</span>
                                </td>
                            </tr>
                            <tr>
                                <td>David</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                        <p class="mb-0 ms-2">Liam Risher</p>	
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <div class="tbl-progress-box">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" style="width:53%; height:5px; border-radius:4px;" role="progressbar"></div>
                                        </div>
                                        <span class="text-primary">53%</span>
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <div class="avatar-list avatar-list-stacked">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <span class="badge badge-primary light border-0">Inprogress</span>
                                </td>
                                <td>
                                    <span>06 Sep 2021</span>
                                </td>
                            </tr>
                            <tr>
                                <td>George Jeff</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                        <p class="mb-0 ms-2">Oliver Noah</p>	
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <div class="tbl-progress-box">
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" style="width:30%; height:5px; border-radius:4px;" role="progressbar"></div>
                                        </div>
                                        <span class="text-danger">30%</span>
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <div class="avatar-list avatar-list-stacked">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <span class="badge badge-danger light border-0">Pending</span>
                                </td>
                                <td>
                                    <span>06 Sep 2021</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Kenneth Charles</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                        <p class="mb-0 ms-2">Elijah James</p>	
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <div class="tbl-progress-box">
                                        <div class="progress">
                                            <div class="progress-bar bg-success" style="width:40%; height:5px; border-radius:4px;" role="progressbar"></div>
                                        </div>
                                        <span class="text-success">40%</span>
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <div class="avatar-list avatar-list-stacked">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <span class="badge badge-success light border-0">Completed</span>
                                </td>
                                <td>
                                    <span>06 Sep 2021</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Steven Joseph</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                        <p class="mb-0 ms-2">Lucas</p>	
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <div class="tbl-progress-box">
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" style="width:33%; height:5px; border-radius:4px;" role="progressbar"></div>
                                        </div>
                                        <span class="text-primary">33%</span>
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <div class="avatar-list avatar-list-stacked">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                        <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-md rounded-circle" alt="">
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <span class="badge badge-primary light border-0">Inprogress</span>
                                </td>
                                <td>
                                    <span>06 Sep 2021</span>
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
            <div class="card-body p-0">
                <div class="table-responsive active-projects">
                    <div class="tbl-caption">
                        <h4 class="heading mb-0">Revenue History</h4>
                    </div>
                    <table id="empoloyees-tbl3" class="table">
                        <thead>
                            <tr>
                                <th>Marketplaces</th>
                                <th>Date</th>
                                <th>Payouts</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Marketing Revenue</td>
                                <td>Jan 12, 2023</td>
                                <td>$5659.68</td>
                                <td><span class="badge badge-success border-0">Completed</span></td>
                                <td class="edit-action">
                                    <div class="icon-box icon-box-xs bg-primary me-1">
                                        <i class="fa-solid fa-pencil text-white"></i>
                                    </div>
                                    <div class="icon-box icon-box-xs bg-danger  ms-1">
                                        <i class="fa-solid fa-trash text-white"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Edward Market</td>
                                <td>Feb 14, 2022</td>
                                <td>$3586.68</td>
                                <td><span class="badge badge-danger border-0">Pending</span></td>
                                <td class="edit-action">
                                    <div class="icon-box icon-box-xs bg-primary me-1">
                                        <i class="fa-solid fa-pencil text-white"></i>
                                    </div>
                                    <div class="icon-box icon-box-xs bg-danger  ms-1">
                                        <i class="fa-solid fa-trash text-white"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>David Market</td>
                                <td>Mar 16, 2022</td>
                                <td>$4528.68</td>
                                <td><span class="badge badge-info border-0">Completed</span></td>
                                <td class="edit-action">
                                    <div class="icon-box icon-box-xs bg-primary me-1">
                                        <i class="fa-solid fa-pencil text-white"></i>
                                    </div>
                                    <div class="icon-box icon-box-xs bg-danger  ms-1">
                                        <i class="fa-solid fa-trash text-white"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Brian Market</td>
                                <td>April 18, 2022</td>
                                <td>$4528.68</td>
                                <td><span class="badge badge-info border-0">Completed</span></td>
                                <td class="edit-action">
                                    <div class="icon-box icon-box-xs bg-primary me-1">
                                        <i class="fa-solid fa-pencil text-white"></i>
                                    </div>
                                    <div class="icon-box icon-box-xs bg-danger  ms-1">
                                        <i class="fa-solid fa-trash text-white"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Edward  Market</td>
                                <td>May 25, 2022</td>
                                <td>$2128.68</td>
                                <td><span class="badge badge-primary border-0">Inprogress</span></td>
                                <td class="edit-action">
                                    <div class="icon-box icon-box-xs bg-primary me-1">
                                        <i class="fa-solid fa-pencil text-white"></i>
                                    </div>
                                    <div class="icon-box icon-box-xs bg-danger  ms-1">
                                        <i class="fa-solid fa-trash text-white"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Donald Revenue</td>
                                <td>June 30, 2022</td>
                                <td>$1269.53</td>
                                <td><span class="badge badge-primary border-0">Inprogress</span></td>
                                <td class="edit-action">
                                    <div class="icon-box icon-box-xs bg-primary me-1">
                                        <i class="fa-solid fa-pencil text-white"></i>
                                    </div>
                                    <div class="icon-box icon-box-xs bg-danger  ms-1">
                                        <i class="fa-solid fa-trash text-white"></i>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
        
    
    </div>
</div>
@endsection