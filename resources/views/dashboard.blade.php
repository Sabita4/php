@extends('layouts.app')
@section('title','Dashboard')
@section('content')
<div class="grid grid-cols-3 gap-4">
    <div class="bg-blue-100 p-4 shadow-md-rounded-lg">
        <h3 class=font-bold text-xl">
            <i class="ri-user-fill"></i>
            Total users
        </h3>
        <p class="txt-4xl text-right font-bold">25</p>
    </div>
    <div class="bg-yellow-100 p-4 shadow-md-rounded-lg">
        <h3 class=font-bold text-xl">
            <i class="ri-list-unordered"></i>
            Total orders
        </h3>
        <p class="txt-4xl text-right font-bold">70</p>
    </div>
    <div class="bg-green-200 p-4 shadow-md-rounded-lg">
        <h3 class=font-bold text-xl">
            <i class="ri-cash-line"></i>
            Total Revenue
        </h3>
        <p class="text-right ">100000</p>
    </div>
    <div class="bg-pink-200 p-4 shadow-md-rounded-lg">
        <h3 class=font-bold text-xl">
            <i class="ri-shopping-cart-fill"></i>
            Total Cart
        </h3>
        <p>100</p>
    </div>
    <div class="bg-violet-200 p-4 shadow-md-rounded-lg">
        <h3 class=font-bold text-xl">
            <i class="ri-order-play-fill"></i>
            Total Categories
        </h3>
        <p class="txt-4xl text-right font-bold">{{ $totalcategories }}</p>
    </div>
    <div class="bg-purple-200 p-4 shadow-md-rounded-lg">
        <h3 class=font-bold text-xl">
            <i class="ri-shopping-cart-line"></i>
            Pending orders
        </h3>
        <p class="txt-4xl text-right font-bold">
            55
        </p>
    </div>

</div>
<!-- <h2>This is dashboard</h2> -->
@endsection