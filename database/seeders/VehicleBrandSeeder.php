<?php

namespace Database\Seeders;

use App\Models\VehicleBrand;
use Illuminate\Database\Seeder;

class VehicleBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VehicleBrand::firstOrCreate(['name' => 'Yamaha']);
        VehicleBrand::firstOrCreate(['name' => 'Honda']);
        VehicleBrand::firstOrCreate(['name' => 'Nissan']);

        // VehicleBrand::factory()->count(10)->create();
    }
}
