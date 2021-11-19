<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'roomtype'=>'和室',
            'room_Number'=>101,            
        ];
        DB::table('rooms')->insert($param);

        $param=[
            'roomtype'=>'和室大',
            'room_Number'=>201,            
        ];
        DB::table('rooms')->insert($param);

        $param=[
            'roomtype'=>'洋室',
            'room_Number'=>301,            
        ];
        DB::table('rooms')->insert($param);

        $param=[
            'roomtype'=>'洋室大',
            'room_Number'=>401,            
        ];
        DB::table('rooms')->insert($param);
    }
}
