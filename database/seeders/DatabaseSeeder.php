<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Produk;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'shaira',
            'email' => 'shaira@gmail.com',
            'password' => bcrypt('123'),
            'is_admin' => true
        ]);

        User::create([
            'name' => 'naila',
            'email' => 'naila@gmail.com',
            'password' => bcrypt('123'),
            'is_admin' => false
        ]);

        // Produk::create([
        //     'nama_produk' => 'sling bag',
        //     'jumlah' => '1',
        //     'harga' => '200.000',
        //     'foto' => ''
        // ]);
        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
