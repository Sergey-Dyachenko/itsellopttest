<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Type;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        function addData($item, $key)
        {
            DB::table('types')->insert(['name' => $item]);
        }
        $array_types = Type::getTypesArray();
        array_walk($array_types , 'addData');
    }
}
