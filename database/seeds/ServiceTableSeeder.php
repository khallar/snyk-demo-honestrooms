<?php

use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service')->delete();
        
        DB::table('service')->insert([
                ['name' => 'Electricity'],
                ['name' => 'Building fees'],
                ['name' => 'Gas'],
                ['name' => 'Water'],
               
            ]);
    }
}
