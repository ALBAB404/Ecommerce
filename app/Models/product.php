<?php

namespace App\Models;

use App\Scopes\ProductScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory, ProductScope;

    protected $guarded = [];
    protected $with = ['size','color','productInfo','productSlider','category','Subcategory'];

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
        return $this->hasMany(productSlider::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function Subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
    public function color()
    {
        return $this->belongsTo(Color::class);
    }
    public function size()
    {
        return $this->belongsTo(Size::class);
    }





}