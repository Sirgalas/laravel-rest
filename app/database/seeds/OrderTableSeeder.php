<?php

use Illuminate\Database\Seeder;
use App\Entities\Order;
class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return factory(Order::class,50)->create();
    }
}
