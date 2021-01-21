<?php

use Illuminate\Database\Seeder;
use App\gameplays;

class gamesplaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $count = 100;

        factory(gameplays::class, $count)->create();
    }
}
