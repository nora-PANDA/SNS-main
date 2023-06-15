<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
                DB::table('users')->insert([
                    [
                        'username'=>'ぱんだ',
                        'mail'=>'panda@mail',
                        'password'=>bcrypt('1234'),
                    ]
                ]);

    }
}
