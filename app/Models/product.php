<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function productInfo()
    {
        return $this->hasOne(productInfo::class);
    }
    public function productSlider()
    {
        return $this->hasMany(productSlider::class, 'product_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function Subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
}