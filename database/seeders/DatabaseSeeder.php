<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\PhoneSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(PhoneSeeder::class);
    }
}