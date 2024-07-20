@extends('layout.layouts')

@section('content')

<div class="p-r-50 p-t-5 p-lr-0-lg">
    <!-- Display Product Thumbnail -->

    <div class="container p-t-50">
        <div class="row">
            <!-- Image Section -->
            <div class="col-md-4">
                <div class="wrap-pic-w pos-relative">
                    <img src="/images/{{ ($product->thumbnail) }}" alt="{{ $product->name }}" class="product-thumbnail">
                </div>
            </div>

            <!-- Product Information Section -->
            <div class="col-md-8">
                <!-- Display Product Name -->
                <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                    {{ $product->name }}
                </h4>

                <!-- Display Product Price -->
                <span class="mtext-106 cl2">
                    GIÁ: ${{ number_format($product->price, 2) }}
                </span>

                <!-- Display Product Description -->
                <p class="stext-102 cl3 p-t-23">
                    {{ $product->description }}
                </p>

                <!-- Display Product Quantity -->
                <p class="stext-102 cl3 p-t-23">
                    SỐ LƯỢNG: {{ $product->quantity }}
                </p>
            </div>
        </div>
    </div>

    <!-- Size and Color Selection -->
    <div class="p-t-33">

        <!-- Quantity -->
        <div class="flex-w flex-r-m p-b-10">
            <div class="size-204 flex-w flex-m respon6-next">
                <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                        <i class="fs-16 zmdi zmdi-minus"></i>
                    </div>

                    <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                        <i class="fs-16 zmdi zmdi-plus"></i>
                    </div>
                </div>

                <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                    Add to cart
                </button>
            </div>
        </div>
    </div>

    <div class="mb-5">
    </div>
</div>

@endsection
    

