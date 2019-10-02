<?php

use Illuminate\Database\Seeder;
use App\RumahMakan;

class RumahMakanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $RumahMakan = RumahMakan::create([
            
            'deskripsi'=> 'abvhdvsahd ansngxhga',
            'longitude' =>'',
            'latitude' => '',
        ]);

    }
}
