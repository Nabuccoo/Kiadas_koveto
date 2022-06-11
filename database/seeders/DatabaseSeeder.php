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

        DB::table('users')->insert([
            'user_role' => 'user',
            'name' => 'Petya',
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'email' => 'ccc@ccc.com',
            'password' => Hash::make('Csokifagyi'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


        for ($i = 0; $i < 10; $i++) {
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


        for ($i = 0; $i < 6; $i++) {
            DB::table('categories')->insert([
                'category_name' => $faker ->word(),
                'active' => $faker ->boolean(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        for ($i = 0; $i < 30; $i++) {
            DB::table('expenses')->insert([
                'user_id' => $faker->numberBetween(1, 10),
                'amount' => $faker->numberBetween(500,15000),
                'booking_type' => $faker->randomElement(['income', 'expense']),
                'currency' => $faker->randomElement(['Ft', 'EUR', 'USD', 'TRY']),
                'category_id' => $faker->numberBetween(1, 6),
                'description' => $faker->sentence(3,false),
                'expense_date' => $faker->date('Y-m-d', 'now'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
