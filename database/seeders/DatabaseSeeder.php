<?php

namespace Database\Seeders;

use App\Models\Blogs;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(5)->create();
        // Blogs::factory(100)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /** @var \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users */

        // $users = User::factory(5)->create();

        // $users->each(function ($user) {
        //     Blogs::factory(3)->create(['auth_id' => $user->id]);
        // });

        $this->call(([
            BlogSeeder::class,
        ]));
    }
}
