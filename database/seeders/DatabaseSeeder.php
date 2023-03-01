<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        \App\Models\User::factory()->create([
            'name' => "Panhareach Phat",
            'email' => 'panhareach.phat@student.cadt.edu.kh',
        ]);
        \App\Models\User::factory(100)->create();

        \App\Models\Forum::factory(100)->create(['user_id' => 1]);
        \App\Models\Career::factory(100)->create(['user_id' => 1]);
    }
}
