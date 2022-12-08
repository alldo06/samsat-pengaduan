<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSamsatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
				User::firstOrCreate(
					[
						'nama_pengguna' => 'smsthgl',
					],
					[
						'nama' => 'Humas Samsat Haurgeulis',
						'nomor_hp' => '0234742750',
						'email' => 'samsathaurgeulis@gmail.com',
						'password' => bcrypt('12345'),
					]);

				User::firstOrCreate(
					[
						'nama_pengguna' => 'smsthgl2',
					],
					[
					'nama' => 'Humas Samsat Haurgeulis 2',
					'nomor_hp' => '0234742752',
					'email' => 'samsathaurgeulis2@gmail.com',
					'password' => bcrypt('12345'),
				]);
    }
}
