<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'book_ID'=>1,
            'room_ID'=>1,
            'stays'=>2,
            'fee'=>5000,             
        ];
        DB::table('statements')->insert($param);

        
        $param=[
            'book_ID'=>2,
            'room_ID'=>2,
            'stays'=>3,
            'fee'=>7000,             
        ];
        DB::table('statements')->insert($param);

        $param=[
            'book_ID'=>3,
            'room_ID'=>3,
            'stays'=>4,
            'fee'=>9000,             
        ];
        DB::table('statements')->insert($param);

        $param=[
            'book_ID'=>4,
            'room_ID'=>4,
            'stays'=>5,
            'fee'=>1000,             
        ];
        DB::table('statements')->insert($param);
    }
}
