<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UserSeeder');
        $this->call('CategoryTableSeeder');
    }
    
}
class UserSeeder extends Seeder
{
     public function run()
    {

         $data=[
             [
                'email'=>'manhtien@gmail.com',
                'password'=>bcrypt('123456'),
                'confirm_password'=>('123456'),
                'name'=>'manhtien',
                'level'=>1,
             ],
             [
                'email'=>'manhtieno97@gmail.com',
                'password'=>bcrypt('123abc'),
                'confirm_password'=>('123abc'),
                'name'=>'tien',
                'level'=>2,
             ],
        ];
        DB::table('user')->insert($data);
    }
}
class CategoryTableSeeder extends Seeder
{
    public function run()
    {
        $data=[
            [
                'name'=>'Áo',
                'status'=>1,
                'cat_slug'=>'Áo',
            ],
            [
                'name'=>'Quần',
                'status'=>1,
                'cat_slug'=>'Quần',
            ]
        ];
        DB::table('category')->insert($data);
    }
}
