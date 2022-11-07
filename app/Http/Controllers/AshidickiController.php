<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Distributors;

class AshidickiController extends Controller
{
    public function index()
    {
    	$products = Products::get();
    	return view('products', ['products' => $products]);
    }
}
