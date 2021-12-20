<?php

use App\Models\Payment;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Payment::create([
            'type' => 'offline',
            'description' => '',
        ]);
        Payment::create([
            'type' => 'bank transfer',
            'description' => '',
        ]);
        Payment::create([
            'type' => 'paypal',
            'description' => '',
        ]);
        Payment::create([
            'type' => 'momo',
            'description' => '',
        ]);
    }
}
