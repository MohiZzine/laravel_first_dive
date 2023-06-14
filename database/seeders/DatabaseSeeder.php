<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        Listing::factory(6)->create();

        // Listing::create([
        //     'title' => 'PHP Developer',
        //     'tags' => 'php, laravel, symfony',
        //     'company' => 'Acme',
        //     'location' => 'London',
        //     'email' => 'email1@gmail.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod, nisl eget ultricies aliquam, quam libero alique'
        // ]);

        // Listing::create([
        //     'title' => 'Python Developer',
        //     'tags' => 'python, django, flask',
        //     'company' => 'Acme',
        //     'location' => 'London',
        //     'email' => 'email2@gmail.com',
        //     'website' => 'https://www.stackindustries.com',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod, nisl eget ultricies aliquam, quam libero alique'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
