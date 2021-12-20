<?php

use App\Models\Transport;
use Illuminate\Database\Seeder;

class TransportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Transport::create([
            'name' => 'Coach',
        ]);
        Transport::create([
            'name' => 'Train',
        ]);
        Transport::create([
            'name' => 'Plane',
        ]);
        
    }
}
