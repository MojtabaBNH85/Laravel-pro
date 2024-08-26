<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
use Carbon\Factory;
use Faker\Factory as FakerFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        // User::factory(10)->create()->each(function ($user) {

        //     $user->articles()->saveMany(Article::factory(rand(1, 6))->make());

        // });


        // User::factory(10)->create();
        $this->call([
            // UsersSeeder::class,
            ArticlesCommentsSeeder::class,
        ]);

    }
}
