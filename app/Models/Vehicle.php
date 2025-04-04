<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    /** @use HasFactory<\Database\Factories\VehicleFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'vehicle_type_id',
        'vehicle_brand_id',
        'vehicle_model_id',
        'license_plate',
        'stnk_image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function vehicleType()
    {
        return $this->belongsTo(VehicleType::class);
    }

    public function vehicleBrand()
    {
        return $this->belongsTo(VehicleBrand::class);
    }

    public function vehicleModel()
    {
        return $this->belongsTo(VehicleModel::class);
    }
}
