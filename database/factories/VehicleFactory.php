<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\VehicleType;
use App\Models\VehicleBrand;
use App\Models\VehicleModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory(),
            'vehicle_type_id' => VehicleType::inRandomOrder()->first()->id ?? VehicleType::factory(),
            'vehicle_brand_id' => VehicleBrand::inRandomOrder()->first()->id ?? VehicleBrand::factory(),
            'vehicle_model_id' => VehicleModel::inRandomOrder()->first()->id ?? VehicleModel::factory(),
            'license_plate' => strtoupper(fake()->bothify('?? #### ??')),
            'stnk_image' => 'uploads/stnk/' . fake()->uuid() . '.jpg',
        ];
    }
}
