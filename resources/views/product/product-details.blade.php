@extends('layouts.master')


@section('title')
<title>Product-details</title>
@endsection

@section('product-details')
<link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
<link rel="stylesheet" href="{{asset('css/product-details.css')}}">
@endsection

@section('content')
{{-- <div class="container-fluid mb-5"> --}}
    <div class="row border-top px-xl-5">
        {{-- @include('components.sidebar-category') --}}
        @include('components.sidebar')

        <div class="col-lg-9" style="padding-right: 0px; ">
            @include('components.header')


            {{-- ==============================MENU================================== --}}
            <div class="row product-details">
                <div class="col-lg-3 product-details-child">
                    <div class="info-product" ></div>
                </div>
                <div class="col-lg-6">
                    
                    {{-- <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0" > --}}
                                {{-- <a href="" class="nav-item nav-link active " style="padding: 0 25px">Popullar
                                    First</a>
                                <a href="detail.html" class="nav-item nav-link" style="padding: 0 25px">Cheapest
                                    First</a> --}}
                                {{-- <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                                        <a href="checkout.html" class="dropdown-item">Checkout</a>
                                    </div>
                                </div> --}}
                                {{-- <a href="contact.html" class="nav-item nav-link" style="">Discount
                                    First</a>
                                <a href="contact.html" class="nav-item nav-link" style="">Newest
                                    First</a> --}}
                            {{-- </div>
                        </div>
                    </nav> --}}
                </div>

                <div class="col-lg-3">
                    <div style="width: 240px; height: 240px; background-color: aqua"></div>
                </div>
            </div>

            {{-- ==============================MENU================================== --}}

            {{-- ==============================LIST================================== --}}
            <div class="row px-xl-5 pb-3">
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <div
                            class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="{{asset('assets/images/img/gamepad.png')}}" alt="">
                            <div class="text-center">
                                <h4 class="text-truncate mb-3 list-top-title">JBL One</h4>
                                <h6 class="text-truncate mb-3 list-top-brand">Headphones</h6>
                                <h5 class="text-truncate mb-3 list-top-price">19.50$</h5>
                                {{-- <h6 class="text-truncate mb-3"><i class='bx bx-plus-circle'></i>Add to cart</h6>
                                --}}
                                <h4><a href="" class="text-truncate mb-3 btn btn-sm text-light p-0 list-top-add"><i
                                            class="fas fa-shopping-cart  mr-1"></i></i>Add to cart</a></h4>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <div
                            class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="{{asset('assets/images/img/gamepad1.png')}}" alt="">
                            <div class="text-center">
                                <h4 class="text-truncate mb-3 list-top-title">JBL One</h4>
                                <h6 class="text-truncate mb-3 list-top-brand">Headphones</h6>
                                <h5 class="text-truncate mb-3 list-top-price">19.50$</h5>
                                <h4><a href="" class="text-truncate mb-3 btn btn-sm text-light p-0 list-top-add"><i
                                            class="fas fa-shopping-cart  mr-1"></i></i>Add to cart</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <div
                            class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="{{asset('assets/images/img/gamepad.png')}}" alt="">
                            <div class="text-center">
                                <h4 class="text-truncate mb-3 list-top-title">JBL One</h4>
                                <h6 class="text-truncate mb-3 list-top-brand">Headphones</h6>
                                <h5 class="text-truncate mb-3 list-top-price">19.50$</h5>
                                <h4><a href="" class="text-truncate mb-3 btn btn-sm text-light p-0 list-top-add"><i
                                            class="fas fa-shopping-cart  mr-1"></i></i>Add to cart</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <div
                            class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="{{asset('assets/images/img/gamepad.png')}}" alt="">
                            <div class="text-center">
                                <h4 class="text-truncate mb-3 list-top-title">JBL One</h4>
                                <h6 class="text-truncate mb-3 list-top-brand">Headphones</h6>
                                <h5 class="text-truncate mb-3 list-top-price">19.50$</h5>
                                <h4><a href="" class="text-truncate mb-3 btn btn-sm text-light p-0 list-top-add"><i
                                            class="fas fa-shopping-cart  mr-1"></i></i>Add to cart</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <div
                            class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="{{asset('assets/images/img/gamepad.png')}}" alt="">
                            <div class="text-center">
                                <h4 class="text-truncate mb-3 list-top-title">JBL One</h4>
                                <h6 class="text-truncate mb-3 list-top-brand">Headphones</h6>
                                <h5 class="text-truncate mb-3 list-top-price">19.50$</h5>
                                <h4><a href="" class="text-truncate mb-3 btn btn-sm text-light p-0 list-top-add"><i
                                            class="fas fa-shopping-cart  mr-1"></i></i>Add to cart</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <div
                            class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="{{asset('assets/images/img/gamepad.png')}}" alt="">
                            <div class="text-center">
                                <h4 class="text-truncate mb-3 list-top-title">JBL One</h4>
                                <h6 class="text-truncate mb-3 list-top-brand">Headphones</h6>
                                <h5 class="text-truncate mb-3 list-top-price">19.50$</h5>
                                <h4><a href="" class="text-truncate mb-3 btn btn-sm text-light p-0 list-top-add"><i
                                            class="fas fa-shopping-cart  mr-1"></i></i>Add to cart</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <div
                            class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="{{asset('assets/images/img/gamepad.png')}}" alt="">
                            <div class="text-center">
                                <h4 class="text-truncate mb-3 list-top-title">JBL One</h4>
                                <h6 class="text-truncate mb-3 list-top-brand">Headphones</h6>
                                <h5 class="text-truncate mb-3 list-top-price">19.50$</h5>
                                <h4><a href="" class="text-truncate mb-3 btn btn-sm text-light p-0 list-top-add"><i
                                            class="fas fa-shopping-cart  mr-1"></i></i>Add to cart</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <div
                            class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="{{asset('assets/images/img/gamepad.png')}}" alt="">
                            <div class="text-center">
                                <h4 class="text-truncate mb-3 list-top-title">JBL One</h4>
                                <h6 class="text-truncate mb-3 list-top-brand">Headphones</h6>
                                <h5 class="text-truncate mb-3 list-top-price">19.50$</h5>
                                <h4><a href="" class="text-truncate mb-3 btn btn-sm text-light p-0 list-top-add"><i
                                            class="fas fa-shopping-cart  mr-1"></i></i>Add to cart</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- ==============================LIST================================== --}}

            {{-- ==============================SEE MORE=============================== --}}
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{ route('home') }}" class="nav-item nav-link  " style="padding: 0 25px">See More
                    </div>
                </div>
            </nav>
            {{-- ==============================SEE MORE=============================== --}}

        </div>

    </div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    {{-- @endsection --}}
    {{--
</div> --}}
@endsection

@section('script-sidebar-category')
{{-- <script src="{{asset('js/price-range.js')}}"></script> --}}

@endsection