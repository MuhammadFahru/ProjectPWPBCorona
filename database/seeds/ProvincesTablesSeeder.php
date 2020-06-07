<?php

use Illuminate\Database\Seeder;
use App\Province;

class ProvincesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::create([
        	'province_name' => 'Riau'
        ]);
        Province::create([
        	'province_name' => 'Jawa Barat'
        ]);
        Province::create([
        	'province_name' => 'Aceh'
        ]);
    }
}
