<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Type;

class ProductController extends Controller
{
    private function addProductCount($types)
    {
        $products = Product::getTypeProducts();

        foreach ($types as $type)
        {
            $count = $products->where('type_id', $type->id)->count();
            $type->count = $count;
        }
        return $types;
    }

    public function index()
    {
        $products = Product::paginate(50);
        $types = $this->addProductCount(Type::getAll());
        return view('page', ['products' => $products, 'types' => $types]);
    }
}
