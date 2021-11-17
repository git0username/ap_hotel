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
            'roomtype_ID'=>1,
            'room_Number'=>101,            
        ];
        DB::table('Rooms')->insert($param);

        $param=[
            'roomtype_ID'=>2,
            'room_Number'=>201,            
        ];
        DB::table('Rooms')->insert($param);

        $param=[
            'roomtype_ID'=>3,
            'room_Number'=>301,            
        ];
        DB::table('Rooms')->insert($param);

        $param=[
            'roomtype_ID'=>4,
            'room_Number'=>401,            
        ];
        DB::table('Rooms')->insert($param);
    }
}
