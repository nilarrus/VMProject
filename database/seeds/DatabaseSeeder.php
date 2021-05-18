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
        App\User::create([
            'name' => 'Nil',
            'email' => 'ng@gmail.com',
            'username' => 'nilarrus',
            'password' => Hash::make('12345678'),
        ]);
        
        App\Ranking::create([
            'user_gm' => 'ng@gmail.com',
            'time' => 0,
            'fails'=> 0,
            'Lastlevel'=> 1,
        ]);
        App\User::create([
            'name' => 'Leandro',
            'email' => 'lz@gmail.com',
            'username' => 'Lean',
            'password' => Hash::make('12345678'),
        ]);
        
        App\Ranking::create([
            'user_gm' => 'lz@gmail.com',
            'time' => 0,
            'fails'=> 0,
            'Lastlevel'=> 1,
        ]);
        App\User::create([
            'name' => 'Enric',
            'email' => 'em@gmail.com',
            'username' => 'EnricM',
            'password' => Hash::make('12345678'),
        ]);
        
        App\Ranking::create([
            'user_gm' => 'em@gmail.com',
            'time' => 0,
            'fails'=> 0,
            'Lastlevel'=> 1,
        ]);

        $faker = Faker\Factory::create();

        for($i = 0; $i < 90; $i++) {
            $emailF = $faker->email;
            App\User::create([
                'username' => $faker->userName,
                'name' => $faker->name,
                'email' => $emailF,
                'password' => Hash::make('12345678'),
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
