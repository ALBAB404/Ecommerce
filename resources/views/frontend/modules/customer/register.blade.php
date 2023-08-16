@extends('frontend.modules.customer.app')

@section('section')
<!-- Ec login page -->
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2 class="ec-bg-title">Log In</h2>
                    <h2 class="ec-title">Register Form</h2>
                    <p class="sub-title mb-3">Best place to buy and sell digital products</p>
                </div>
            </div>
            <div class="ec-login-wrapper">
                <div class="ec-login-container">
                    <div class="ec-login-form">
                        <form action="{{ route('customer.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <span class="ec-login-wrap">
                                <label>Name*</label>
                                <input type="text" name="name" placeholder="Enter your name add..." required />
                            </span>
                            <span class="ec-login-wrap">
                                <label>Email Address*</label>
                                <input type="email" name="email" placeholder="Enter your email add..." required />
                            </span>
                            <span class="ec-login-wrap">
                                <label>Image*</label>
                                <input type="file" name="image" class="form-control"/>
                            </span>
                            <span class="ec-login-wrap">
                                <label>Password*</label>
                                <input type="password" name="password" placeholder="Enter your password" required />
                            </span>
                            <span class="ec-login-wrap ec-login-fp">
                                <label><a href="#">Forgot Password?</a></label>
                            </span>
                            <span class="ec-login-wrap ec-login-btn">
                                <button type="submit" class="btn btn-secondary">Register</button>
                                <a href="{{ route('customer.login') }}" class="btn btn-secondary" type="submit">Login</a>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
