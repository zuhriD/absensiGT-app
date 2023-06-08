<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        $imam = [
            [
                'name' => 'Abdurrozzaaq',
                'username' => 'rozaq',
                'password' => bcrypt('rozaq'),
            ],
            [
                'name' => 'Muhammad Said',
                'username' => 'said',
                'password' => bcrypt('said'),
            ],
        ];

        $user = [
            [
                'name' => 'Admin',
                'username' => 'admin',
                'password' => bcrypt('admin123'),
            ],
        ];

        foreach ($user as $key) {
            \App\Models\User::create($key);
        }

        foreach ($imam as $key) {
            \App\Models\Imam::create($key);
        }
    }
}
