<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use App\Models\Image;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = Menu::factory(15)->create();

        foreach ($menus as $menu) {
            Image::factory(1)->create([
                'imageable_id' => $menu->id,
                'imageable_type' => Menu::class
            ]);
        };
    }
}
