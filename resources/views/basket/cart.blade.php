@extends('layouts.master')


@section('title')
<title>Your Cart</title>
@endsection

@section('category-1-sidebar-css')
<link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
<link rel="stylesheet" href="{{asset('css/basket/cart.css')}}">
@endsection

@section('content')
<div class="container">@include('components.header')</div>

<section class="hero-wrap hero-wrap-2" style="background-image: url('frontend/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate mb-5 text-center">
                <h2 class="mb-0 bread">My Cart</h2>
            </div>
        </div>
        <div class="item-cart">
            <div class="row item">
                <div class="col-2"><img src="{{asset('assets/images/product-img/gamePad/gamePad1/gamePadMain/xbox-black.png')}}" alt="" width="100" height="100"></div>
                <div class="col-3">dasda</div>
                <div class="col-2">dasdas</div>
                <div class="col-2">dasdas</div>
                <div class="col-2">dasda</div>
            </div>
            <div class="row item">
                <div class="col-2"><img src="{{asset('assets/images/product-img/gamePad/gamePad1/gamePadDetail/xbox-blue.png')}}" alt="" width="100" height="100"></div>
                <div class="col-3">dasda</div>
                <div class="col-2">dasdas</div>
                <div class="col-2">dasdas</div>
                <div class="col-2">dasda</div>
            </div>
            <div class="row item">
                <div class="col-2"><img src="{{asset('assets/images/product-img/gamePad/gamePad1/gamePadMain/xbox-black.png')}}" alt="" width="100" height="100"></div>
                <div class="col-3">dasda</div>
                <div class="col-2">dasdas</div>
                <div class="col-2">dasdas</div>
                <div class="col-2">dasda</div>
            </div>
            <div class="row item">
                <div class="col-2"><img src="{{asset('assets/images/product-img/gamePad/gamePad1/gamePadMain/xbox-black.png')}}" alt="" width="100" height="100"></div>
                <div class="col-3">dasda</div>
                <div class="col-2">dasdas</div>
                <div class="col-2">dasdas</div>
                <div class="col-2">dasda</div>
            </div>
            <div class="row item">
                <div class="col-2"><img src="{{asset('assets/images/product-img/gamePad/gamePad1/gamePadMain/xbox-black.png')}}" alt="" width="100" height="100"></div>
                <div class="col-3">dasda</div>
                <div class="col-2">dasdas</div>
                <div class="col-2">dasdas</div>
                <div class="col-2">dasda</div>
            </div>
            <div class="row item">
                <div class="col-2"><img src="{{asset('assets/images/product-img/gamePad/gamePad1/gamePadMain/xbox-black.png')}}" alt="" width="100" height="100"></div>
                <div class="col-3">dasda</div>
                <div class="col-2">dasdas</div>
                <div class="col-2">dasdas</div>
                <div class="col-2">dasda</div>
            </div>
            <div class="row item">
                <div class="col-2"><img src="{{asset('assets/images/product-img/gamePad/gamePad1/gamePadMain/xbox-black.png')}}" alt="" width="100" height="100"></div>
                <div class="col-3">dasda</div>
                <div class="col-2">dasdas</div>
                <div class="col-2">dasdas</div>
                <div class="col-2">dasda</div>
            </div>
            <div class="row item">
                <div class="col-2"><img src="{{asset('assets/images/product-img/gamePad/gamePad1/gamePadMain/xbox-black.png')}}" alt="" width="100" height="100"></div>
                <div class="col-3">dasda</div>
                <div class="col-2">dasdas</div>
                <div class="col-2">dasdas</div>
                <div class="col-2">dasda</div>
            </div>
        </div>
        <div class="btn-context">
            <div class="row">
                <div class="col-3">
                    <button class="btn btn-dark">Back to shopping</button>
                </div>
                <div class="col-6"></div>
                <div class="col-3">Subtotal: <span>$9999</span></div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">

    </div>
</section>
@endsection

@section('script-sidebar-category')
<script src="{{asset('js/price-range.js')}}"></script>

@endsection