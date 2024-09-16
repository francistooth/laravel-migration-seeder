<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $train = new Train();

        $train->type = $faker->randomElement(['Italo', 'Freccia', 'Trenitalia']);
        $train->departure_station = $faker->randomElement(['Tricesimo', 'Udine', 'Tarcento', 'Gemona']);
        $train->arrival_station = $faker->randomElement(['Venezia Santa Lucia', 'Genova', 'Mestre', 'Trieste']);
        $train->departure_time = $faker->randomElement(['8:00', '10:00', '12:00', '14:00']);
        $train->arrival_time = $faker->randomElement(['16:00', '18:00', '20:00', '22:00']);
        $train->train_code = $faker->randomElement(['AB7093', 'EF1238', 'RF1293', 'AC1239']);
        $train->car_number = $faker->numberBetween(5, 20);
        $train->in_time = $faker->boolean();
        $train->canceled = $faker->boolean();

        $train->save();


        // $table->id();
        // $table->string('type', 50);
        // $table->string('departure_station', 70);
        // $table->string('arrival_station', 70);
        // $table->time('departure_time');
        // $table->time('arrival_time');
        // $table->string('train_code', 70);
        // $table->integer('car_number')->unsigned();
        // $table->boolean('in_time');
        // $table->boolean('canceled');
        // $table->timestamps();
    }
}
