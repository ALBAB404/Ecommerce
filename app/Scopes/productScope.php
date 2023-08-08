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

}
