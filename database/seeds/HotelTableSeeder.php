<?php

use App\User;
use App\Welkome\Hotel;
use App\Welkome\Product;
use App\Welkome\Room;
use App\Welkome\Service;
use Illuminate\Database\Seeder;

class HotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'manager@welkome.com')->first(['id']);

        factory(Hotel::class, 2)->create([
            'user_id' => $user->id
        ])->each(function ($hotel) use ($user) {
            $hotel->rooms()->saveMany(factory(Room::class, 10)->make([
                'user_id' => $user->id
            ]));

            $hotel->products()->saveMany(factory(Product::class, 10)->make([
                'user_id' => $user->id
            ]));

            $hotel->services()->saveMany(factory(Service::class, 30)->make([
                'user_id' => $user->id
            ]));
        });
    }
}