<?php

use Illuminate\Database\Seeder;
use App\players;

class playersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 100;

        factory(players::class, $count)->create();

        // players::factory()->count(100)->create(); 
    }
}
