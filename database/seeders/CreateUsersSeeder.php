<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@threefalcan.com',
                'is_admin' => '1',
                'mobile' => '1234567890',
                'password' => bcrypt('#3falcan'),
            ],
            [
                'name' => 'User',
                'email' => 'user@threefalcan.com',
                'is_admin' => '0',
                'mobile' => '1234567891',
                'password' => bcrypt('#3falcan'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
