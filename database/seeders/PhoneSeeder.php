<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Phone;

class PhoneSeeder extends Seeder
{
    public function run(): void
    {
        $currentTimestamp = now();

        Phone::insert([
            [
                'model' => 'iPhone 16 Pro Max',
                'description' => 'The newest phone from Apple',
                'release_year' => 2024,
                'processor' => 'A18 Pro',
                'price' => 1199.00,
                'photo' => '',
                'camera_mp' => 48,
                'storage' => '256GB, 512GB, 1TB',
                'ram' => 8,
                'battery' => 4685,
                'screen_size' => 6.9,
                'colours' => 'Black Titanium, White Titanium, Natural Titanium, Desert Titanium',
                'performance' => 'AnTuTu: 1723557 (v10)',
                'brand' => 'Apple',
                'purchase' => 'https://amazon.com',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ]
        ]);
    }
}
