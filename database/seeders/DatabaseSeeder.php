<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'John Doe',
            'username' => 'JohnDoe',
            'email' => 'John.test@gmail.com',
            'password' => 'password'
        ]);

        Post::factory(12)->create([
            'user_id' => $user->id,
        ]);

        Comment::factory(20)->create();
    }
}
