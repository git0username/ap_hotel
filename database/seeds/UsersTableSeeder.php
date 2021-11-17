<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'name'=>'山田太郎',
            'address'=>'奈良県磯城郡三宅町',
            'tel'=>'090-1111-1111',
        ];
        DB::table('Users')->insert($param);

        $param=[
            'name'=>'田中花子',
            'address'=>'奈良県磯城郡田原本町',
            'tel'=>'090-2222-2222',
        ];
        DB::table('Users')->insert($param);
    }
}
