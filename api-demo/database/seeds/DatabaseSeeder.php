<?php

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


        \App\Customer::create([
            'name'  => "Customer1",
            'surname'  => "Surname1",
            'email' => 'customer1@test.dev'
        ]);

        \App\Customer::create([
            'name'  => "Customer2",
            'surname'  => "Surname2",
            'email' => 'customer2@test.dev'
        ]);
    }
}
