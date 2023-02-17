<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\CrustListing;
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
        // 'factory()': model auto-generates data for 8 uses.
        User::factory(8)->create();
        // 'factory()': model auto-generates data for 6 crusts.
        CrustListing::factory(6)->create();
        // 'CrustListing': model populates data for 2 single crust.
        // CrustListing::create([
        //     'crustTitle' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'crustLocation' => 'Boston, MA',
        //     'contactEmail' => 'email1@email.com',
        //     'website' => 'https://www.acme.com',
        //     'crustDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        // ]);
        // CrustListing::create([
        //     'crustTitle' => 'Full-Stack Engineer',
        //     'tags' => 'laravel, backend ,api',
        //     'company' => 'Stark Industries',
        //     'crustLocation' => 'New York, NY',
        //     'contactEmail' => 'email2@email.com',
        //     'website' => 'https://www.starkindustries.com',
        //     'crustDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
