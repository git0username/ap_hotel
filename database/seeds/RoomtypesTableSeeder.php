<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomtypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'type'=>'和室',
            'number_of_capacity'=>4,            
        ];
        DB::table('RoomTypes')->insert($param);

        $param=[
            'type'=>'和室大',
            'number_of_capacity'=>8,            
        ];
        DB::table('RoomTypes')->insert($param);

        $param=[
            'type'=>'洋室',
            'number_of_capacity'=>4,            
        ];
        DB::table('RoomTypes')->insert($param);

        $param=[
            'type'=>'洋室大',
            'number_of_capacity'=>8,            
        ];
        DB::table('RoomTypes')->insert($param);
    }
}
