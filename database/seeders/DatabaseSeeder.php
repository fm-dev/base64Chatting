<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('penggunas')->insert([
            'nama' => 'testing',
            'password' => Hash::make('password123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pesan_chattings')->insert([
            'pengguna_id' => 1,
            'pesan' => "aW5pIGFkYWxhaCBwZXNhbiBiYXJ1",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
