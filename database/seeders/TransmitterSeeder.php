<?php

namespace Database\Seeders;

use App\Models\Transmitter;
use Illuminate\Database\Seeder;

class TransmitterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transmitter::create([
            'name' => 'Novum Mexico Trading S de RL de CV',
            'code' => 'NMT160307MZ0',
            'status' => 1,
        ]);

        Transmitter::create([
            'name' => 'COMERCIALIZADORA MAOR SA DE CV',
            'code' => 'CMA050524GG1',
            'status' => 1,
        ]);
    }
}
