<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $param = [
      'last_name' => '山田',
      'first_name' => '太郎',
      'Gender' => '男性',
    ];
    DB::table('Checktest01')->insert($param);
    $param = [
      'last_name' => '川村',
      'first_name' => '花子',
      'Gender' => '女性',
    ];
    DB::table('Checktest01')->insert($param);
    $param = [
      'last_name' => '平田',
      'first_name' => '要',
      'Gender' => 'その他',
    ];
    DB::table('Checktest01')->insert($param);
    $param = [
      'last_name' => '山川',
      'first_name' => '広見',
      'Gender' => 'その他',];
    DB::table('Checktest01')->insert($param);
    }
}
