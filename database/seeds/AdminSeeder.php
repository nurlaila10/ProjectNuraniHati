<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
        'name'     => 'Admin',
        'email'    => 'admin@gmail.com',
        'password' => Hash::make('admin'),
        ));
    }
}
