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
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--Checkout page section-->
    <div class="checkout_page_bg">
        <div class="container">
            <div class="Checkout_section">
                <div class="row">
                    {{-- <div class="col-12">
                        <div class="user-actions">
                            <h3>
                                <i class="fa fa-file-o" aria-hidden="true"></i>
                                Returning customer?
                                <a class="Returning" href="#checkout_login" data-bs-toggle="collapse" aria-expanded="true">Click here to login</a>

                            </h3>
                             <div id="checkout_login" class="collapse" data-parent="#accordion">
                                <div class="checkout_info">
                                    <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing & Shipping section.</p>
                                    <form action="#">
                                        <div class="form_group">
                                            <label>Username or email <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="form_group">
                                            <label>Password  <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="form_group group_3 ">
                                            <button type="submit">Login</button>
                                            <label for="remember_box">
                                                <input id="remember_box" type="checkbox">
                                                <span> Remember me </span>
                                            </label>
                                        </div>
                                        <a href="#">Lost your password?</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="user-actions">
                            <h3>
                                <i class="fa fa-file-o" aria-hidden="true"></i>
                                Returning customer?
                                <a class="Returning" href="#checkout_coupon" data-bs-toggle="collapse"  aria-expanded="true">Click here to enter your code</a>

                            </h3>
                             <div id="checkout_coupon" class="collapse" data-parent="#accordion">
                                <div class="checkout_info coupon_info">
                                    <form action="#">
                                        <input placeholder="Coupon code" type="text">
                                        <button type="submit">Apply coupon</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                   </div> --}}
                </div>
                <div class="checkout_form">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="checkout_form_left">
                                <h3>Billing Details</h3>
                                <div class="row">

                                    <div class="col-lg-12 mb-20">
                                        <label>Name <span>*</span></label>
                                        <input type="text" value="{{ Auth::user()->name }}" readonly>
                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <label>Phone<span>*</span></label>
                                        <input type="text" value="{{ Auth::user()->phone }}" readonly>

                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <label> Email Address <span>*</span></label>
                                        <input type="text" value="{{ Auth::user()->email }}" readonly>

                                    </div>

                                    <div class="col-12 mb-20">
                                        <label>Street address <span>*</span></label>
                                        <input placeholder="House number and street name" type="text" value="{{ Auth::user()->address }}" readonly>
                                    </div>
                                    {{-- <div class="col-12 mb-20">
                                        <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                    </div> --}}
                                    {{-- <div class="col-12 mb-20">
                                        <label>Town / City <span>*</span></label>
                                        <input type="text">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label>State / County <span>*</span></label>
                                        <input type="text">
                                    </div> --}}
                                    {{-- <div class="col-12 mb-20">
                                        <input id="account" type="checkbox" data-target="createp_account" />
                                        <label for="account" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne">Create an account?</label>

                                        <div id="collapseOne" class="collapse one" data-parent="#accordion">
                                            <div class="card-body1">
                                                <label> Account password <span>*</span></label>
                                                <input placeholder="password" type="password">
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="col-12 mb-20">
                                        <input id="address" type="checkbox" data-target="createp_account" />
                                        <label class="righ_0" for="address" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-controls="collapseOne">Ship to a different address?</label>

                                        <div id="collapsetwo" class="collapse one" data-parent="#accordion">
                                            <div class="row">
                                                <div class="col-lg-6 mb-20">
                                                    <label>First Name <span>*</span></label>
                                                    <input type="text">
                                                </div>
                                                <div class="col-lg-6 mb-20">
                                                    <label>Last Name <span>*</span></label>
                                                    <input type="text">
                                                </div>
                                                <div class="col-12 mb-20">
                                                    <label>Company Name</label>
                                                    <input type="text">
                                                </div>
                                                <div class="col-12 mb-20">
                                                    <div class="select_form_select">
                                                        <label for="countru_name">country <span>*</span></label>
                                                        <select class="niceselect_option" name="cuntry" id="countru_name">
                                                            <option value="2">bangladesh</option>
                                                            <option value="3">Algeria</option>
                                                            <option value="4">Afghanistan</option>
                                                            <option value="5">Ghana</option>
                                                            <option value="6">Albania</option>
                                                            <option value="7">Bahrain</option>
                                                            <option value="8">Colombia</option>
                                                            <option value="9">Dominican Republic</option>

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-12 mb-20">
                                                    <label>Street address <span>*</span></label>
                                                    <input placeholder="House number and street name" type="text">
                                                </div>
                                                <div class="col-12 mb-20">
                                                    <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                                </div>
                                                <div class="col-12 mb-20">
                                                    <label>Town / City <span>*</span></label>
                                                    <input type="text">
                                                </div>
                                                <div class="col-12 mb-20">
                                                    <label>State / County <span>*</span></label>
                                                    <input type="text">
                                                </div>
                                                <div class="col-lg-6 mb-20">
                                                    <label>Phone<span>*</span></label>
                                                    <input type="text">

                                                </div>
                                                <div class="col-lg-6">
                                                    <label> Email Address <span>*</span></label>
                                                    <input type="text">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="order-notes">
                                            <label for="order_note">Order Notes</label>
                                            <textarea id="order_note" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                        </div>
                                    </div> --}}
                                </div>
                                {{-- <div class="row">
                                    <div class="user-actions">
                                        <h3>
                                            <input type="checkbox" name="is_shipping_different" id="is_shipping_different">
                                            <a class="Returning" href="#checkout_coupon" data-bs-toggle="collapse"  aria-expanded="true">Ship To A Different Address</a>


                                        </h3>
                                         <div id="checkout_coupon" class="collapse" data-parent="#accordion">
                                            <div class="checkout_info coupon_info">
                                                <form action="#">

                                                    <h3>Shipping Details</h3>
                                                    <div class="row">

                                                        <div class="col-12 mb-20">
                                                            <label>Street address <span>*</span></label>
                                                            <input placeholder="House number and street name" type="text" name="line1">
                                                        </div>
                                                        <div class="col-12 mb-20">
                                                            <input placeholder="Apartment, suite, unit etc. (optional)" type="text" name="line2">
                                                        </div>
                                                        <div class="col-12 mb-20">
                                                            <label>Town / City <span>*</span></label>
                                                            <input type="text" name="city">
                                                        <div class="col-lg-6 mb-20">
                                                            <label>Phone<span>*</span></label>
                                                            <input type="text" name="mobile">

                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="checkout_form_right">
                                <form action="{{ route('place.order') }}" method="post">
                                    @csrf
                                    <h3>Your order</h3>
                                    <div class="order_table table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (Cart::instance('cart')->content())
                                                    @foreach (Cart::instance('cart')->content() as $item)
                                                    <tr>
                                                        <td> {{ $item->model->title }} <strong> × {{ $item->qty }}</strong></td>
                                                        <td> ৳{{ $item->subtotal }}</td>
                                                    </tr>
                                                    @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Cart Subtotal</th>
                                                    @if (Session::has('checkout'))
                                                    <td>৳{{ Session::get('checkout')['total'] }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <th>Shipping</th>
                                                    <td><strong>৳50.00</strong></td>
                                                </tr>
                                                <tr class="order_total">
                                                    <th>Order Total</th>
                                                    @if (Session::has('checkout'))
                                                        <td><strong>৳{{ Session::get('checkout')['total']+50 }}</strong></td>
                                                    @endif

                                                </tr>
                                            </tfoot>
                                            @endif
                                        </table>
                                    </div>
                                    <div class="payment_method">
                                        {{-- <div class="panel-default">
                                            <input id="payment" name="check_method" type="radio" data-target="createp_account" />
                                            <label for="payment" data-bs-toggle="collapse" data-bs-target="#method" aria-controls="method">Create an account?</label>

                                            <div id="method" class="collapse one" data-parent="#accordion">
                                                <div class="card-body1">
                                                    <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-default">
                                            <input id="payment_defult" name="check_method" type="radio" data-target="createp_account" />
                                            <label for="payment_defult" data-bs-toggle="collapse" data-bs-target="#collapsedefult" aria-controls="collapsedefult">PayPal <img src="assets/img/icon/papyel.png" alt=""></label>

                                            <div id="collapsedefult" class="collapse one" data-parent="#accordion">
                                                <div class="card-body1">
                                                    <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <h4>Cash On Delevery</h4>
                                        <input type="hidden" value="cod" name="paymentMethod">
                                        <div class="order_button">
                                            <button type="submit">Proceed to Order</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Checkout page section end-->

@endsection
