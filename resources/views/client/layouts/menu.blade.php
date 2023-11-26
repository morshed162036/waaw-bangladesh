
 <div class="off_canvars_overlay"></div>
 {{--  phone devices  --}}
    <div class="Offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="Offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        </div>
                        <div class="antomi_message">
                            <p>Step into  the festival season with wawa Bangladesh</p>
                        </div>
                        <div class="header_top_settings text-end">
                            <ul>
                                <li><a href="{{ route('login.website') }}">login</a></li>
                                <li><a href="{{ route('client.wishlist') }}">wishlist</a></li>
                                <li><a href="{{ route('client.cart') }}">cart</a></li>
                                <li>Hotline: <a href="tel:+0123456789">0123456789 </a></li>
                                <li>Quality Guarantee Of Products</li>
                            </ul>
                        </div>
                        <div class="search_container">
                            <form action="#">
                                {{--  <div class="hover_category">
                                    <select class="select_option" name="select" id="categori1">
                                        <option selected value="1">All Categories</option>
                                        <option value="2">Accessories</option>
                                        <option value="3">Accessories & More</option>
                                        <option value="4">Butters & Eggs</option>
                                        <option value="5">Camera & Video </option>
                                        <option value="6">Mornitors</option>
                                        <option value="7">Tablets</option>
                                        <option value="8">Laptops</option>
                                        <option value="9">Handbags</option>
                                        <option value="10">Headphone & Speaker</option>
                                        <option value="11">Herbs & botanicals</option>
                                        <option value="12">Vegetables</option>
                                        <option value="13">Shop</option>
                                        <option value="14">Laptops & Desktops</option>
                                        <option value="15">Watchs</option>
                                        <option value="16">Electronic</option>
                                    </select>
                                </div>  --}}
                                <div class="search_box">
                                    <input placeholder="Search product..." type="text">
                                    <button type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                        <div id="menu" class="text-start ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active"> <a href="{{ route('client.home') }}">Home</a>
                                    {{-- <ul class="sub-menu">
                                        <li><a href="{{route('client.home')}}">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                        <li><a href="index-5.html">Home 5</a></li>
                                        <li><a href="index-6.html">Home 6</a></li>
                                        <li><a href="index-7.html">Home 7</a></li>
                                    </ul> --}}
                                </li>
                                 <li class="menu-item-has-children active"> <a href="{{ route('client.shop') }}">Product</a>
                                </li>
                                 <li class="menu-item-has-children active"> <a href="{{ route('client.shop') }}">Men</a></li>
                                 <li class="menu-item-has-children active"> <a href="{{ route('client.shop') }}">Women</a></li>
                                  <li class="menu-item-has-children active"> <a href="{{ route('client.shop') }}">Kids</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('client.shop') }}">Boys </a></li>
                                        <li><a href="{{ route('client.shop') }}">girls</a></li>
                                        <li><a href="{{ route('client.shop') }}">New Born Baby</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children active"> <a href="{{ route('client.shop') }}">Wedding</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Offcanvas menu area end-->

    {{--  large devices  --}}
    <!--header area start-->
    <header>
        <div class="main_header">
            <div class="container">
                <!--header top start-->
                <div class="header_top">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-5">
                            <div class="antomi_message">
                                <p>Step into  the festival season with WAWA Bangladesh</p>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="header_top_settings text-end">
                                <ul>
                                    <li><a href="{{ route('login.website') }}">login</a></li>
                                    <li><a href="{{ route('client.wishlist') }}">wishlist</a></li>
                                    <li><a href="{{ route('client.cart') }}">cart</a></li>
                                    <li>Hotline: <a href="tel:+0123456789">0123456789 </a></li>
                                    <li>Quality Guarantee Of Products</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--header top start-->

                <!--header middel start-->
                <div class="header_middle sticky-header">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-3 col-4">
                            <div class="logo">
                                <a href="{{route('client.home')}}"><img src="{{asset('client/img/logo/WAAW-logo-3.gif')}}" width="206" height="20" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12">
                            <div class="main_menu menu_position text-center">
                                <nav>
                                    <ul>
                                        <li><a href="{{route('client.home')}}">home</a>
                                            {{-- <ul class="sub_menu">
                                                <li><a href="{{route('client.home')}}">Home shop 1</a></li>
                                                <li><a href="index-2.html">Home shop 2</a></li>
                                                <li><a href="index-3.html">Home shop 3</a></li>
                                                <li><a href="index-4.html">Home shop 4</a></li>
                                                <li><a href="index-5.html">Home shop 5</a></li>
                                                <li><a href="index-6.html">Home shop 6</a></li>
                                                <li><a href="index-7.html">Home shop 7</a></li>
                                            </ul> --}}
                                        </li>
                                        {{--  <li><a href="{{route('client.about')}}">About Us</a></li>  --}}
                                        <li class="mega_items"><a href="{{route('client.shop')}}">Product</a>
                                            {{--  <div class="mega_menu">
                                                <ul class="mega_menu_inner">
                                                    <li><a href="{{route('client.shop')}}">Men</a>
                                                        <ul>
                                                            <li><a href="{{route('client.shop')}}">Premium panjabi</a></li>
                                                            <li><a href="{{route('client.shop')}}">Classic Panjabi</a></li>
                                                            <li><a href="{{route('client.shop')}}">Fashion panjabi </a></li>
                                                            <li><a href="{{route('client.shop')}}"> Fashion panjabi</a></li>
                                                            <li><a href="{{route('client.shop')}}">Fashion panjabi</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Women</a>
                                                        <ul>
                                                            <li><a href="#">T-Shirt</a></li>
                                                            <li><a href="#">Regular t-shirt</a></li>
                                                            <li><a href="#">Henry t-shirt</a></li>
                                                            <li><a href="#">Boxy t-shirt</a></li>
                                                            <li><a href="#">Sports t-shirt</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Kids</a>
                                                        <ul>
                                                            <li><a href="#">Denin Trouser</a></li>
                                                            <li><a href="#">Chino Trouser</a></li>
                                                            <li><a href="#">Formar Trouser</a></li>
                                                            <li><a href="#">product variable</a></li>
                                                            <li><a href="#">product countdown</a></li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>  --}}
                                        </li>
                                        {{-- <li><a href="blog.html">blog<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="blog-details.html">blog details</a></li>
                                                <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                                <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                                <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
                                            </ul>
                                        </li> --}}
                                        {{-- <li><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="client.about">About Us</a></li>
                                                <li><a href="faq.html">Frequently Questions</a></li>
                                                <li><a href="privacy-policy.html">privacy policy</a></li>
                                                <li><a href="contact.html">contact</a></li>
                                                <li><a href="login.html">login</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                                <li><a href="compare.html">compare</a></li>
                                                <li><a href="coming-soon.html">coming soon</a></li>
                                            </ul>
                                        </li> --}}

                                        <li><a href="{{route('client.shop')}}">Men</a></li>
                                        <li><a href="{{route('client.shop')}}">Women</a></li>

                                        <li><a href="{{route('client.shop')}}">Kids<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu">
                                                <li><a href="{{route('client.shop')}}">boys</a></li>
                                                <li><a href="{{route('client.shop')}}">girls</a></li>
                                                <li><a href="{{route('client.shop')}}">new born baby</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="{{route('client.shop')}}">Wedding</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-7 col-6">
                            <div class="header_configure_area">
                                <div class="header_wishlist">
                                    <a href="{{route('client.wishlist')}}"><i class="ion-android-favorite-outline"></i>
                                        <span class="wishlist_count">3</span>
                                    </a>
                                </div>
                                <div class="mini_cart_wrapper">
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-shopping-bag"></i>
                                        <span class="cart_price"> 152.00 ৳<i class="ion-ios-arrow-down"></i></span>
                                        <span class="cart_count">2</span>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--header middel end-->

                 <!--mini cart-->
                <div class="mini_cart">
                    <div class="cart_close">
                        <div class="cart_text">
                            <h3>cart</h3>
                        </div>
                        <div class="mini_cart_close">
                            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        </div>
                    </div>
                    <div class="cart_item">
                        <div class="cart_img">
                            <a href="#"><img src="{{asset('client/img/product/men/men1.jpg')}}" alt=""></a>
                        </div>
                        <div class="cart_info">
                            <a href="#">Mens Fashionable shirt</a>
                            <p>Qty: 1 X <span> 500৳</span></p>
                        </div>
                        <div class="cart_remove">
                            <a href="#"><i class="ion-android-close"></i></a>
                        </div>
                    </div>
                    <div class="cart_item">
                        <div class="cart_img">
                            <a href="#"><img src="{{asset('client/img/product/men/men2.jpg')}}" alt=""></a>
                        </div>
                        <div class="cart_info">
                            <a href="#">Men stylish sirt</a>
                            <p>Qty: 1 X <span> <i class="fa-solid fa-bangladeshi-taka-sign"></i>500৳</span></p>
                        </div>
                        <div class="cart_remove">
                            <a href="#"><i class="ion-android-close"></i></a>
                        </div>
                    </div>
                    <div class="mini_cart_table">
                        <div class="cart_total">
                            <span>Sub total:</span>
                            <span class="price">৳1000</span>
                        </div>
                        <div class="cart_total mt-10">
                            <span>total:</span>
                            <span class="price">৳1000</span>
                        </div>
                    </div>
                    <div class="mini_cart_footer">
                        <div class="cart_button">
                            <a href="{{route('client.cart')}}">View cart</a>
                        </div>
                        <div class="cart_button">
                            <a class="active" href="{{route('client.checkout')}}">Checkout</a>
                        </div>

                    </div>
                </div>
                <!--mini cart end-->

                <!--header bottom satrt-->
                <div class="header_bottom">
                    <div class="row align-items-center">
                        <div class="column1 col-lg-4 col-md-6"  style="margin-right: 70px">
                            <div class="categories_menu categories_three">
                                <div class="categories_title">
                                    <h2 class="categori_toggle">ALL CATEGORIES</h2>
                                </div>
                                <div class="categories_menu_toggle">
                                    <ul>
                                        <li class="menu_item_children"><a href="#">Brake Parts <i class="fa fa-angle-right"></i></a>
                                            <ul class="categories_mega_menu">
                                                <li class="menu_item_children"><a href="#">panjabi karchupa</a>
                                                    {{--  <ul class="categorie_sub_menu">
                                                        <li><a href="">Sweater</a></li>
                                                        <li><a href="">Evening</a></li>
                                                        <li><a href="">Day</a></li>
                                                        <li><a href="">Sports</a></li>
                                                    </ul>  --}}
                                                </li>
                                                <li class="menu_item_children"><a href="#">Kabli</a>
                                                    {{--  <ul class="categorie_sub_menu">
                                                        <li><a href="">Shoulder</a></li>
                                                        <li><a href="">Satchels</a></li>
                                                        <li><a href="">kids</a></li>
                                                        <li><a href="">coats</a></li>
                                                    </ul>  --}}
                                                </li>
                                                <li class="menu_item_children"><a href="#">White Trouser</a>
                                                    {{--  <ul class="categorie_sub_menu">
                                                        <li><a href="">Ankle Boots</a></li>
                                                        <li><a href="">Clog sandals </a></li>
                                                        <li><a href="">run</a></li>
                                                        <li><a href="">Books</a></li>
                                                    </ul>  --}}
                                                </li>
                                                <li class="menu_item_children"><a href="#">Black Trouser</a>
                                                    {{--  <ul class="categorie_sub_menu">
                                                        <li><a href="">Coats Jackets </a></li>
                                                        <li><a href="">Raincoats</a></li>
                                                        <li><a href="">Jackets</a></li>
                                                        <li><a href="">T-shirts</a></li>
                                                    </ul>  --}}
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu_item_children"><a href="#"> Mens Wisecoat <i class="fa fa-angle-right"></i></a>
                                            {{--  <ul class="categories_mega_menu column_3">
                                                <li class="menu_item_children"><a href="#">Chair</a>
                                                    <ul class="categorie_sub_menu">
                                                        <li><a href="">Dining room</a></li>
                                                        <li><a href="">bedroom</a></li>
                                                        <li><a href=""> Home & Office</a></li>
                                                        <li><a href="">living room</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu_item_children"><a href="#">Lighting</a>
                                                    <ul class="categorie_sub_menu">
                                                        <li><a href="">Ceiling Lighting</a></li>
                                                        <li><a href="">Wall Lighting</a></li>
                                                        <li><a href="">Outdoor Lighting</a></li>
                                                        <li><a href="">Smart Lighting</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu_item_children"><a href="#">Sofa</a>
                                                    <ul class="categorie_sub_menu">
                                                        <li><a href="">Fabric Sofas</a></li>
                                                        <li><a href="">Leather Sofas</a></li>
                                                        <li><a href="">Corner Sofas</a></li>
                                                        <li><a href="">Sofa Beds</a></li>
                                                    </ul>
                                                </li>
                                            </ul>  --}}
                                        </li>
                                        <li class="menu_item_children"><a href="#">Mens Hoddie <i class="fa fa-angle-right"></i></a>
                                            {{--  <ul class="categories_mega_menu column_2">
                                                <li class="menu_item_children"><a href="#">Brake Tools</a>
                                                    <ul class="categorie_sub_menu">
                                                        <li><a href="">Driveshafts</a></li>
                                                        <li><a href="">Spools</a></li>
                                                        <li><a href="">Diesel </a></li>
                                                        <li><a href="">Gasoline</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu_item_children"><a href="#">Emergency Brake</a>
                                                    <ul class="categorie_sub_menu">
                                                        <li><a href="">Dolls for Girls</a></li>
                                                        <li><a href="">Girls' Learning Toys</a></li>
                                                        <li><a href="">Arts and Crafts for Girls</a></li>
                                                        <li><a href="">Video Games for Girls</a></li>
                                                    </ul>
                                                </li>
                                            </ul>  --}}
                                        </li>
                                        <li class="menu_item_children"><a href="#"> Womens kurti <i class="fa fa-angle-right"></i></a>
                                            {{--  <ul class="categories_mega_menu column_2">
                                                <li class="menu_item_children"><a href="#">Check Trousers</a>
                                                    <ul class="categorie_sub_menu">
                                                        <li><a href="">Building</a></li>
                                                        <li><a href="">Electronics</a></li>
                                                        <li><a href="">action figures </a></li>
                                                        <li><a href="">specialty & boutique toy</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu_item_children"><a href="#">Calculators</a>
                                                    <ul class="categorie_sub_menu">
                                                        <li><a href="">Dolls for Girls</a></li>
                                                        <li><a href="">Girls' Learning Toys</a></li>
                                                        <li><a href="">Arts and Crafts for Girls</a></li>
                                                        <li><a href="">Video Games for Girls</a></li>
                                                    </ul>
                                                </li>
                                            </ul>  --}}
                                        </li>
                                        <li><a href="#">Mens JAcket</a></li>
                                        <li><a href="#"> Womens pant</a></li>
                                        <li><a href="#">womens Single kamiz</a></li>
                                        <li class="hidden"><a href="#">Borka </a></li>
                                        <li class="hidden"><a href="#">Hijab</a></li>
                                        <li><a href="#" id="more-btn"><i class="fa fa-plus" aria-hidden="true"></i> More Categories</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="column2 col-lg-8">
                            <div class="search_container">
                                <form action="#">
                                    <div class="hover_category" style="border-left: 2px solid #ebebeb">
                                        {{--  <select class="select_option" name="select" id="categori2">
                                            <option selected value="1">All Categories</option>
                                            <option value="2">Accessories</option>
                                            <option value="3">Accessories & More</option>
                                            <option value="4">Butters & Eggs</option>
                                            <option value="5">Camera & Video </option>
                                            <option value="6">Mornitors</option>
                                            <option value="7">Tablets</option>
                                            <option value="8">Laptops</option>
                                            <option value="9">Handbags</option>
                                            <option value="10">Headphone & Speaker</option>
                                            <option value="11">Herbs & botanicals</option>
                                            <option value="12">Vegetables</option>
                                            <option value="13">Shop</option>
                                            <option value="14">Laptops & Desktops</option>
                                            <option value="15">Watchs</option>
                                            <option value="16">Electronic</option>
                                        </select>  --}}
                                    </div>
                                    <div class="search_box" >
                                        <input placeholder="Search product..." type="text">
                                        <button type="submit">Search</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                        {{--  <div class="column3 col-lg-3 col-md-6">
                            <div class="header_bigsale">
                                <a href="#">BIG SALE BLACK FRIDAY</a>
                            </div>
                        </div>  --}}
                    </div>
                </div>
                <!--header bottom end-->
            </div>
        </div>
    </header>
    {{--  large devices  --}}
