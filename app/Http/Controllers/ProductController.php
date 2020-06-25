<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Type;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(50);
        $types = Type::all();
        return view('page', ['products' => $products, 'types' => $types]);
    }
}
