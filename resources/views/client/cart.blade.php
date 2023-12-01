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
                            <li>Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shopping cart area start -->
    <div class="cart_page_bg">
        <div class="container">
            <div class="shopping_cart_area">
                <form action="#">
                    @if ($cartItems->Count() > 0)
                    <div class="row">
                        <div class="col-12">
                            <div class="table_desc">
                                <div class="cart_page table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product_remove">Delete</th>
                                                <th class="product_thumb">Image</th>
                                                <th class="product_name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product_quantity">Quantity</th>
                                                <th class="product_total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cartItems as $item)
                                                <tr>
                                                    <td class="product_remove"><a href="javascript:void(0)" onclick="removeItemFromCart('{{ $item->rowId }}')"><i class="fa fa-trash-o"></i></a></td>
                                                    <td class="product_thumb"><a href="{{ route('client.product_details',$item->model->id) }}"><img src="{{asset('images/product_image/'.$item->model->image)}}" alt="{{ $item->model->title }}"></a></td>
                                                    <td class="product_name"><a href="{{ route('client.product_details',$item->model->id) }}">{{ $item->model->title }}</a></td>
                                                    <td class="product-price">৳{{ $item->price }}</td>
                                                    <td class="product_quantity"><label>Quantity</label> <input type="number" name="quantity" min="1" max="100" value="{{ $item->qty }}" data-rowid="{{ $item->rowId }}" onchange="updateQuantity(this)"></td>
                                                    <td class="product_total">৳{{ $item->subtotal() }}</td>


                                                </tr>
                                            @endforeach


                                            {{-- <tr>
                                                <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                                <td class="product_thumb"><a href="#"><img src="{{asset('client/img/featured-products/product2.jpg')}}" alt=""></a></td>
                                                <td class="product_name"><a href="#">Handbags justo</a></td>
                                                <td class="product-price">৳90.00</td>
                                                <td class="product_quantity"><label>Quantity</label> <input min="1" max="100" value="1" type="number"></td>
                                                <td class="product_total">৳180.00</td>


                                            </tr>
                                            <tr>
                                                <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                                <td class="product_thumb"><a href="#"><img src="{{asset('client/img/featured-products/product3.jpg')}}" alt=""></a></td>
                                                <td class="product_name"><a href="#">Handbag elit</a></td>
                                                <td class="product-price">৳80.00</td>
                                                <td class="product_quantity"><label>Quantity</label> <input min="1" max="100" value="1" type="number"></td>
                                                <td class="product_total">৳160.00</td>


                                            </tr> --}}

                                        </tbody>
                                    </table>
                                </div>
                                <div class="cart_submit">
                                    <a href="javascript:void(0)" onclick="clearCart()">clear cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--coupon code area start-->
                    <div class="coupon_area">
                        <div class="row">
                            {{-- <div class="col-lg-6 col-md-6">
                                <div class="coupon_code left">
                                    <h3>Coupon</h3>
                                    <div class="coupon_inner">
                                        <p>Enter your coupon code if you have one.</p>
                                        <input placeholder="Coupon code" type="text">
                                        <button type="submit">Apply coupon</button>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-lg-12 col-md-6">
                                <div class="coupon_code right">
                                    <h3>Cart Totals</h3>
                                    <div class="coupon_inner">
                                        <div class="cart_subtotal">
                                            <p>Subtotal</p>
                                            <p class="cart_amount">৳{{ Cart::instance('cart')->subtotal() }}</p>
                                        </div>
                                        {{-- <div class="cart_subtotal ">
                                            <p>Shipping</p>
                                            <p class="cart_amount"><span>Flat Rate:</span> ৳{{ Cart::instance('cart')->tax() }}</p>
                                        </div> --}}
                                        {{-- <a href="#">Calculate shipping</a> --}}

                                        <div class="cart_subtotal">
                                            <p>Total</p>
                                            <p class="cart_amount">৳{{ Cart::instance('cart')->total() }}</p>
                                        </div>
                                        <div class="checkout_btn">
                                            <a href="{{ route('client.checkout') }}">Proceed to Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>Your cart is empty !</h2>
                                <h5 class="mt-3">Add Items to it now.</h5>
                                <a href="{{ route('client.shop') }}" class="btn btn-warning mt-5">Shop Now</a>
                            </div>
                        </div>
                    @endif
                    <!--coupon code area end-->
                </form>
            </div>
        </div>
    </div>
    <!--shopping cart area end -->

    <form id="updateCartQty" action="{{ route('cart.update') }}" method="POST">
        @csrf
        @method('put')
        <input type="hidden" id="rowId" name="rowId" />
        <input type="hidden" id="quantity" name="quantity" />
    </form>
    <form id="deleteFromCart" action="{{ route('cart.remove') }}" method="post">
        @csrf
        @method('delete')
        <input type="hidden" id="rowId_D" name="rowId">
    </form>

    <form id="clearCart" action="{{ route('cart.clear') }}" method="post">
        @csrf
        @method('delete')
    </form>
@endsection

@push('scripts')
    <script>
        function updateQuantity(qty)
        {
            $('#rowId').val($(qty).data('rowid'));
            $('#quantity').val($(qty).val());
            $('#updateCartQty').submit();
        }
        function removeItemFromCart(rowId)
        {
            $('#rowId_D').val(rowId);
            $('#deleteFromCart').submit();
        }
        function clearCart()
        {
            $('#clearCart').submit();
        }
    </script>
@endpush
