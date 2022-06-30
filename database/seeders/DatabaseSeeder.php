<?php

namespace Database\Seeders;

use App\Models\User;
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
				User::create([
					'nama' => 'Humas Samsat Haurgeulis',
					'nama_pengguna' => 'smsthgl',
					'nomor_hp' => '0234742750',
					'email' => 'samsathaurgeulis@gmail.com',
					'password' => bcrypt('12345'),
				]);
    }
}
