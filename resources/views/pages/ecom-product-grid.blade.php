@extends('layouts/master')

@section('title', 'Product Grid')

@section('vendor-style')
     
@endsection

@section('vendor-script')
    <!-- Required vendors -->
     
	<script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
@endsection

@section('page-script')
@endsection

@section('content')
<div class="row">
    <div class="col-xl-2 col-md-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="new-arrival-product">
                    <div class="new-arrivals-img-contnent">
                        <img class="img-fluid" src="{{ asset('assets') }}/images/product/1.jpg" alt="">
                    </div>
                    <div class="new-arrival-content text-center mt-3">
                        <h4><a href="ecom-product-detail.html">Bonorum et Malorum</a></h4>
                        <ul class="star-rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa-solid fa-star-half-stroke"></i></li>
                            <li><i class="fa-solid fa-star-half-stroke"></i></li>
                        </ul>
                        <span class="price">$71.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="new-arrival-product">
                    <div class="new-arrivals-img-contnent">
                        <img class="img-fluid" src="{{ asset('assets') }}/images/product/2.jpg" alt="">
                    </div>
                    <div class="new-arrival-content text-center mt-3">
                        <h4><a href="ecom-product-detail.html">Striped Dress</a></h4>
                        <ul class="star-rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span class="price">$159.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="new-arrival-product">
                    <div class="new-arrivals-img-contnent">
                        <img class="img-fluid" src="{{ asset('assets') }}/images/product/3.jpg" alt="">
                    </div>
                    <div class="new-arrival-content text-center mt-3">
                        <h4><a href="ecom-product-detail.html">BBow polka-dot</a></h4>
                        <ul class="star-rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span class="price">$357.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="new-arrival-product">
                    <div class="new-arrivals-img-contnent">
                        <img class="img-fluid" src="{{ asset('assets') }}/images/product/4.jpg" alt="">
                    </div>
                    <div class="new-arrival-content text-center mt-3">
                        <h4><a href="ecom-product-detail.html">Z Product 360</a></h4>
                        <ul class="star-rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa-solid fa-star-half-stroke"></i></li>
                            <li><i class="fa-solid fa-star-half-stroke"></i></li>
                        </ul>
                        <span class="price">$654.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="new-arrival-product">
                    <div class="new-arrivals-img-contnent">
                        <img class="img-fluid" src="{{ asset('assets') }}/images/product/5.jpg" alt="">
                    </div>
                    <div class="new-arrival-content text-center mt-3">
                        <h4><a href="ecom-product-detail.html">Chair Grey</a></h4>
                        <ul class="star-rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span class="price">$369.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="new-arrival-product">
                    <div class="new-arrivals-img-contnent">
                        <img class="img-fluid" src="{{ asset('assets') }}/images/product/6.jpg" alt="">
                    </div>
                    <div class="new-arrival-content text-center mt-3">
                        <h4><a href="ecom-product-detail.html">fox sake withe</a></h4>
                        <ul class="star-rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span class="price">$245.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="new-arrival-product">
                    <div class="new-arrivals-img-contnent">
                        <img class="img-fluid" src="{{ asset('assets') }}/images/product/7.jpg" alt="">
                    </div>
                    <div class="new-arrival-content text-center mt-3">
                        <h4><a href="ecom-product-detail.html">Back Bag</a></h4>
                        <ul class="star-rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span class="price">$364.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="new-arrival-product">
                    <div class="new-arrivals-img-contnent">
                        <img class="img-fluid" src="{{ asset('assets') }}/images/product/1.jpg" alt="">
                    </div>
                    <div class="new-arrival-content text-center mt-3">
                        <h4><a href="ecom-product-detail.html">FLARE DRESS</a></h4>
                        <ul class="star-rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa-solid fa-star-half-stroke"></i></li>
                            <li><i class="fa-solid fa-star-half-stroke"></i></li>
                        </ul>
                        <span class="price">$548.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="col-xl-2 col-md-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="new-arrival-product">
                    <div class="new-arrivals-img-contnent">
                        <img class="img-fluid" src="{{ asset('assets') }}/images/product/6.jpg" alt="">
                    </div>
                    <div class="new-arrival-content text-center mt-3">
                        <h4><a href="ecom-product-detail.html">fox sake withe</a></h4>
                        <ul class="star-rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span class="price">$245.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="new-arrival-product">
                    <div class="new-arrivals-img-contnent">
                        <img class="img-fluid" src="{{ asset('assets') }}/images/product/5.jpg" alt="">
                    </div>
                    <div class="new-arrival-content text-center mt-3">
                        <h4><a href="ecom-product-detail.html">Chair Grey</a></h4>
                        <ul class="star-rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span class="price">$369.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="new-arrival-product">
                    <div class="new-arrivals-img-contnent">
                        <img class="img-fluid" src="{{ asset('assets') }}/images/product/4.jpg" alt="">
                    </div>
                    <div class="new-arrival-content text-center mt-3">
                        <h4><a href="ecom-product-detail.html">Z Product 360</a></h4>
                        <ul class="star-rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa-solid fa-star-half-stroke"></i></li>
                            <li><i class="fa-solid fa-star-half-stroke"></i></li>
                        </ul>
                        <span class="price">$654.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="new-arrival-product">
                    <div class="new-arrivals-img-contnent">
                        <img class="img-fluid" src="{{ asset('assets') }}/images/product/1.jpg" alt="">
                    </div>
                    <div class="new-arrival-content text-center mt-3">
                        <h4><a href="ecom-product-detail.html">Bonorum et Malorum</a></h4>
                        <ul class="star-rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa-solid fa-star-half-stroke"></i></li>
                            <li><i class="fa-solid fa-star-half-stroke"></i></li>
                        </ul>
                        <span class="price">$71.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection