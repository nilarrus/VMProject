<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        App\Sala::create([
            'NSala'=>0,
            'SPassword'=> Hash::make('1234'),
        ]);
        App\User::create([
            'name' => 'nil',
            'email' => 'ng@gmail.com',
            'username' => 'nilarrus',
            'password' => Hash::make('12345678'),
            'sala' => 'Matrix',
        ]);
        App\Ranking::create([
            'user_gm' => 'ng@gmail.com',
            'time' => 0,
            'fails'=> 0,
            'Lastlevel'=> 1,
        ]);
        $faker = Faker\Factory::create();

        for($i = 0; $i < 100; $i++) {
            $emailF = $faker->email;
            App\User::create([
                'username' => $faker->userName,
                'name' => $faker->name,
                'email' => $emailF,
                'password' => Hash::make('12345678'),
                'sala' =>'Matrix',
            ]);
            

            App\Ranking::create([
                'user_gm' => $emailF,
                'time' => mt_rand(1,50),
                'fails'=> mt_rand(1,15),
                'Lastlevel'=> mt_rand(1,3),
            ]);
            
        }




    }
}
