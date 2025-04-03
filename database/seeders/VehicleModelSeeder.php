<?php

namespace Database\Seeders;

use App\Models\VehicleModel;
use Illuminate\Database\Seeder;

class VehicleModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */    
    public function run(): void
    {
        VehicleModel::firstOrCreate([
            'name' => 'Mio',
            'vehicle_brand_id' => 1,
        ]);

        VehicleModel::firstOrCreate([
            'name' => 'Scoopy',
            'vehicle_brand_id' => 2,
        ]);

        VehicleModel::firstOrCreate([
            'name' => 'Serena',
            'vehicle_brand_id' => 3,
        ]);

        // VehicleModel::factory()->count(10)->create();
    }
}
