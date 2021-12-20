<?php

use App\Models\ReceiptStatus;
use Illuminate\Database\Seeder;

class ReceiptStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ReceiptStatus::create([
            'name' => 'Accepted'
        ]);
        ReceiptStatus::create([
            'name' => 'Canceled'
        ]);
        ReceiptStatus::create([
            'name' => 'Waiting'
        ]);
        ReceiptStatus::create([
            'name' => 'Payment received'
        ]);
        ReceiptStatus::create([
            'name' => 'Momo waiting'
        ]);
        ReceiptStatus::create([
            'name' => 'Momo canceled'
        ]);
    }
}
