@extends('layouts/master')

@section('title', 'Invoice')

@section('vendor-style')
    <link href="{{ asset('assets/vendor/star-rating/star-rating-svg.css') }}" rel="stylesheet">
@endsection

@section('vendor-script')
    <!-- Required vendors -->
     
    <script src="{{ asset('assets/vendor/star-rating/jquery.star-rating-svg.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
@endsection

@section('page-script')
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">

        <div class="card mt-3">
            <div class="card-header"> Invoice <strong>01/01/01/2018</strong> <span class="float-end">
                    <strong>Status:</strong> Pending</span> </div>
            <div class="card-body">
                <div class="row mb-5">
                    <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <h6>From:</h6>
                        <div> <strong>Webz Poland</strong> </div>
                        <div>Madalinskiego 8</div>
                        <div>71-101 Szczecin, Poland</div>
                        <div>Email: info@webz.com.pl</div>
                        <div>Phone: +48 444 666 3333</div>
                    </div>
                    <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <h6>To:</h6>
                        <div> <strong>Bob Mart</strong> </div>
                        <div>Attn: Daniel Marek</div>
                        <div>43-190 Mikolow, Poland</div>
                        <div>Email: marek@daniel.com</div>
                        <div>Phone: +48 123 456 789</div>
                    </div>
                    <div class="mt-4 col-xl-6 col-lg-6 col-md-12 col-sm-12 d-flex justify-content-lg-end justify-content-md-center justify-content-xs-start">
                        <div class="row align-items-center">
                            <div class="col-sm-9"> 
                                <div class="brand-logo mb-2 inovice-logo">
                                        <svg class="logo-abbr" width="32" height="30" viewBox="0 0 32 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M30.8287 2.96046L25.8411 0.0805375C25.6549 -0.0268458 25.4256 -0.0268458 25.2394 0.0805375C19.254 3.53731 11.8785 3.53785 5.89259 0.0816161L5.89043 0.0805375C5.70426 -0.0268458 5.47493 -0.0268458 5.28876 0.0805375L0.301104 2.95992C0.114937 3.0673 0 3.26588 0 3.48119V9.24049C0 9.4558 0.114937 9.65438 0.301104 9.76176C6.28759 13.2169 9.97531 19.6038 9.97531 26.5162V26.5184C9.97531 26.7332 10.0903 26.9323 10.2764 27.0397L15.2641 29.9196C15.3574 29.9736 15.461 30 15.5652 30C15.6693 30 15.7729 29.973 15.8663 29.9196L20.8539 27.0397C21.0401 26.9323 21.155 26.7337 21.155 26.5184C21.1545 19.6059 24.8422 13.2185 30.8287 9.7623L30.8298 9.76176C31.016 9.65438 31.1309 9.4558 31.1309 9.24049V3.48173C31.1293 3.26642 31.0149 3.06784 30.8287 2.96046ZM29.9259 8.89352L15.2635 17.359C15.0774 17.4664 14.9624 17.665 14.9624 17.8803V22.4168C14.4876 22.651 14.1692 23.1534 14.2043 23.7259C14.2458 24.3993 14.7854 24.9471 15.4589 24.9978C16.2591 25.0582 16.9272 24.4263 16.9272 23.639C16.9272 23.1027 16.6169 22.6386 16.1663 22.4163C16.1663 19.824 17.5493 17.4286 19.7941 16.1324L19.9496 16.0429L19.9501 26.1714L15.5641 28.7038L11.1781 26.1714V9.24103C11.1781 9.02627 11.0632 8.82715 10.877 8.71976L6.94754 6.45123C6.9497 6.42155 6.95077 6.39187 6.95077 6.36165C6.95077 5.59162 6.31187 4.97052 5.53537 5.0002C4.82901 5.02718 4.25378 5.60241 4.2268 6.30877C4.19712 7.08527 4.81822 7.72471 5.58825 7.72471C5.86885 7.72471 6.12948 7.63999 6.34587 7.49484C8.59066 8.79099 9.9737 11.1863 9.9737 13.7786V13.9573L1.20172 8.89406V3.82978L5.58771 1.29737L20.2501 9.76284C20.4363 9.87022 20.6656 9.87022 20.8518 9.76284L24.7807 7.4943C24.9993 7.64108 25.2631 7.72579 25.5464 7.72417C26.2895 7.71986 26.8998 7.10686 26.9009 6.36381C26.9019 5.60997 26.2916 4.99912 25.5383 4.99912C24.7856 4.99912 24.1758 5.60943 24.1758 6.36165C24.1758 6.39187 24.1769 6.42155 24.1791 6.45123C21.9337 7.74738 19.1676 7.74738 16.9223 6.45123L16.768 6.36219L25.5383 1.29737L29.9243 3.82978V8.89352H29.9259Z" fill="#452B90"/>
                                        </svg>
                                        <svg class="brand-title" width="111" height="24" viewBox="0 0 111 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="49" height="22" transform="translate(0.5 1)" fill="black"/>
                                            <path d="M14.796 7.172L11.394 13.752V17H9V13.752L5.598 7.172H8.314L10.218 11.288L12.108 7.172H14.796ZM21.8786 15.264H18.2106L17.6226 17H15.1166L18.6726 7.172H21.4446L25.0006 17H22.4666L21.8786 15.264ZM21.2626 13.416L20.0446 9.818L18.8406 13.416H21.2626ZM29.6388 17.098C28.9202 17.098 28.2762 16.9813 27.7068 16.748C27.1375 16.5147 26.6802 16.1693 26.3348 15.712C25.9988 15.2547 25.8215 14.704 25.8028 14.06H28.3508C28.3882 14.424 28.5142 14.704 28.7288 14.9C28.9435 15.0867 29.2235 15.18 29.5688 15.18C29.9235 15.18 30.2035 15.1007 30.4088 14.942C30.6142 14.774 30.7168 14.5453 30.7168 14.256C30.7168 14.0133 30.6328 13.8127 30.4648 13.654C30.3062 13.4953 30.1055 13.3647 29.8628 13.262C29.6295 13.1593 29.2935 13.0427 28.8548 12.912C28.2202 12.716 27.7022 12.52 27.3008 12.324C26.8995 12.128 26.5542 11.8387 26.2648 11.456C25.9755 11.0733 25.8308 10.574 25.8308 9.958C25.8308 9.04333 26.1622 8.32933 26.8248 7.816C27.4875 7.29333 28.3508 7.032 29.4148 7.032C30.4975 7.032 31.3702 7.29333 32.0328 7.816C32.6955 8.32933 33.0502 9.048 33.0968 9.972H30.5068C30.4882 9.65467 30.3715 9.40733 30.1568 9.23C29.9422 9.04333 29.6668 8.95 29.3308 8.95C29.0415 8.95 28.8082 9.02933 28.6308 9.188C28.4535 9.33733 28.3648 9.55667 28.3648 9.846C28.3648 10.1633 28.5142 10.4107 28.8128 10.588C29.1115 10.7653 29.5782 10.9567 30.2128 11.162C30.8475 11.3767 31.3608 11.582 31.7528 11.778C32.1542 11.974 32.4995 12.2587 32.7888 12.632C33.0782 13.0053 33.2228 13.486 33.2228 14.074C33.2228 14.634 33.0782 15.1427 32.7888 15.6C32.5088 16.0573 32.0982 16.4213 31.5568 16.692C31.0155 16.9627 30.3762 17.098 29.6388 17.098ZM43.2081 7.172V17H40.8141V12.954H37.0901V17H34.6961V7.172H37.0901V11.022H40.8141V7.172H43.2081Z" fill="white"/>
                                            <path d="M63.984 16.016H59.792L59.12 18H56.256L60.32 6.768H63.488L67.552 18H64.656L63.984 16.016ZM63.28 13.904L61.888 9.792L60.512 13.904H63.28ZM72.9969 6.768C74.1809 6.768 75.2155 7.00267 76.1009 7.472C76.9862 7.94133 77.6689 8.60267 78.1489 9.456C78.6395 10.2987 78.8849 11.2747 78.8849 12.384C78.8849 13.4827 78.6395 14.4587 78.1489 15.312C77.6689 16.1653 76.9809 16.8267 76.0849 17.296C75.1995 17.7653 74.1702 18 72.9969 18H68.7889V6.768H72.9969ZM72.8209 15.632C73.8555 15.632 74.6609 15.3493 75.2369 14.784C75.8129 14.2187 76.1009 13.4187 76.1009 12.384C76.1009 11.3493 75.8129 10.544 75.2369 9.968C74.6609 9.392 73.8555 9.104 72.8209 9.104H71.5249V15.632H72.8209ZM93.1339 6.768V18H90.3979V11.264L87.8859 18H85.6779L83.1499 11.248V18H80.4139V6.768H83.6459L86.7979 14.544L89.9179 6.768H93.1339ZM97.8374 6.768V18H95.1014V6.768H97.8374ZM109.868 18H107.132L102.556 11.072V18H99.8201V6.768H102.556L107.132 13.728V6.768H109.868V18Z" fill="#452B90"/>
                                        </svg>
                                </div>
                                <span>Please send exact amount: <strong class="d-block">0.15050000 BTC</strong>
                                    <strong>1DonateWffyhwAjskoEwXt83pHZxhLTr8H</strong></span><br>
                                <small class="text-muted">Current exchange rate 1BTC = $6590 USD</small>
                            </div>
                            <div class="col-sm-3 mt-3"> <img src="{{ asset('assets') }}/images/qr.png" alt="" class="img-fluid width110"> </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th class="center">#</th>
                                <th>Item</th>
                                <th>Description</th>
                                <th class="right">Unit Cost</th>
                                <th class="center">Qty</th>
                                <th class="right">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="center">1</td>
                                <td class="left strong">Origin License</td>
                                <td class="left">Extended License</td>
                                <td class="right">$999,00</td>
                                <td class="center">1</td>
                                <td class="right">$999,00</td>
                            </tr>
                            <tr>
                                <td class="center">2</td>
                                <td class="left">Custom Services</td>
                                <td class="left">Instalation and Customization (cost per hour)</td>
                                <td class="right">$150,00</td>
                                <td class="center">20</td>
                                <td class="right">$3.000,00</td>
                            </tr>
                            <tr>
                                <td class="center">3</td>
                                <td class="left">Hosting</td>
                                <td class="left">1 year subcription</td>
                                <td class="right">$499,00</td>
                                <td class="center">1</td>
                                <td class="right">$499,00</td>
                            </tr>
                            <tr>
                                <td class="center">4</td>
                                <td class="left">Platinum Support</td>
                                <td class="left">1 year subcription 24/7</td>
                                <td class="right">$3.999,00</td>
                                <td class="center">1</td>
                                <td class="right">$3.999,00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-5"> </div>
                    <div class="col-lg-4 col-sm-5 ms-auto">
                        <table class="table table-clear">
                            <tbody>
                                <tr>
                                    <td class="left"><strong>Subtotal</strong></td>
                                    <td class="right">$8.497,00</td>
                                </tr>
                                <tr>
                                    <td class="left"><strong>Discount (20%)</strong></td>
                                    <td class="right">$1,699,40</td>
                                </tr>
                                <tr>
                                    <td class="left"><strong>VAT (10%)</strong></td>
                                    <td class="right">$679,76</td>
                                </tr>
                                <tr>
                                    <td class="left"><strong>Total</strong></td>
                                    <td class="right"><strong>$7.477,36</strong><br>
                                        <strong>0.15050000 BTC</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection