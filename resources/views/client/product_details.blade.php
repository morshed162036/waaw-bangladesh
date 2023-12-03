@extends('client.layouts.main')

@section('content')

<!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{route('client.home')}}">home</a></li>
                            <li>Product Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <div class="product_page_bg">
        <div class="container">
            <div class="product_details_wrapper mb-55">
                @if($product)
                <!--product details start-->
                <div class="product_details">
                    <div class="row">
                        <div class="col-lg-5 col-md-6">
                            <div class="product-details-tab">
                                <div id="img-1" class="zoomWrapper single-zoom">
                                    <a href="#">
                                        <img id="zoom1" src="{{asset('images/product_image/'.$product->image)}}" data-zoom-image="{{asset('images/product_image/'.$product->image)}}" alt="big-1">
                                    </a>
                                </div>
                                <div class="single-zoom-thumb" >
                                    <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01" >
                                        <li>
                                            <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig4.jpg" data-zoom-image="assets/img/product/productbig4.jpg">
                                                <img src="{{asset('images/product_image/'.$product->image)}}" alt="zo-th-1" />
                                            </a>

                                        </li>
                                        <li>
                                            <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig1.jpg" data-zoom-image="assets/img/product/productbig1.jpg">
                                                <img src="{{asset('images/product_image/'.$product->image)}}" alt="zo-th-1" />
                                            </a>

                                        </li>
                                        <li>
                                            <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig2.jpg" data-zoom-image="assets/img/product/productbig2.jpg">
                                                <img src="{{asset('images/product_image/'.$product->image)}}" alt="zo-th-1" />
                                            </a>

                                        </li>
                                        <li>
                                            <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig3.jpg" data-zoom-image="assets/img/product/productbig3.jpg">
                                                <img src="{{asset('images/product_image/'.$product->image)}}" alt="zo-th-1" />
                                            </a>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="product_d_right">
                                <form action="{{ route('cart.store') }}" id="addtocart" method="post">
                                    @csrf
                                    <h3><a href="#">Nonstick Dishwasher PFOA</a></h3>
                                    {{--  <div class="product_nav">
                                        <ul>
                                            <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                            <li class="next"><a href="variable-product.html"><i class="fa fa-angle-right"></i></a></li>
                                        </ul>
                                    </div>  --}}
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            <li class="review"><a href="#">(0 customer review )</a></li>
                                        </ul>
                                    </div>
                                    <div class="price_box">
                                        {{-- <span class="old_price">৳80.00</span> --}}
                                        <span class="current_price">৳{{ $product->mrp }}</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>{{ $product->description }}</p>
                                    </div>
                                    <div class="product_variant color">
                                        <h3>Available Options</h3>
                                        <label>color</label>
                                        <ul>
                                            <li class="color1"><a href="#"></a></li>
                                            <li class="color2"><a href="#"></a></li>
                                            <li class="color3"><a href="#"></a></li>
                                            <li class="color4"><a href="#"></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_variant size">
                                        <label>size</label>
                                        <select class="niceselect_option" id="color2" name="produc_color2">
                                            <option selected value="1"> size in option</option>
                                            <option value="2">s</option>
                                            <option value="3">m</option>
                                            <option value="4">l</option>
                                            <option value="5">xl</option>
                                            <option value="6">xxl</option>
                                        </select>
                                    </div>
                                    <div class="product_variant quantity">
                                        <label>quantity</label>
                                        <input min="1" max="100" value="1" type="number" name="quantity">
                                         <input type="hidden" name="id" value="{{ $product->id }}">
                                        <button class="button" type="submit">add to cart</button>

                                    </div>
                                    {{--  <div class=" product_d_action">
                                        <ul>
                                            <li><a href="#" title="Add to wishlist">+ Add to Wishlist</a></li>
                                            <li><a href="#" title="Add to wishlist">+ Compare</a></li>
                                        </ul>
                                    </div>  --}}
                                </form>
                                <div class="product_d_meta">
                                    {{--  <span>SKU: N/A</span>  --}}
                                    <span>Category: <a href="#">{{ $product->category->name }}</a></span>
                                    {{--  <span>Tags:
                                        <a href="#">Creams</a>
                                        <a href="#">Lotions</a>
                                    </span>  --}}
                                </div>
                                {{--  <div class="priduct_social">
                                    <ul>
                                        <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i> Like</a></li>
                                        <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a></li>
                                        <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i> save</a></li>
                                        <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i> share</a></li>
                                        <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i> linked</a></li>
                                    </ul>
                                </div>  --}}

                            </div>
                        </div>
                    </div>
                </div>
                <!--product details end-->

                <!--product info start-->
                <div class="product_d_info">
                    <div class="row">
                        <div class="col-12">
                            <div class="product_d_inner">
                                <div class="product_info_button">
                                    <ul class="nav" role="tablist" id="nav-tab">
                                        <li>
                                            <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Description</a>
                                        </li>
                                        {{--  <li>
                                            <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">Specification</a>
                                        </li>  --}}
                                        <li>
                                            <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="info" role="tabpanel">
                                        <div class="product_info_content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                            <p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget.</p>
                                        </div>
                                    </div>
                                    {{--  <div class="tab-pane fade" id="sheet" role="tabpanel">
                                        <div class="product_d_table">
                                            <form action="#">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="first_child">Compositions</td>
                                                            <td>Polyester</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="first_child">Styles</td>
                                                            <td>Girly</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="first_child">Properties</td>
                                                            <td>Short Dress</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                        <div class="product_info_content">
                                            <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a womans wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                                        </div>
                                    </div>  --}}

                                    {{-- <div class="tab-pane fade" id="reviews" role="tabpanel">
                                        <div class="reviews_wrapper">
                                            <h2>1 review for Donec eu furniture</h2>
                                            <div class="reviews_comment_box">
                                                <div class="comment_thmb">
                                                    <img src="{{ asset('client/img/blog/comment2.jpg') }}" alt="">
                                                </div>
                                                <div class="comment_text">
                                                    <div class="reviews_meta">
                                                        <div class="product_rating">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <p><strong>admin </strong>- September 12, 2022</p>
                                                        <span>roadthemes</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="product_rating mb-10">
                                                <h3>Your rating</h3>
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product_review_form">
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="review_comment">Your review </label>
                                                            <textarea name="comment" id="review_comment"></textarea>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <label for="author">Name</label>
                                                            <input id="author" type="text">

                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <label for="email">Email </label>
                                                            <input id="email" type="text">
                                                        </div>
                                                    </div>
                                                    <button type="submit">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--product info end-->
                @endif
            </div>

            <!--product area start-->
                 <!--product area start-->
        <div class="product_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product_header">
                            <div class="section_title s_title_style3">
                                <h2>Related Products</h2>

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
                                        <a class="primary_img" href="#"><img src="{{asset('client/img/featured-products/product1.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="#"><img src="{{asset('client/img/featured-products/product1.jpg')}}" alt=""></a> --}}
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="#">Natus erro at congue massa commodo sit Natus erro</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳80.00</span>
                                                <span class="current_price">৳70.00</span>
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
                                        <a class="primary_img" href="#"><img src="{{asset('client/img/featured-products/product2.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="#"><img src="{{asset('client/img/product/product15.jpg')}}" alt=""></a> --}}
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="#">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳76.00</span>
                                                <span class="current_price">৳75.00</span>
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
                                        <a class="primary_img" href="#"><img src="{{asset('client/img/featured-products/product3.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="#"><img src="{{asset('client/img/product/product13.jpg')}}" alt=""></a> --}}
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="#">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳86.00</span>
                                                <span class="current_price">৳79.00</span>
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
                                        <a class="primary_img" href="#"><img src="{{asset('client/img/featured-products/product4.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="#"><img src="{{asset('client/img/product/product11.jpg')}}" alt=""></a> --}}
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="#">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳82.00</span>
                                                <span class="current_price">৳75.00</span>
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
                                        <a class="primary_img" href="#"><img src="{{asset('client/img/featured-products/product5.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="#"><img src="{{asset('client/img/product/product9.jpg')}}" alt=""></a> --}}
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="#">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳72.00</span>
                                                <span class="current_price">৳70.00</span>
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
                                        <a class="primary_img" href="#"><img src="{{asset('client/img/featured-products/product6.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="#"><img src="{{asset('client/img/product/product7.jpg')}}" alt=""></a> --}}
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="#">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳65.00</span>
                                                <span class="current_price">৳60.00</span>
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
                    <div class="tab-pane fade" id="Networking2" role="tabpanel">
                        <div class="product_carousel product_style product_column5 owl-carousel">
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="#"><img src="{{asset('client/img/featured-products/product1.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="#"><img src="{{asset('client/img/product/product2.jpg')}}" alt=""></a> --}}
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="#">Natus erro at congue massa commodo sit Natus erro</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳80.00</span>
                                                <span class="current_price">৳70.00</span>
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
                                        <a class="primary_img" href="#"><img src="{{asset('client/img/featured-products/product2.jpg')}}" alt=""></a>
                                        {{-- <a class="secondary_img" href="#"><img src="{{asset('client/img/product/product8.jpg')}}" alt=""></a> --}}
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="#">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳76.00</span>
                                                <span class="current_price">৳75.00</span>
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
                                        <a class="primary_img" href="#"><img src="{{asset('client/img/product/product9.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="#"><img src="{{asset('client/img/product/product10.jpg')}}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="#">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳72.00</span>
                                                <span class="current_price">৳70.00</span>
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
                                        <a class="primary_img" href="#"><img src="{{asset('client/img/product/product11.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="#"><img src="{{asset('client/img/product/product12.jpg')}}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="#">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳65.00</span>
                                                <span class="current_price">৳60.00</span>
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
                                        <a class="primary_img" href="#"><img src="{{asset('client/img/product/product1.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="#"><img src="{{asset('client/img/product/product2.jpg')}}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="#">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳86.00</span>
                                                <span class="current_price">৳79.00</span>
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
                                        <a class="primary_img" href="#"><img src="{{asset('client/img/product/product3.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="#"><img src="{{asset('client/img/product/product4.jpg')}}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="#">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳82.00</span>
                                                <span class="current_price">৳75.00</span>
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
                    <div class="tab-pane fade" id="Networking3" role="tabpanel">
                        <div class="product_carousel product_style product_column5 owl-carousel">
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="#"><img src="{{asset('client/img/product/product7.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="#"><img src="{{asset('client/img/product/product8.jpg')}}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="#">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳76.00</span>
                                                <span class="current_price">৳75.00</span>
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
                                        <a class="primary_img" href="#"><img src="{{asset('client/img/product/product1.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="#"><img src="{{asset('client/img/product/product2.jpg')}}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="#">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳86.00</span>
                                                <span class="current_price">৳79.00</span>
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
                                        <a class="primary_img" href="#"><img src="{{asset('client/img/product/product3.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="#"><img src="{{asset('client/img/product/product4.jpg')}}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="#">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳82.00</span>
                                                <span class="current_price">৳75.00</span>
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
                                        <a class="primary_img" href="#"><img src="{{asset('client/img/product/product5.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="#"><img src="{{asset('client/img/product/product6.jpg')}}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="#">Natus erro at congue massa commodo sit Natus erro</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳80.00</span>
                                                <span class="current_price">৳70.00</span>
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
                                        <a class="primary_img" href="#"><img src="{{asset('client/img/product/product9.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="#"><img src="{{asset('client/img/product/product10.jpg')}}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="#">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳72.00</span>
                                                <span class="current_price">৳70.00</span>
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
                                        <a class="primary_img" href="#"><img src="{{asset('client/img/product/product11.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="#"><img src="{{asset('client/img/product/product12.jpg')}}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="#">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳65.00</span>
                                                <span class="current_price">৳60.00</span>
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
                    <div class="tab-pane fade" id="Audio2" role="tabpanel">
                        <div class="product_carousel product_style product_column5 owl-carousel">
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="#"><img src="{{asset('client/img/product/product9.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="#"><img src="{{asset('client/img/product/product10.jpg')}}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="#">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳72.00</span>
                                                <span class="current_price">৳70.00</span>
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
                                        <a class="primary_img" href="#"><img src="{{asset('client/img/product/product1.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="#"><img src="{{asset('client/img/product/product2.jpg')}}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="#">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳86.00</span>
                                                <span class="current_price">৳79.00</span>
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
                                        <a class="primary_img" href="#"><img src="{{asset('client/img/product/product5.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="#"><img src="{{asset('client/img/product/product6.jpg')}}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="#">Natus erro at congue massa commodo sit Natus erro</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳80.00</span>
                                                <span class="current_price">৳70.00</span>
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
                                        <a class="primary_img" href="#"><img src="{{asset('client/img/product/product7.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="#"><img src="{{asset('client/img/product/product8.jpg')}}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="#">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳76.00</span>
                                                <span class="current_price">৳75.00</span>
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
                                        <a class="primary_img" href="#"><img src="{{asset('client/img/product/product3.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="#"><img src="{{asset('client/img/product/product4.jpg')}}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="#">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳82.00</span>
                                                <span class="current_price">৳75.00</span>
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
                                        <a class="primary_img" href="#"><img src="{{asset('client/img/product/product11.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="#"><img src="{{asset('client/img/product/product12.jpg')}}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="#">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">৳65.00</span>
                                                <span class="current_price">৳60.00</span>
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
            {{-- <section class="product_area related_products">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title">
                            <h2>Related Products </h2>
                        </div>
                    </div>
                </div>
                <div class="product_carousel product_style product_column5 owl-carousel">
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="#"><img src="assets/img/product/product14.jpg" alt=""></a>
                                <a class="secondary_img" href="#"><img src="assets/img/product/product13.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="#">Natus erro at congue massa commodo sit Natus erro</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳80.00</span>
                                        <span class="current_price">৳70.00</span>
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
                                <a class="primary_img" href="#"><img src="assets/img/product/product17.jpg" alt=""></a>
                                <a class="secondary_img" href="#"><img src="assets/img/product/product18.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="#">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳76.00</span>
                                        <span class="current_price">৳75.00</span>
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
                                <a class="primary_img" href="#"><img src="assets/img/product/product19.jpg" alt=""></a>
                                <a class="secondary_img" href="#"><img src="assets/img/product/product20.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="#">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳86.00</span>
                                        <span class="current_price">৳79.00</span>
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
                                <a class="primary_img" href="#"><img src="assets/img/product/product22.jpg" alt=""></a>
                                <a class="secondary_img" href="#"><img src="assets/img/product/product23.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="#">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳82.00</span>
                                        <span class="current_price">৳75.00</span>
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
                                <a class="primary_img" href="#"><img src="assets/img/product/product24.jpg" alt=""></a>
                                <a class="secondary_img" href="#"><img src="assets/img/product/product25.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="#">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳72.00</span>
                                        <span class="current_price">৳70.00</span>
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
                                <a class="primary_img" href="#"><img src="assets/img/product/product26.jpg" alt=""></a>
                                <a class="secondary_img" href="#"><img src="assets/img/product/product27.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="#">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳65.00</span>
                                        <span class="current_price">৳60.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                </div>

            </section> --}}
            <!--product area end-->

            <!--product area start-->
            {{-- <section class="product_area upsell_products">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title">
                            <h2>Upsell Products </h2>
                        </div>
                    </div>
                </div>
                <div class="product_carousel product_style product_column5 owl-carousel">
                    <article class="single_product">
                        <figure>

                            <div class="product_thumb">
                                <a class="primary_img" href="#"><img src="assets/img/product/product28.jpg" alt=""></a>
                                <a class="secondary_img" href="#"><img src="assets/img/product/product29.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="#">Natus erro at congue massa commodo sit Natus erro</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳80.00</span>
                                        <span class="current_price">৳70.00</span>
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
                                <a class="primary_img" href="#"><img src="assets/img/product/product7.jpg" alt=""></a>
                                <a class="secondary_img" href="#"><img src="assets/img/product/product8.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="#">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳76.00</span>
                                        <span class="current_price">৳75.00</span>
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
                                <a class="primary_img" href="#"><img src="assets/img/product/product9.jpg" alt=""></a>
                                <a class="secondary_img" href="#"><img src="assets/img/product/product10.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="#">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳72.00</span>
                                        <span class="current_price">৳70.00</span>
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
                                <a class="primary_img" href="#"><img src="assets/img/product/product11.jpg" alt=""></a>
                                <a class="secondary_img" href="#"><img src="assets/img/product/product12.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="#">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳65.00</span>
                                        <span class="current_price">৳60.00</span>
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
                                <a class="primary_img" href="#"><img src="assets/img/product/product13.jpg" alt=""></a>
                                <a class="secondary_img" href="#"><img src="assets/img/product/product4.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="#">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳86.00</span>
                                        <span class="current_price">৳79.00</span>
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
                                <a class="primary_img" href="#"><img src="assets/img/product/product15.jpg" alt=""></a>
                                <a class="secondary_img" href="#"><img src="assets/img/product/product16.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{route('client.wishlist')}}" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                        <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-cart"></i></a></li>
                                        <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <h4 class="product_name"><a href="#">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">৳82.00</span>
                                        <span class="current_price">৳75.00</span>
                                    </div>
                                </div>
                                <div class="add_to_cart">
                                    <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                </div>

                            </div>
                        </figure>
                    </article>
                </div>
            </section> --}}
            <!--product area end-->
        </div>
    </div>

@endsection
