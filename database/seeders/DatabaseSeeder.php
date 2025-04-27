<?php

namespace Database\Seeders;

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
  $this->call(BeerSeeder::class);
  $this->call(HopsSeeder::class);
  $this->call(YeastsSeeder::class);
  $this->call(Wheat_rice_sugarSeeder::class);
        }
}
