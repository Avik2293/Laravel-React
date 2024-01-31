<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
// use Ramsey\Uuid\Uuid;


class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'System Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            // 'code' => (string)Uuid::uuid1()
        ]);
    }
}
