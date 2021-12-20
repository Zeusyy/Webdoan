<?php

use App\Models\CityProvince;
use Illuminate\Database\Seeder;

class CityProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        CityProvince::create([
            'name' => 'Đà Nẵng',
        ]);
        CityProvince::create([
            'name' => 'Hà Nội',
        ]);
        CityProvince::create([
            'name' => 'Hồ Chí Minh',
        ]);
        CityProvince::create([
            'name' => 'Bà Rịa–Vũng Tàu',
        ]);
        CityProvince::create([
            'name' => 'Bến Tre',
        ]);
        CityProvince::create([
            'name' => 'Quảng Ninh',
        ]);
         CityProvince::create([
            'name' => 'Lâm Đồng',
        ]);
          CityProvince::create([
            'name' => 'Khánh Hoà',
        ]);
           CityProvince::create([
            'name' => 'Điện Biên',
        ]);
            CityProvince::create([
            'name' => 'Quảng Bình',
        ]);
             CityProvince::create([
            'name' => 'Quảng Ninh',
        ]); 
             CityProvince::create([
            'name' => 'Kiên Giang',
        ]);
             CityProvince::create([
            'name' => 'Phú Yên',
        ]);
             CityProvince::create([
            'name' => 'Huế',
        ]);
             CityProvince::create([
            'name' => 'Quảng Nam',
        ]);
    }
}
