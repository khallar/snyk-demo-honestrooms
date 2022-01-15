<?php

use Illuminate\Database\Seeder;

class LivesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lives')->delete();
        
        DB::table('lives')->insert([
                ['name' => 'Man'],
                ['name' => 'Woman'],
                ['name' => 'A couple'],
                ['name' => 'A family'],
               
            ]);
    }
}
