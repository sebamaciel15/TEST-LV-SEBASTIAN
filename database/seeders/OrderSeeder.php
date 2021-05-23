<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = Order::factory(15)->create();

        foreach ($orders as $order) {
            Image::factory(1)->create([
                'imageable_id' => $order->id,
                'imageable_type' => Order::class
            ]);
        };
    }
}
