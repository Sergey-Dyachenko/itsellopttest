<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
   protected static $TypesArray = [1 => 'case', 2 => 'glass', 3 => 'film', 4 => 'cable', 5 => 'headphones'];

   public static function getTypesArray()
   {
       return self::$TypesArray;
   }

   public static function getAll()
   {
       return Type::all();
   }


}
