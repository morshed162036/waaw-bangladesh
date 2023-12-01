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
                                    </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="Fashion" role="tabpanel">
             <div class="product_carousel product_style product_column5 owl-carousel">
                 @if($trendingProducts)
                    @foreach ($trendingProducts as $product )
                      <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('images/product_image/' . $product->image)}}" alt=""></a>
                                {{-- <a class="secondary_img" href="#"><img src="{{asset('client/img/product/product2.jpg')}}"
                                alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Eodem modo
                                            vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                    {{--  <div class="price_box">
                                                <span class="old_price">৳ 86.00</span>
                                                <span class="current_price">৳ 79.00</span>
                                            </div>  --}}
                                    @if ($product->discount_amount > 0)
                                    <div class="price_box">
                                        <span class="old_price">৳ {{ $product->mrp }}</span>
                                        <span class="current_price">৳ {{ $product->cost }}</span>
                                    </div>
                                    @else
                                    <div class="price_box">
                                        <span class="current_price">৳ {{ $product->mrp }}</span>
                                    </div>
                                    @endif
                                    {{-- <div class="countdown_text">
                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2023/12/15"></div>
                                            </div> --}}
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/trending-categories/categories2.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="{{route('client.cart')}}"><img src="{{asset('client/img/product/product4.jpg')}}" alt=""></a> --}}
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
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳ 82.00</span>
                                                <span class="current_price">৳ 75.00</span>
                                            </div>
                                            {{-- <div class="countdown_text">
                            </div>
                        </figure>
                      </article>
                    @endforeach
                 @endif

                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/trending-categories/categories2.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="#"><img src="{{asset('client/img/product/product4.jpg')}}"
                                alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus
                                            pretium arcu et faucibus commodo</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 82.00</span>
                                        <span class="current_price">৳ 75.00</span>
                                    </div>
                                    {{-- <div class="countdown_text">

                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2023/08/15"></div>
                                            </div> --}}
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/trending-categories/categories3.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="{{route('client.cart')}}"><img src="{{asset('client/img/product/product6.jpg')}}" alt=""></a> --}}
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
                                            {{-- <div class="countdown_text">
=======
                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/trending-categories/categories3.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="#"><img src="{{asset('client/img/product/product6.jpg')}}"
                                alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Natus erro at
                                            congue massa commodo sit Natus erro</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 80.00</span>
                                        <span class="current_price">৳ 70.00</span>
                                    </div>
                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2023/02/15"></div>
                                            </div> --}}
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/trending-categories/categories4.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="{{route('client.cart')}}"><img src="{{asset('client/img/product/product8.jpg')}}" alt=""></a> --}}
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
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳ 76.00</span>
                                                <span class="current_price">৳ 75.00</span>
                                            </div>
                                            {{-- <div class="countdown_text">
                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/trending-categories/categories4.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="#"><img src="{{asset('client/img/product/product8.jpg')}}"
                                alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam
                                            maximus eget nisi dignissim sodales eget tempor</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 76.00</span>
                                        <span class="current_price">৳ 75.00</span>
                                    </div>
                                    {{-- <div class="countdown_te
                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2023/11/15"></div>
                                            </div> --}}
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/trending-categories/categories5.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="{{route('client.cart')}}"><img src="{{asset('client/img/product/product10.jpg')}}" alt=""></a> --}}
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
                                            {{-- <div class="countdown_text">

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/trending-categories/categories5.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="#"><img src="{{asset('client/img/product/product10.jpg')}}"
                                alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est
                                            notare tellus eu nibh iaculis pretium</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 72.00</span>
                                        <span class="current_price">৳ 70.00</span>
                                    </div>
                                    {{-- <div class="countdown_text">

                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2023/12/15"></div>
                                            </div> --}}
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/trending-categories/categories1.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="{{route('client.cart')}}"><img src="{{asset('client/img/product/product12.jpg')}}" alt=""></a> --}}
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
                                                <span class="old_price">৳ 65.00</span>
                                                <span class="current_price">৳ 60.00</span>
                                            </div>
                                            {{-- <div class="countdown_text">
                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/trending-categories/categories1.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="#"><img src="{{asset('client/img/product/product12.jpg')}}"
                                alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est
                                            notare tellus eu nibh iaculis pretium</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 65.00</span>
                                        <span class="current_price">৳ 60.00</span>
                                    </div>
                                    {{-- <div class="countdown_text">

                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2023/10/15"></div>
                                            </div> --}}
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>


                                    </div>
                                </figure>
                            </article>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Games" role="tabpanel">
                        <div class="product_carousel product_style product_column5 owl-carousel">
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product5.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product6.jpg')}}" alt=""></a>
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
                                            {{-- <div class="countdown_text">

                            </div>
                        </figure>
                    </article>
                </div>
            </div>
            <div class="tab-pane fade" id="Games" role="tabpanel">
                <div class="product_carousel product_style product_column5 owl-carousel">
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product5.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product6.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Natus erro at
                                            congue massa commodo sit Natus erro</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 80.00</span>
                                        <span class="current_price">৳ 70.00</span>
                                    </div>
                                    {{-- <div class="countdown_text">

                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2023/02/15"></div>
                                            </div> --}}
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
               
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product7.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product8.jpg')}}" alt=""></a>
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
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳ 76.00</span>
                                                <span class="current_price">৳ 75.00</span>
                                            </div>
                                            {{-- <div class="countdown_text">

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product7.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product8.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam
                                            maximus eget nisi dignissim sodales eget tempor</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 76.00</span>
                                        <span class="current_price">৳ 75.00</span>
                                    </div>
                                    {{-- <div class="countdown_text
                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2023/11/15"></div>
                                            </div> --}}
                                </div>
                                <div class="add_to_cart">
                                    <a href="{{route('client.product_details')}}" title="Add to cart">Add to cart</a>
            
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product9.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product10.jpg')}}" alt=""></a>
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
                                            {{-- <div class="countdown_text"
                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product9.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product10.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est
                                            notare tellus eu nibh iaculis pretium</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 72.00</span>
                                        <span class="current_price">৳ 70.00</span>
                                    </div>
                                    {{-- <div class="countdown_text">
                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2023/12/15"></div>
                                            </div> --}}
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product11.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product12.jpg')}}" alt=""></a>
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
                                                <span class="old_price">৳ 65.00</span>
                                                <span class="current_price">৳ 60.00</span>
                                            </div>
                                            {{-- <div class="countdown_text">
                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product11.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product12.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est
                                            notare tellus eu nibh iaculis pretium</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 65.00</span>
                                        <span class="current_price">৳ 60.00</span>
                                    </div>
                                    {{-- <div class="countdown_tex
                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2023/10/15"></div>
                                            </div> --}}
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product1.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product2.jpg')}}" alt=""></a>
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
                                            {{-- <div class="countdown_text"
                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product1.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product2.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Eodem modo
                                            vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 86.00</span>
                                        <span class="current_price">৳ 79.00</span>
                                    </div>
                                    {{-- <div class="countdown_te
                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2023/12/15"></div>
                                            </div> --}}
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product3.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product4.jpg')}}" alt=""></a>
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
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳ 82.00</span>
                                                <span class="current_price">৳ 75.00</span>
                                            </div>
                                            {{-- <div class="countdown_text">

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product3.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product4.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus
                                            pretium arcu et faucibus commodo</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 82.00</span>
                                        <span class="current_price">৳ 75.00</span>
                                    </div>
                                    {{-- <div class="countdown_text">

                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2023/08/15"></div>
                                            </div> --}}
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product7.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product8.jpg')}}" alt=""></a>
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
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳ 76.00</span>
                                                <span class="current_price">৳ 75.00</span>
                                            </div>
                                            {{-- <div class="countdown_text">
                        </div>
                        </figure>
                    </article>
                </div>
            </div>
            <div class="tab-pane fade" id="Speaker" role="tabpanel">
                <div class="product_carousel product_style product_column5 owl-carousel">
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product7.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product8.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam
                                            maximus eget nisi dignissim sodales eget tempor</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 76.00</span>
                                        <span class="current_price">৳ 75.00</span>
                                    </div>
                                    {{-- <div class="countdown_text">

                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2023/11/15"></div>
                                            </div> --}}
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>


                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product1.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product2.jpg')}}" alt=""></a>
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
                           </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product1.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product2.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Eodem modo
                                            vel mattis ante facilisis nec porttitor efficitur</a></h4>
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
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>


                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product3.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product4.jpg')}}" alt=""></a>
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
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳ 82.00</span>
                                                <span class="current_price">৳ 75.00</span>
                                            </div>
                                            {{-- <div class="countdown_text">

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product3.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product4.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus
                                            pretium arcu et faucibus commodo</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 82.00</span>
                                        <span class="current_price">৳ 75.00</span>
                                    </div>
                                    {{-- <div class="countdown_text">

                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2023/08/15"></div>
                                            </div> --}}
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>


                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product5.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product6.jpg')}}" alt=""></a>
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
                                            {{-- <div class="countdown_text">

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product5.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product6.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Natus erro at
                                            congue massa commodo sit Natus erro</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 80.00</span>
                                        <span class="current_price">৳ 70.00</span>
                                    </div>
                                    {{-- <div class="countdown_text">

                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2023/02/15"></div>
                                            </div> --}}
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>


                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product9.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product10.jpg')}}" alt=""></a>
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
                                            {{-- <div class="countdown_text">

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product9.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product10.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est
                                            notare tellus eu nibh iaculis pretium</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 72.00</span>
                                        <span class="current_price">৳ 70.00</span>
                                    </div>
                                    {{-- <div class="countdown_text">

                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2023/12/15"></div>
                                            </div> --}}
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>


                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product11.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product12.jpg')}}" alt=""></a>
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
                                                <span class="old_price">৳ 65.00</span>
                                                <span class="current_price">৳ 60.00</span>
                                            </div>
                                            {{-- <div class="countdown_text">

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product11.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product12.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est
                                            notare tellus eu nibh iaculis pretium</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 65.00</span>
                                        <span class="current_price">৳ 60.00</span>
                                    </div>
                                    {{-- <div class="countdown_text">

                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2023/10/15"></div>
                                            </div> --}}
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>


                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product9.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product10.jpg')}}" alt=""></a>
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
                                            {{-- <div class="countdown_text">
                            </div>
                        </figure>
                    </article>
                </div>
            </div>
            <div class="tab-pane fade" id="Mobile" role="tabpanel">
                <div class="product_carousel product_style product_column5 owl-carousel">
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product9.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product10.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est
                                            notare tellus eu nibh iaculis pretium</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 72.00</span>
                                        <span class="current_price">৳ 70.00</span>
                                    </div>
                                    {{-- <div class="countdown_text">

                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2023/12/15"></div>
                                            </div> --}}
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>


                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product1.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product2.jpg')}}" alt=""></a>
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

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product1.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product2.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Eodem modo
                                            vel mattis ante facilisis nec porttitor efficitur</a></h4>
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
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>


                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product5.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product6.jpg')}}" alt=""></a>
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
                                            {{-- <div class="countdown_text">

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product5.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product6.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Natus erro at
                                            congue massa commodo sit Natus erro</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 80.00</span>
                                        <span class="current_price">৳ 70.00</span>
                                    </div>
                                    {{-- <div class="countdown_text">

                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2023/02/15"></div>
                                            </div> --}}
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>


                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product7.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product8.jpg')}}" alt=""></a>
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
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳ 76.00</span>
                                                <span class="current_price">৳ 75.00</span>
                                            </div>
                                            {{-- <div class="countdown_text">

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product7.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product8.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam
                                            maximus eget nisi dignissim sodales eget tempor</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 76.00</span>
                                        <span class="current_price">৳ 75.00</span>
                                    </div>
                                    {{-- <div class="countdown_text">
                                       <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2023/11/15"></div>
                                            </div> --}}
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>


                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product3.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product4.jpg')}}" alt=""></a>
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
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳ 82.00</span>
                                                <span class="current_price">৳ 75.00</span>
                                            </div>
                                            {{-- <div class="countdown_text">
                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product3.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product4.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus
                                            pretium arcu et faucibus commodo</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 82.00</span>
                                        <span class="current_price">৳ 75.00</span>
                                    </div>
                                    {{-- <div class="countdown_t
                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2023/08/15"></div>
                                            </div> --}}
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>


                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product11.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product12.jpg')}}" alt=""></a>
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
                                                <span class="old_price">৳ 65.00</span>
                                                <span class="current_price">৳ 60.00</span>
                                            </div>
                                            {{-- <div class="countdown_text">

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product11.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product12.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est
                                            notare tellus eu nibh iaculis pretium</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 65.00</span>
                                        <span class="current_price">৳ 60.00</span>
                                    </div>
                                    {{-- <div class="countdown_text
                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2023/10/15"></div>
                                            </div> --}}
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
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



                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/men/men2.jpg')}}" alt=""></a>
                                                    {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product26.jpg')}}" alt=""></a> --}}
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
                                                            <span class="old_price">৳ 65.00</span>
                                                            <span class="current_price">৳ 60.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="add_to_cart">
                                                        <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                                    </div>

                                                </div>
                                            </figure>
                                        </article>
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/men/men3.jpg')}}" alt=""></a>
                                                    {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product25.jpg')}}" alt=""></a> --}}
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
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/men/men4.jpg')}}" alt=""></a>
                                                    {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product23.jpg')}}" alt=""></a> --}}
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
                                                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                                        <div class="price_box">
                                                            <span class="old_price">৳ 76.00</span>
                                                            <span class="current_price">৳ 75.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="add_to_cart">
                                                        <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                                    </div>

                                                </div>
                                            </figure>
                                        </article>
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/men/men5.jpg')}}" alt=""></a>
                                                    {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product21.jpg')}}" alt=""></a> --}}
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
                                                    </div>
                                                    <div class="add_to_cart">
                                                        <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                                    </div>

                                                </div>
                                            </figure>
                                        </article>
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/men/men6.jpg')}}" alt=""></a>
                                                    {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product19.jpg')}}" alt=""></a> --}}
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
                                                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                                        <div class="price_box">
                                                            <span class="old_price">৳ 82.00</span>
                                                            <span class="current_price">৳ 75.00</span>
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
                                        <article class="single_product">
                                            <figure>

                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/women/women2.jpg')}}" alt=""></a>
                                                    {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product12.jpg')}}" alt=""></a> --}}
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
                                                            <span class="old_price">৳ 65.00</span>
                                                            <span class="current_price">৳ 60.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="add_to_cart">
                                                        <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                                    </div>

                                                </div>
                                            </figure>
                                        </article>
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/women/women3.jpg')}}" alt=""></a>
                                                    {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product6.jpg')}}" alt=""></a> --}}
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
                                        <article class="single_product">
                                            <figure>

                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/women/women4.jpg')}}" alt=""></a>
                                                    {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product8.jpg')}}" alt=""></a> --}}
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
                                                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                                        <div class="price_box">
                                                            <span class="old_price">৳ 76.00</span>
                                                            <span class="current_price">৳ 75.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="add_to_cart">
                                                        <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                                    </div>

                                                </div>
                                            </figure>
                                        </article>
                                        <article class="single_product">
                                            <figure>

                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/women/women5.jpg')}}" alt=""></a>
                                                    {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product2.jpg')}}" alt=""></a> --}}
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
                                                    </div>
                                                    <div class="add_to_cart">
                                                        <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                                    </div>

                                                </div>
                                            </figure>
                                        </article>
                                        <article class="single_product">
                                            <figure>

                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/women/women6.jpg')}}" alt=""></a>
                                                    {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product4.jpg')}}" alt=""></a> --}}
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
                                                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                                        <div class="price_box">
                                                            <span class="old_price">৳ 82.00</span>
                                                            <span class="current_price">৳ 75.00</span>
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




                    <div class="tab-pane fade" id="Headphone4" role="tabpanel">
                        <div class="product_carousel product_style product_column5 owl-carousel">
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/boy-collection/boy1.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product8.jpg" alt=""></a> --}}
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
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳ 76.00</span>
                                                <span class="current_price">৳ 75.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/boy-collection/boy2.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product2.jpg" alt=""></a> --}}
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
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>

                    </div>
                    <div class="product_tab_btn">
                        <ul class="nav" role="tablist" id="nav-tab3">
                            <li>
                                <a class="active" data-toggle="tab" href="#Clothing4" role="tab"
                                    aria-controls="Clothing4" aria-selected="true">
                                    Men
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#Consoles4" role="tab" aria-controls="Consoles4"
                                    aria-selected="false">
                                    Women
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#Headphone4" role="tab" aria-controls="Headphone4"
                                    aria-selected="false">
                                    Boy's Collection
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#Tablets4" role="tab" aria-controls="Tablets4"
                                    aria-selected="false">
                                    Girl's Collection
                                </a>
                            </li>
                            {{-- <li>
                                        <a data-toggle="tab" href="#Tablets4" role="tab" aria-controls="Tablets4" aria-selected="false">
                                            Mobile & Tablets
                                        </a>
                                    </li> --}}
                            {{-- <li>
                                        <a data-toggle="tab" href="#Tablets4" role="tab" aria-controls="Tablets4" aria-selected="false">
                                            Mobile & Tablets
                                        </a>
                                    </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="tab-content">
            {{-- Men section start --}}
            <div class="tab-pane fade show active" id="Clothing4" role="tabpanel">
                <div class="product_carousel product_style product_column5 owl-carousel">
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/men/men1.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="{{asset('client/img/product/product28.jpg')}}" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est
                                            notare tellus eu nibh iaculis pretium</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 72.00</span>
                                        <span class="current_price">৳ 70.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/men/men2.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="{{asset('client/img/product/product26.jpg')}}" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est
                                            notare tellus eu nibh iaculis pretium</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 65.00</span>
                                        <span class="current_price">৳ 60.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/men/men3.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="{{asset('client/img/product/product25.jpg')}}" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Natus erro at
                                            congue massa commodo sit Natus erro</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 80.00</span>
                                        <span class="current_price">৳ 70.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/men/men4.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="{{asset('client/img/product/product23.jpg')}}" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam
                                            maximus eget nisi dignissim sodales eget tempor</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 76.00</span>
                                        <span class="current_price">৳ 75.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/men/men5.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="{{asset('client/img/product/product21.jpg')}}" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Eodem modo
                                            vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 86.00</span>
                                        <span class="current_price">৳ 79.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/men/men6.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="{{asset('client/img/product/product19.jpg')}}" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus
                                            pretium arcu et faucibus commodo</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 82.00</span>
                                        <span class="current_price">৳ 75.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                </div>
            </div>
            {{-- men section end --}}

            {{-- women section start --}}
            <div class="tab-pane fade" id="Consoles4" role="tabpanel">
                <div class="product_carousel product_style product_column5 owl-carousel">
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/women/women1.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="{{asset('client/img/product/product10.jpg')}}" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est
                                            notare tellus eu nibh iaculis pretium</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 72.00</span>
                                        <span class="current_price">৳ 70.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/women/women2.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="{{asset('client/img/product/product12.jpg')}}" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est
                                            notare tellus eu nibh iaculis pretium</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 65.00</span>
                                        <span class="current_price">৳ 60.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/women/women3.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="{{asset('client/img/product/product6.jpg')}}" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Natus erro at
                                            congue massa commodo sit Natus erro</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 80.00</span>
                                        <span class="current_price">৳ 70.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/women/women4.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="{{asset('client/img/product/product8.jpg')}}" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam
                                            maximus eget nisi dignissim sodales eget tempor</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 76.00</span>
                                        <span class="current_price">৳ 75.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/women/women5.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="{{asset('client/img/product/product2.jpg')}}" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Eodem modo
                                            vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 86.00</span>
                                        <span class="current_price">৳ 79.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/women/women6.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="{{asset('client/img/product/product4.jpg')}}" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus
                                            pretium arcu et faucibus commodo</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 82.00</span>
                                        <span class="current_price">৳ 75.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                </div>
            </div>
            {{-- women section end --}}

            <div class="tab-pane fade" id="Headphone4" role="tabpanel">
                <div class="product_carousel product_style product_column5 owl-carousel">
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/boy-collection/boy1.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="assets/img/product/product8.jpg" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam
                                            maximus eget nisi dignissim sodales eget tempor</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 76.00</span>
                                        <span class="current_price">৳ 75.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/boy-collection/boy2.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="assets/img/product/product2.jpg" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Eodem modo
                                            vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 86.00</span>
                                        <span class="current_price">৳ 79.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/boy-collection/boy3.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="assets/img/product/product4.jpg" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus
                                            pretium arcu et faucibus commodo</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 82.00</span>
                                        <span class="current_price">৳ 75.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/boy-collection/boy4.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="assets/img/product/product6.jpg" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Natus erro at
                                            congue massa commodo sit Natus erro</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 80.00</span>
                                        <span class="current_price">৳ 70.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/boy-collection/boy5.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="assets/img/product/product10.jpg" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est
                                            notare tellus eu nibh iaculis pretium</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 72.00</span>
                                        <span class="current_price">৳ 70.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/boy-collection/boy6.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="assets/img/product/product12.jpg" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est
                                            notare tellus eu nibh iaculis pretium</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 65.00</span>
                                        <span class="current_price">৳ 60.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                </div>
            </div>
            {{-- boy's collection end --}}
            <div class="tab-pane fade" id="Tablets4" role="tabpanel">
                <div class="product_carousel product_style product_column5 owl-carousel">
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/girl-collection/girl1.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="assets/img/product/product10.jpg" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est
                                            notare tellus eu nibh iaculis pretium</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 72.00</span>
                                        <span class="current_price">৳ 70.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/girl-collection/girl2.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="assets/img/product/product2.jpg" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Eodem modo
                                            vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 86.00</span>
                                        <span class="current_price">৳ 79.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/girl-collection/girl3.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="assets/img/product/product6.jpg" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Natus erro at
                                            congue massa commodo sit Natus erro</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 80.00</span>
                                        <span class="current_price">৳ 70.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>


                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/girl-collection/girl4.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="assets/img/product/product8.jpg" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam
                                            maximus eget nisi dignissim sodales eget tempor</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 76.00</span>
                                        <span class="current_price">৳ 75.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                       
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/boy-collection/boy3.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product4.jpg" alt=""></a> --}}
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
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳ 82.00</span>
                                                <span class="current_price">৳ 75.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        
                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/girl-collection/girl5.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="assets/img/product/product4.jpg" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus
                                            pretium arcu et faucibus commodo</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 82.00</span>
                                        <span class="current_price">৳ 75.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/girl-collection/girl6.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="assets/img/product/product12.jpg" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est
                                            notare tellus eu nibh iaculis pretium</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 65.00</span>
                                        <span class="current_price">৳ 60.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/boy-collection/boy4.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product6.jpg" alt=""></a> --}}
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
         

        </d
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/boy-collection/boy5.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product10.jpg" alt=""></a> --}}
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
                                   

{{--  Ads section  --}}


                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/boy-collection/boy6.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product12.jpg" alt=""></a> --}}
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
                                                <span class="old_price">৳ 65.00</span>
                                                <span class="current_price">৳ 60.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
<section class="ads_area mb-3">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="ads_area_img" style="margin-top: -40px;">
                <img src="{{ asset('client/img/logo/ads_1.jpg')}}">
            </div>
        </div>
    </div>
</section>

{{--  Ads section end  --}}
<!--product area start-->
<div class="product_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product_header">
                    <div class="section_title s_title_style3">
                        <h2>Featured Pro

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
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/featured-products/product1.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="{{asset('client/img/featured-products/product1.jpg')}}" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Natus erro at
                                            congue massa commodo sit Natus erro</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 80.00</span>
                                        <span class="current_price">৳ 70.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>


                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/girl-collection/girl1.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product10.jpg" alt=""></a> --}}
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
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/featured-products/product2.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="{{asset('client/img/product/product15.jpg')}}" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam
                                            maximus eget nisi dignissim sodales eget tempor</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 76.00</span>
                                        <span class="current_price">৳ 75.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>


                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/featured-products/product3.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="{{asset('client/img/product/product13.jpg')}}" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Eodem modo
                                            vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 86.00</span>
                                        <span class="current_price">৳ 79.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/girl-collection/girl2.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product2.jpg" alt=""></a> --}}
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
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/featured-products/product4.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="{{asset('client/img/product/product11.jpg')}}" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus
                                            pretium arcu et faucibus commodo</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 82.00</span>
                                        <span class="current_price">৳ 75.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/featured-products/product5.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="{{asset('client/img/product/product9.jpg')}}" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est
                                            notare tellus eu nibh iaculis pretium</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 72.00</span>
                                        <span class="current_price">৳ 70.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>


                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/girl-collection/girl3.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product6.jpg" alt=""></a> --}}
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
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/featured-products/product6.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="{{asset('client/img/product/product7.jpg')}}" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est
                                            notare tellus eu nibh iaculis pretium</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 65.00</span>
                                        <span class="current_price">৳ 60.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                </div>
            </div>
            <div class="tab-pane fade" id="Networking2" role="tabpanel">
                <div class="product_carousel product_style product_column5 owl-carousel">
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/featured-products/product1.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="{{asset('client/img/product/product2.jpg')}}" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Natus erro at
                                            congue massa commodo sit Natus erro</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 80.00</span>
                                        <span class="current_price">৳ 70.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/girl-collection/girl4.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product8.jpg" alt=""></a> --}}
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
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳ 76.00</span>
                                                <span class="current_price">৳ 75.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/girl-collection/girl5.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product4.jpg" alt=""></a> --}}
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
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳ 82.00</span>
                                                <span class="current_price">৳ 75.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/featured-products/product2.jpg')}}" alt=""></a>
                                {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                    src="{{asset('client/img/product/product8.jpg')}}" alt=""></a> --}}
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam
                                            maximus eget nisi dignissim sodales eget tempor</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 76.00</span>
                                        <span class="current_price">৳ 75.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product9.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product10.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est
                                            notare tellus eu nibh iaculis pretium</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 72.00</span>
                                        <span class="current_price">৳ 70.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product11.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product12.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est
                                            notare tellus eu nibh iaculis pretium</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 65.00</span>
                                        <span class="current_price">৳ 60.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/girl-collection/girl6.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product12.jpg" alt=""></a> --}}
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
                                                <span class="old_price">৳ 65.00</span>
                                                <span class="current_price">৳ 60.00</span>
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
                        @endforeach
                    @endif
                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product1.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product2.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Eodem modo
                                            vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 86.00</span>
                                        <span class="current_price">৳ 79.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product3.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product4.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus
                                            pretium arcu et faucibus commodo</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 82.00</span>
                                        <span class="current_price">৳ 75.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                </div>
            </div>
            <div class="tab-pane fade" id="Networking3" role="tabpanel">
                <div class="product_carousel product_style product_column5 owl-carousel">
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product7.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product8.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam
                                            maximus eget nisi dignissim sodales eget tempor</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 76.00</span>
                                        <span class="current_price">৳ 75.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product1.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product2.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Eodem modo
                                            vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 86.00</span>
                                        <span class="current_price">৳ 79.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product3.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product4.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus
                                            pretium arcu et faucibus commodo</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 82.00</span>
                                        <span class="current_price">৳ 75.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product5.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product6.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Natus erro at
                                            congue massa commodo sit Natus erro</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 80.00</span>
                                        <span class="current_price">৳ 70.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product9.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product10.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est
                                            notare tellus eu nibh iaculis pretium</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 72.00</span>
                                        <span class="current_price">৳ 70.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product11.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product12.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est
                                            notare tellus eu nibh iaculis pretium</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 65.00</span>
                                        <span class="current_price">৳ 60.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                </div>
            </div>
            <div class="tab-pane fade" id="Audio2" role="tabpanel">
                <div class="product_carousel product_style product_column5 owl-carousel">
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product9.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product10.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est
                                            notare tellus eu nibh iaculis pretium</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 72.00</span>
                                        <span class="current_price">৳ 70.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product1.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product2.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Eodem modo
                                            vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 86.00</span>
                                        <span class="current_price">৳ 79.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product5.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product6.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Natus erro at
                                            congue massa commodo sit Natus erro</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 80.00</span>
                                        <span class="current_price">৳ 70.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product7.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product8.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam
                                            maximus eget nisi dignissim sodales eget tempor</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 76.00</span>
                                        <span class="current_price">৳ 75.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product3.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product4.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus
                                            pretium arcu et faucibus commodo</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 82.00</span>
                                        <span class="current_price">৳ 75.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product11.jpg')}}" alt=""></a>
                                <a class="secondary_img" href="{{route('client.product_details')}}"><img
                                        src="{{asset('client/img/product/product12.jpg')}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                data-tippy-arrow="true" data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box" data-tippy="quick view"><i
                                                    class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est
                                            notare tellus eu nibh iaculis pretium</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳ 65.00</span>
                                        <span class="current_price">৳ 60.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="#" title="Add to cart">Add to cart</a>
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
{{-- <div class="product_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product_header">
                            <div class="section_title s_title_style3">
                                <h2>Top rated</h2>
                            </div>
                            <div class="product_tab_btn">
                                <ul class="nav" role="tablist" id="nav-tab4">
                                    <li>
                                        <a class="active" data-toggle="tab" href="#Computer5" role="tab" aria-controls="Computer5" aria-selected="true">
                                            Computer
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#Networking5" role="tab" aria-controls="Networking5" aria-selected="false">
                                            Networking
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#Computer6" role="tab" aria-controls="Computer6" aria-selected="false">
                                            Computer & Networking
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#Audio5" role="tab" aria-controls="Audio5" aria-selected="false">
                                            Television & Audio
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="Computer5" role="tabpanel">
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
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/featured-products/product2.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product15.jpg')}}" alt=""></a> --}}
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
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳ 76.00</span>
                                                <span class="current_price">৳ 75.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img
    src="{{asset('client/img/product/product19.jpg')}}" alt=""></a>
<a class="secondary_img" href="{{route('client.product_details')}}"><img
        src="{{asset('client/img/product/product20.jpg')}}" alt=""></a>
<div class="label_product">
    <span class="label_sale">Sale</span>
</div>
<div class="action_links">
    <ul>
        <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true"
                data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a>
        </li>
        <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"
                data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
        <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                data-tippy-inertia="true" data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i
                    class="ion-ios-search-strong"></i></a></li>
    </ul>
</div>
</div>
<div class="product_content">
    <div class="product_content_inner">
        <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam maximus eget nisi dignissim
                sodales eget tempor</a></h4>
        <div class="price_box">
            <span class="old_price">৳ 76.00</span>
            <span class="current_price">৳ 75.00</span>
        </div>
    </div>
    <div class="add_to_cart">
        <a href="#" title="Add to cart">Add to cart</a>
    </div>

</div>
</figure>
</article>
<article class="single_product">
    <figure>
        <div class="product_thumb">
            <a class="primary_img" href="{{route('client.product_details')}}"><img
                    src="{{asset('client/img/product/product21.jpg')}}" alt=""></a>
            <a class="secondary_img" href="{{route('client.product_details')}}"><img
                    src="{{asset('client/img/product/product22.jpg')}}" alt=""></a>
            <div class="label_product">
                <span class="label_sale">Sale</span>
            </div>
            <div class="action_links">
                <ul>
                    <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top"
                            data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                class="ion-android-favorite-outline"></i></a></li>
                    <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                            data-tippy-inertia="true" data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                    <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                            data-tippy-inertia="true" data-bs-toggle="modal" data-bs-target="#modal_box"
                            data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="product_content">
            <div class="product_content_inner">
                <h4 class="product_name"><a href="{{route('client.product_details')}}">Natus erro at congue massa
                        commodo sit Natus erro</a></h4>
                <div class="price_box">
                    <span class="old_price">৳ 80.00</span>
                    <span class="current_price">৳ 70.00</span>
                </div>
            </div>
            <div class="add_to_cart">
                <a href="#" title="Add to cart">Add to cart</a>
            </div>


                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/featured-products/product3.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product13.jpg')}}" alt=""></a> --}}
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
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
        </div>
    </figure>
</article>
<article class="single_product">
    <figure>
        <div class="product_thumb">
            <a class="primary_img" href="{{route('client.product_details')}}"><img
                    src="{{asset('client/img/product/product14.jpg')}}" alt=""></a>
            <a class="secondary_img" href="{{route('client.product_details')}}"><img
                    src="{{asset('client/img/product/product15.jpg')}}" alt=""></a>
            <div class="label_product">
                <span class="label_sale">Sale</span>
            </div>
            <div class="action_links">
                <ul>
                    <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top"
                            data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                class="ion-android-favorite-outline"></i></a></li>
                    <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                            data-tippy-inertia="true" data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                    <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                            data-tippy-inertia="true" data-bs-toggle="modal" data-bs-target="#modal_box"
                            data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="product_content">
            <div class="product_content_inner">
                <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus pretium arcu et
                        faucibus commodo</a></h4>
                <div class="price_box">
                    <span class="old_price">৳ 82.00</span>
                    <span class="current_price">৳ 75.00</span>
                </div>
            </div>
            <div class="add_to_cart">
                <a href="#" title="Add to cart">Add to cart</a>
            </div>

        </div>
    </figure>
</article>
<article class="single_product">
    <figure>
        <div class="product_thumb">
            <a class="primary_img" href="{{route('client.product_details')}}"><img
                    src="{{asset('client/img/product/product23.jpg')}}" alt=""></a>
            <a class="secondary_img" href="{{route('client.product_details')}}"><img
                    src="{{asset('client/img/product/product24.jpg')}}" alt=""></a>
            <div class="label_product">
                <span class="label_sale">Sale</span>
            </div>
            <div class="action_links">
                <ul>
                    <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top"
                            data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                class="ion-android-favorite-outline"></i></a></li>
                    <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                            data-tippy-inertia="true" data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                    <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                            data-tippy-inertia="true" data-bs-toggle="modal" data-bs-target="#modal_box"
                            data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="product_content">
            <div class="product_content_inner">
                <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est notare tellus eu nibh
                        iaculis pretium</a></h4>
                <div class="price_box">
                    <span class="old_price">৳ 72.00</span>
                    <span class="current_price">৳ 70.00</span>
                </div>
            </div>
            <div class="add_to_cart">
                <a href="#" title="Add to cart">Add to cart</a>
            </div>
                                   <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/featured-products/product4.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product11.jpg')}}" alt=""></a> --}}
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
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳ 82.00</span>
                                                <span class="current_price">৳ 75.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/featured-products/product5.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product9.jpg')}}" alt=""></a> --}}
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
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/featured-products/product6.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product7.jpg')}}" alt=""></a> --}}
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
                                                <span class="old_price">৳ 65.00</span>
                                                <span class="current_price">৳ 60.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
        </div>
    </figure>
</article>
<article class="single_product">
    <figure>
        <div class="product_thumb">
            <a class="primary_img" href="{{route('client.product_details')}}"><img
                    src="{{asset('client/img/product/product5.jpg')}}" alt=""></a>
            <a class="secondary_img" href="{{route('client.product_details')}}"><img
                    src="{{asset('client/img/product/product6.jpg')}}" alt=""></a>
            <div class="label_product">
                <span class="label_sale">Sale</span>
            </div>
            <div class="action_links">
                <ul>
                    <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top"
                            data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                class="ion-android-favorite-outline"></i></a></li>
                    <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                            data-tippy-inertia="true" data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                    <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                            data-tippy-inertia="true" data-bs-toggle="modal" data-bs-target="#modal_box"
                            data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="product_content">
            <div class="product_content_inner">
                <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est notare tellus eu nibh
                        iaculis pretium</a></h4>
                <div class="price_box">
                    <span class="old_price">৳ 65.00</span>
                    <span class="current_price">৳ 60.00</span>
                </div>
            </div>
            <div class="add_to_cart">
                <a href="#" title="Add to cart">Add to cart</a>
            </div>

        </div>
    </figure>
</article>
<article class="single_product">
    <figure>
        <div class="product_thumb">
            <a class="primary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product1.jpg"
                    alt=""></a>
            <a class="secondary_img" href="{{route('client.product_details')}}"><img
                    src="assets/img/product/product2.jpg" alt=""></a>
            <div class="label_product">
                <span class="label_sale">Sale</span>
            </div>
            <div class="action_links">
                <ul>
                    <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top"
                            data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                class="ion-android-favorite-outline"></i></a></li>
                    <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                            data-tippy-inertia="true" data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                    <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                            data-tippy-inertia="true" data-bs-toggle="modal" data-bs-target="#modal_box"
                            data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="product_content">
            <div class="product_content_inner">
                <h4 class="product_name"><a href="{{route('client.product_details')}}">Eodem modo vel mattis ante
                        facilisis nec porttitor efficitur</a></h4>
                <div class="price_box">
                    <span class="old_price">৳ 86.00</span>
                    <span class="current_price">৳ 79.00</span>
                </div>
            </div>
            <div class="add_to_cart">
                <a href="#" title="Add to cart">Add to cart</a>
            </div>

        </div>
    </figure>
</article>
</div>
</div>
<div class="tab-pane fade" id="Networking5" role="tabpanel">
    <div class="product_carousel product_style product_column5 owl-carousel">
        <article class="single_product">
            <figure>

                <div class="product_thumb">
                    <a class="primary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product5.jpg" alt=""></a>
                    <a class="secondary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product6.jpg" alt=""></a>
                    <div class="label_product">
                        <span class="label_sale">Sale</span>
                    </div>
                    <div class="action_links">
                        <ul>
                            <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top"
                                    data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                        class="ion-android-favorite-outline"></i></a></li>
                            <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a>
                            </li>
                            <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-bs-toggle="modal" data-bs-target="#modal_box"
                                    data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="product_content">
                    <div class="product_content_inner">
                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Natus erro at congue
                                massa commodo sit Natus erro</a></h4>
                        <div class="price_box">
                            <span class="old_price">৳ 80.00</span>
                            <span class="current_price">৳ 70.00</span>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="Networking2" role="tabpanel">
                        <div class="product_carousel product_style product_column5 owl-carousel">
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/featured-products/product1.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product2.jpg')}}" alt=""></a> --}}
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
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/featured-products/product2.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product8.jpg')}}" alt=""></a> --}}
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
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳ 76.00</span>
                                                <span class="current_price">৳ 75.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product9.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product10.jpg')}}" alt=""></a>
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
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product11.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product12.jpg')}}" alt=""></a>
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
                                                <span class="old_price">৳ 65.00</span>
                                                <span class="current_price">৳ 60.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product1.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product2.jpg')}}" alt=""></a>
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
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product3.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product4.jpg')}}" alt=""></a>
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
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳ 82.00</span>
                                                <span class="current_price">৳ 75.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                      
                    <div class="add_to_cart">
                        <a href="#" title="Add to cart">Add to cart</a>
                    </div>

                </div>
            </figure>
        </article>
        <article class="single_product">
            <figure>

                <div class="product_thumb">
                    <a class="primary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product7.jpg" alt=""></a>
                    <a class="secondary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product8.jpg" alt=""></a>
                    <div class="label_product">
                        <span class="label_sale">Sale</span>
                    </div>
                    <div class="action_links">
                        <ul>
                            <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top"
                                    data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                        class="ion-android-favorite-outline"></i></a></li>
                            <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a>
                            </li>
                            <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-bs-toggle="modal" data-bs-target="#modal_box"
                                    data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="product_content">
                    <div class="product_content_inner">
                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam maximus eget nisi
                                dignissim sodales eget tempor</a></h4>
                        <div class="price_box">
                            <span class="old_price">৳ 76.00</span>
                            <span class="current_price">৳ 75.00</span>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="Networking3" role="tabpanel">
                        <div class="product_carousel product_style product_column5 owl-carousel">
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product7.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product8.jpg')}}" alt=""></a>
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
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳ 76.00</span>
                                                <span class="current_price">৳ 75.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product1.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product2.jpg')}}" alt=""></a>
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
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product3.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product4.jpg')}}" alt=""></a>
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
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳ 82.00</span>
                                                <span class="current_price">৳ 75.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product5.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product6.jpg')}}" alt=""></a>
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
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product9.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product10.jpg')}}" alt=""></a>
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
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product11.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product12.jpg')}}" alt=""></a>
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
                                                <span class="old_price">৳ 65.00</span>
                                                <span class="current_price">৳ 60.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>

                    <div class="add_to_cart">
                        <a href="#" title="Add to cart">Add to cart</a>
        

                </div>
            </figure>
        </article>
        <article class="single_product">
            <figure>

                <div class="product_thumb">
                    <a class="primary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product9.jpg" alt=""></a>
                    <a class="secondary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product10.jpg" alt=""></a>
                    <div class="label_product">
                        <span class="label_sale">Sale</span>
                    </div>
                    <div class="action_links">
                        <ul>
                            <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top"
                                    data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                        class="ion-android-favorite-outline"></i></a></li>
                            <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a>
                            </li>
                            <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-bs-toggle="modal" data-bs-target="#modal_box"
                                    data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="product_content">
                    <div class="product_content_inner">
                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est notare tellus
                                eu nibh iaculis pretium</a></h4>
                        <div class="price_box">
                            <span class="old_price">৳ 72.00</span>
                            <span class="current_price">৳ 70.00</span>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="Audio2" role="tabpanel">
                        <div class="product_carousel product_style product_column5 owl-carousel">
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product9.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product10.jpg')}}" alt=""></a>
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
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product1.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product2.jpg')}}" alt=""></a>
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
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product5.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product6.jpg')}}" alt=""></a>
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
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product7.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product8.jpg')}}" alt=""></a>
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
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳ 76.00</span>
                                                <span class="current_price">৳ 75.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product3.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product4.jpg')}}" alt=""></a>
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
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳ 82.00</span>
                                                <span class="current_price">৳ 75.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product11.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product12.jpg')}}" alt=""></a>
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
                                                <span class="old_price">৳ 65.00</span>
                                                <span class="current_price">৳ 60.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>

                    <div class="add_to_cart">
                        <a href="#" title="Add to cart">Add to cart</a>
                    </div>

                </div>
            </figure>
        </article>
        <article class="single_product">
            <figure>

                <div class="product_thumb">
                    <a class="primary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product11.jpg" alt=""></a>
                    <a class="secondary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product12.jpg" alt=""></a>
                    <div class="label_product">
                        <span class="label_sale">Sale</span>
                    </div>
                    <div class="action_links">
                        <ul>
                            <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top"
                                    data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                        class="ion-android-favorite-outline"></i></a></li>
                            <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a>
                            </li>
                            <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-bs-toggle="modal" data-bs-target="#modal_box"
                                    data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="product_content">
                    <div class="product_content_inner">
                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est notare tellus
                                eu nibh iaculis pretium</a></h4>
                        <div class="price_box">
                            <span class="old_price">৳ 65.00</span>
                            <span class="current_price">৳ 60.00</span>
                        </div>
                    </div>

                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="Computer5" role="tabpanel">
                        <div class="product_carousel product_style product_column5 owl-carousel">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product19.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product20.jpg')}}" alt=""></a>
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
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳ 76.00</span>
                                                <span class="current_price">৳ 75.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product21.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product22.jpg')}}" alt=""></a>
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
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product14.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product15.jpg')}}" alt=""></a>
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
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳ 82.00</span>
                                                <span class="current_price">৳ 75.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product23.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product24.jpg')}}" alt=""></a>
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
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product5.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product6.jpg')}}" alt=""></a>
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
                                                <span class="old_price">৳ 65.00</span>
                                                <span class="current_price">৳ 60.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product1.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product2.jpg" alt=""></a>
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
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                    <div class="add_to_cart">
                        <a href="#" title="Add to cart">Add to cart</a>
                    </div>


                </div>
            </figure>
        </article>
        <article class="single_product">
            <figure>

                <div class="product_thumb">
                    <a class="primary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product1.jpg" alt=""></a>
                    <a class="secondary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product2.jpg" alt=""></a>
                    <div class="label_product">
                        <span class="label_sale">Sale</span>
                    </div>
                    <div class="action_links">
                        <ul>
                            <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top"
                                    data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                        class="ion-android-favorite-outline"></i></a></li>
                            <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a>
                            </li>
                            <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-bs-toggle="modal" data-bs-target="#modal_box"
                                    data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="product_content">
                    <div class="product_content_inner">
                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Eodem modo vel mattis
                                ante facilisis nec porttitor efficitur</a></h4>
                        <div class="price_box">
                            <span class="old_price">৳ 86.00</span>
                            <span class="current_price">৳ 79.00</span>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="Networking5" role="tabpanel">
                        <div class="product_carousel product_style product_column5 owl-carousel">
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product5.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product6.jpg" alt=""></a>
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
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product7.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product8.jpg" alt=""></a>
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
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳ 76.00</span>
                                                <span class="current_price">৳ 75.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product9.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product10.jpg" alt=""></a>
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
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product11.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product12.jpg" alt=""></a>
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
                                                <span class="old_price">৳ 65.00</span>
                                                <span class="current_price">৳ 60.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product1.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product2.jpg" alt=""></a>
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
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product3.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product4.jpg" alt=""></a>
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
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳ 82.00</span>
                                                <span class="current_price">৳ 75.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                    <div class="add_to_cart">
                        <a href="#" title="Add to cart">Add to cart</a>
                    </div>

                </div>
            </figure>
        </article>
        <article class="single_product">
            <figure>

                <div class="product_thumb">
                    <a class="primary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product3.jpg" alt=""></a>
                    <a class="secondary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product4.jpg" alt=""></a>
                    <div class="label_product">
                        <span class="label_sale">Sale</span>
                    </div>
                    <div class="action_links">
                        <ul>
                            <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top"
                                    data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                        class="ion-android-favorite-outline"></i></a></li>
                            <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a>
                            </li>
                            <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-bs-toggle="modal" data-bs-target="#modal_box"
                                    data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="product_content">
                    <div class="product_content_inner">
                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus pretium arcu
                                et faucibus commodo</a></h4>
                        <div class="price_box">
                            <span class="old_price">৳ 82.00</span>
                            <span class="current_price">৳ 75.00</span>
                        </div>
                   
                    <div class="tab-pane fade" id="Computer6" role="tabpanel">
                        <div class="product_carousel product_style product_column5 owl-carousel">
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product7.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product8.jpg" alt=""></a>
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
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳ 76.00</span>
                                                <span class="current_price">৳ 75.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product1.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product2.jpg" alt=""></a>
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
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product3.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product4.jpg" alt=""></a>
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
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳ 82.00</span>
                                                <span class="current_price">৳ 75.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product5.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product6.jpg" alt=""></a>
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
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product9.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product10.jpg" alt=""></a>
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
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product11.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product12.jpg" alt=""></a>
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
                                                <span class="old_price">৳ 65.00</span>
                                                <span class="current_price">৳ 60.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                    <div class="add_to_cart">
                        <a href="#" title="Add to cart">Add to cart</a>
                    </div>

                </div>
            </figure>
        </article>
    </div>
</div>
<div class="tab-pane fade" id="Computer6" role="tabpanel">
    <div class="product_carousel product_style product_column5 owl-carousel">
        <article class="single_product">
            <figure>

                <div class="product_thumb">
                    <a class="primary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product7.jpg" alt=""></a>
                    <a class="secondary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product8.jpg" alt=""></a>
                    <div class="label_product">
                        <span class="label_sale">Sale</span>
                    </div>
                    <div class="action_links">
                        <ul>
                            <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top"
                                    data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                        class="ion-android-favorite-outline"></i></a></li>
                            <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a>
                            </li>
                            <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-bs-toggle="modal" data-bs-target="#modal_box"
                                    data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="product_content">
                    <div class="product_content_inner">
                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam maximus eget nisi
                                dignissim sodales eget tempor</a></h4>
                        <div class="price_box">
                            <span class="old_price">৳ 76.00</span>
                            <span class="current_price">৳ 75.00</span>
                        </div>
                    </div>
                    <div class="add_to_cart">
                        <a href="#" title="Add to cart">Add to cart</a>
                    </div>


                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product9.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product10.jpg" alt=""></a>
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
        <article class="single_product">
            <figure>
                <div class="product_thumb">
                    <a class="primary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product1.jpg" alt=""></a>
                    <a class="secondary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product2.jpg" alt=""></a>
                    <div class="label_product">
                        <span class="label_sale">Sale</span>
                    </div>
                    <div class="action_links">
                        <ul>
                            <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top"
                                    data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                        class="ion-android-favorite-outline"></i></a></li>
                            <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a>
                            </li>
                            <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-bs-toggle="modal" data-bs-target="#modal_box"
                                    data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="product_content">
                    <div class="product_content_inner">
                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Eodem modo vel mattis
                                ante facilisis nec porttitor efficitur</a></h4>
                        <div class="price_box">
                            <span class="old_price">৳ 86.00</span>
                            <span class="current_price">৳ 79.00</span>
                        </div>
                    </div>
                    <div class="add_to_cart">
                        <a href="#" title="Add to cart">Add to cart</a>
                  

                </div>
            </figure>
        </article>
        <article class="single_product">
            <figure>

                <div class="product_thumb">
                    <a class="primary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product3.jpg" alt=""></a>
                    <a class="secondary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product4.jpg" alt=""></a>
                    <div class="label_product">
                        <span class="label_sale">Sale</span>
                    </div>
                    <div class="action_links">
               
                            <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top"
                                    data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                        class="ion-android-favorite-outline"></i></a></li>
                            <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a>
                            </li>
                            <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-bs-toggle="modal" data-bs-target="#modal_box"
                                    data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="product_content">
                    <div class="product_content_inner">
                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus pretium arcu
                                et faucibus commodo</a></h4>
                        <div class="price_box">
                            <span class="old_price">৳ 82.00</span>
                            <span class="current_price">৳ 75.00</span>
                        </div>
                    </div>
                    <div class="add_to_cart">
                        <a href="#" title="Add to cart">Add to cart</a>
                    </div>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product1.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product2.jpg" alt=""></a>
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
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                </div>
            </figure>
        </article>
        <article class="single_product">
            <figure>

                <div class="product_thumb">
                    <a class="primary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product5.jpg" alt=""></a>
                    <a class="secondary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product6.jpg" alt=""></a>
                    <div class="label_product">
                        <span class="label_sale">Sale</span>
                    </div>
                    <div class="action_links">
                        <ul>
                            <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top"
                                    data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                        class="ion-android-favorite-outline"></i></a></li>
                            <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a>
                            </li>
                            <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-bs-toggle="modal" data-bs-target="#modal_box"
                                    data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="product_content">
                    <div class="product_content_inner">
                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Natus erro at congue
                                massa commodo sit Natus erro</a></h4>
                        <div class="price_box">
                            <span class="old_price">৳ 80.00</span>
                            <span class="current_price">৳ 70.00</span>
                        </div>
                    </div>
                    <div class="add_to_cart">
                        <a href="#" title="Add to cart">Add to cart</

                </div>
            </figure>
        </article>
        <article class="single_product">
            <figure>

                <div class="product_thumb">
                    <a class="primary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product9.jpg" alt=""></a>
                    <a class="secondary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product10.jpg" alt=""></a>
                    <div class="label_product">
                        <span class="label_sale">Sale</span>
                    </div>
                    <div class="action_links">
                        <ul>
                            <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top"
                                    data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                        class="ion-android-favorite-outline"></i></a></li>
                            <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a>
                            </li>
                            <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-bs-toggle="modal" data-bs-target="#modal_box"
                                    data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="product_content">
                    <div class="product_content_inner">
                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est notare tellus
                                eu nibh iaculis pretium</a></h4>
                        <div class="price_box">
                            <span class="old_price">৳ 72.00</span>
                            <span class="current_price">৳ 70.00</span>
                        </div>
                    </div>
                    <div class="add_to_cart">
                        <a href="#" title="Add to cart">Add to cart</a>
                    </div>


                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product5.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product6.jpg" alt=""></a>
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
        <article class="single_product">
            <figure>

                <div class="product_thumb">
                    <a class="primary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product11.jpg" alt=""></a>
                    <a class="secondary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product12.jpg" alt=""></a>
                    <div class="label_product">
                        <span class="label_sale">Sale</span>
                    </div>
                    <div class="action_links">
                        <ul>
                            <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top"
                                    data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                        class="ion-android-favorite-outline"></i></a></li>
                            <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a>
                            </li>
                            <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-bs-toggle="modal" data-bs-target="#modal_box"
                                    data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="product_content">
                    <div class="product_content_inner">
                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est notare tellus
                                eu nibh iaculis pretium</a></h4>
                        <div class="price_box">
                            <span class="old_price">৳ 65.00</span>
                            <span class="current_price">৳ 60.00</span>
                        </div>
                    </div>
                    <div class="add_to_cart">
                        <a href="#" title="Add to cart">Add to cart</a>
                    </div>

                </div>
            </figure>
        </article>
    </div>
</div>
<div class="tab-pane fade" id="Audio5" role="tabpanel">
    <div class="product_carousel product_style product_column5 owl-carousel">
        <article class="single_product">
            <figure>

                <div class="product_thumb">
                    <a class="primary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product9.jpg" alt=""></a>
                    <a class="secondary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product10.jpg" alt=""></a>
                    <div class="label_product">
                        <span class="label_sale">Sale</span>
                    </div>
                    <div class="action_links">
                        <ul>
                            <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top"
                                    data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                        class="ion-android-favorite-outline"></i></a></li>
                            <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a>
                            </li>
                            <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-bs-toggle="modal" data-bs-target="#modal_box"
                                    data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="product_content">
                    <div class="product_content_inner">
                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est notare tellus
                                eu nibh iaculis pretium</a></h4>
                        <div class="price_box">
                            <span class="old_price">৳ 72.00</span>
                            <span class="current_price">৳ 70.00</span>
                        </div>
                    </div>
                    <div class="add_to_cart">
                        <a href="#" title="Add to cart">Add to cart</a>
              
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product7.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product8.jpg" alt=""></a>
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
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳ 76.00</span>
                                                <span class="current_price">৳ 75.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product3.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product4.jpg" alt=""></a>
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
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳ 82.00</span>
                                                <span class="current_price">৳ 75.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>

                </div>
            </figure>
        </article>
        <article class="single_product">
            <figure>

                <div class="product_thumb">
                    <a class="primary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product1.jpg" alt=""></a>
                    <a class="secondary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product2.jpg" alt=""></a>
                    <div class="label_product">
                        <span class="label_sale">Sale</span>
                    </div>
                    <div class="action_links">
                        <ul>
                            <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top"
                                    data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                        class="ion-android-favorite-outline"></i></a></li>
                            <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a>
                            </li>
                            <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-bs-toggle="modal" data-bs-target="#modal_box"
                                    data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="product_content">
                    <div class="product_content_inner">
                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Eodem modo vel mattis
                                ante facilisis nec porttitor efficitur</a></h4>
                        <div class="price_box">
                            <span class="old_price">৳ 86.00</span>
                            <span class="current_price">৳ 79.00</span>
                        </div>
                    </div>
                    <div class="add_to_cart">
                        <a href="#" title="Add to cart">Add to cart</a>
                    </div>

                </div>
            </figure>
        </article>
        <article class="single_product">
            <figure>

                <div class="product_thumb">
                    <a class="primary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product5.jpg" alt=""></a>
                    <a class="secondary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product6.jpg" alt=""></a>
                    <div class="label_product">
                        <span class="label_sale">Sale</span>
                    </div>
                    <div class="action_links">
                        <ul>
                            <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top"
                                    data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                        class="ion-android-favorite-outline"></i></a></li>
                            <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a>
                            </li>
                            <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-bs-toggle="modal" data-bs-target="#modal_box"
                                    data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="product_content">
                    <div class="product_content_inner">
                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Natus erro at congue
                                massa commodo sit Natus erro</a></h4>
                        <div class="price_box">
                            <span class="old_price">৳ 80.00</span>
                            <span class="current_price">৳ 70.00</span>
                        </div>
                    </div>
                    <div class="add_to_cart">
                        <a href="#" title="Add to cart">Add to cart</a>
                    </div>


                </div>
            </figure>
        </article>
        <article class="single_product">
            <figure>

                <div class="product_thumb">
                    <a class="primary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product7.jpg" alt=""></a>
                    <a class="secondary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product8.jpg" alt=""></a>
                    <div class="label_product">
                        <span class="label_sale">Sale</span>
                    </div>
                    <div class="action_links">
                        <ul>
                            <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top"
                                    data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                        class="ion-android-favorite-outline"></i></a></li>
                            <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a>
                            </li>
                            <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-bs-toggle="modal" data-bs-target="#modal_box"
                                    data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="product_content">
                    <div class="product_content_inner">
                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Nullam maximus eget nisi
                                dignissim sodales eget tempor</a></h4>
                        <div class="price_box">
                            <span class="old_price">৳ 76.00</span>
                            <span class="current_price">৳ 75.00</span>
                        </div>
                    </div>
                    <div class="add_to_cart">
                        <a href="#" title="Add to cart">Add to cart</a>
                    </div>


                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product11.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product12.jpg" alt=""></a>
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
                                                <span class="old_price">৳ 65.00</span>
                                                <span class="current_price">৳ 60.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>

                </div>
            </figure>
        </article>
        <article class="single_product">
            <figure>
                <div class="product_thumb">
                    <a class="primary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product3.jpg" alt=""></a>
                    <a class="secondary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product4.jpg" alt=""></a>
                    <div class="label_product">
                        <span class="label_sale">Sale</span>
                    </div>
                    <div class="action_links">
                        <ul>
                            <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top"
                                    data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                        class="ion-android-favorite-outline"></i></a></li>
                            <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a>
                            </li>
                            <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-bs-toggle="modal" data-bs-target="#modal_box"
                                    data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="product_content">
                    <div class="product_content_inner">
                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus pretium arcu
                                et faucibus commodo</a></h4>
                        <div class="price_box">
                            <span class="old_price">৳ 82.00</span>
                            <span class="current_price">৳ 75.00</span>
                        </div>
                    </div>
                    <div class="add_to_cart">
                        <a href="#" title="Add to cart">Add to cart</a>
               

                </div>
            </figure>
        </article>
        <article class="single_product">
            <figure>

                <div class="product_thumb">
                    <a class="primary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product11.jpg" alt=""></a>
                    <a class="secondary_img" href="{{route('client.product_details')}}"><img
                            src="assets/img/product/product12.jpg" alt=""></a>
                    <div class="label_product">
                        <span class="label_sale">Sale</span>
                    </div>
                    <div class="action_links">
                        <ul>
                            <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top"
                                    data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                        class="ion-android-favorite-outline"></i></a></li>
                            <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a>
                            </li>
                            <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true"
                                    data-tippy-inertia="true" data-bs-toggle="modal" data-bs-target="#modal_box"
                                    data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="product_content">
                    <div class="product_content_inner">
                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Mirum est notare tellus
                                eu nibh iaculis pretium</a></h4>
                        <div class="price_box">
                            <span class="old_price">৳ 65.00</span>
                            <span class="current_price">৳ 60.00</span>
                        </div>
                    </div>
                    <div class="add_to_cart">
                        <a href="#" title="Add to cart">Add to cart</a>
                    </div>

                </div>
            </figure>
        </article>
    </div>
</div>
</div>

</div>
</div> --}}
<!--product area end-->

<!--blog area start-->
{{-- <div class="blog_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title s_title_style3">
                            <h2>Our Latest Posts</h2>
                        </div>
                        <div class="blog_container blog_column4 owl-carousel">
                            <article class="single_blog">
                                <figure>
                                    <div class="blog_thumb">
                                        <a href="blog-details.html"><img src="{{asset('client/img/blog/blog1.jpg')}}"
alt=""></a>
</div>
<figcaption class="blog_content">
    <h4><a href="blog-details.html">Post with Gallery</a></h4>
    <div class="post_meta">
        <p>By <a href="#">admin</a> Date <a href="#">April 24, 2022</a></p>
    </div>
    <div class="post_desc">
        <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue
            condimentum rhoncus. Praesent</p>
    </div>
    <footer class="post_readmore">
        <a href="#">Read more</a>
    </footer>
</figcaption>
</figure>
</article>
<article class="single_blog">
    <figure>
        <div class="blog_thumb">
            <a href="blog-details.html"><img src="{{asset('client/img/blog/blog2.jpg')}}" alt=""></a>
        </div>
        <figcaption class="blog_content">
            <h4><a href="blog-details.html">Post with Gallery</a></h4>
            <div class="post_meta">
                <p>By <a href="#">admin</a> Date <a href="#">April 24, 2022</a></p>
            </div>
            <div class="post_desc">
                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu
                    augue condimentum rhoncus. Praesent</p>
            </div>
            <footer class="post_readmore">
                <a href="#">Read more</a>
            </footer>
        </figcaption>
    </figure>
</article>
<article class="single_blog">
    <figure>
        <div class="blog_thumb">
            <a href="blog-details.html"><img src="{{asset('client/img/blog/blog3.jpg')}}" alt=""></a>
        </div>
        <figcaption class="blog_content">
            <h4><a href="blog-details.html">Post with Gallery</a></h4>
            <div class="post_meta">
                <p>By <a href="#">admin</a> Date <a href="#">April 24, 2022</a></p>
            </div>
            <div class="post_desc">
                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu
                    augue condimentum rhoncus. Praesent</p>
            </div>
            <footer class="post_readmore">
                <a href="#">Read more</a>
            </footer>
        </figcaption>
    </figure>
</article>
<article class="single_blog">
    <figure>
        <div class="blog_thumb">
            <a href="blog-details.html"><img src="{{asset('client/img/blog/blog4.jpg')}}" alt=""></a>
        </div>
        <figcaption class="blog_content">
            <h4><a href="blog-details.html">Post with Gallery</a></h4>
            <div class="post_meta">
                <p>By <a href="#">admin</a> Date <a href="#">April 24, 2022</a></p>
            </div>
            <div class="post_desc">
                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu
                    augue condimentum rhoncus. Praesent</p>
            </div>
            <footer class="post_readmore">
                <a href="#">Read more</a>
            </footer>
        </figcaption>
    </figure>
</article>
<article class="single_blog">
    <figure>
        <div class="blog_thumb">
            <a href="blog-details.html"><img src="{{asset('client/img/blog/blog2.jpg')}}" alt=""></a>
        </div>
        <figcaption class="blog_content">
            <h4><a href="blog-details.html">Post with Gallery</a></h4>
            <div class="post_meta">
                <p>By <a href="#">admin</a> Date <a href="#">April 24, 2022</a></p>
            </div>
            <div class="post_desc">
                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu
                    augue condimentum rhoncus. Praesent</p>
            </div>
            <footer class="post_readmore">
                <a href="#">Read more</a>
            </footer>
        </figcaption>
    </figure>
</article>
</div>
</div>
</div>
</div>
</div> --}}
<!--blog area end-->

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
