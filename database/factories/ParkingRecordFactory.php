<?php

namespace Database\Factories;

use App\Models\QrCode;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ParkingRecord>
 */
class ParkingRecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $vehicle = Vehicle::inRandomOrder()->first() ?? Vehicle::factory()->create();
        $qrCode = QrCode::where('vehicle_id', $vehicle->id)->first() ?? QrCode::factory()->create([
            'vehicle_id' => $vehicle->id,
        ]);

        $entry = $this->faker->dateTimeBetween('-1 week', 'now');
        $exit = (clone $entry)->modify('+'.rand(1, 3).' hours');

        return [
            'vehicle_id' => $vehicle->id,
            'qr_code_id' => $qrCode->id,
            'entry_time' => $entry,
            'exit_time' => $exit,
        ];
    }
}
