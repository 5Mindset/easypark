<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehicle::firstOrCreate([
            'user_id' => 3,
            'vehicle_type_id' => 1,
            'vehicle_brand_id' => 1,
            'vehicle_model_id' => 1,
            'license_plate' => 'DK 8846 OQ',
            'stnk_image' => 'uploads/stnk/mio-dk88460q.jpg',
        ]);

        Vehicle::firstOrCreate([
            'user_id' => 3,
            'vehicle_type_id' => 1,
            'vehicle_brand_id' => 2,
            'vehicle_model_id' => 2,
            'license_plate' => 'DK 4666 KBG',
            'stnk_image' => 'uploads/stnk/scoopy-dk4666kbg.jpg',
        ]);

        Vehicle::firstOrCreate([
            'user_id' => 3,
            'vehicle_type_id' => 2,
            'vehicle_brand_id' => 3,
            'vehicle_model_id' => 3,
            'license_plate' => 'F 1595 IP',
            'stnk_image' => 'uploads/stnk/serena-f1595ip.jpg',
        ]);

        // Vehicle::factory()->count(10)->create();
    }
}
