<?php
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class gamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('games')->insert([

    			[
    			'name' => 'Call of Duty',
    			'version' => 'Version 5.0',
    			'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

    			],

    					[
    			'name' => 'Mortal Kombat',
    			'version' => 'Version 1.0',
    			'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

    			],


    					[
    			'name' => 'FIFA',
    			'version' => 'Version 7.0',
    			'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

    			],

    					[
    			'name' => 'Just Cause',
    			'version' => 'Version 10.9',
    			'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

    			],

    					[
    			'name' => 'Apex Legend',
    			'version' => 'Version 13.0',
    			'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

    			],

    	]);
        
    }
}
