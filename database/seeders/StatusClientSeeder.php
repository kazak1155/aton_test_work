<?php

namespace Database\Seeders;

use App\Models\StatusClient;
use Database\Factories\StatusClientFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StatusClient::factory(3)->create();
    }
}
