<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[           
            'userid'=>1,
            'number'=>3,
            'check_in'=>'2021-10-26',
            'check_out'=>'2021-10-27',
        ];
        DB::table('books')->insert($param);

        $param=[           
            'userid'=>2,
            'number'=>2,
            'check_in'=>'2021-11-26',
            'check_out'=>'2021-11-27',
        ];
        DB::table('books')->insert($param);
    }
}
