<?php

use Illuminate\Database\Seeder;

class PostsTbaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->insert([
            ['post' => 'こんにちは。']
        ]);
    }
}
