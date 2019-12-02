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
        $users = [
            ['name' => 'admin', 'email' => 'admin@gmail.com', 'password' => Hash::make('admin123')],
            ['name' => 'Manh Quan', 'email' => 'manhquan@gmail.com', 'password' => Hash::make('manhquan123')]
        ];
        DB::table('users')->insert($users);
    }
}
