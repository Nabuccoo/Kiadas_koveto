<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class  DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        //Dummy Users
        DB::table('users')->insert([
            'user_role' => 'admin',
            'name' => 'Admin',
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'email' => 'aaa@aaa.com',
            'password' => Hash::make('CsokiCsoki'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


        for ($i = 0; $i < 5; $i++) {
            DB::table('users')->insert([
                'user_role' => 'user',
                'name' => $faker->unique()->userName,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make($faker->password),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }


        for ($i = 0; $i < 5; $i++) {
            DB::table('categories')->insert([
                'category_name' => $faker ->word(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        for ($i = 0; $i < 20; $i++) {
            DB::table('expenses')->insert([
                'user_id' => $faker->numberBetween(1, 5),
                'amount' => $faker->numberBetween(500,15000),
                'bookingType' => $faker->randomElement(['income', 'expense']),
                'currency' => $faker->randomElement(['Ft', 'EUR', 'USD', 'TRY']),
                'category_id' => $faker->numberBetween(1, 5),
                'description' => $faker->sentence(5,false),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
