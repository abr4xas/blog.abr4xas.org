<?php

use App\User;
use Illuminate\Database\Seeder;

/**
 * Class AdminUserSeeder
 */
class AdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'angel',
            'email'     => 'me@abr4xas.org',
            'password'  => 'secret'
        ]);
    }
}
