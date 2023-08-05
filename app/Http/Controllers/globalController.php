<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;

class globalController extends Controller
{
    public function getData($id)
    {
        $getSubcategory =  Subcategory::where('category_id', $id)->latest()->get();
        return response()->json($getSubcategory);
    }
}