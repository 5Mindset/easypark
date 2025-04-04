<?php

namespace Database\Seeders;

use App\Models\ParkingRecord;
use App\Models\Vehicle;
use App\Models\QrCode;
use Illuminate\Database\Seeder;

class ParkingRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vehicles = Vehicle::all();

        foreach ($vehicles as $vehicle) {
            $qrCode = QrCode::where('vehicle_id', $vehicle->id)->first();

            if ($qrCode) {
                ParkingRecord::create([
                    'vehicle_id' => $vehicle->id,
                    'qr_code_id' => $qrCode->id,
                    'entry_time' => now()->subHours(rand(1, 5)),
                    'exit_time' => now()->subHours(rand(0, 3)),
                ]);
            }
        }

        // ParkingRecord::factory()->count(5)->create();
    }
}
