@extends('client.layouts.main')

@section('content')

<!--slider area start-->
<section class="slider_section slider_s_three mb-60 mt-20">
    <div class="slider_area slider3_carousel owl-carousel">
        <div class="single_slider d-flex align-items-center" data-bgimg="client/img/slider/slider9.jpg"
            style="background-image: url('{{ asset('client/img/slider/slider9.jpg') }}');">
            <div class="container">
                {{--  <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="slider_content slider_c_three color_white">
                                <h3>new collection</h3>
                                <h1>new Arrivals <br> cellphone new model 2022</h1>
                                    <p>discount <span> -30% off</span> this week</p>
                                    <a class="button" href="shop.html">DISCOVER NOW</a>
                            </div>
                        </div>
                    </div>  --}}
            </div>

        </div>
        <div class="single_slider d-flex align-items-center" data-bgimg="client/img/slider/slider10.jpg"
            style="background-image: url('{{ asset('client/img/slider/slider10.jpg') }}');">
            <div class="container">
                {{--  <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="slider_content slider_c_three color_white">
                                <h3>new collection</h3>
                                <h1>happy summer <br> vagetable organic food 2022</h1>
                                    <p>discount <span> -30% off</span> this week</p>
                                    <a class="button" href="shop.html">DISCOVER NOW</a>
                            </div>
                        </div>
                    </div>  --}}
            </div>
        </div>
        <div class="single_slider d-flex align-items-center" data-bgimg="client/img/slider/slider11.jpg"
            style="background-image: url('{{ asset('client/img/slider/slider11.jpg') }}')">
            <div class="container">
                {{--  <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="slider_content slider_c_three color_white">
                                <h3>new collection</h3>
                                <h1>new collection <br> sport clothes for men,s</h1>
                                    <p>discount <span> -30% off</span> this week</p>
                                    <a class="button" href="shop.html">DISCOVER NOW</a>
                            </div>
                        </div>
                    </div>  --}}
            </div>
        </div>
    </div>
</section>
<!--slider area end-->

<!--shipping area start-->
{{-- <div class="shipping_area mb-60">
        <div class="container">
            <div class="shipping_inner">
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="{{asset('client/img/about/shipping1.png')}}" alt="">
</div>
<div class="shipping_content">
    <h4>Free Delivery</h4>
    <p>For all oders over ৳ 120</p>
</div>
</div>
<div class="single_shipping">
    <div class="shipping_icone">
        <img src="{{asset('client/img/about/shipping2.png')}}" alt="">
    </div>
    <div class="shipping_content">
        <h4>Free Delivery</h4>
        <p>For all oders over ৳ 120</p>
    </div>
</div>
<div class="single_shipping">
    <div class="shipping_icone">
        <img src="{{asset('client/img/about/shipping3.png')}}" alt="">
    </div>
    <div class="shipping_content">
        <h4>Free Delivery</h4>
        <p>For all oders over ৳ 120</p>
    </div>
</div>
<div class="single_shipping">
    <div class="shipping_icone">
        <img src="{{asset('client/img/about/shipping4.png')}}" alt="">
    </div>
    <div class="shipping_content">
        <h4>Free Delivery</h4>
        <p>For all oders over ৳ 120</p>
    </div>
</div>
<div class="single_shipping">
    <div class="shipping_icone">
        <img src="{{asset('client/img/about/shipping5.png')}}" alt="">
    </div>
    <div class="shipping_content">
        <h4>Free Delivery</h4>
        <p>For all oders over ৳ 120</p>
    </div>
</div>
</div>
</div>
</div> --}}

<!--home section bg area start-->
<div class="home_section_bg">
    <!--Categories product area end-->

    <!-- trending product area start-->
    <div class="product_area deals_product">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_header">
                        <div class="section_title s_title_style3">
                            <h2>Trending Categories</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Fashion" role="tabpanel">
                    <div class="product_carousel product_style product_column5 owl-carousel">
                        @foreach ($trendingProducts as $tproduct )
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{route('client.product_details')}}"><img
                                            src="{{asset('images/product_image/' .$tproduct->image)}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="javascript:void(0)" data-tippy-placement="top"
                                                    data-tippy-arrow="true" data-tippy-inertia="true"
                                                    data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"
                                                        onclick="addProductToWishlist({{ $tproduct->id}},'{{ $tproduct->title}}',1,{{ $tproduct->mrp }})"></i></a>
                                            </li>
                                            <li class="compare"><a href="javascript:void(0)" data-tippy-placement="top"
                                                    data-tippy-arrow="true" data-tippy-inertia="true"
                                                    onclick="addToCart({{ $tproduct->id }},1)"
                                                    data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                            <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                    data-tippy-arrow="true" data-tippy-inertia="true"
                                                    data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    data-tippy="quick view"><i class="ion-ios-search-strong"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_content_inner">
                                        <h4 class="product_name"><a
                                                href="{{route('client.product_details')}}">{{ $tproduct->title }}</a>
                                        </h4>
                                        @if ($tproduct->discount_amount > 0)
                                        <div class="price_box">
                                            <span class="old_price">৳ {{ $tproduct->discount_amount}}</span>
                                            <span class="current_price">৳ {{ $tproduct->mrp }}</span>
                                        </div>
                                        @else
                                        <div class="price_box">
                                            <span class="current_price">৳ {{ $tproduct->mrp}}</span>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="javascript:void(0)" title="Add to cart"
                                            onclick="addToCart({{ $tproduct->id }},1)">Add to cart</a>
                                    </div>
                                </div>
                            </figure>
                        </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- trending product area end-->

    <div class="product_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_header">
                        <div class="section_title s_title_style3">
                            <h2>New Arrivals</h2>

                        </div>
                        <div class="product_tab_btn">
                            <ul class="nav" role="tablist" id="nav-tab3">
                                @if ($catalogues)
                                @foreach ($catalogues as $key => $catalogue)
                                @if ($key == 0)
                                <li>
                                    <a class="active" data-toggle="tab" href="#{{ $catalogue->name }}" role="tab"
                                        aria-controls="{{ $catalogue->name }}" aria-selected="true">
                                        {{ $catalogue->name }}
                                    </a>
                                </li>
                                @else
                                <li>
                                    <a data-toggle="tab" href="#{{ $catalogue->name }}" role="tab"
                                        aria-controls="{{ $catalogue->name }}" aria-selected="false">
                                        {{ $catalogue->name }}
                                    </a>
                                </li>
                                @endif

                                @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                @if ($catalogues)
                @foreach ($catalogues as $key => $catalogue)
                @if ($key == 0)
                {{-- Men section start --}}
                <div class="tab-pane fade show active" id="{{ $catalogue->name }}" role="tabpanel">
                    <div class="product_carousel product_style product_column5 owl-carousel">
                        @if ($new_arrivals)
                        @foreach ($new_arrivals as $product)
                        @if($product->catalogue_id == $catalogue->id)
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{route('client.product_details')}}"><img
                                            src="{{asset('images/product_image/' .$product->image)}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="javascript:void(0)" data-tippy-placement="top"
                                                    data-tippy-arrow="true" data-tippy-inertia="true"
                                                    data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"
                                                        onclick="addProductToWishlist({{ $product->id}},'{{ $product->title}}',1,{{ $product->mrp }})"></i></a>
                                            </li>
                                            <li class="compare"><a href="javascript:void(0)" data-tippy-placement="top"
                                                    data-tippy-arrow="true" data-tippy-inertia="true"
                                                    onclick="addToCart({{ $product->id }},1)"
                                                    data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                            <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                    data-tippy-arrow="true" data-tippy-inertia="true"
                                                    data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    data-tippy="quick view"><i class="ion-ios-search-strong"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_content_inner">
                                        <h4 class="product_name"><a
                                                href="{{route('client.product_details')}}">{{ $product->title }}</a>
                                        </h4>
                                        @if ($product->discount_amount > 0)
                                        <div class="price_box">
                                            <span class="old_price">৳ {{ $product->discount_amount}}</span>
                                            <span class="current_price">৳ {{ $product->mrp }}</span>
                                        </div>
                                        @else
                                        <div class="price_box">
                                            <span class="current_price">৳ {{ $product->mrp}}</span>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="javascript:void(0)" title="Add to cart"
                                            onclick="addToCart({{ $product->id }},1)">Add to cart</a>
                                    </div>
                                </div>
                            </figure>
                        </article>
                        @endif
                        @endforeach
                        @endif
                    </div>
                </div>
                {{-- men section end --}}
                @else
                {{-- women section start --}}
                <div class="tab-pane fade" id="{{ $catalogue->name }}" role="tabpanel">
                    <div class="product_carousel product_style product_column5 owl-carousel">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{route('client.product_details')}}"><img
                                            src="{{asset('images/product_image/' .$product->image)}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="javascript:void(0)" data-tippy-placement="top"
                                                    data-tippy-arrow="true" data-tippy-inertia="true"
                                                    data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"
                                                        onclick="addProductToWishlist({{ $product->id}},'{{ $product->title}}',1,{{ $product->mrp }})"></i></a>
                                            </li>
                                            <li class="compare"><a href="javascript:void(0)" data-tippy-placement="top"
                                                    data-tippy-arrow="true" data-tippy-inertia="true"
                                                    onclick="addToCart({{ $product->id }},1)"
                                                    data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                            <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                    data-tippy-arrow="true" data-tippy-inertia="true"
                                                    data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    data-tippy="quick view"><i class="ion-ios-search-strong"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_content_inner">
                                        <h4 class="product_name"><a
                                                href="{{route('client.product_details')}}">{{ $product->title }}</a>
                                        </h4>
                                        @if ($product->discount_amount > 0)
                                        <div class="price_box">
                                            <span class="old_price">৳ {{ $product->discount_amount}}</span>
                                            <span class="current_price">৳ {{ $product->mrp }}</span>
                                        </div>
                                        @else
                                        <div class="price_box">
                                            <span class="current_price">৳ {{ $product->mrp}}</span>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="javascript:void(0)" title="Add to cart"
                                            onclick="addToCart({{ $product->id }},1)">Add to cart</a>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                </div>
                @endif
                @endforeach
                @endif
            </div>
        </div>
    </div>
    <!--product area end-->
    <!--product area start-->
    <div class="product_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_header">
                        <div class="section_title s_title_style3">
                            <h2>Featured Products</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Computer3" role="tabpanel">
                    <div class="product_carousel product_style product_column5 owl-carousel">
                        @if($featureProducts)
                        @foreach ($featureProducts as $product )
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{route('client.product_details')}}"><img
                                            src="{{asset('images/product_image/' .$product->image)}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="javascript:void(0)" data-tippy-placement="top"
                                                    data-tippy-arrow="true" data-tippy-inertia="true"
                                                    data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"
                                                        onclick="addProductToWishlist({{ $product->id}},'{{ $product->title}}',1,{{ $product->mrp }})"></i></a>
                                            </li>
                                            <li class="compare"><a href="javascript:void(0)" data-tippy-placement="top"
                                                    data-tippy-arrow="true" data-tippy-inertia="true"
                                                    onclick="addToCart({{ $product->id }},1)"
                                                    data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                            <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                    data-tippy-arrow="true" data-tippy-inertia="true"
                                                    data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    data-tippy="quick view"><i class="ion-ios-search-strong"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_content_inner">
                                        <h4 class="product_name"><a
                                                href="{{route('client.product_details')}}">{{ $product->title }}</a>
                                        </h4>
                                        @if ($product->discount_amount > 0)
                                        <div class="price_box">
                                            <span class="old_price">৳ {{ $product->discount_amount}}</span>
                                            <span class="current_price">৳ {{ $product->mrp }}</span>
                                        </div>
                                        @else
                                        <div class="price_box">
                                            <span class="current_price">৳ {{ $product->mrp}}</span>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="javascript:void(0)" title="Add to cart"
                                            onclick="addToCart({{ $product->id }},1)">Add to cart</a>
                                    </div>
                                </div>
                            </figure>
                        </article>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product area end-->
</div>
@endsection
@push('scripts')
<Script>
    function addProductToWishlist(id, name, quantity, price) {
        $.ajax({
            type: 'POST',
            url: "{{ route('wishlist.store') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                id: id,
                name: name,
                quantity: quantity,
                price: price
            },
            success: function (data) {
                if (data.status == 200) {
                    getCartWishlistCount();
                    // $.notify({
                    //     icon:"fa fa-check",
                    //     title:"Success!",
                    //     message:"Item successfully addes to your wishlist!"
                    // })
                }
            }
        })
    }

    function addToCart(id, quantity) {
        $.ajax({
            type: 'POST',
            url: "{{ route('cart.store') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                id: id,
                quantity: quantity,
            },
            success: function (data) {
                if (data.status == 200) {
                    getCartWishlistCount();
                    // $.notify({
                    //     icon:"fa fa-check",
                    //     title:"Success!",
                    //     message:"Item successfully addes to your wishlist!"
                    // })
                }
            }
        })
    }


    function getCartWishlistCount() {
        $.ajax({
            type: "GET",
            url: "{{ route('cart.wishlist.count') }}",
            success: function (data) {
                if (data.status == 200) {
                    $("#cart_count").html(data.cartCount);
                    $("#wishlist_count").html(data.wishlistCount);
                }
            }
        })
    }

</Script>

@endpush
