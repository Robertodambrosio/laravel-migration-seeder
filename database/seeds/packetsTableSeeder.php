<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\packet;

class packetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    { 
        for($i = 0; $i < 10; $i++) {
            $NewPacket = new Packet();
            $NewPacket->departure = $faker->country();
            $NewPacket->destination= $faker->country();
            $NewPacket->departure_date= $faker->dateTimeThisMonth();
            $NewPacket->return_date = $faker->dateTimeThisMonth('+10days');
            $NewPacket->people_nr= $faker->randomDigit();
            $NewPacket->price = $faker->randomFloat(2, 50, 1500);
            $NewPacket->save();
        }
    }
}
