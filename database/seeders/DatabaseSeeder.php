<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'email' => 'panhareach.phat@student.cadt.edu.kh',
        ]);

        \App\Models\Forum::factory(200)->create(['user_id' => 1]);

        \App\Models\Comment::factory(4)->create(['user_id' => 1, 'forum_id' => 1]);
    }
}
