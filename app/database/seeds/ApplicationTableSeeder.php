<?php

use Illuminate\Database\Seeder;
use App\Entities\Application;

class ApplicationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return factory(Application::class,50)->create();
    }
}
