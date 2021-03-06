<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Client;
use App\Models\Menu;
use App\Models\Role;
use App\Models\State;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Storage::deleteDirectory('menu');
        Storage::makeDirectory('menu');

        Category::factory(5)->create();
        $this->call(UserSeeder::class);
        Client::factory(10)->create();
        Role::factory(8)->create();
        State::factory(9)->create();
        $this->call(MenuSeeder::class);
        $this->call(OrderSeeder::class);
    }
}
