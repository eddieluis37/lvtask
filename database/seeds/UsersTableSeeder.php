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
        factory(Taskapp\User::class)->create([

            'name' => 'eddie',
            'email' => 'eddierada@gmail.com',
            'password' =>bcrypt('123456'),
            'type' => 1,

        ]);

        factory(Taskapp\User::class, 7)->create();

    }
}
