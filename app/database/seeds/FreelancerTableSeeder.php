<?php

use Illuminate\Database\Seeder;
use App\Entities\Freelancer;

class FreelancerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return factory(Freelancer::class,50)->create();
    }
}
