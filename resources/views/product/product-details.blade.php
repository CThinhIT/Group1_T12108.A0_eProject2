@extends('layouts.master')


@section('title')
<title>Product-details</title>
@endsection

@section('product-details')
<link rel="stylesheet" href="{{asset('css/product_details/sidebar-product.css')}}">
<link rel="stylesheet" href="{{asset('css/product_details/product-details.css')}}">
@endsection

@section('content')
{{-- <div class="container-fluid mb-5"> --}}
<div class="row border-top px-xl-5">
    {{-- @include('components.sidebar-category') --}}
    @include('product.components.sidebar-product')

    <div class="col-lg-9">
        @include('components.header')


        {{-- ==============================MENU================================== --}}
        <div class="row product-details">
            <div class="col-lg-3 product-details-child">
                <div class="info-product">
                    <div class="info-product-child">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img style="padding-top: 40px" class="img-fluid w-100" src="{{asset('assets/images/product-img/gamePad/gamePad1/gamePadDetail/xbox-black.png')}}" alt="">
                        </div>

                        <img style="opacity: 20%" class="img-fluid w-100" src="{{asset('assets/logos/razer.png')}}" alt="">

                    </div>
                </div>
            </div>
            <div class="col-lg-5 product-details-child1">
                <img color="black" class="img-fluid w-100 gamepad-img show" src="{{asset('assets/images/product-img/gamePad/gamePad1/gamePadDetail/xbox-black.png')}}" alt="">
                <img color="white" class="img-fluid w-100 gamepad-img" src="{{asset('assets/images/product-img/gamePad/gamePad1/gamePadDetail/xbox-while.png')}}" alt="">
                <img color="pink" class="img-fluid w-100 gamepad-img" src="{{asset('assets/images/product-img/gamePad/gamePad1/gamePadDetail/xbox-pink.png')}}" alt="">
                <img color="blue" class="img-fluid w-100 gamepad-img" src="{{asset('assets/images/product-img/gamePad/gamePad1/gamePadDetail/xbox-blue.png')}}" alt="">

                <div class="product-des">
                    <h4>Original Product</h4>
                    <h2>RAZER <span>FEEL THE GAME</span></h2>
                    <h2 class="price">19.50 $</h2>
                </div>

                <div class="button-order">
                    <a href="#" class="text-button-order">Order now <i class='bx bx-cart-alt'></i></a>

                </div>
            </div>
            <div class="col-lg-1">
                <div class="rotate" style="font-size: 150px">
                    Razer
                </div>
            </div>

            <div class="col-lg-3 select-color">
                <div class="select-color1">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="{{asset('assets/images/product-img/gamePad/gamePad1/gamePadDetail/xbox-while.png')}}" alt="">
                    </div>
                </div>
                <div class="select-color2">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="{{asset('assets/images/product-img/gamePad/gamePad1/gamePadDetail/xbox-pink.png')}}" alt="">
                    </div>
                </div>
                <div class="select-color3">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="{{asset('assets/images/product-img/gamePad/gamePad1/gamePadDetail/xbox-blue.png')}}" alt="">
                    </div>
                </div>

                <div class="color-container">
                    <h3>Color</h3>
                    <div class="colors">
                        <span class="color active" color="black" primary="black"></span>
                        <span class="color" color="white" primary="white"></span>
                        <span class="color" color="pink" primary="pink"></span>
                        <span class="color" color="blue" primary="blue"></span>
                    </div>
                </div>

            </div>
        </div>

        {{-- ==============================MENU================================== --}}

        {{-- ==============================LIST================================== --}}
        {{-- <div class="row px-xl-5 pb-3">
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <div
                            class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="{{asset('assets/images/img/gamepad.png')}}" alt="">
        <div class="text-center">
            <h4 class="text-truncate mb-3 list-top-title">JBL One</h4>
            <h6 class="text-truncate mb-3 list-top-brand">Headphones</h6>
            <h5 class="text-truncate mb-3 list-top-price">19.50$</h5>
            <h4><a href="" class="text-truncate mb-3 btn btn-sm text-light p-0 list-top-add"><i class="fas fa-shopping-cart  mr-1"></i></i>Add to cart</a></h4>

        </div>
    </div>
</div>
</div>

<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <img class="img-fluid w-100" src="{{asset('assets/images/img/gamepad1.png')}}" alt="">
            <div class="text-center">
                <h4 class="text-truncate mb-3 list-top-title">JBL One</h4>
                <h6 class="text-truncate mb-3 list-top-brand">Headphones</h6>
                <h5 class="text-truncate mb-3 list-top-price">19.50$</h5>
                <h4><a href="" class="text-truncate mb-3 btn btn-sm text-light p-0 list-top-add"><i class="fas fa-shopping-cart  mr-1"></i></i>Add to cart</a></h4>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <img class="img-fluid w-100" src="{{asset('assets/images/img/gamepad.png')}}" alt="">
            <div class="text-center">
                <h4 class="text-truncate mb-3 list-top-title">JBL One</h4>
                <h6 class="text-truncate mb-3 list-top-brand">Headphones</h6>
                <h5 class="text-truncate mb-3 list-top-price">19.50$</h5>
                <h4><a href="" class="text-truncate mb-3 btn btn-sm text-light p-0 list-top-add"><i class="fas fa-shopping-cart  mr-1"></i></i>Add to cart</a></h4>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <img class="img-fluid w-100" src="{{asset('assets/images/img/gamepad.png')}}" alt="">
            <div class="text-center">
                <h4 class="text-truncate mb-3 list-top-title">JBL One</h4>
                <h6 class="text-truncate mb-3 list-top-brand">Headphones</h6>
                <h5 class="text-truncate mb-3 list-top-price">19.50$</h5>
                <h4><a href="" class="text-truncate mb-3 btn btn-sm text-light p-0 list-top-add"><i class="fas fa-shopping-cart  mr-1"></i></i>Add to cart</a></h4>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <img class="img-fluid w-100" src="{{asset('assets/images/img/gamepad.png')}}" alt="">
            <div class="text-center">
                <h4 class="text-truncate mb-3 list-top-title">JBL One</h4>
                <h6 class="text-truncate mb-3 list-top-brand">Headphones</h6>
                <h5 class="text-truncate mb-3 list-top-price">19.50$</h5>
                <h4><a href="" class="text-truncate mb-3 btn btn-sm text-light p-0 list-top-add"><i class="fas fa-shopping-cart  mr-1"></i></i>Add to cart</a></h4>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <img class="img-fluid w-100" src="{{asset('assets/images/img/gamepad.png')}}" alt="">
            <div class="text-center">
                <h4 class="text-truncate mb-3 list-top-title">JBL One</h4>
                <h6 class="text-truncate mb-3 list-top-brand">Headphones</h6>
                <h5 class="text-truncate mb-3 list-top-price">19.50$</h5>
                <h4><a href="" class="text-truncate mb-3 btn btn-sm text-light p-0 list-top-add"><i class="fas fa-shopping-cart  mr-1"></i></i>Add to cart</a></h4>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <img class="img-fluid w-100" src="{{asset('assets/images/img/gamepad.png')}}" alt="">
            <div class="text-center">
                <h4 class="text-truncate mb-3 list-top-title">JBL One</h4>
                <h6 class="text-truncate mb-3 list-top-brand">Headphones</h6>
                <h5 class="text-truncate mb-3 list-top-price">19.50$</h5>
                <h4><a href="" class="text-truncate mb-3 btn btn-sm text-light p-0 list-top-add"><i class="fas fa-shopping-cart  mr-1"></i></i>Add to cart</a></h4>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <img class="img-fluid w-100" src="{{asset('assets/images/img/gamepad.png')}}" alt="">
            <div class="text-center">
                <h4 class="text-truncate mb-3 list-top-title">JBL One</h4>
                <h6 class="text-truncate mb-3 list-top-brand">Headphones</h6>
                <h5 class="text-truncate mb-3 list-top-price">19.50$</h5>
                <h4><a href="" class="text-truncate mb-3 btn btn-sm text-light p-0 list-top-add"><i class="fas fa-shopping-cart  mr-1"></i></i>Add to cart</a></h4>
            </div>
        </div>
    </div>
</div>
</div> --}}
{{-- ==============================LIST================================== --}}

</div>

</div>

<!-- Back to Top -->
<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
{{-- @endsection --}}
{{--
</div> --}}
@endsection

@section('script-product-details')
<script src="{{asset('js/select-color.js')}}"></script>

@endsection