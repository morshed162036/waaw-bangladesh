@extends('client.layouts.main')

@section('content')
 <!--shop  area start-->
    <div class="shop_area shop_reverse" style="padding-top: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <!--sidebar widget start-->
                    <aside class="sidebar_widget">
                        <div class="widget_list widget_categories">
                            <h3>Product categories</h3>
                            <ul>
                                <li><a href="#">Men</a></li>
                                <li><a href="#">Women</a></li>
                                <li class="widget_sub_categories"><a href="javascript:void(0)">kids</a>
                                    <ul class="widget_dropdown_categories">
                                        <li><a href="#">Boy</a></li>
                                        <li><a href="#">Girls</a></li>
                                        <li><a href="#">New Born Baby</a></li>
                                    </ul>
                                </li>

                                <li><a href="#">Wedding</a></li>
                                <li><a href="#">Shirt</a></li>
                                <li><a href="#">Full seleve shirt</a> </li>
                            </ul>
                        </div>
                        <div class="widget_list widget_filter">
                            <h3>Filter by price</h3>
                            <form action="#">
                                <div id="slider-range"></div>
                                <button type="submit">Filter</button>
                                <input type="text" name="text" id="amount" />

                            </form>
                        </div>
                        {{--  <div class="widget_list">
                            <h3>Compare Products</h3>
                            <div class="recent_product_container">
                                <article class="recent_product_list">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product9.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product10.jpg" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4><a href="{{route('client.product_details')}}">Aliquam lobortis pellentesque</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">৳70.00</span>
                                                <span class="current_price">৳65.00</span>
                                            </div>
                                        </div>
                                    </figure>
                                </article>
                                <article class="recent_product_list">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product11.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product12.jpg" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4><a href="{{route('client.product_details')}}">Convallis quam sit vitae sodales</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">৳70.00</span>
                                                <span class="current_price">৳65.00</span>
                                            </div>
                                        </div>
                                    </figure>
                                </article>
                                <article class="recent_product_list">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product14.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product13.jpg" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4><a href="{{route('client.product_details')}}">Cillum dolore nisl fermentum</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">৳70.00</span>
                                                <span class="current_price">৳65.00</span>
                                            </div>
                                        </div>
                                    </figure>
                                </article>
                            </div>
                        </div>  --}}
                        {{--  <div class="widget_list tags_widget">
                            <h3>Product tags</h3>
                            <div class="tag_cloud">
                                <a href="#">Panjabi</a>
                                <a href="#">clothes</a>
                                <a href="#">fashion</a>
                                <a href="#">T-shirt</a>
                                <a href="#">shirt</a>
                            </div>
                        </div>  --}}
                    </aside>
                    <!--sidebar widget end-->
                </div>
                <div class="col-lg-9 col-md-12">

                    <!--shop banner area start-->
                    <div class="shop_banner_area mb-30">
                        <div class="row">
                            <div class="col-12">
                                <div class="shop_banner_thumb">
                                    <img src="assets/img/bg/banner16.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--shop banner area end-->
                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper">
                        <div class="shop_toolbar_btn">
                            <button data-role="grid_4" type="button" class=" active btn-grid-4" data-toggle="tooltip" title="4"></button>
                            <button data-role="grid_list" type="button" class="btn-list" data-toggle="tooltip" title="List"></button>
                        </div>
                        <div class=" niceselect_option">
                            <form class="select_option" action="#">
                                <select name="orderby" id="short">

                                    <option selected value="1">Sort by average rating</option>
                                    <option value="2">Sort by popularity</option>
                                    <option value="3">Sort by newness</option>
                                    <option value="4">Sort by price: low to high</option>
                                    <option value="5">Sort by price: high to low</option>
                                    {{-- <option value="6">Product Name: Z</option> --}}
                                </select>
                            </form>
                        </div>
                        {{-- <div class="page_amount">
                            <p>Showing 1–9 of 21 results</p>
                        </div> --}}
                    </div>
                    <!--shop toolbar end-->

                    <!--shop wrapper start-->
                    <div class="row no-gutters shop_wrapper">
                        <div class="col-lg-3 col-md-4 col-12 ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product-category/product1.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product6.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="product_content grid_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Natus erro at congue massa commodo sit Natus erro</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">৳80.00</span>
                                                <span class="current_price">৳70.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content list_content">
                                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Natus erro at congue massa commodo sit Natus erro</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">৳80.00</span>
                                            <span class="current_price">৳70.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i> Add to Wishlist</a></li>
                                                <li class="compare"><a href="#" title="Add to Cart"><i class="ion-ios-cart"></i> Compare</a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i> quick view</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product-category/product2.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product8.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="product_content grid_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Auctor gravida enim pellentesque quam ut risus</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">৳75.00</span>
                                                <span class="current_price">৳65.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content list_content">
                                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Auctor gravida enim pellentesque quam ut risus</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">৳75.00</span>
                                            <span class="current_price">৳65.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i> Add to Wishlist</a></li>
                                                <li class="compare"><a href="#" title="Add to Cart"><i class="ion-ios-cart"></i> Compare</a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i> quick view</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product-category/product3.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product29.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="product_content grid_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Cillum dolore tortor nisl fermentum quam</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">৳85.00</span>
                                                <span class="current_price">৳75.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content list_content">
                                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Cillum dolore tortor nisl fermentum quam</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">৳85.00</span>
                                            <span class="current_price">৳75.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i> Add to Wishlist</a></li>
                                                <li class="compare"><a href="#" title="Add to Cart"><i class="ion-ios-cart"></i> Compare</a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i> quick view</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product-category/product4.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product11.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="product_content grid_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Consequuntur magni risus tincidunt convallis</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">৳60.00</span>
                                                <span class="current_price">৳65.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content list_content">
                                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Consequuntur magni risus tincidunt convallis</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">৳60.00</span>
                                            <span class="current_price">৳65.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i> Add to Wishlist</a></li>
                                                <li class="compare"><a href="#" title="Add to Cart"><i class="ion-ios-cart"></i> Compare</a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i> quick view</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product-category/product5.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product13.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="product_content grid_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Cras neque metus eugiat felis sem sem accumsan </a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">৳55.00</span>
                                                <span class="current_price">৳60.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content list_content">
                                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Cras neque metus eugiat felis sem sem accumsan </a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">৳55.00</span>
                                            <span class="current_price">৳60.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i> Add to Wishlist</a></li>
                                                <li class="compare"><a href="#" title="Add to Cart"><i class="ion-ios-cart"></i> Compare</a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i> quick view</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product-category/product6.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product15.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="product_content grid_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Dignissim venenatis tellus ac nulla pellentesque</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">৳62.00</span>
                                                <span class="current_price">৳60.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content list_content">
                                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Dignissim venenatis tellus ac nulla pellentesque</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">৳62.00</span>
                                            <span class="current_price">৳60.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i> Add to Wishlist</a></li>
                                                <li class="compare"><a href="#" title="Add to Cart"><i class="ion-ios-cart"></i> Compare</a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i> quick view</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product-category/product7.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product17.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="product_content grid_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Dolorum fuga eget posuere commodo sit amet</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">৳70.00</span>
                                                <span class="current_price">৳68.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content list_content">
                                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Dolorum fuga eget posuere commodo sit amet</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">৳70.00</span>
                                            <span class="current_price">৳68.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i> Add to Wishlist</a></li>
                                                <li class="compare"><a href="#" title="Add to Cart"><i class="ion-ios-cart"></i> Compare</a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i> quick view</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product-category/product8.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product19.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="product_content grid_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec eu libero ac dapibus urna consectetur rhoncus</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">৳56.00</span>
                                                <span class="current_price">৳50.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content list_content">
                                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec eu libero ac dapibus urna consectetur rhoncus</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">৳80.00</span>
                                            <span class="current_price">৳70.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i> Add to Wishlist</a></li>
                                                <li class="compare"><a href="#" title="Add to Cart"><i class="ion-ios-cart"></i> Compare</a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i> quick view</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product-category/product9.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product19.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="product_content grid_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Natus erro at congue massa commodo sit Natus erro</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">৳80.00</span>
                                                <span class="current_price">৳70.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content list_content">
                                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Natus erro at congue massa commodo sit Natus erro</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">৳80.00</span>
                                            <span class="current_price">৳70.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i> Add to Wishlist</a></li>
                                                <li class="compare"><a href="#" title="Add to Cart"><i class="ion-ios-cart"></i> Compare</a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i> quick view</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product-category/product10.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product23.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="product_content grid_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">৳50.00</span>
                                                <span class="current_price">৳45.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content list_content">
                                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">৳50.00</span>
                                            <span class="current_price">৳45.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i> Add to Wishlist</a></li>
                                                <li class="compare"><a href="#" title="Add to Cart"><i class="ion-ios-cart"></i> Compare</a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i> quick view</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product-category/product11.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product25.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="product_content grid_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Epicuri per lobortis eleifend elementum viverra odio</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">৳85.00</span>
                                                <span class="current_price">৳80.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content list_content">
                                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Epicuri per lobortis eleifend elementum viverra odio</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">৳80.00</span>
                                            <span class="current_price">৳70.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i> Add to Wishlist</a></li>
                                                <li class="compare"><a href="#" title="Add to Cart"><i class="ion-ios-cart"></i> Compare</a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i> quick view</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('client.product_details')}}"><img src="{{asset('client/img/product/product-category/product12.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('client.product_details')}}"><img src="assets/img/product/product27.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Cart"><i class="ion-ios-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="product_content grid_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="{{route('client.product_details')}}">Fusce ultricies dolor vitae tristique suscipit</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">৳76.00</span>
                                                <span class="current_price">৳72.00</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content list_content">
                                        <h4 class="product_name"><a href="{{route('client.product_details')}}">Fusce ultricies dolor vitae tristique suscipit</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">৳80.00</span>
                                            <span class="current_price">৳70.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{route('client.cart')}}" title="Add to cart">Add to cart</a>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i> Add to Wishlist</a></li>
                                                <li class="compare"><a href="#" title="Add to Cart"><i class="ion-ios-cart"></i> Compare</a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i> quick view</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                    </div>

                    <div class="shop_toolbar t_bottom">
                        <div class="pagination">
                            <ul>
                                <li class="current">1</li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#">next</a></li>
                                <li><a href="#">>></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->

@endsection

