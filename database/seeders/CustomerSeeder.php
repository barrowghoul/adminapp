<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'name' => 'Distribuidora de Combustibles Karzo S de RL de CV',
            'code' => 'DCK0705175G9',
            'status' => 1,
        ]);

        Customer::create([
            'name' => 'CRISMON HIDROCARBUROS Y DERIVADOS SA DE CV',
            'code' => 'CHD180508LN2',
            'status' => 0,
        ]);
    }
}
