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
                            <li>login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

       <!-- customer login start -->
    <div class="login_page_bg">
        <div class="container">
            <div class="customer_login">
                <div class="row">
                    <!--login area start-->
                    <div class="col-lg-6 col-md-6">
                        <div class="account_form login">
                            <h2>login</h2>
                            <form action="{{ route('admin.login') }}" method="post">
                                @csrf
                                <p>
                                    <label>Username or email <span>*</span></label>
                                    <input type="text" name="email">
                                </p>
                                <p>
                                    <label>Passwords <span>*</span></label>
                                    <input type="password" name="password">
                                </p>
                                <div class="login_submit">
                                    {{--  <a href="#">Lost your password?</a>  --}}
                                    <label for="remember">
                                        <input id="remember" type="checkbox">
                                        Remember me
                                    </label>
                                    <button type="submit">login</button>

                                </div>

                            </form>
                        </div>
                    </div>
                    <!--login area start-->

                    <!--register area start-->
                    <div class="col-lg-6 col-md-6">
                        <div class="account_form register">
                            <h2>Register</h2>
                            <form action="{{ route('customer.register') }}" method="POST">
                                @csrf
                                <input type="text" hidden name="type" value="Customer">
                                  <p>
                                    <label> Name <span>*</span></label>
                                    <input type="text" name="name" required>
                                </p>
                                <p>
                                    <label>Email address <span>*</span></label>
                                    <input type="text" name="email" required>
                                </p>

                                 <p>
                                    <label>Phone <span>*</span></label>
                                    <input type="text" name="phone" required>
                                </p>
                                <p>
                                    <label>Address <span>*</span></label>
                                    <input type="text" name="address" required>
                                </p>
                                 <p>
                                    <label>Passwords <span>*</span></label>
                                    <input type="password" name="password" required>
                                </p>
                                <div class="login_submit">
                                    <button type="submit">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--register area end-->
                </div>
            </div>
        </div>
    </div>
    <!-- customer login end -->

@endsection
