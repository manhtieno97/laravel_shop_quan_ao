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
                'name'=>'manhtien',
                'level'=>1,
             ],
             [
                'email'=>'manhtieno97@gmail.com',
                'password'=>bcrypt('123abc'),
                'name'=>'tien',
                'level'=>2,
             ],
        ];
        DB::table('user')->insert($data);
    }
}
