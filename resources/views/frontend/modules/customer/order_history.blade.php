
@extends('frontend.modules.customer.app')

@section('section')
        <!-- User history section -->
        <section class="ec-page-content ec-vendor-uploads ec-user-account section-space-p">
            <div class="container">
                <div class="row">
                    <!-- Sidebar Area Start -->
                    <div class="ec-shop-leftside ec-vendor-sidebar col-lg-3 col-md-12">
                        <div class="ec-sidebar-wrap">
                            <!-- Sidebar Category Block -->
                            <div class="ec-sidebar-block">
                                <div class="ec-vendor-block">
                                    <div class="ec-vendor-block-items">
                                        <ul>
                                            <li><a href="{{ route('customer.dashboard') }}">User Profile</a></li>
                                            <li><a href="{{ route('order.index') }}">History</a></li>
                                            <li><a href="{{ route('order.wishlist') }}">Wishlist</a></li>
                                            <li><a href="{{ route('cart.create') }}">Cart</a></li>
                                            <li><a href="{{ route('checkout.index') }}">Checkout</a></li>
                                            <li><a href="{{ route('order.order_tracking') }}">Track Order</a></li>
                                            <li><a href="{{ route('order.user_invoice') }}">Invoice</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-shop-rightside col-lg-9 col-md-12">
                        <div class="ec-vendor-dashboard-card">
                            <div class="ec-vendor-card-header">
                                <h5>Product History</h5>
                                <div class="ec-header-btn">
                                    <a class="btn btn-lg btn-primary" href="#">Shop Now</a>
                                </div>
                            </div>
                            <div class="ec-vendor-card-body">
                                <div class="ec-vendor-card-table">
                                    <table class="table ec-table">
                                        <thead>
                                            <tr>
                                                <th scope="col">SL</th>
                                                <th scope="col">Order ID</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $sl = 1
                                            @endphp
                                            @foreach ($orders as $order)
                                            <tr>
                                                <th scope="row"><span>{{ $sl++ }}</span></th>
                                                <td><span>Stylish baby shoes</span></td>
                                                <td><span>16 Jul 2021</span></td>
                                                <td><span>$65</span></td>
                                                <td><span>Active</span></td>
                                                <td><span class="tbl-btn"><a class="btn btn-lg btn-primary"
                                                            href="#">View</a></span></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End User history section -->
@endsection
