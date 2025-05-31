<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'admin',
//            'email' => 'admin@laravel.com',
//            'password' => bcrypt('admin123'),
//            'role' => 'admin'
//        ]);

        $this->call([UserSeeder::class]);
        $this->call(ProductCategoriesSeeder::class);
        $this->call(ProductSeeder::class);

    }
}
