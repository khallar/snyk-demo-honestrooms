<?php

use Illuminate\Database\Seeder;

class PetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pets')->delete();
        
        DB::table('pets')->insert([
                ['name' => 'Dog'],
                ['name' => 'Cat'],
                //['name' => 'Others'],
                // ['name' => 'No Pets'],
               
            ]);
    }
}
