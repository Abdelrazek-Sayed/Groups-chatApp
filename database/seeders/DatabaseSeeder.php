<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            $user =       User::create([
                'name' => fake()->name(),
                'email' => 'user_' . $i . '@app.com',
                'email_verified_at' => now(),
                'password' => Hash::make(123123123),
                'remember_token' => Str::random(10),
            ]);
            $conversation =  Conversation::create([
                'name' => 'group_' . $i,
                'uuid' => Str::uuid(),
                'last_message_at' => now(),
            ]);

            $user->conversations()->sync($conversation->id);
            if ($user->id != 1) {
                Message::create([
                    'user_id' => 1,
                    'conversation_id' => $conversation->id,
                    'body' => fake()->sentence(),
                ]);
                Message::create([
                    'user_id' => 1,
                    'conversation_id' => $conversation->id,
                    'body' => fake()->sentence(),
                ]);
            }
            Message::create([
                'user_id' => $user->id,
                'conversation_id' => $conversation->id,
                'body' => fake()->sentence(),
            ]);
        }
    }
}
