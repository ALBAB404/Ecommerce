<?php

function cart_products(){
    return auth('customer')->user()->cart;
}

function cart_items()
{
    $cart = auth('customer')->user()->cart;
    $sum = 0;
    foreach($cart as $cart){
        $sum += $cart->quantity;
    }

    return $sum;
}


function calculateDiscount($subtotal){
    if(couponDiscount() == 0) {
        return 0;
    }
    return $subtotal * (couponDiscount() /100);
}

function couponName(){
    return session('couponName');
}

function couponDiscount(){
    return session('couponDiscount');
}

function deleteCoupon(){
    session()->forget('couponName');
    session()->forget('couponDiscount');
}

function getTotalAmount()
{
    $cartItems = cart_products();
    $sum = 0;
    foreach($cartItems as $item){
        $temp =  ($item->quantity * $item->product->productInfo->sell_price);
        $sum += $temp;
    }
    return $sum;
}

function getAmountWithDiscount()
{
    return getTotalAmount() - calculateDiscount(getTotalAmount());
}