<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingRecord extends Model
{
    /** @use HasFactory<\Database\Factories\ParkingRecordFactory> */
    use HasFactory;

    protected $fillable = [
        'vehicle_id',
        'qr_code_id',
        'entry_time',
        'exit_time',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function qrCode()
    {
        return $this->belongsTo(QrCode::class);
    }
}
