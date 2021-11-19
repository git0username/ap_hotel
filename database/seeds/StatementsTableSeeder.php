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
            'roomtype'=>'和室',
            'stays'=>2,
            'fee'=>5000,             
        ];
        DB::table('statements')->insert($param);

        
        $param=[
            'book_ID'=>2,
            'roomtype'=>'和室大',
            'stays'=>3,
            'fee'=>7000,             
        ];
        DB::table('statements')->insert($param);

        $param=[
            'book_ID'=>3,
            'roomtype'=>'洋室',
            'stays'=>4,
            'fee'=>9000,             
        ];
        DB::table('statements')->insert($param);

        $param=[
            'book_ID'=>4,
            'roomtype'=>'洋室大',
            'stays'=>5,
            'fee'=>1000,             
        ];
        DB::table('statements')->insert($param);
    }
}
