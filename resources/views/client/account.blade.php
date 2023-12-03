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
                            <li>My Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

         <!-- my account start  -->
    <div class="account_page_bg">
        <div class="container">
            <section class="main_content_area">
                <div class="account_dashboard">
                    <div class="row">
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <!-- Nav tabs -->
                            <div class="dashboard_tab_button">
                                <ul role="tablist" class="nav flex-column dashboard-list">
                                    <li><a href="#dashboard" data-bs-toggle="tab" class="nav-link active">Dashboard</a></li>
                                    <li> <a href="#orders" data-bs-toggle="tab" class="nav-link">Orders</a></li>
                                    {{--  <li><a href="#downloads" data-bs-toggle="tab" class="nav-link">Downloads</a></li>  --}}
                                    <li><a href="#address" data-bs-toggle="tab" class="nav-link">Addresses</a></li>
                                    <li><a href="#account-details" data-bs-toggle="tab" class="nav-link">Account details</a></li>
                                    <li><a href="{{ route('admin.logout') }}" class="nav-link">logout</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-9 col-lg-9">
                            <!-- Tab panes -->
                            <div class="tab-content dashboard_content">
                                <div class="tab-pane fade show active" id="dashboard">
                                    <h3>Dashboard </h3>
                                    <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#">Edit your password and account details.</a></p>
                                </div>
                                <div class="tab-pane fade" id="orders">
                                    <h3>Orders</h3>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Order</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Total</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($orderlist)
                                                    @foreach ($orderlist as $order)
                                                    <tr>
                                                        <td>{{ $order->id }}</td>
                                                        <td>{{ $order->created_at }}</td>
                                                        <td><span class="success">{{ $order->status }}</span></td>
                                                        <td>{{ $order->total }}</td>
                                                        <td><a href="#" class="view">view</a></td>
                                                    </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                {{--  <div class="tab-pane fade" id="downloads">
                                    <h3>Downloads</h3>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Downloads</th>
                                                    <th>Expires</th>
                                                    <th>Download</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Shopnovilla - Free Real Estate PSD Template</td>
                                                    <td>May 10, 2022</td>
                                                    <td><span class="danger">Expired</span></td>
                                                    <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Organic - ecommerce html template</td>
                                                    <td>Sep 11, 2022</td>
                                                    <td>Never</td>
                                                    <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>  --}}
                                <div class="tab-pane" id="address">
                                    <p>The following addresses will be used on the checkout page by default.</p>
                                    <h4 class="billing-address">Billing address</h4>
                                    <a href="#" class="view">Edit</a>
                                    <p><strong>Bobby Jackson</strong></p>
                                    <address>
                                        <span><strong>City:</strong> Seattle</span>,
                                        <br>
                                        <span><strong>State:</strong> Washington(WA)</span>,
                                        <br>
                                        <span><strong>ZIP:</strong> 98101</span>,
                                        <br>
                                        <span><strong>Country:</strong> USA</span>
                                    </address>
                                </div>
                                {{-- <div class="tab-pane fade" id="account-details">
                                    <h3>Account details </h3>
                                    <div class="login">
                                        <div class="login_form_container">
                                            <div class="account_login_form">
                                                <form action="#">
                                                    <p>Already have an account? <a href="#">Log in instead!</a></p>

                                                    <label>First Name</label>
                                                    <input type="text" name="first-name">
                                                    <label>Last Name</label>
                                                    <input type="text" name="last-name">
                                                    <label>Email</label>
                                                    <input type="text" name="email-name">
                                                    <label>Password</label>
                                                    <input type="password" name="user-password">
                                                    <label>Birthdate</label>
                                                    <input type="text" placeholder="MM/DD/YYYY" value="" name="birthday">
                                                    <div class="save_button primary_btn default_button">
                                                        <button type="submit">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- my account end   -->

@endsection
