@extends('layouts/master')

@section('title', 'CRM')

@section('vendor-style')
    
	<link href="{{ asset('assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
@endsection

@section('vendor-script')
    <!-- Required vendors -->
     
	<script src="{{ asset('assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/apexchart/apexchart.js') }}"></script>
    <script src="{{ asset('assets/vendor/peity/jquery.peity.min.js') }}"></script>
	 
	<script src="{{ asset('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/datatables/js/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/datatables/js/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/datatables/js/jszip.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugins-init/datatables.init.js') }}"></script>
@endsection

@section('page-script')
	<script src="{{ asset('assets/js/dashboard/crm.js') }}"></script>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-4 col-xxl-3 col-sm-6">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="c-con">
                    <h4 class="heading mb-0">Congratulations <strong>Hanu!!</strong><img src="{{ asset('assets/images/crm/party-popper.png') }}" alt=""></h4>
                    <span>Best seller of the week</span>
                </div>
                <div class="c-con-3d">
                    <div class="c-con-prise">
                        <h3 class="mb-0 text-primary">$43.9k</h4>
                        <span class="d-block mb-2">98% of target 🧡 </span>
                        <a href="javascript:void(0)" class="btn btn-primary btn-sm">View Sale</a>
                    </div>
                    <img src="{{ asset('assets/images/crm/Object.png') }}" alt="">
                </div>	
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-xxl-3 col-sm-6">
        <div class="card crm-cart bg-secondary border-0">
            <div class="card-header border-0 pb-0">
                <span class="text-white fs-16">+38%<i class="fa-solid fa-chevron-up ms-1"></i></span>
                <div class="icon-box bg-white">
                    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.4642 13.7074C11.4759 12.1252 10.8504 10.8738 9.60279 9.99009C8.6392 9.30968 7.46984 8.95476 6.33882 8.6137C3.98274 7.89943 3.29927 7.52321 3.29927 6.3965C3.29927 5.14147 4.93028 4.69493 6.32655 4.69493C7.34341 4.69493 8.51331 5.01109 9.23985 5.47964L10.6802 3.24887C9.73069 2.6333 8.43112 2.21342 7.14783 2.0831V0H4.49076V2.22918C2.12884 2.74876 0.640949 4.29246 0.640949 6.3965C0.640949 7.87005 1.25327 9.03865 2.45745 9.86289C3.37331 10.4921 4.49028 10.83 5.56927 11.1572C7.88027 11.8557 8.81873 12.2813 8.80805 13.691L8.80799 13.7014C8.80799 14.8845 7.24005 15.3051 5.89676 15.3051C4.62786 15.3051 3.248 14.749 2.46582 13.9222L0.535522 15.7481C1.52607 16.7957 2.96523 17.5364 4.4907 17.8267V20.0001H7.14783V17.8735C9.7724 17.4978 11.4616 15.9177 11.4642 13.7074Z" fill="var(--primary)"></path>
                    </svg>
                </div>
            </div>
            <div class="card-body">
                <div class="crm-cart-data">
                    <p>252$</p>
                    <span class="d-block mb-3 text-black">Total Sales</span>
                    <span class="badge bg-white text-black border-0">Last 4 Month</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-xxl-3 col-sm-4">
        <div class="card crm-cart bg-primary border-0">
            <div class="card-header border-0 pb-0">
                <span class="text-white fs-16">+34%<i class="fa-solid fa-chevron-up ms-1"></i></span>
                <div class="icon-box bg-white">
                    <svg id="_x31__px" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="m17.5 13c-3.584 0-6.5-2.916-6.5-6.5s2.916-6.5 6.5-6.5 6.5 2.916 6.5 6.5-2.916 6.5-6.5 6.5zm0-12c-3.033 0-5.5 2.467-5.5 5.5s2.467 5.5 5.5 5.5 5.5-2.467 5.5-5.5-2.467-5.5-5.5-5.5z"/><path d="m17.5 10c-.276 0-.5-.224-.5-.5v-6c0-.276.224-.5.5-.5s.5.224.5.5v6c0 .276-.224.5-.5.5z"/><path d="m20.5 7h-6c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h6c.276 0 .5.224.5.5s-.224.5-.5.5z"/><path d="m19.5 17h-13c-.238 0-.443-.168-.49-.402l-2-10c-.03-.147.009-.299.103-.415.095-.116.237-.183.387-.183h4c.276 0 .5.224.5.5s-.224.5-.5.5h-3.39l1.8 9h12.18l.277-1.385c.054-.271.317-.448.588-.392.271.054.446.317.392.588l-.357 1.787c-.047.234-.252.402-.49.402z"/><path d="m6.5 17c-.233 0-.442-.164-.49-.402l-2.479-12.394c-.14-.699-.759-1.206-1.471-1.206h-.001l-1.559.002c-.276 0-.5-.224-.5-.5s.223-.5.5-.5l1.558-.002h.002c1.188 0 2.219.845 2.452 2.01l2.478 12.394c.054.271-.122.534-.392.588-.033.007-.066.01-.098.01z"/><path d="m21.5 19h-17c-.827 0-1.5-.673-1.5-1.5s.673-1.5 1.5-1.5h2c.276 0 .5.224.5.5s-.224.5-.5.5h-2c-.276 0-.5.224-.5.5s.224.5.5.5h17c.276 0 .5.224.5.5s-.224.5-.5.5z"/><path d="m8 24c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2zm0-3c-.551 0-1 .449-1 1s.449 1 1 1 1-.449 1-1-.449-1-1-1z"/><path d="m17 24c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2zm0-3c-.551 0-1 .449-1 1s.449 1 1 1 1-.449 1-1-.449-1-1-1z"/></svg>
                </div>
            </div>
            <div class="card-body">
                <div class="crm-cart-data">
                    <p class="text-white">256k</p>
                    <span class="d-block mb-3 text-white">Total Orders</span>
                    <span class="badge bg-white text-black border-0">Last 6 Month</span>
                </div>
            </div>
        </div>
    
    </div>		
    <div class="col-xl-2 col-xxl-3 col-sm-4 clm-chart">
        <div class="card crm-cart">
            <div class="card-header border-0 pb-0">
                <div>
                    <h4 class="mb-0">$5,655<small class="text-danger ms-2">-33%</small></h4>
                    <span class="d-block">Total Profit</span>
                </div>	
            </div>
            <div class="card-body custome-tooltip">
                <div id="columnChart"></div>
            </div>
        </div>
    </div>	
    <div class="col-xl-2 col-xxl-3 col-sm-4">
        <div class="card crm-cart">
            <div class="card-header border-0 pb-0">
                <div>
                    <h4 class="mb-0">$5,586<small class="text-success ms-2">+59%</small></h4>
                    <span class="d-block">Total Growth</span>
                </div>	
            </div>
            <div class="card-body d-flex justify-content-center pt-2">
                <div id="AllProject" class="ms-0"></div>
            </div>
        </div>
    </div>	
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header border-0">
                <h4 class="heading mb-0">Organic Traffic</h4>
            </div>
            <div class="card-body pt-0 custome-tooltip">
                <div class="d-flex justify-content-center">
                    <div id="Traffic"></div>
                </div>
                <ul class="lang-chart">
                    <li><i class="fa-sharp fa-regular fa-circle-dot"></i>Html</li>
                    <li><i class="fa-sharp fa-regular fa-circle-dot"></i>Css</li>
                    <li><i class="fa-sharp fa-regular fa-circle-dot"></i>scss</li>
                    <li><i class="fa-sharp fa-regular fa-circle-dot"></i>c++</li>
                    <li><i class="fa-sharp fa-regular fa-circle-dot"></i>JavaScript</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xl-8">
        <div class="card overflow-hidden">
            <div class="card-header border-0">
                <div>
                    <h4 class="heading mb-0">Project Timeline</h4>
                    <span>Total 582 Projects Completed</span>
                </div>	
            </div>
            <div class="card-body py-0 pe-0 ">
                <div class="row">
                    <div class="col-xl-9 col-xxl-8 col-md-8">
                        <div id="ProjectChart"></div>
                    </div>
                    <div class="col-xl-3 col-xxl-4 col-md-4 c-line">
                        <div class="crm-p-list">
                            <div>
                                <h4 class="heading mb-0">Project List</h4>
                                <span>4 Running Project</span>
                            </div>
                        </div>	
                        <div class="dz-scroll project-scroll">
                            <div class="p-list"> 
                                <div class="icon-box bg-primary-light">
                                    <i class="fa-brands fa-uikit text-primary"></i>
                                </div>
                                <div class="ms-2">
                                    <h6 class="mb-0">UI Kit Design</h6>
                                    <span>Task 100/200</span>
                                </div>
                            </div>
                            <div class="p-list"> 
                                <div class="icon-box bg-secondary-light">
                                    <i class="fa-sharp fa-solid fa-star text-secondary"></i>
                                </div>
                                <div class="ms-2">
                                    <h6 class="mb-0">CRM Dashboard</h6>
                                    <span>Task 90/100</span>
                                </div>
                            </div>
                            <div class="p-list"> 
                                <div class="icon-box bg-success-light">
                                    <i class="fas fa-asterisk text-success"></i>
                                </div>
                                <div class="ms-2">
                                    <h6 class="mb-0">Website Designing</h6>
                                    <span>Task 80/160</span>
                                </div>
                            </div>
                            <div class="p-list"> 
                                <div class="icon-box bg-info-light">
                                    <?xml version="1.0"?>
                                        <svg xmlns="http://www.w3.org/2000/svg" id="&#x421;&#x43B;&#x43E;&#x439;_1" data-name="&#x421;&#x43B;&#x43E;&#x439; 1" viewBox="0 0 128 128" width="20" height="20"><path d="M112.15,21.88a2,2,0,0,0-.45-.49,63.88,63.88,0,0,0-95.43,0,2,2,0,0,0-.43.47l0,.05a64,64,0,1,0,96.37,0Zm-2,80.41a71.55,71.55,0,0,0-14.38-6.39A101.55,101.55,0,0,0,100.64,66h23.31A59.71,59.71,0,0,1,110.15,102.3ZM4.05,66H27.36a101.55,101.55,0,0,0,4.87,29.91,71.55,71.55,0,0,0-14.38,6.39A59.71,59.71,0,0,1,4.05,66ZM18,25.55A71.76,71.76,0,0,0,32.3,31.89,101.43,101.43,0,0,0,27.36,62H4.05A59.71,59.71,0,0,1,18,25.55ZM66,36.64A105.35,105.35,0,0,0,92,33a99,99,0,0,1,4.68,29H66Zm0-4V4.12C76.14,5.25,85,14.91,90.6,29.23A101.46,101.46,0,0,1,66,32.64Zm-4,0a101.45,101.45,0,0,1-24.6-3.41C43,14.91,51.86,5.25,62,4.12Zm0,4V62H31.36A99,99,0,0,1,36,33,105.36,105.36,0,0,0,62,36.64ZM31.36,66H62V91.14a105.32,105.32,0,0,0-26,3.66A99.16,99.16,0,0,1,31.36,66ZM62,95.14v28.74C51.82,122.74,42.88,113,37.32,98.57A101.41,101.41,0,0,1,62,95.14Zm4,0a101.42,101.42,0,0,1,24.68,3.43C85.12,113,76.18,122.74,66,123.88Zm0-4V66H96.64A99.16,99.16,0,0,1,92,94.79,105.32,105.32,0,0,0,66,91.14ZM100.64,62A101.43,101.43,0,0,0,95.7,31.89,71.76,71.76,0,0,0,110,25.55,59.71,59.71,0,0,1,123.95,62Zm6.65-39.48a68.71,68.71,0,0,1-12.94,5.6C90.66,18.64,85.54,11,79.54,6.05A60,60,0,0,1,107.29,22.52ZM48.46,6.05c-6,4.92-11.11,12.58-14.8,22.07a68.71,68.71,0,0,1-12.94-5.6A60,60,0,0,1,48.46,6.05ZM20.57,105.34a68.45,68.45,0,0,1,13-5.66c3.7,9.58,8.84,17.32,14.88,22.27A60,60,0,0,1,20.57,105.34Zm59,16.61c6-5,11.18-12.69,14.88-22.27a68.46,68.46,0,0,1,13,5.66A60,60,0,0,1,79.54,121.95Z" fill="#58bad7"/>
                                    </svg>

                                </div>
                                <div class="ms-2">
                                    <h6 class="mb-0">Software Dovelopment</h6>
                                    <span>Task 80/160</span>
                                </div>
                            </div>
                            <div class="p-list"> 
                                <div class="icon-box bg-primary-light">
                                    <i class="fa-brands fa-uikit text-primary"></i>
                                </div>
                                <div class="ms-2">
                                    <h6 class="mb-0">UI Kit Design</h6>
                                    <span>Task 100/200</span>
                                </div>
                            </div>
                            <div class="p-list"> 
                                <div class="icon-box bg-secondary-light">
                                    <i class="fa-sharp fa-solid fa-star text-secondary"></i>
                                </div>
                                <div class="ms-2">
                                    <h6 class="mb-0">CRM Dashboard</h6>
                                    <span>Task 90/100</span>
                                </div>
                            </div>
                            <div class="p-list"> 
                                <div class="icon-box bg-success-light">
                                    <i class="fas fa-asterisk text-success"></i>
                                </div>
                                <div class="ms-2">
                                    <h6 class="mb-0">Website Designing</h6>
                                    <span>Task 80/160</span>
                                </div>
                            </div>
                            <div class="p-list"> 
                                <div class="icon-box bg-info-light">
                                    <xml version="1.0"?>
                                        <svg xmlns="http://www.w3.org/2000/svg" id="&#x4211;&#x43B;&#x43E;&#x439;_1" data-name="&#x421;&#x43B;&#x43E;&#x439; 1" viewBox="0 0 128 128" width="20" height="20"><path d="M112.15,21.88a2,2,0,0,0-.45-.49,63.88,63.88,0,0,0-95.43,0,2,2,0,0,0-.43.47l0,.05a64,64,0,1,0,96.37,0Zm-2,80.41a71.55,71.55,0,0,0-14.38-6.39A101.55,101.55,0,0,0,100.64,66h23.31A59.71,59.71,0,0,1,110.15,102.3ZM4.05,66H27.36a101.55,101.55,0,0,0,4.87,29.91,71.55,71.55,0,0,0-14.38,6.39A59.71,59.71,0,0,1,4.05,66ZM18,25.55A71.76,71.76,0,0,0,32.3,31.89,101.43,101.43,0,0,0,27.36,62H4.05A59.71,59.71,0,0,1,18,25.55ZM66,36.64A105.35,105.35,0,0,0,92,33a99,99,0,0,1,4.68,29H66Zm0-4V4.12C76.14,5.25,85,14.91,90.6,29.23A101.46,101.46,0,0,1,66,32.64Zm-4,0a101.45,101.45,0,0,1-24.6-3.41C43,14.91,51.86,5.25,62,4.12Zm0,4V62H31.36A99,99,0,0,1,36,33,105.36,105.36,0,0,0,62,36.64ZM31.36,66H62V91.14a105.32,105.32,0,0,0-26,3.66A99.16,99.16,0,0,1,31.36,66ZM62,95.14v28.74C51.82,122.74,42.88,113,37.32,98.57A101.41,101.41,0,0,1,62,95.14Zm4,0a101.42,101.42,0,0,1,24.68,3.43C85.12,113,76.18,122.74,66,123.88Zm0-4V66H96.64A99.16,99.16,0,0,1,92,94.79,105.32,105.32,0,0,0,66,91.14ZM100.64,62A101.43,101.43,0,0,0,95.7,31.89,71.76,71.76,0,0,0,110,25.55,59.71,59.71,0,0,1,123.95,62Zm6.65-39.48a68.71,68.71,0,0,1-12.94,5.6C90.66,18.64,85.54,11,79.54,6.05A60,60,0,0,1,107.29,22.52ZM48.46,6.05c-6,4.92-11.11,12.58-14.8,22.07a68.71,68.71,0,0,1-12.94-5.6A60,60,0,0,1,48.46,6.05ZM20.57,105.34a68.45,68.45,0,0,1,13-5.66c3.7,9.58,8.84,17.32,14.88,22.27A60,60,0,0,1,20.57,105.34Zm59,16.61c6-5,11.18-12.69,14.88-22.27a68.46,68.46,0,0,1,13,5.66A60,60,0,0,1,79.54,121.95Z" fill="#58bad7"/>
                                    </svg>

                                </div>
                                <div class="ms-2">
                                    <h6 class="mb-0">Software Dovelopment</h6>
                                    <span>Task 80/160</span>
                                </div>
                            </div>
                            <div class="p-list"> 
                                <div class="icon-box bg-danger-light">
                                    <i class="fas fa-mobile-alt text-danger"></i>
                                </div>
                                <div class="ms-2">
                                    <h6 class="mb-0">App Dovelopment</h6>
                                    <span>Task 80/160</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6">
        <div class="card">
            <div class="card-header border-0">
                <h4 class="heading mb-0">Monthly Overview</h4>
            </div>
            <div class="card-body py-0 custome-tooltip">
                <div id="activity1"></div>
                <div>
                    <h4 class="mb-0">80%</h4>
                    <p>Your sales performance is 49% 😀 better compared to last week</p>
                </div>
            </div>
            <div class="card-footer border-0 pt-0">
                <a href="javascript:void(0)" class="btn btn-primary btn-block">View Details</a>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6">
        <div class="card">
            <div class="card-header border-0">
                <h4 class="heading mb-0">Social Networking</h4>
            </div>
            <div class="card-body py-0 pb-3">
                <div class="mb-3">
                  <div class="d-flex align-items-center">
                    <h4 class="mb-0">26,368</h4>
                    <span class="text-success font-w600 ms-2">
                      <i class="mdi mdi-menu-up"></i>
                      <small>62%</small>
                    </span>
                  </div>
                  <small>Last 2 Year Visits</small>
                </div>
                <ul class="sociallinks">
                    <li class="d-flex">
                        <div class="icon">
                          <img src="{{ asset('assets/images/crm/dribble.png') }}" class="icon-box" alt="">
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                          <div class="ms-2">
                            <h6 class="mb-0">Dribble</h6>
                            <small>Social Media</small>
                          </div>
                          <div class="d-flex align-items-center">
                            <span class="font-w500 text-primary">12,348</span>
                            <span class="badge badge-primary  border-0 ms-2">+36%</span>
                          </div>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="icon">
                          <img src="{{ asset('assets/images/crm/facebook.png') }}" class="icon-box" alt="">
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                          <div class="ms-2">
                            <h6 class="mb-0">Facebook</h6>
                            <small>Social Media</small>
                          </div>
                          <div class="d-flex align-items-center">
                            <span class="font-w500 text-primary">10,048</span>
                            <span class="badge badge-danger border-0 ms-2">-33%</span>
                          </div>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="icon">
                          <img src="{{ asset('assets/images/crm/instagram.png') }}" class="icon-box" alt="">
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                          <div class="ms-2">
                            <h6 class="mb-0">Instagram</h6>
                            <small>Social Media</small>
                          </div>
                          <div class="d-flex align-items-center">
                            <span class="font-w500 text-primary">09,059</span>
                            <span class="badge badge-info border-0 ms-2">-32%</span>
                          </div>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="icon">
                          <img src="{{ asset('assets/images/crm/linkedin.png') }}" class="icon-box" alt="">
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                          <div class="ms-2">
                            <h6 class="mb-0">Linkedin</h6>
                            <small>Social Media</small>
                          </div>
                          <div class="d-flex align-items-center">
                            <span class="font-w500 text-primary">11,159</span>
                            <span class="badge badge-success border-0 ms-2">-32%</span>
                          </div>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="icon">
                          <img src="{{ asset('assets/images/crm/pinterest.png') }}" class="icon-box" alt="">
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                          <div class="ms-2">
                            <h6 class="mb-0">Pinterest</h6>
                            <small>Social Media</small>
                          </div>
                          <div class="d-flex align-items-center">
                            <span class="font-w500 text-primary">15,586</span>
                            <span class="badge badge-primary border-0 ms-2">-32%</span>
                          </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6">
        <div class="card">
            <div class="card-header border-0">
                <h4 class="heading mb-0">Yearly Income</h4>
            </div>
            <div class="card-body custome-tooltip">
                <div id="NewCustomers"></div>
                <p class="mt-4 mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the </p>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6">
        <div class="card">
            <div class="card-header border-0">
                <h4 class="heading mb-0">Meeting Plane</h4>
            </div>
            <div class="card-body">
                <ul class="sociallinks">
                    <li class="d-flex">
                        <div class="icon">
                          <img src="{{ asset('assets/images/contacts/pic1.jpg') }}" class="avatar avatar-xl" alt="">
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                          <div class="ms-2">
                            <h6 class="mb-0">Liam Risher</h6>
                            <small><i class="fa-solid fa-calendar-days me-2"></i><span>21 Jul | 08:20-10:30</span></small>
                          </div>
                            <span class="badge badge-primary  border-0 ms-2">Business</span>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="icon">
                          <img src="{{ asset('assets/images/contacts/pic2.jpg') }}" class="avatar avatar-xl" alt="">
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                          <div class="ms-2">
                            <h6 class="mb-0">Oliver Noah</h6>
                            <small><i class="fa-solid fa-calendar-days me-2"></i><span>21 Jul | 08:20-10:30</span></small>
                          </div>
                            <span class="badge badge-primary  border-0 ms-2">Business</span>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="icon">
                          <img src="{{ asset('assets/images/contacts/pic2.jpg') }}" class="avatar avatar-xl" alt="">
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                          <div class="ms-2">
                            <h6 class="mb-0">Donald Benjamin</h6>
                            <small><i class="fa-solid fa-calendar-days me-2"></i><span>23 May | 07:08-09:30</span></small>
                          </div>
                            <span class="badge badge-success  border-0 ms-2">Accountant</span>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="icon">
                          <img src="{{ asset('assets/images/contacts/pic777.jpg') }}" class="avatar avatar-xl" alt="">
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                          <div class="ms-2">
                            <h6 class="mb-0">Elijah James</h6>
                            <small><i class="fa-solid fa-calendar-days me-2"></i><span>23 May | 07:08-09:30</span></small>
                          </div>
                            <span class="badge badge-info  border-0 ms-2">Manager</span>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="icon">
                          <img src="{{ asset('assets/images/contacts/pic666.jpg') }}" class="avatar avatar-xl" alt="">
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                          <div class="ms-2">
                            <h6 class="mb-0">William Risher</h6>
                            <small><i class="fa-solid fa-calendar-days me-2"></i><span>10 April | 08:08-09:30</span></small>
                          </div>
                            <span class="badge badge-info  border-0 ms-2">Manager</span>
                        </div>
                    </li>
                </ul>
                
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6">
        <div class="card">
            <div class="card-header border-0">
                <h4 class="heading mb-0">External Data</h4>
            </div>
            <div class="card-body custome-tooltip pb-0">
                <ul class="crm-ads-list">
                    <li>
                        <div class="dots-crm">
                            <span class="dots bg-primary"></span>
                            <h6>Google Ads</h6>
                        </div>	
                        <span>$512k</span>
                        <h6>83%<i class="fa-solid fa-chevron-up ms-2 text-primary"></i></h6>
                    </li>
                    <li>
                        <div class="dots-crm">
                            <span class="dots bg-secondary"></span>
                            <h6>Fb Analytics</h6>
                        </div>
                        <span>$86.2k</span>
                        <h6>58%<i class="fa-solid fa-chevron-down ms-2 text-secondary"></i></h6>
                    </li>
                    <li>
                        <div class="dots-crm">
                            <span class="dots bg-info"></span>
                            <h6>Dribble User</h6>
                        </div>	
                        <span>$45.2k</span>
                        <h6>58%<i class="fa-solid fa-chevron-down ms-2 text-info"></i></h6>
                    </li>
                </ul>
                <div id="ExtraData"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6">
        <div class="card">
            <div class="card-header border-0">
                <h4 class="heading mb-0">Payment History</h4>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive payment-tbl">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Card</th>
                                <th class="text-center">Amount</th>
                                <th class="text-center">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h6>American Express</h6>
                                </td>
                                <td>
                                    <span>$522</span>
                                </td>
                                <td>
                                    <span>$4,5226</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>Master Card</h6>
                                </td>
                                <td>
                                    <span>$522</span>
                                </td>
                                <td>
                                    <span>$4,5526</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>Visa Card</h6>
                                </td>
                                <td>
                                    <span>$4,258</span>
                                </td>
                                <td>
                                    <span>$5,5726</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>American Express</h6>
                                </td>
                                <td>
                                    <span>$522</span>
                                </td>
                                <td>
                                    <span>$4,5226</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>Master Card</h6>
                                </td>
                                <td>
                                    <span>$522</span>
                                </td>
                                <td>
                                    <span>$4,5526</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>Visa Card</h6>
                                </td>
                                <td>
                                    <span>$4,258</span>
                                </td>
                                <td>
                                    <span>$5,5726</span>
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