<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Sebastian Nicolas Maciel',
            'email' => 'Sebamaciel15@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        User::factory(30)->create();
    }
}
