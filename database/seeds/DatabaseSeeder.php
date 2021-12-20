<?php

use App\Models\ReceiptStatus;
use App\Models\SubTrip;
use App\Models\TripSubtrip;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            RoleSeeder::class,
            AdminSeeder::class,
            CategorySeeder::class,
            CityProvinceSeeder::class,
            PaymentSeeder::class,
            ProductCodeSeeder::class,
            HotelSeeder::class,
            TypeSeeder::class,
            TransportSeeder::class,
            TourSeeder::class,
            SubTourSeeder::class,
            ReceiptStatusSeeder::class,
            CommentSeeder::class,
            ArticleSeeder::class,
            ArticleCommentSeeder::class,

        ]);
    }
}
