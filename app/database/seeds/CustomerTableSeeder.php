<?php

use Illuminate\Database\Seeder;
use App\Entities\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return factory(Customer::class,50)->create();
    }
}
