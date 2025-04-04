<?php

namespace Database\Seeders;

use App\Models\QrCode;
use Illuminate\Database\Seeder;

class QrCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        QrCode::firstOrCreate([
            'vehicle_id' => 1,
            'qr_code' => 'uploads/qrcodes/mio-dk88460q.jpg',
        ]);

        QrCode::firstOrCreate([
            'vehicle_id' => 2,
            'qr_code' => 'uploads/qrcodes/scoopy-dk4666kbg.jpg',
        ]);

        QrCode::firstOrCreate([
            'vehicle_id' => 3,
            'qr_code' => 'uploads/qrcodes/serena-f1595ip.jpg',
        ]);

        // QrCode::factory()->count(10)->create();
    }
}
