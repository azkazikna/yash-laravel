@extends('layouts/master')

@section('title', 'Sales')

@section('vendor-style')
     
	<link href="{{ asset('assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
	<link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
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
@endsection

@section('page-script')
	<script src="{{ asset('assets/js/dashboard/sales.js') }}"></script>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-6">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header border-0">
                        <div>
                            <h4 class="heading mb-0">Active Projects</h4>
                            <span>In last 30 days revenue from subscription.</span>
                        </div>
                    </div>
                    <div class="card-body pb-0 pe-2 pt-0 custome-tooltip">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div>
                                <h4>15,369.59</h4>
                                <span class="text-danger">
                                    <i class="fa-solid fa-arrow-down"></i>
                                    % 52.36 <small class="text-black">This Week</small>
                                </span>
                            </div>
                            <div>
                                <h4>3,269.89</h4>
                                <span class="text-success">
                                    <i class="fa-solid fa-arrow-up"></i>
                                    % 15.36 <small class="text-black">This month</small>
                                </span>
                            </div>
                            <div id="chartBar" class="sales-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-sm-6">
                <div class="card overflow-hidden">
                    <div class="card-header border-0">
                        <h4 class="heading mb-0">Avg Subscriptions</h4>
                    </div>
                    <div class="card-body d-flex justify-content-between pb-0 pe-0 pt-0">
                        <div>
                            <h4>15,369.59</h4>
                            <span class="text-primary">
                                <i class="fa-solid fa-arrow-down"></i>
                                % 52.36 <small class="text-black">since last month</small>
                            </span>
                        </div>
                        <div id="NewCustomers"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-sm-6">
                <div class="card">
                    <div class="card-header border-0">
                        <h4 class="heading mb-0">Active Subscriptions</h4>
                    </div>
                    <div class="card-body d-flex justify-content-between pb-0 pe-0 pt-0">
                        <div>
                            <h4>15,369.59</h4>
                            <span class="text-secondary">
                                <i class="fa-solid fa-arrow-down"></i>
                                % 52.36 <small class="text-black">since last Week</small>
                            </span>
                        </div>
                        <div id="Active"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header border-0">
                <div>
                    <h4 class="heading mb-0">Sales Overview</h4>
                    <span>In 30 days sales of product subscription. <a href="#" class="text-primary">See Details</a>	</span>
                </div>
            </div>
            <div class="card-body pt-0 custome-tooltip">
                <div class="d-flex align-items-center justify-content-between">
                    <h4>$55,5252</h4>
                    <span>500 Followers</span>
                </div>
                <div id="activityChart" class="activityChart"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-8">
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive active-projects">
                <div class="tbl-caption">
                    <h4 class="heading mb-0">Transaction</h4>
                </div>
                    <table id="projects-tbl" class="table">
                        <thead>
                            <tr>
                                <th>Order No.</th>
                                <th>Customer</th>
                                <th>Date</th>
                                <th>Ref</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-primary">#00001</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets') }}/images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                        <p class="mb-0 ms-2">Liam Risher</p>	
                                    </div>
                                </td>
                                <td>2 Feb 2023</td>
                                <td class="text-primary">HA-22533</td>
                                <td >$5,5225</td>
                                <td>
                                    <span class="badge badge-danger light border-0">Pending</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-primary">#00501</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets') }}/images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                        <p class="mb-0 ms-2">William Risher</p>	
                                    </div>
                                </td>
                                <td>2 Feb 2023</td>
                                <td class="text-primary">HA-22533</td>
                                <td >$5,5225</td>
                                <td>
                                    <span class="badge badge-success light border-0">Sueecss</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-primary">#00501</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets') }}/images/contacts/pic777.jpg" class="avatar avatar-md rounded-circle" alt="">
                                        <p class="mb-0 ms-2">Donald Benjamin</p>	
                                    </div>
                                </td>
                                <td>2 Feb 2023</td>
                                <td class="text-primary">HA-22533</td>
                                <td >$5,5225</td>
                                <td>
                                    <span class="badge badge-danger light border-0">Pending</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-primary">#005058</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets') }}/images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                        <p class="mb-0 ms-2">Donald Benjamin</p>	
                                    </div>
                                </td>
                                <td>2 Feb 2023</td>
                                <td class="text-primary">HA-22533</td>
                                <td >$5,5225</td>
                                <td>
                                    <span class="badge badge-danger light border-0">Pending</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-primary">#00601</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets') }}/images/contacts/pic888.jpg" class="avatar avatar-md rounded-circle" alt="">
                                        <p class="mb-0 ms-2">Liam Risher</p>	
                                    </div>
                                </td>
                                <td>2 Feb 2023</td>
                                <td class="text-primary">HA-22533</td>
                                <td >$5,5225</td>
                                <td>
                                    <span class="badge badge-danger light border-0">Pending</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-primary">#005058</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets') }}/images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                        <p class="mb-0 ms-2">Donald Benjamin</p>	
                                    </div>
                                </td>
                                <td>2 Feb 2023</td>
                                <td class="text-primary">HA-22533</td>
                                <td >$5,5225</td>
                                <td>
                                    <span class="badge badge-danger light border-0">Pending</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-primary">#008501</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets') }}/images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                        <p class="mb-0 ms-2">Donald Benjamin</p>	
                                    </div>
                                </td>
                                <td>2 Feb 2023</td>
                                <td class="text-primary">HA-22583</td>
                                <td >$5,5225</td>
                                <td>
                                    <span class="badge badge-danger light border-0">Pending</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-primary">#055851</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets') }}/images/contacts/pic777.jpg" class="avatar avatar-md rounded-circle" alt="">
                                        <p class="mb-0 ms-2">Donald Benjamin</p>	
                                    </div>
                                </td>
                                <td>2 Feb 2023</td>
                                <td class="text-primary">HA-2274733</td>
                                <td >$5,5225</td>
                                <td>
                                    <span class="badge badge-danger light border-0">Pending</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-primary">#005058</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets') }}/images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                        <p class="mb-0 ms-2">Donald Benjamin</p>	
                                    </div>
                                </td>
                                <td>2 Feb 2023</td>
                                <td class="text-primary">HA-22533</td>
                                <td >$5,5225</td>
                                <td>
                                    <span class="badge badge-danger light border-0">Pending</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-primary">#005058</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets') }}/images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                        <p class="mb-0 ms-2">Donald Benjamin</p>	
                                    </div>
                                </td>
                                <td>2 Feb 2023</td>
                                <td class="text-primary">HA-22533</td>
                                <td >$5,5225</td>
                                <td>
                                    <span class="badge badge-danger light border-0">Pending</span>
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
                <h4 class="heading mb-0">Recent Activities</h4>
            </div>
            <div class="card-body pt-0 px-0">
                <ul class="recent-app">
                    <li>
                        <img src="{{ asset('assets') }}/images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                        <div>
                            <h5>Blanca Schultz requested to Widthdrawl.</h5>
                            <span>2 Hourse Ago</span>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('assets') }}/images/contacts/pic2.jpg" class="avatar avatar-md rounded-circle" alt="">
                        <div>
                            <h5>Hanuman transfer to Money.</h5>
                            <span>4 Hourse Ago</span>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('assets') }}/images/contacts/pic3.jpg" class="avatar avatar-md rounded-circle" alt="">
                        <div>
                            <h5>Subham Place Order.</h5>
                            <span>4 Hourse Ago</span>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('assets') }}/images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                        <div>
                            <h5>Blanca Schultz requested to Widthdrawl.</h5>
                            <span>2 Hourse Ago</span>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('assets') }}/images/contacts/pic2.jpg" class="avatar avatar-md rounded-circle" alt="">
                        <div>
                            <h5>Hanuman transfer to Money.</h5>
                            <span>4 Hourse Ago</span>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('assets') }}/images/contacts/pic3.jpg" class="avatar avatar-md rounded-circle" alt="">
                        <div>
                            <h5>Subham Place Order.</h5>
                            <span>4 Hourse Ago</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>
@endsection