@extends('layouts/master')

@section('title', 'Dashboard Analytics')

@section('vendor-style')
	<link href="{{ asset('assets/vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css" rel="stylesheet">
	<link href="{{ asset('assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
@endsection

@section('vendor-script')
    <!-- Required vendors -->
     
	<script src="{{ asset('assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/apexchart/apexchart.js') }}"></script>
   
	<!-- Apex Chart -->
	
	<script src="{{ asset('assets/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
@endsection

@section('page-script')
	<script src="{{ asset('assets/js/dashboard/analytics.js') }}"></script>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-6">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="any-card">
                    <div class="c-con">
                        <h4 class="heading mb-0">Congratulations <strong>Hanu!!</strong><img src="{{ asset('assets/images/crm/party-popper.png') }}" alt=""></h4>
                        <span>Best seller of the week</span>
                        <p class="mt-3">Lorem Ipsum is simply dummy 😎 text of the printing and typesetting industry.</p>
                         
                        <a href="#" class="btn btn-primary btn-sm">View Profile</a>
                    </div>
                    <img src="{{ asset('assets/images/analytics/developer_male.png') }}" class="harry-img" alt="">
                    
                </div>	
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary">
            <div class="card-header border-0">
                <h4 class="heading mb-0 text-white">Overview Of Sales 😎</h4>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="sales-bx">
                        <img src="{{ asset('assets/images/analytics/sales.png') }}" alt="">
                        <h4>$3,651</h4>
                        <span>Total Sales</span>
                    </div>
                    <div class="sales-bx">
                        <img src="{{ asset('assets/images/analytics/shopping.png') }}" alt="">
                        <h4>5831</h4>
                        <span>Total Sales</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-header border-0">
                <div class="d-flex align-items-center">
                    <div class="icon-box bg-primary-light">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.3787 1.875H15.625V1.25C15.625 1.08424 15.5592 0.925268 15.4419 0.808058C15.3247 0.690848 15.1658 0.625 15 0.625C14.8342 0.625 14.6753 0.690848 14.5581 0.808058C14.4408 0.925268 14.375 1.08424 14.375 1.25V1.875H10.625V1.25C10.625 1.08424 10.5592 0.925268 10.4419 0.808058C10.3247 0.690848 10.1658 0.625 10 0.625C9.83424 0.625 9.67527 0.690848 9.55806 0.808058C9.44085 0.925268 9.375 1.08424 9.375 1.25V1.875H5.625V1.25C5.625 1.08424 5.55915 0.925268 5.44194 0.808058C5.32473 0.690848 5.16576 0.625 5 0.625C4.83424 0.625 4.67527 0.690848 4.55806 0.808058C4.44085 0.925268 4.375 1.08424 4.375 1.25V1.875H3.62125C2.99266 1.87599 2.3901 2.12614 1.94562 2.57062C1.50114 3.0151 1.25099 3.61766 1.25 4.24625V17.0037C1.25099 17.6323 1.50114 18.2349 1.94562 18.6794C2.3901 19.1239 2.99266 19.374 3.62125 19.375H16.3787C17.0073 19.374 17.6099 19.1239 18.0544 18.6794C18.4989 18.2349 18.749 17.6323 18.75 17.0037V4.24625C18.749 3.61766 18.4989 3.0151 18.0544 2.57062C17.6099 2.12614 17.0073 1.87599 16.3787 1.875ZM17.5 17.0037C17.499 17.3008 17.3806 17.5854 17.1705 17.7955C16.9604 18.0056 16.6758 18.124 16.3787 18.125H3.62125C3.32418 18.124 3.03956 18.0056 2.8295 17.7955C2.61944 17.5854 2.50099 17.3008 2.5 17.0037V4.24625C2.50099 3.94918 2.61944 3.66456 2.8295 3.4545C3.03956 3.24444 3.32418 3.12599 3.62125 3.125H4.375V3.75C4.375 3.91576 4.44085 4.07473 4.55806 4.19194C4.67527 4.30915 4.83424 4.375 5 4.375C5.16576 4.375 5.32473 4.30915 5.44194 4.19194C5.55915 4.07473 5.625 3.91576 5.625 3.75V3.125H9.375V3.75C9.375 3.91576 9.44085 4.07473 9.55806 4.19194C9.67527 4.30915 9.83424 4.375 10 4.375C10.1658 4.375 10.3247 4.30915 10.4419 4.19194C10.5592 4.07473 10.625 3.91576 10.625 3.75V3.125H14.375V3.75C14.375 3.91576 14.4408 4.07473 14.5581 4.19194C14.6753 4.30915 14.8342 4.375 15 4.375C15.1658 4.375 15.3247 4.30915 15.4419 4.19194C15.5592 4.07473 15.625 3.91576 15.625 3.75V3.125H16.3787C16.6758 3.12599 16.9604 3.24444 17.1705 3.4545C17.3806 3.66456 17.499 3.94918 17.5 4.24625V17.0037Z" fill="var(--primary)"></path>
                            <path d="M7.68311 7.05812L6.24999 8.49125L5.44186 7.68312C5.38421 7.62343 5.31524 7.57581 5.23899 7.54306C5.16274 7.5103 5.08073 7.49306 4.99774 7.49234C4.91475 7.49162 4.83245 7.50743 4.75564 7.53886C4.67883 7.57028 4.60905 7.61669 4.55037 7.67537C4.49168 7.73406 4.44528 7.80384 4.41385 7.88065C4.38243 7.95746 4.36661 8.03976 4.36733 8.12275C4.36805 8.20573 4.3853 8.28775 4.41805 8.364C4.45081 8.44025 4.49842 8.50922 4.55811 8.56687L5.80811 9.81687C5.92532 9.93404 6.08426 9.99986 6.24999 9.99986C6.41572 9.99986 6.57466 9.93404 6.69186 9.81687L8.56686 7.94187C8.68071 7.82399 8.74371 7.66612 8.74229 7.50224C8.74086 7.33837 8.67513 7.18161 8.55925 7.06573C8.44337 6.94985 8.28661 6.88412 8.12274 6.8827C7.95887 6.88127 7.80099 6.94427 7.68311 7.05812Z" fill="var(--primary)"></path>
                            <path d="M15 8.125H10.625C10.4592 8.125 10.3003 8.19085 10.1831 8.30806C10.0658 8.42527 10 8.58424 10 8.75C10 8.91576 10.0658 9.07473 10.1831 9.19194C10.3003 9.30915 10.4592 9.375 10.625 9.375H15C15.1658 9.375 15.3247 9.30915 15.4419 9.19194C15.5592 9.07473 15.625 8.91576 15.625 8.75C15.625 8.58424 15.5592 8.42527 15.4419 8.30806C15.3247 8.19085 15.1658 8.125 15 8.125Z" fill="var(--primary)"></path>
                            <path d="M7.68311 12.6831L6.24999 14.1162L5.44186 13.3081C5.38421 13.2484 5.31524 13.2008 5.23899 13.1681C5.16274 13.1353 5.08073 13.1181 4.99774 13.1173C4.91475 13.1166 4.83245 13.1324 4.75564 13.1639C4.67883 13.1953 4.60905 13.2417 4.55037 13.3004C4.49168 13.3591 4.44528 13.4288 4.41385 13.5056C4.38243 13.5825 4.36661 13.6648 4.36733 13.7477C4.36805 13.8307 4.3853 13.9127 4.41805 13.989C4.45081 14.0653 4.49842 14.1342 4.55811 14.1919L5.80811 15.4419C5.92532 15.559 6.08426 15.6249 6.24999 15.6249C6.41572 15.6249 6.57466 15.559 6.69186 15.4419L8.56686 13.5669C8.68071 13.449 8.74371 13.2911 8.74229 13.1272C8.74086 12.9634 8.67513 12.8066 8.55925 12.6907C8.44337 12.5749 8.28661 12.5091 8.12274 12.5077C7.95887 12.5063 7.80099 12.5693 7.68311 12.6831Z" fill="var(--primary)"></path>
                            <path d="M15 13.75H10.625C10.4592 13.75 10.3003 13.8158 10.1831 13.9331C10.0658 14.0503 10 14.2092 10 14.375C10 14.5408 10.0658 14.6997 10.1831 14.8169C10.3003 14.9342 10.4592 15 10.625 15H15C15.1658 15 15.3247 14.9342 15.4419 14.8169C15.5592 14.6997 15.625 14.5408 15.625 14.375C15.625 14.2092 15.5592 14.0503 15.4419 13.9331C15.3247 13.8158 15.1658 13.75 15 13.75Z" fill="var(--primary)"></path>
                        </svg>
                    </div>
                    <div class="ms-2">
                        <h6 class="mb-0">Total</h6>
                        <span>2520</span>
                    </div>
                </div>	
            </div>
            <div class="card-body p-0 custome-tooltip">
                <div id="SalesChart"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-12">
        <div class="card bg-primary-light analytics-card">
            <div class="card-body mt-4 pb-1">
                <div class="row align-items-center"> 
                    <div class="col-xl-2">
                        <h3 class="mb-3">Analytics</h3>
                        <p class="mb-0 text-primary pb-4">Yout statistics for<br> 1 month period.</p>
                    </div>
                    <div class="col-xl-10">
                        <div class="row">
                            <div class="col-xl-2 col-sm-4 col-6">
                                <div class="card ov-card">
                                    <div class="card-body">
                                        <div class="ana-box">	
                                            <div class="ic-n-bx">
                                                <div class="icon-box bg-primary rounded-circle">
                                                    <i class="fa-solid fa-basketball text-white"></i>
                                                </div>
                                            </div>
                                            <div class="anta-data">
                                                <h5>Dribble</h5>
                                                <span>@statistics</span>
                                                <h3>+23%</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-sm-4 col-6">
                                <div class="card ov-card">
                                    <div class="card-body">
                                        <div class="ana-box">	
                                            <div class="ic-n-bx">
                                                <div class="icon-box bg-primary rounded-circle">
                                                    <i class="fa-brands fa-facebook-f text-white"></i>
                                                </div>
                                            </div>
                                            <div class="anta-data">
                                                <h5>Fb</h5>
                                                <span>@fb</span>
                                                <h3>-33%</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-sm-4 col-6">
                                <div class="card ov-card">
                                    <div class="card-body">
                                        <div class="ana-box">	
                                            <div class="ic-n-bx">
                                                <div class="icon-box bg-primary rounded-circle">
                                                    <i class="fa-brands fa-amazon text-white"></i>
                                                </div>
                                            </div>
                                            <div class="anta-data">
                                                <h5>Anazone</h5>
                                                <span>@hemsr</span>
                                                <h3>-23%</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-sm-4 col-6">
                                <div class="card ov-card">
                                    <div class="card-body">
                                        <div class="ana-box">	
                                            <div class="ic-n-bx">
                                                <div class="icon-box bg-primary rounded-circle">
                                                    <i class="fa-brands fa-behance text-white"></i>
                                                </div>
                                            </div>
                                            <div class="anta-data">
                                                <h5>Behance</h5>
                                                <span>@behan</span>
                                                <h3>+25%</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-sm-4 col-6">
                                <div class="card ov-card">
                                    <div class="card-body">
                                        <div class="ana-box">	
                                            <div class="ic-n-bx">
                                                <div class="icon-box bg-primary rounded-circle">
                                                    <i class="fa-brands fa-aws text-white"></i>
                                                </div>
                                            </div>
                                            <div class="anta-data">
                                                <h5>AWS</h5>
                                                <span>@awes</span>
                                                <h3>+30%</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-sm-4 col-6">
                                <div class="card ov-card">
                                    <div class="card-body">
                                        <div class="ana-box">	
                                            <div class="ic-n-bx">
                                                <div class="icon-box bg-primary rounded-circle">
                                                    <i class="fa-brands fa-instagram text-white"></i>
                                                </div>
                                            </div>
                                            <div class="anta-data">
                                                <h5>Insta</h5>
                                                <span>@abcd</span>
                                                <h3>-32%</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
        </div>
    </div>
    <div class="col-xl-6 col-xxl-12">
        <div class="card">
            <div class="card-header border-0">
                <h4 class="heading mb-0">Reports Of Earning</h4>
            </div>
            <div class="card-body py-0">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-sm-4">	
                        <div class="card">
                            <div class="card-header border-0 p-2">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box bg-secondary-light">
                                        <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4642 13.7074C11.4759 12.1252 10.8504 10.8738 9.60279 9.99009C8.6392 9.30968 7.46984 8.95476 6.33882 8.6137C3.98274 7.89943 3.29927 7.52321 3.29927 6.3965C3.29927 5.14147 4.93028 4.69493 6.32655 4.69493C7.34341 4.69493 8.51331 5.01109 9.23985 5.47964L10.6802 3.24887C9.73069 2.6333 8.43112 2.21342 7.14783 2.0831V0H4.49076V2.22918C2.12884 2.74876 0.640949 4.29246 0.640949 6.3965C0.640949 7.87005 1.25327 9.03865 2.45745 9.86289C3.37331 10.4921 4.49028 10.83 5.56927 11.1572C7.88027 11.8557 8.81873 12.2813 8.80805 13.691L8.80799 13.7014C8.80799 14.8845 7.24005 15.3051 5.89676 15.3051C4.62786 15.3051 3.248 14.749 2.46582 13.9222L0.535522 15.7481C1.52607 16.7957 2.96523 17.5364 4.4907 17.8267V20.0001H7.14783V17.8735C9.7724 17.4978 11.4616 15.9177 11.4642 13.7074Z" fill="var(--secondary)"></path>
                                        </svg>
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-0">Earning</h6>
                                        <span>$2,256</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0 custome-tooltip">
                                <div id="EarningChart"></div>
                            </div>
                        </div>
                    
                    </div>
                    <div class="col-xl-4 col-sm-4">	
                        <div class="card">
                            <div class="card-header border-0 p-2">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box bg-primary-light">
                                        <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4642 13.7074C11.4759 12.1252 10.8504 10.8738 9.60279 9.99009C8.6392 9.30968 7.46984 8.95476 6.33882 8.6137C3.98274 7.89943 3.29927 7.52321 3.29927 6.3965C3.29927 5.14147 4.93028 4.69493 6.32655 4.69493C7.34341 4.69493 8.51331 5.01109 9.23985 5.47964L10.6802 3.24887C9.73069 2.6333 8.43112 2.21342 7.14783 2.0831V0H4.49076V2.22918C2.12884 2.74876 0.640949 4.29246 0.640949 6.3965C0.640949 7.87005 1.25327 9.03865 2.45745 9.86289C3.37331 10.4921 4.49028 10.83 5.56927 11.1572C7.88027 11.8557 8.81873 12.2813 8.80805 13.691L8.80799 13.7014C8.80799 14.8845 7.24005 15.3051 5.89676 15.3051C4.62786 15.3051 3.248 14.749 2.46582 13.9222L0.535522 15.7481C1.52607 16.7957 2.96523 17.5364 4.4907 17.8267V20.0001H7.14783V17.8735C9.7724 17.4978 11.4616 15.9177 11.4642 13.7074Z" fill="var(--primary)"></path>
                                        </svg>
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-0">Profit</h6>
                                        <span>$3,367</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0 custome-tooltip">
                                <div id="ProfitChart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-4">	
                        <div class="card">
                            <div class="card-header border-0 p-2">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box bg-info-light">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.3787 1.875H15.625V1.25C15.625 1.08424 15.5592 0.925268 15.4419 0.808058C15.3247 0.690848 15.1658 0.625 15 0.625C14.8342 0.625 14.6753 0.690848 14.5581 0.808058C14.4408 0.925268 14.375 1.08424 14.375 1.25V1.875H10.625V1.25C10.625 1.08424 10.5592 0.925268 10.4419 0.808058C10.3247 0.690848 10.1658 0.625 10 0.625C9.83424 0.625 9.67527 0.690848 9.55806 0.808058C9.44085 0.925268 9.375 1.08424 9.375 1.25V1.875H5.625V1.25C5.625 1.08424 5.55915 0.925268 5.44194 0.808058C5.32473 0.690848 5.16576 0.625 5 0.625C4.83424 0.625 4.67527 0.690848 4.55806 0.808058C4.44085 0.925268 4.375 1.08424 4.375 1.25V1.875H3.62125C2.99266 1.87599 2.3901 2.12614 1.94562 2.57062C1.50114 3.0151 1.25099 3.61766 1.25 4.24625V17.0037C1.25099 17.6323 1.50114 18.2349 1.94562 18.6794C2.3901 19.1239 2.99266 19.374 3.62125 19.375H16.3787C17.0073 19.374 17.6099 19.1239 18.0544 18.6794C18.4989 18.2349 18.749 17.6323 18.75 17.0037V4.24625C18.749 3.61766 18.4989 3.0151 18.0544 2.57062C17.6099 2.12614 17.0073 1.87599 16.3787 1.875ZM17.5 17.0037C17.499 17.3008 17.3806 17.5854 17.1705 17.7955C16.9604 18.0056 16.6758 18.124 16.3787 18.125H3.62125C3.32418 18.124 3.03956 18.0056 2.8295 17.7955C2.61944 17.5854 2.50099 17.3008 2.5 17.0037V4.24625C2.50099 3.94918 2.61944 3.66456 2.8295 3.4545C3.03956 3.24444 3.32418 3.12599 3.62125 3.125H4.375V3.75C4.375 3.91576 4.44085 4.07473 4.55806 4.19194C4.67527 4.30915 4.83424 4.375 5 4.375C5.16576 4.375 5.32473 4.30915 5.44194 4.19194C5.55915 4.07473 5.625 3.91576 5.625 3.75V3.125H9.375V3.75C9.375 3.91576 9.44085 4.07473 9.55806 4.19194C9.67527 4.30915 9.83424 4.375 10 4.375C10.1658 4.375 10.3247 4.30915 10.4419 4.19194C10.5592 4.07473 10.625 3.91576 10.625 3.75V3.125H14.375V3.75C14.375 3.91576 14.4408 4.07473 14.5581 4.19194C14.6753 4.30915 14.8342 4.375 15 4.375C15.1658 4.375 15.3247 4.30915 15.4419 4.19194C15.5592 4.07473 15.625 3.91576 15.625 3.75V3.125H16.3787C16.6758 3.12599 16.9604 3.24444 17.1705 3.4545C17.3806 3.66456 17.499 3.94918 17.5 4.24625V17.0037Z" fill="#58bad7"></path>
                                            <path d="M7.68311 7.05812L6.24999 8.49125L5.44186 7.68312C5.38421 7.62343 5.31524 7.57581 5.23899 7.54306C5.16274 7.5103 5.08073 7.49306 4.99774 7.49234C4.91475 7.49162 4.83245 7.50743 4.75564 7.53886C4.67883 7.57028 4.60905 7.61669 4.55037 7.67537C4.49168 7.73406 4.44528 7.80384 4.41385 7.88065C4.38243 7.95746 4.36661 8.03976 4.36733 8.12275C4.36805 8.20573 4.3853 8.28775 4.41805 8.364C4.45081 8.44025 4.49842 8.50922 4.55811 8.56687L5.80811 9.81687C5.92532 9.93404 6.08426 9.99986 6.24999 9.99986C6.41572 9.99986 6.57466 9.93404 6.69186 9.81687L8.56686 7.94187C8.68071 7.82399 8.74371 7.66612 8.74229 7.50224C8.74086 7.33837 8.67513 7.18161 8.55925 7.06573C8.44337 6.94985 8.28661 6.88412 8.12274 6.8827C7.95887 6.88127 7.80099 6.94427 7.68311 7.05812Z" fill="#58bad7"></path>
                                            <path d="M15 8.125H10.625C10.4592 8.125 10.3003 8.19085 10.1831 8.30806C10.0658 8.42527 10 8.58424 10 8.75C10 8.91576 10.0658 9.07473 10.1831 9.19194C10.3003 9.30915 10.4592 9.375 10.625 9.375H15C15.1658 9.375 15.3247 9.30915 15.4419 9.19194C15.5592 9.07473 15.625 8.91576 15.625 8.75C15.625 8.58424 15.5592 8.42527 15.4419 8.30806C15.3247 8.19085 15.1658 8.125 15 8.125Z" fill="#58bad7"></path>
                                            <path d="M7.68311 12.6831L6.24999 14.1162L5.44186 13.3081C5.38421 13.2484 5.31524 13.2008 5.23899 13.1681C5.16274 13.1353 5.08073 13.1181 4.99774 13.1173C4.91475 13.1166 4.83245 13.1324 4.75564 13.1639C4.67883 13.1953 4.60905 13.2417 4.55037 13.3004C4.49168 13.3591 4.44528 13.4288 4.41385 13.5056C4.38243 13.5825 4.36661 13.6648 4.36733 13.7477C4.36805 13.8307 4.3853 13.9127 4.41805 13.989C4.45081 14.0653 4.49842 14.1342 4.55811 14.1919L5.80811 15.4419C5.92532 15.559 6.08426 15.6249 6.24999 15.6249C6.41572 15.6249 6.57466 15.559 6.69186 15.4419L8.56686 13.5669C8.68071 13.449 8.74371 13.2911 8.74229 13.1272C8.74086 12.9634 8.67513 12.8066 8.55925 12.6907C8.44337 12.5749 8.28661 12.5091 8.12274 12.5077C7.95887 12.5063 7.80099 12.5693 7.68311 12.6831Z" fill="#58bad7"></path>
                                            <path d="M15 13.75H10.625C10.4592 13.75 10.3003 13.8158 10.1831 13.9331C10.0658 14.0503 10 14.2092 10 14.375C10 14.5408 10.0658 14.6997 10.1831 14.8169C10.3003 14.9342 10.4592 15 10.625 15H15C15.1658 15 15.3247 14.9342 15.4419 14.8169C15.5592 14.6997 15.625 14.5408 15.625 14.375C15.625 14.2092 15.5592 14.0503 15.4419 13.9331C15.3247 13.8158 15.1658 13.75 15 13.75Z" fill="#58bad7"></path>
                                        </svg>

                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-0">Expense</h6>
                                        <span>$3,567</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0 custome-tooltip">
                                <div id="ExpenseChart"></div>
                            </div>
                        </div>
                    
                    </div>
                    <div class="col-xl-3 ">
                        <h3>$5,6641</h3>	
                        <p>Lorem Ipsum is simply dummy text</p>
                    </div>
                    <div class="col-xl-9 custome-tooltip">
                        <div id="chartBar" class="chartBar1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-xxl-6 col-md-6">
        <div class="card">
            <div class="card-header border-0">
                <div>
                    <h4 class="heading mb-0">Country Sale</h4>
                    <span>Weekly Sales</span>
                </div>	
            </div>
            <div class="card-body p-0 pb-3">
                <ul class="country-sale dz-scroll">
                    <li class="d-flex">
                        <div class="country-flag">
                          <img src="{{ asset('assets/images/country/india.png') }}" alt="">
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                          <div class="ms-2">
                            <h6 class="mb-0">$9,525</h6>
                            <small>India</small>
                          </div>
                            <span class="badge badge-primary  border-0 ms-2">25.8%<i class="fa-solid fa-chevron-up ms-2 text-white"></i></span>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="country-flag">
                          <img src="{{ asset('assets/images/country/canada.png') }}" alt="">
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                          <div class="ms-2">
                            <h6 class="mb-0">$5,3665</h6>
                            <small>Canada</small>
                          </div>
                            <span class="badge badge-secondary  border-0 ms-2">18.5%<i class="fa-solid fa-chevron-down ms-2 text-white"></i></span>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="country-flag">
                          <img src="{{ asset('assets/images/country/china.png') }}" alt="">
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                          <div class="ms-2">
                            <h6 class="mb-0">$65</h6>
                            <small>China</small>
                          </div>
                            <span class="badge badge-info  border-0 ms-2">59.5%<i class="fa-solid fa-chevron-up ms-2 text-white"></i></span>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="country-flag">
                          <img src="{{ asset('assets/images/country/united-kingdom.png') }}" alt="">
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                          <div class="ms-2">
                            <h6 class="mb-0">$3,1625</h6>
                            <small>Kingdom</small>
                          </div>
                            <span class="badge badge-success  border-0 ms-2">60.5%<i class="fa-solid fa-chevron-up ms-2 text-white"></i></span>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="country-flag">
                          <img src="{{ asset('assets/images/country/india.png') }}" alt="">
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                          <div class="ms-2">
                            <h6 class="mb-0">$9,525</h6>
                            <small>India</small>
                          </div>
                            <span class="badge badge-primary  border-0 ms-2">25.8%<i class="fa-solid fa-chevron-up ms-2 text-white"></i></span>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="country-flag">
                          <img src="{{ asset('assets/images/country/canada.png') }}" alt="">
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                          <div class="ms-2">
                            <h6 class="mb-0">$5,3665</h6>
                            <small>Canada</small>
                          </div>
                            <span class="badge badge-secondary  border-0 ms-2">18.5%<i class="fa-solid fa-chevron-down ms-2 text-white"></i></span>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="country-flag">
                          <img src="{{ asset('assets/images/country/china.png') }}" alt="">
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                          <div class="ms-2">
                            <h6 class="mb-0">$65</h6>
                            <small>China</small>
                          </div>
                            <span class="badge badge-info  border-0 ms-2">59.5%<i class="fa-solid fa-chevron-up ms-2 text-white"></i></span>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="country-flag">
                          <img src="{{ asset('assets/images/country/united-kingdom.png') }}" alt="">
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                          <div class="ms-2">
                            <h6 class="mb-0">$3,1625</h6>
                            <small>Kingdom</small>
                          </div>
                            <span class="badge badge-success  border-0 ms-2">60.5%<i class="fa-solid fa-chevron-up ms-2 text-white"></i></span>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="country-flag">
                          <img src="{{ asset('assets/images/country/usa.png') }}" alt="">
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                          <div class="ms-2">
                            <h6 class="mb-0">$1,2356</h6>
                            <small>Usa</small>
                          </div>
                            <span class="badge badge-light  border-0 ms-2">60.5%<i class="fa-solid fa-chevron-down ms-2 text-white"></i></span>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="country-flag">
                          <img src="{{ asset('assets/images/country/india.png') }}" alt="">
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                          <div class="ms-2">
                            <h6 class="mb-0">$2,2242</h6>
                            <small>India</small>
                          </div>
                            <span class="badge badge-primary  border-0 ms-2">25.8%<i class="fa-solid fa-chevron-up ms-2 text-white"></i></span>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="country-flag">
                          <img src="{{ asset('assets/images/country/canada.png') }}" alt="">
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                          <div class="ms-2">
                            <h6 class="mb-0">$6,3665</h6>
                            <small>India</small>
                          </div>
                            <span class="badge badge-secondary  border-0 ms-2">18.5%<i class="fa-solid fa-chevron-down ms-2 text-white"></i></span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-xxl-6 col-md-6">
        <div class="card">
            <div class="card-header border-0">
                <div>
                    <h4 class="heading mb-0">Activity Log</h4>
                    <span>Update 2 Hours Before</span>
                </div>	
            </div>
            <div class="card-body px-0 pt-0">
                <div class="activity-sale dz-scroll">
                    <div class="d-flex recent-activity">
                        <span class="me-3 activity">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 17 17">
                              <circle cx="8.5" cy="8.5" r="8.5" fill="#f93a0b"></circle>
                            </svg>
                        </span>
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 71 71">
                              <g transform="translate(-457 -443)">
                                <rect width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
                                <g transform="translate(457 443)">
                                  <rect data-name="placeholder" width="71" height="71" rx="12" fill="#2769ee"></rect>
                                  <circle data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
                                  <circle data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
                                </g>
                              </g>
                            </svg>
                            <div class="ms-3 active-data">
                                <h5 class="mb-1">Bubles Studios have 5 available</h5>
                                <span>8min ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex recent-activity">
                        <span class="me-3 activity">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 17 17">
                              <circle cx="8.5" cy="8.5" r="8.5" fill="#d9d9d9"></circle>
                            </svg>
                        </span>
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 71 71">
                              <g transform="translate(-457 -443)">
                                <rect width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
                                <g transform="translate(457 443)">
                                  <rect data-name="placeholder" width="71" height="71" rx="12" fill="#eeac27"></rect>
                                  <circle data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
                                  <circle data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
                                </g>
                              </g>
                            </svg>
                            <div class="ms-3 active-data">
                                <h5 class="mb-1">Elextra Studios has invited you</h5>
                                <span>2min ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex recent-activity">
                        <span class="me-3 activity">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 17 17">
                              <circle  cx="8.5" cy="8.5" r="8.5" fill="#d9d9d9"/>
                            </svg>
                        </span>
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 71 71">
                                  <g  transform="translate(-457 -443)">
                                    <rect  width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"/>
                                    <g  transform="translate(457 443)">
                                      <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#22bc32"/>
                                      <circle  data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"/>
                                      <circle  data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                                    </g>
                                  </g>
                            </svg>
                            <div class="ms-3 active-data">
                                <h5 class="mb-1">Highspeed Design Team have</h5>
                                <span>8min ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex recent-activity">
                        <span class="me-3 activity">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 17 17">
                              <circle  cx="8.5" cy="8.5" r="8.5" fill="#d9d9d9"/>
                            </svg>
                        </span>
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 71 71">
                                  <g  transform="translate(-457 -443)">
                                    <rect  width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"/>
                                    <g  transform="translate(457 443)">
                                      <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#9933cb"/>
                                      <circle  data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"/>
                                      <circle  data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                                    </g>
                                  </g>
                            </svg>
                            <div class="ms-3 active-data">
                                <h5 class="mb-1">Kleon Studios have 5 available</h5>
                                <span>6min ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex recent-activity">
                        <span class="me-3 activity">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 17 17">
                              <circle cx="8.5" cy="8.5" r="8.5" fill="#d9d9d9"></circle>
                            </svg>
                        </span>
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 71 71">
                              <g transform="translate(-457 -443)">
                                <rect width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
                                <g transform="translate(457 443)">
                                  <rect data-name="placeholder" width="71" height="71" rx="12" fill="#eeac27"></rect>
                                  <circle data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
                                  <circle data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
                                </g>
                              </g>
                            </svg>
                            <div class="ms-3 active-data">
                                <h5 class="mb-1">Elextra Studios has invited you</h5>
                                <span>2min ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex recent-activity">
                        <span class="me-3 activity">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 17 17">
                              <circle  cx="8.5" cy="8.5" r="8.5" fill="#d9d9d9"/>
                            </svg>
                        </span>
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 71 71">
                                  <g  transform="translate(-457 -443)">
                                    <rect  width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"/>
                                    <g  transform="translate(457 443)">
                                      <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#22bc32"/>
                                      <circle  data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"/>
                                      <circle  data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                                    </g>
                                  </g>
                            </svg>
                            <div class="ms-3 active-data">
                                <h5 class="mb-1">Highspeed Design Team have</h5>
                                <span>8min ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex recent-activity">
                        <span class="me-3 activity">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 17 17">
                              <circle  cx="8.5" cy="8.5" r="8.5" fill="#d9d9d9"/>
                            </svg>
                        </span>
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 71 71">
                                  <g  transform="translate(-457 -443)">
                                    <rect  width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"/>
                                    <g  transform="translate(457 443)">
                                      <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#9933cb"/>
                                      <circle  data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"/>
                                      <circle  data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                                    </g>
                                  </g>
                            </svg>
                            <div class="ms-3 active-data">
                                <h5 class="mb-1">Kleon Studios have 5 available</h5>
                                <span>6min ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-md-6">
        <div class="row">
            <div class="col-xl-6 col-sm-6">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="d-flex">
                            <div class="icon-box icon-box-md bg-danger-light me-1">
                                <i class="fa-solid fa-chart-simple text-danger"></i>
                            </div>
                            <div class="ms-2">
                                <h4>$5,536</h4>
                                <p class="mb-0">Sales</p>
                            </div>
                        </div>
                        <a href="javascript:void(0)"><i class="fa-solid fa-chevron-right text-danger"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-sm-6">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="d-flex">
                            <div class="icon-box icon-box-md bg-primary-light me-1">
                                <i class="fa-solid fa-user text-primary"></i>
                            </div>
                            <div class="ms-2">
                                <h4>4,613k</h4>
                                <p class="mb-0">Customer</p>
                            </div>
                        </div>
                        <a href="javascript:void(0)"><i class="fa-solid fa-chevron-right text-primary"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-sm-6">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="d-flex">
                            <div class="icon-box icon-box-md bg-info-light me-1">
                                <i class="fa-solid fa-box text-info"></i>
                            </div>
                            <div class="ms-2">
                                <h4>1,536k</h4>
                                <p class="mb-0">Products</p>
                            </div>
                        </div>
                        <a href="javascript:void(0)"><i class="fa-solid fa-chevron-right text-info"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-sm-6">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="d-flex">
                            <div class="icon-box icon-box-md bg-secondary-light me-1">
                                <i class="fa-solid fa-user text-secondary"></i>
                            </div>
                            <div class="ms-2">
                                <h4>1,536k</h4>
                                <p class="mb-0">Products</p>
                            </div>
                        </div>
                        <a href="javascript:void(0)"><i class="fa-solid fa-chevron-right text-secondary"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-md-6">
        <div class="card">
            <div class="card-header border-0 pb-0">
                <h4 class="heading mb-0">Total Sale</h4>
            </div>
            <div class="card-body pb-0">
                <div id="TotalEarning"></div>
            </div>
        </div>
    </div>
</div>
@endsection