<?php

use Illuminate\Database\Seeder;

use App\Movie2;

class Movie2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Movie2::class, 10)->create();
    }
}
