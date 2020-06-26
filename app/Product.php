<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    public static function getTypeProducts()
    {
        return DB::table('products')
            ->select('type_id')
            ->get();
    }
}
