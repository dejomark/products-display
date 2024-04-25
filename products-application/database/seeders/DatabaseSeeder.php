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

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        User::factory()->create([
            'name' => 'Test User 2',
            'email' => 'test2@example.com',
        ]);
        Product::factory()->create([
            'name' => 'Stapler',
            'image' => 'stapler.jpg',
            'desc' => 'A brand new stapler I saw in a bookstore in San Francisco.',
        ]);
        Product::factory()->create([
            'name' => 'Stapler 2: the sequel to Stapler',
            'image' => 'stapler2.jpg',
            'desc' => 'The long awaited sequel to the trusty stapler. (same bookstore)',
        ]);
        Product::factory()->create([
            'name' => 'Stapler 3: end of the Trilogy',
            'image' => 'stapler3.jpg',
            'desc' => 'The grand finale of staplers. The golden sheen lends it a dignified aura. (found this one online)',
        ]);
        Product::factory()->create([
            'name' => 'Work table',
            'image' => 'work-table.png',
            'desc' => 'A work desk well suited for writing, reading, resting your heels on the surface and the occasional stapling job.',
        ]);
        Product::factory()->create([
            'name' => 'A single piece of paper',
            'image' => 'paper.jpg',
            'desc' => 'One piece of plain white printer paper. Only one in stock. (the image was from an actual E-bay add)',
        ]);
        Product::factory()->create([
            'name' => 'Paperclip',
            'image' => 'paperclip.jpg',
            'desc' => 'When you get tired of stapling.',
        ]);
        Product::factory()->create([
            'name' => 'A lot of staples',
            'image' => 'staple.jpg',
            'desc' => 'Staplers can\'t work on their own, they need ammunition.',
        ]);
        Product::factory()->create([
            'name' => 'A very fluffy carpet',
            'image' => 'carpet.jpg',
            'desc' => 'Perfect for losing paperclips and staples.',
        ]);
        Product::factory()->create([
            'name' => 'File folder',
            'image' => 'folder.jpg',
            'desc' => 'Please organize files properly, no need for paperclips or staples.',
        ]);
    }
}
