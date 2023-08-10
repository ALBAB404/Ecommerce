<?php

namespace App\Scopes;

trait ProductScope {

    public function scopeActiveProduct($query)
    {
        return $query->whereHas('productInfo', function($q){
            return $q->where('is_active', 1);
        })->with('productInfo');
    }

    public function scopeActiveFeatured($query)
    {
        return $query->whereHas('productInfo', function($q){
            $q->where('is_featured', 1);
        })->with('productInfo')->activeProduct();
    }

    public function scopeLatestProduct($query)
    {
        return $query->whereHas('productInfo', function ($q) {
            $q->where('is_featured', 2);
        })->with('productInfo');
    }
    public function scopeNewArrivals($query)
    {
        return $query->whereHas('productInfo', function ($q) {
            $q->where('is_featured', 3);
        })->with('productInfo');
    }
    public function scopeTrandingProduct($query)
    {
        return $query->whereHas('productInfo', function ($q) {
            $q->where('is_featured', 4);
        })->with('productInfo');
    }
    public function scopeTopProduct($query)
    {
        return $query->whereHas('productInfo', function ($q) {
            $q->where('is_featured', 5);
        })->with('productInfo');
    }

}