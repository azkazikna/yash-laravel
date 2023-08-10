@extends('layouts/master')

@section('title', 'Email Read')

@section('vendor-style')
	<link href="{{ asset('assets/vendor/dropzone/dist/dropzone.css') }}" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css" rel="stylesheet">
@endsection

@section('vendor-script')
    <!-- Required vendors -->
	<script src="{{ asset('assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/dropzone/dist/dropzone.js') }}"></script>
@endsection

@section('page-script')
@endsection

@section('content')
<div class="row gx-0">
    <div class="col-xl-12">
        <div class="card h-auto">
            <div class="card-body p-0">
               <div class="row gx-0">
                    <!-- column -->
                    <div class="col-xl-2 col-xxl-3">
                        <div class="email-left-box dz-scroll" id="email-left">
                            <div class="p-0">
                                <a href="email-compose.html" class="btn text-white btn-block"><i class="fa-solid fa-plus me-2"></i>Compose Email</a>
                            </div>
                            <div class="mail-list rounded ">
                                <a href="email-inbox.html" class="list-group-item active"><i class="fa-regular fa-envelope align-middle"></i>Inbox <span class="badge badge-purple badge-sm float-end rounded">2</span> </a>
                                <a href="javascript:void(0);" class="list-group-item"><i class="fa-regular fa-paper-plane align-middle"></i>Sent</a> 	
                                <a href="javascript:void(0);" class="list-group-item"><i class="fa-regular fa-star align-middle"></i>Favorite </a>
                                <a href="javascript:void(0);" class="list-group-item"><i class="fa-regular fa-file align-middle"></i>Draft</a>
                                <a href="javascript:void(0);" class="list-group-item ">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                    <path d="M15.4425 10.0575L10.065 15.435C9.92569 15.5745 9.76026 15.6851 9.57816 15.7606C9.39606 15.8361
                                    9.20087 15.8749 9.00375 15.8749C8.80663 15.8749 8.61144 15.8361 8.42934 15.7606C8.24724 15.6851 8.08181 15.5745 7.9425 15.435L1.5 9V1.5H9L15.4425
                                    7.9425C15.7219 8.22354 15.8787 8.60372 15.8787 9C15.8787 9.39628 15.7219 9.77646 15.4425 10.0575Z"
                                    stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5.25 5.25H5.268" stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>Important</a>		
                                <a href="javascript:void(0);" class="list-group-item"><i class="fa-regular fa-clock align-middle"></i> Scheduled</a>
                                    
                                
                                <a href="javascript:void(0);" class="list-group-item">
                                    <svg width="15" height="15" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.5 8.25L11 13.75L16.5 8.25" stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Move
                                </a>
                            </div>
                            <div class="mail-list rounded overflow-hidden mt-4">
                                <div class="intro-title d-flex justify-content-between my-0">
                                    <h5>Categories</h5>
                                </div>
                                <a href="email-inbox.html" class="list-group-item change">Work </a>
                                <a href="email-inbox.html" class="list-group-item change">Private </a>
                                <a href="email-inbox.html" class="list-group-item change">Support </a>
                                <a href="email-inbox.html" class="list-group-item change">Social </a>
                            </div>
                        </div>
                    </div>
                    <!-- /column -->
                    <div class="col-xl-10 col-xxl-9">
                        <div class="email-right-box">
                            <div role="toolbar" class="toolbar ms-1 ms-sm-0">
                    <div class="saprat ps-3">
                        <div class="mail-tools ms-0">
                                <a href="javascrip:void(0);"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.1668 21.8333H21.8335C22.0766 21.8333 22.3098 21.7368 22.4817 21.5648C22.6536 21.3929 22.7502 21.1598 22.7502 20.9167C22.7502 20.6736 22.6536 20.4404 22.4817 20.2685C22.3098 20.0966 22.0766 20 21.8335 20H18.1668C17.9237 20 17.6906 20.0966 17.5186 20.2685C17.3467 20.4404 17.2502 20.6736 17.2502 20.9167C17.2502 21.1598 17.3467 21.3929 17.5186 21.5648C17.6906 21.7368 17.9237 21.8333 18.1668 21.8333ZM26.4168 11.75H13.5835C12.8542 11.75 12.1547 12.0397 11.639 12.5555C11.1232 13.0712 10.8335 13.7707 10.8335 14.5V17.25C10.8335 17.4931 10.9301 17.7263 11.102 17.8982C11.2739 18.0701 11.507 18.1667 11.7502 18.1667H12.6668V25.5C12.6668 26.2293 12.9566 26.9288 13.4723 27.4445C13.988 27.9603 14.6875 28.25 15.4168 28.25H24.5835C25.3128 28.25 26.0123 27.9603 26.528 27.4445C27.0438 26.9288 27.3335 26.2293 27.3335 25.5V18.1667H28.2502C28.4933 18.1667 28.7264 18.0701 28.8983 17.8982C29.0703 17.7263 29.1668 17.4931 29.1668 17.25V14.5C29.1668 13.7707 28.8771 13.0712 28.3614 12.5555C27.8456 12.0397 27.1462 11.75 26.4168 11.75ZM25.5002 25.5C25.5002 25.7431 25.4036 25.9763 25.2317 26.1482C25.0598 26.3201 24.8266 26.4167 24.5835 26.4167H15.4168C15.1737 26.4167 14.9406 26.3201 14.7686 26.1482C14.5967 25.9763 14.5002 25.7431 14.5002 25.5V18.1667H25.5002V25.5ZM27.3335 16.3333H12.6668V14.5C12.6668 14.2569 12.7634 14.0237 12.9353 13.8518C13.1072 13.6799 13.3404 13.5833 13.5835 13.5833H26.4168C26.6599 13.5833 26.8931 13.6799 27.065 13.8518C27.2369 14.0237 27.3335 14.2569 27.3335 14.5V16.3333Z" fill="var(--primary)"></path>
                                    </svg>
                                    </a>
                                <a href="javascrip:void(0);"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.0002 14.5C19.8798 14.5 19.7606 14.5237 19.6493 14.5697C19.5381 14.6158 19.437 14.6833 19.3519 14.7684C19.2668 14.8535 19.1993 14.9546 19.1532 15.0658C19.1072 15.1771 19.0835 15.2963 19.0835 15.4167V19.4351L16.8554 20.5563C16.7479 20.6104 16.6521 20.6851 16.5735 20.7762C16.4948 20.8673 16.4349 20.973 16.3971 21.0873C16.3594 21.2016 16.3444 21.3221 16.3533 21.4421C16.3621 21.5622 16.3945 21.6793 16.4485 21.7868C16.5026 21.8943 16.5773 21.9901 16.6684 22.0687C16.7595 22.1473 16.8652 22.2073 16.9795 22.245C17.0937 22.2828 17.2143 22.2977 17.3343 22.2889C17.4543 22.2801 17.5714 22.2477 17.679 22.1936L20.412 20.8186C20.5638 20.7425 20.6914 20.6255 20.7806 20.481C20.8697 20.3364 20.9169 20.1699 20.9168 20V15.4167C20.9169 15.2963 20.8932 15.1771 20.8471 15.0658C20.8011 14.9546 20.7335 14.8535 20.6484 14.7684C20.5633 14.6833 20.4622 14.6158 20.351 14.5697C20.2398 14.5237 20.1206 14.5 20.0002 14.5ZM20.0002 10.8333C18.1872 10.8333 16.4149 11.3709 14.9074 12.3782C13.4 13.3854 12.2251 14.8171 11.5313 16.4921C10.8375 18.1671 10.6559 20.0102 11.0096 21.7883C11.3633 23.5665 12.2364 25.1998 13.5184 26.4818C14.8003 27.7638 16.4337 28.6368 18.2118 28.9905C19.99 29.3442 21.8331 29.1627 23.5081 28.4689C25.1831 27.7751 26.6147 26.6002 27.622 25.0927C28.6292 23.5853 29.1668 21.813 29.1668 20C29.1641 17.5697 28.1974 15.2397 26.4789 13.5213C24.7604 11.8028 22.4305 10.8361 20.0002 10.8333ZM20.0002 27.3333C18.5498 27.3333 17.1319 26.9032 15.926 26.0974C14.72 25.2916 13.7801 24.1463 13.2251 22.8063C12.67 21.4663 12.5248 19.9919 12.8077 18.5693C13.0907 17.1468 13.7891 15.8401 14.8147 14.8145C15.8403 13.789 17.147 13.0905 18.5695 12.8076C19.992 12.5246 21.4665 12.6698 22.8065 13.2249C24.1465 13.7799 25.2918 14.7199 26.0976 15.9258C26.9034 17.1318 27.3335 18.5496 27.3335 20C27.3313 21.9442 26.5579 23.8082 25.1832 25.183C23.8084 26.5578 21.9444 27.3311 20.0002 27.3333Z" fill="var(--primary)"></path>
                                    </svg>
                                    </a>
                                <a href="javascrip:void(0);"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.1667 25.5C18.4098 25.5 18.6429 25.4035 18.8148 25.2316C18.9868 25.0596 19.0833 24.8265 19.0833 24.5834V19.0834C19.0833 18.8403 18.9868 18.6071 18.8148 18.4352C18.6429 18.2633 18.4098 18.1667 18.1667 18.1667C17.9236 18.1667 17.6904 18.2633 17.5185 18.4352C17.3466 18.6071 17.25 18.8403 17.25 19.0834V24.5834C17.25 24.8265 17.3466 25.0596 17.5185 25.2316C17.6904 25.4035 17.9236 25.5 18.1667 25.5ZM27.3333 14.5H23.6667V13.5834C23.6667 12.854 23.3769 12.1546 22.8612 11.6388C22.3455 11.1231 21.646 10.8334 20.9167 10.8334H19.0833C18.354 10.8334 17.6545 11.1231 17.1388 11.6388C16.6231 12.1546 16.3333 12.854 16.3333 13.5834V14.5H12.6667C12.4236 14.5 12.1904 14.5966 12.0185 14.7685C11.8466 14.9404 11.75 15.1736 11.75 15.4167C11.75 15.6598 11.8466 15.893 12.0185 16.0649C12.1904 16.2368 12.4236 16.3334 12.6667 16.3334H13.5833V26.4167C13.5833 27.1461 13.8731 27.8455 14.3888 28.3612C14.9045 28.877 15.604 29.1667 16.3333 29.1667H23.6667C24.396 29.1667 25.0955 28.877 25.6112 28.3612C26.1269 27.8455 26.4167 27.1461 26.4167 26.4167V16.3334H27.3333C27.5764 16.3334 27.8096 16.2368 27.9815 16.0649C28.1534 15.893 28.25 15.6598 28.25 15.4167C28.25 15.1736 28.1534 14.9404 27.9815 14.7685C27.8096 14.5966 27.5764 14.5 27.3333 14.5ZM18.1667 13.5834C18.1667 13.3403 18.2632 13.1071 18.4352 12.9352C18.6071 12.7633 18.8402 12.6667 19.0833 12.6667H20.9167C21.1598 12.6667 21.3929 12.7633 21.5648 12.9352C21.7368 13.1071 21.8333 13.3403 21.8333 13.5834V14.5H18.1667V13.5834ZM24.5833 26.4167C24.5833 26.6598 24.4868 26.893 24.3148 27.0649C24.1429 27.2368 23.9098 27.3334 23.6667 27.3334H16.3333C16.0902 27.3334 15.8571 27.2368 15.6852 27.0649C15.5132 26.893 15.4167 26.6598 15.4167 26.4167V16.3334H24.5833V26.4167ZM21.8333 25.5C22.0764 25.5 22.3096 25.4035 22.4815 25.2316C22.6534 25.0596 22.75 24.8265 22.75 24.5834V19.0834C22.75 18.8403 22.6534 18.6071 22.4815 18.4352C22.3096 18.2633 22.0764 18.1667 21.8333 18.1667C21.5902 18.1667 21.3571 18.2633 21.1852 18.4352C21.0132 18.6071 20.9167 18.8403 20.9167 19.0834V24.5834C20.9167 24.8265 21.0132 25.0596 21.1852 25.2316C21.3571 25.4035 21.5902 25.5 21.8333 25.5Z" fill="var(--primary)"></path>
                                    </svg>
                                    </a>
                                <a href="javascrip:void(0);"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M28.5435 17.7542L26.811 17.1767L27.6268 15.545C27.7095 15.3742 27.7372 15.182 27.706 14.9948C27.6748 14.8076 27.5863 14.6347 27.4527 14.5L25.5002 12.5475C25.3647 12.4119 25.1902 12.3222 25.0011 12.2909C24.812 12.2597 24.6179 12.2885 24.446 12.3733L22.8143 13.1892L22.2368 11.4567C22.1758 11.2761 22.0601 11.119 21.9056 11.0073C21.7512 10.8955 21.5658 10.8347 21.3752 10.8333H18.6252C18.433 10.8328 18.2455 10.8927 18.0893 11.0046C17.933 11.1165 17.8158 11.2746 17.7543 11.4567L17.1768 13.1892L15.5452 12.3733C15.3744 12.2906 15.1821 12.263 14.995 12.2942C14.8078 12.3254 14.6349 12.4139 14.5002 12.5475L12.5477 14.5C12.4121 14.6354 12.3224 14.81 12.2911 14.9991C12.2599 15.1882 12.2887 15.3823 12.3735 15.5542L13.1893 17.1858L11.4568 17.7633C11.2762 17.8243 11.1192 17.9401 11.0074 18.0945C10.8957 18.249 10.8349 18.4344 10.8335 18.625V21.375C10.833 21.5672 10.8929 21.7546 11.0048 21.9109C11.1166 22.0672 11.2748 22.1843 11.4568 22.2458L13.1893 22.8233L12.3735 24.455C12.2908 24.6258 12.2631 24.818 12.2943 25.0052C12.3255 25.1924 12.414 25.3653 12.5477 25.5L14.5002 27.4525C14.6356 27.5881 14.8102 27.6778 14.9992 27.709C15.1883 27.7403 15.3825 27.7115 15.5543 27.6267L17.186 26.8108L17.7635 28.5433C17.825 28.7254 17.9422 28.8835 18.0984 28.9954C18.2547 29.1072 18.4422 29.1672 18.6343 29.1667H21.3843C21.5765 29.1672 21.764 29.1072 21.9202 28.9954C22.0765 28.8835 22.1937 28.7254 22.2552 28.5433L22.8327 26.8108L24.4643 27.6267C24.634 27.7073 24.8244 27.7338 25.0097 27.7027C25.1949 27.6715 25.3662 27.5842 25.5002 27.4525L27.4527 25.5C27.5883 25.3645 27.678 25.19 27.7092 25.0009C27.7405 24.8118 27.7116 24.6177 27.6268 24.4458L26.811 22.8142L28.5435 22.2367C28.7241 22.1757 28.8812 22.0599 28.9929 21.9055C29.1046 21.751 29.1654 21.5656 29.1668 21.375V18.625C29.1673 18.4328 29.1074 18.2454 28.9956 18.0891C28.8837 17.9328 28.7256 17.8157 28.5435 17.7542ZM27.3335 20.715L26.2335 21.0817C25.9805 21.1637 25.7485 21.2998 25.5534 21.4805C25.3583 21.6612 25.2048 21.8822 25.1037 22.1281C25.0025 22.374 24.9561 22.639 24.9675 22.9047C24.979 23.1704 25.0482 23.4304 25.1702 23.6667L25.6927 24.7117L24.6843 25.72L23.6668 25.17C23.4318 25.0529 23.1743 24.9876 22.9118 24.9787C22.6493 24.9697 22.388 25.0173 22.1455 25.1181C21.9029 25.2189 21.6849 25.3707 21.5062 25.5631C21.3274 25.7555 21.1921 25.9841 21.1093 26.2333L20.7427 27.3333H19.2852L18.9185 26.2333C18.8364 25.9804 18.7004 25.7483 18.5197 25.5532C18.339 25.3581 18.118 25.2047 17.8721 25.1035C17.6261 25.0023 17.3611 24.9559 17.0955 24.9674C16.8298 24.9789 16.5698 25.048 16.3335 25.17L15.2885 25.6925L14.2802 24.6842L14.8302 23.6667C14.9522 23.4304 15.0213 23.1704 15.0328 22.9047C15.0443 22.639 14.9978 22.374 14.8967 22.1281C14.7955 21.8822 14.642 21.6612 14.4469 21.4805C14.2519 21.2998 14.0198 21.1637 13.7668 21.0817L12.6668 20.715V19.285L13.7668 18.9183C14.0198 18.8363 14.2519 18.7002 14.4469 18.5195C14.642 18.3388 14.7955 18.1178 14.8967 17.8719C14.9978 17.626 15.0443 17.361 15.0328 17.0953C15.0213 16.8296 14.9522 16.5696 14.8302 16.3333L14.3077 15.3158L15.316 14.3075L16.3335 14.83C16.5698 14.952 16.8298 15.0211 17.0955 15.0326C17.3611 15.0441 17.6261 14.9977 17.8721 14.8965C18.118 14.7953 18.339 14.6419 18.5197 14.4468C18.7004 14.2517 18.8364 14.0196 18.9185 13.7667L19.2852 12.6667H20.7152L21.0818 13.7667C21.1639 14.0196 21.3 14.2517 21.4807 14.4468C21.6614 14.6419 21.8824 14.7953 22.1283 14.8965C22.3742 14.9977 22.6392 15.0441 22.9049 15.0326C23.1706 15.0211 23.4305 14.952 23.6668 14.83L24.7118 14.3075L25.7202 15.3158L25.1702 16.3333C25.053 16.5684 24.9878 16.8259 24.9789 17.0884C24.9699 17.3509 25.0174 17.6122 25.1183 17.8547C25.2191 18.0972 25.3709 18.3152 25.5633 18.494C25.7557 18.6727 25.9842 18.8081 26.2335 18.8908L27.3335 19.2575V20.715ZM20.0002 16.3333C19.275 16.3333 18.5661 16.5484 17.9631 16.9513C17.3601 17.3542 16.8901 17.9268 16.6126 18.5968C16.3351 19.2668 16.2625 20.0041 16.404 20.7153C16.5454 21.4266 16.8946 22.0799 17.4074 22.5927C17.9202 23.1055 18.5736 23.4547 19.2848 23.5962C19.9961 23.7377 20.7333 23.6651 21.4033 23.3876C22.0733 23.11 22.646 22.6401 23.0489 22.0371C23.4518 21.4341 23.6668 20.7252 23.6668 20C23.6668 19.0275 23.2805 18.0949 22.5929 17.4073C21.9053 16.7196 20.9726 16.3333 20.0002 16.3333ZM20.0002 21.8333C19.6376 21.8333 19.2831 21.7258 18.9816 21.5244C18.6801 21.3229 18.4451 21.0366 18.3064 20.7016C18.1676 20.3666 18.1313 19.998 18.2021 19.6423C18.2728 19.2867 18.4474 18.96 18.7038 18.7036C18.9602 18.4472 19.2869 18.2726 19.6425 18.2019C19.9981 18.1312 20.3668 18.1675 20.7018 18.3062C21.0367 18.445 21.3231 18.68 21.5245 18.9815C21.726 19.2829 21.8335 19.6374 21.8335 20C21.8335 20.4862 21.6403 20.9525 21.2965 21.2964C20.9527 21.6402 20.4864 21.8333 20.0002 21.8333Z" fill="var(--primary)"></path>
                                    </svg>
                                    </a>
                                <a href="javascrip:void(0);"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_725_283)">
                                    <path d="M22.8101 19.5011C22.8101 19.1976 22.7503 18.897 22.6341 18.6167C22.518 18.3363 22.3478 18.0815 22.1332 17.8669C21.9186 17.6523 21.6638 17.4821 21.3834 17.3659C21.103 17.2498 20.8025 17.19 20.499 17.19C20.1955 17.19 19.895 17.2498 19.6146 17.3659C19.3342 17.4821 19.0795 17.6523 18.8649 17.8669C18.6503 18.0815 18.48 18.3363 18.3639 18.6167C18.2477 18.897 18.188 19.1976 18.188 19.5011C18.1881 20.114 18.4317 20.7018 18.8652 21.1351C19.2987 21.5684 19.8866 21.8117 20.4995 21.8116C21.1125 21.8114 21.7002 21.5678 22.1335 21.1343C22.5668 20.7008 22.8102 20.1129 22.8101 19.5L22.8101 19.5011ZM22.8101 12.1511C22.8101 11.8476 22.7503 11.5471 22.6341 11.2667C22.518 10.9863 22.3478 10.7315 22.1332 10.5169C21.9186 10.3023 21.6638 10.1321 21.3834 10.0159C21.103 9.89979 20.8025 9.84001 20.499 9.84001C20.1955 9.84001 19.895 9.89979 19.6146 10.0159C19.3342 10.1321 19.0795 10.3023 18.8649 10.5169C18.6503 10.7315 18.48 10.9863 18.3639 11.2667C18.2477 11.5471 18.188 11.8476 18.188 12.1511C18.1881 12.764 18.4317 13.3518 18.8652 13.7851C19.2987 14.2184 19.8866 14.4617 20.4995 14.4616C21.1125 14.4614 21.7002 14.2178 22.1335 13.7843C22.5668 13.3508 22.8102 12.7629 22.8101 12.15L22.8101 12.1511ZM22.8101 26.8511C22.8101 26.5476 22.7503 26.247 22.6341 25.9667C22.518 25.6863 22.3478 25.4315 22.1332 25.2169C21.9186 25.0023 21.6638 24.8321 21.3834 24.7159C21.103 24.5998 20.8025 24.54 20.499 24.54C20.1955 24.54 19.895 24.5998 19.6146 24.7159C19.3342 24.8321 19.0795 25.0023 18.8649 25.2169C18.6502 25.4315 18.48 25.6863 18.3639 25.9667C18.2477 26.247 18.188 26.5476 18.188 26.8511C18.1881 27.464 18.4317 28.0518 18.8652 28.4851C19.2987 28.9184 19.8866 29.1617 20.4995 29.1616C21.1125 29.1614 21.7002 28.9178 22.1335 28.4843C22.5668 28.0508 22.8102 27.4629 22.8101 26.85L22.8101 26.8511Z" fill="var(--primary)"></path>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_725_283">
                                    <rect width="21" height="21" fill="white" transform="translate(31 9) rotate(90)"></rect>
                                    </clipPath>
                                    </defs>
                                    </svg>
                                    </a>
                            </div>
                        </div>
                        </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="right-box-padding p-0">
                                        <div class="read-wapper dz-scroll" id="read-content">
                                            <div class="read-content">
                                                <div class="media pt-3 d-sm-flex d-block justify-content-between">
                                                    <div class="clearfix mb-3 d-flex">
                                                        <img class="me-3 rounded" width="70" height="70" alt="image" src="{{ asset('assets') }}/images/avatar/1.jpg">
                                                        <div class="media-body me-2">
                                                            <h5 class="text-primary mb-0 mt-1">Ingredia Nutrisha</h5>
                                                            <p class="mb-0">20 May 2020</p>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix mb-3">
                                                        <a href="javascript:void(0);" class="btn btn-primary px-3 my-1 light me-2"><i class="fa fa-reply"></i> </a>
                                                        <a href="javascript:void(0);" class="btn btn-primary px-3 my-1 light me-2"><i class="fas fa-arrow-right"></i> </a>
                                                        <a href="javascript:void(0);" class="btn btn-primary px-3 my-1 light me-2"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="media mb-2 mt-3">
                                                    <div class="media-body"><span class="pull-end">07:23 AM</span>
                                                        <h5 class="my-1 text-primary">A collection of textile samples lay spread</h5>
                                                        <p class="read-content-email">
                                                            To: Me, info@example.com</p>
                                                    </div>
                                                </div>
                                                <div class="read-content-body">
                                                    <h5 class="mb-4">Hi,Ingredia,</h5>
                                                    <p class="mb-2"><strong>Ingredia Nutrisha,</strong> A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</p>
                                                    <p class="mb-2">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for
                                                        the far World of Grammar. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                                                    </p>
                                                    <p class="mb-2">Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut
                                                        metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum
                                                        rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar,</p>
                                                    <h5 class="pt-3">Kind Regards</h5>
                                                    <p>Mr Smith</p>
                                                    <hr>
                                                </div>
                                                <div class="read-content-attachment">
                                                    <h6><i class="fa fa-download mb-2"></i> Attachments
                                                        <span>(3)</span></h6>
                                                    <div class="row attachment">
                                                        <div class="col-auto">
                                                            <a href="javascript:void(0);" class="text-muted">My-Photo.png</a>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="javascript:void(0);" class="text-muted">My-File.docx</a>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="javascript:void(0);" class="text-muted">My-Resume.pdf</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="mb-3 pt-3">
                                                    <textarea name="write-email" id="write-email" cols="30" rows="5" class="form-control" placeholder="It's really an amazing.I want to know more about it..!"></textarea>
                                                </div>
                                            </div>
                                            <div class="text-end  mb-4">
                                                <button class="btn btn-primary " type="button">Send</button>
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
</div>
@endsection