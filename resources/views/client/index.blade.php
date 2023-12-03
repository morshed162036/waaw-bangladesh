@extends('client.layouts.main')

@section('content')

<!--slider area start-->
    <section class="slider_section slider_s_three mb-60 mt-20">
        <div class="slider_area slider3_carousel owl-carousel">
            <div class="single_slider d-flex align-items-center"data-bgimg="client/img/slider/slider9.jpg" style="background-image: url('{{ asset('client/img/slider/slider9.jpg') }}');">
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
            <div class="single_slider d-flex align-items-center" data-bgimg="client/img/slider/slider10.jpg" style="background-image: url('{{ asset('client/img/slider/slider10.jpg') }}');">
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
            <div class="single_slider d-flex align-items-center" data-bgimg="client/img/slider/slider11.jpg" style="background-image: url('{{ asset('client/img/slider/slider11.jpg') }}')">
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
    <!--shipping area end-->

    <!--banner area start-->
    {{-- <div class="banner_area banner_style2 mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="{{asset('client/img/bg/banner6.jpg')}}" alt=""></a>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="{{asset('client/img/bg/banner7.jpg')}}" alt=""></a>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-3 col-md-3">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="{{asset('client/img/bg/banner8.jpg')}}" alt=""></a>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div> --}}
    <!--banner area end-->

    <!--banner area start-->
    {{-- <div class="banner_area banner_three_bottom mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="{{asset('client/img/bg/banner4.jpg')}}" alt=""></a>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="{{asset('client/img/bg/banner5.jpg')}}" alt=""></a>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div> --}}
    <!--banner area end-->

    <!--home section bg area start-->
    <div class="home_section_bg">

        {{-- <div class="categories_product_area mb-55">
            <div class="container">
                <div class="categories_product_inner">
                    <div class="single_categories_product">
                        <div class="categories_product_content">
                            <h4><a href="shop.html"> Cells & Tablets</a></h4>
                            <p>12 Products</p>
                        </div>
                        <div class="categories_product_thumb">
                            <a href="shop.html"><img src="{{asset('client/img/s-product/category1.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="single_categories_product">
                        <div class="categories_product_content">
                            <h4><a href="shop.html"> Computer</a></h4>
                            <p>24 Products</p>
                        </div>
                        <div class="categories_product_thumb">
                            <a href="shop.html"><img src="{{asset('client/img/s-product/category2.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="single_categories_product">
                        <div class="categories_product_content">
                            <h4><a href="shop.html"> Fashion</a></h4>
                            <p>22 Products</p>
                        </div>
                        <div class="categories_product_thumb">
                            <a href="shop.html"><img src="{{asset('client/img/s-product/category3.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="single_categories_product">
                        <div class="categories_product_content">
                            <h4><a href="shop.html"> Sunglasses</a></h4>
                            <p>06 Products</p>
                        </div>
                        <div class="categories_product_thumb">
                            <a href="shop.html"><img src="{{asset('client/img/s-product/category4.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="single_categories_product">
                        <div class="categories_product_content">
                            <h4><a href="shop.html"> Baby & Kids</a></h4>
                            <p>20 Products</p>
                        </div>
                        <div class="categories_product_thumb">
                            <a href="shop.html"><img src="{{asset('client/img/s-product/category5.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="single_categories_product">
                        <div class="categories_product_content">
                            <h4><a href="shop.html"> Accessories</a></h4>
                            <p>04 Products</p>
                        </div>
                        <div class="categories_product_thumb">
                            <a href="shop.html"><img src="{{asset('client/img/s-product/category6.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="single_categories_product">
                        <div class="categories_product_content">
                            <h4><a href="shop.html"> Cells & Tablets</a></h4>
                            <p>12 Products</p>
                        </div>
                        <div class="categories_product_thumb">
                            <a href="shop.html"><img src="{{asset('client/img/s-product/category7.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="single_categories_product">
                        <div class="categories_product_content">
                            <h4><a href="shop.html"> Accessories</a></h4>
                            <p>12 Products</p>
                        </div>
                        <div class="categories_product_thumb">
                            <a href="shop.html"><img src="{{asset('client/img/s-product/category8.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="single_categories_product">
                        <div class="categories_product_content">
                            <h4><a href="shop.html"> Cells & Tablets</a></h4>
                            <p>12 Products</p>
                        </div>
                        <div class="categories_product_thumb">
                            <a href="shop.html"><img src="{{asset('client/img/s-product/category9.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="single_categories_product">
                        <div class="categories_product_content">
                            <h4><a href="shop.html"> Baby & Kids</a></h4>
                            <p>12 Products</p>
                        </div>
                        <div class="categories_product_thumb">
                            <a href="shop.html"><img src="{{asset('client/img/s-product/category10.jpg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--Categories product area end-->
        <!--product area start-->
        <div class="product_area deals_product">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product_header">
                            <div class="section_title s_title_style3">
                                <h2>Trending Categories</h2>

                            </div>
                            {{-- <div class="product_tab_btn">
                                <ul class="nav" role="tablist" id="nav-tab">
                                    <li>
                                        <a class="active" data-toggle="tab" href="#Fashion" role="tab" aria-controls="Fashion" aria-selected="true">
                                            Fashion & Clothing
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#Games" role="tab" aria-controls="Games" aria-selected="false">
                                            Games & Consoles
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#Speaker" role="tab" aria-controls="Speaker" aria-selected="false">
                                            Headphone & Speaker
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#Mobile" role="tab" aria-controls="Mobile" aria-selected="false">
                                            Mobile & Tablets
                                        </a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="Fashion" role="tabpanel">
                        <div class="product_carousel product_style product_column5 owl-carousel">
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/trending-categories/categories1.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="{{route('client.cart')}}"><img src="{{asset('client/img/product/product2.jpg')}}" alt=""></a> --}}
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="{{route('wishlist.list')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳ 86.00</span>
                                                <span class="current_price">৳ 79.00</span>
                                            </div>
                                            {{-- <div class="countdown_text">
                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2023/12/15"></div>
                                            </div> --}}
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                        </div>
                    </div>
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
                                <h2>New Arrivals</h2>

                            </div>
                            <div class="product_tab_btn">
                                <ul class="nav" role="tablist" id="nav-tab3">
                                @if ($catalogues)
                                    @foreach ($catalogues as $key => $catalogue)
                                    @if ($key == 0)
                                        <li>
                                            <a class="active" data-toggle="tab" href="#{{ $catalogue->name }}" role="tab" aria-controls="{{ $catalogue->name }}" aria-selected="true">
                                                {{ $catalogue->name }}
                                            </a>
                                        </li>
                                    @else
                                        <li>
                                            <a data-toggle="tab" href="#{{ $catalogue->name }}" role="tab" aria-controls="{{ $catalogue->name }}" aria-selected="false">
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
                                                                <a class="primary_img" href="{{route('client.product_details',$product->id)}}"><img src="{{asset('images/product_image/'.$product->image)}}" alt=""></a>
                                                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product28.jpg')}}" alt=""></a> --}}
                                                                <div class="label_product">
                                                                    <span class="label_sale">Sale</span>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li class="wishlist"><a href="javascript:void(0)" onclick="addProductToWishlist({{ $product->id}},'{{ $product->title}}',1,{{ $product->mrp }})" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                                        <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                                                        <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="product_content">
                                                                <div class="product_content_inner">
                                                                    <h4 class="product_name"><a href="{{route('client.product_details',$product->id)}}">{{ $product->title }}</a></h4>
                                                                    <div class="price_box">
                                                                        {{-- <span class="old_price">৳ 72.00</span> --}}
                                                                        <span class="current_price">৳ {{ $product->mrp }}</span>
                                                                    </div>
                                                                </div>
                                                                <div class="add_to_cart">
                                                                    <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
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
                                                    <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/women/women1.jpg')}}" alt=""></a>
                                                    {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product10.jpg')}}" alt=""></a> --}}
                                                    <div class="label_product">
                                                        <span class="label_sale">Sale</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="wishlist"><a href="{{route('wishlist.list')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                            <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                                            <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="product_content_inner">
                                                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                                        <div class="price_box">
                                                            <span class="old_price">৳ 72.00</span>
                                                            <span class="current_price">৳ 70.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="add_to_cart">
                                                        <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                                    </div>

                                                </div>
                                            </figure>
                                        </article>
                                    </div>
                                </div>
                                {{-- women section end --}}
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
                            {{-- <div class="product_tab_btn">
                                <ul class="nav" role="tablist" id="nav-tab2">
                                    <li>
                                        <a class="active" data-toggle="tab" href="#Computer3" role="tab" aria-controls="Computer3" aria-selected="true">
                                            Computer
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#Networking2" role="tab" aria-controls="Networking2" aria-selected="false">
                                            Networking
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#Networking3" role="tab" aria-controls="Networking3" aria-selected="false">
                                            Computer & Networking
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#Audio2" role="tab" aria-controls="Audio2" aria-selected="false">
                                            Television & Audio
                                        </a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="Computer3" role="tabpanel">
                        <div class="product_carousel product_style product_column5 owl-carousel">
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/featured-products/product1.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/featured-products/product1.jpg')}}" alt=""></a> --}}
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="{{route('wishlist.list')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Natus erro at congue massa commodo sit Natus erro</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳ 80.00</span>
                                                <span class="current_price">৳ 70.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>

                                    </div>
                                </figure>
                            </article>
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
        function addProductToWishlist(id,name,quantity,price)
        {
            $.ajax({
                type:'POST',
                url:"{{ route('wishlist.store') }}",
                data:{
                    "_token":"{{ csrf_token() }}",
                    id:id,
                    name:name,
                    quantity:quantity,
                    price:price
                },
                success:function(data){
                    if(data.status == 200)
                    {
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
        function getCartWishlistCount()
        {
            $.ajax({
                type:"GET",
                url:"{{ route('cart.wishlist.count') }}",
                success:function(data){
                    if(data.status==200)
                    {
                        $("#cart_count").html(data.cartCount);
                        $("#wishlist_count").html(data.wishlistCount);
                    }
                }
            })
        }
    </Script>
@endpush
