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

        $masjid = [
            [
                'name' => 'Masjid Al-Ikhlas',
                'latitude' => '-6.200000',
                'longitude' => '106.816666',
            ],
            [
                'name' => 'Masjid Al-Muhajirin',
                'latitude' => '-6.200000',
                'longitude' => '106.816666',
            ],
        ];

        $activities = [
            [
                'name' => 'Sholat Subuh',
            ],
            [
                'name' => 'Sholat Maghrib - Isya',
            ],
            [
                'name' => 'Sholat Jum\'at',
            ],
            [
                'name' => 'Khutbah Jum\'at',
            ]

        ];

        foreach ($activities as $key) {
            \App\Models\Activities::create($key);
        }

        foreach ($masjid as $key) {
            \App\Models\Masjid::create($key);
        }

        foreach ($user as $key) {
            \App\Models\User::create($key);
        }

        foreach ($imam as $key) {
            \App\Models\Imam::create($key);
        }

        $jadwal = [
            [
                'imam_id' => 1,
                'masjid_id' => 1,
                'activity_id' => 1,
                'keterangan' => 'Alhamdulillah lancar',
                'bukti' => 'https://www.google.com',
                'date' => '2021-06-08',
                'status' => 'belum_absen',
            ],
            [
                'imam_id' => 1,
                'masjid_id' => 1,
                'activity_id' => 2,
                'keterangan' => 'Alhamdulillah lancar',
                'bukti' => 'https://www.google.com',
                'date' => '2021-06-08',
                'status' => 'belum_absen',
            ],
            [
                'imam_id' => 1,
                'masjid_id' => 1,
                'activity_id' => 3,
                'keterangan' => 'Alhamdulillah lancar',
                'bukti' => 'https://www.google.com',
                'date' => '2021-06-08',
                'status' => 'belum_absen',
            ],
            [
                'imam_id' => 1,
                'masjid_id' => 1,
                'activity_id' => 4,
                'keterangan' => 'Alhamdulillah lancar',
                'bukti' => 'https://www.google.com',
                'date' => '2021-06-08',
                'status' => 'belum_absen',
            ],
            [
                'imam_id' => 1,
                'masjid_id' => 1,
                'activity_id' => 1,
                'keterangan' => 'Alhamdulillah lancar',
                'bukti' => 'https://www.google.com',
                'date' => '2021-06-09',
                'status' => 'belum_absen',
            ],
            [
                'imam_id' => 1,
                'masjid_id' => 1,
                'activity_id' => 2,
                'keterangan' => 'Alhamdulillah lancar',
                'bukti' => 'https://www.google.com',
                'date' => '2021-06-09',
                'status' => 'belum_absen',
            ],
            [
                'imam_id' => 1,
                'masjid_id' => 1,
                'activity_id' => 3,
                'keterangan' => 'Alhamdulillah lancar',
                'bukti' => 'https://www.google.com',
                'date' => '2021-06-09',
                'status' => 'belum_absen',
            ],
        ];

        foreach ($jadwal as $key) {
            \App\Models\Jadwal::create($key);
        }
    }
}
