<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VehicleType;

class VehicleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VehicleType::firstOrCreate(['name' => 'Motor']);
        VehicleType::firstOrCreate(['name' => 'Mobil']);

        // VehicleType::factory()->count(10)->create();
    }
}
