<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Listing::create(
            [
             'title' => 'Laravel Senior Developer', 
             'tags' => 'laravel, javascript',
             'company' => 'Acme Corp',
             'location' => 'Boston, MA',
             'email' => 'email1@email.com',
             'website' => 'https://www.acme.com',
             'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
            ]
             
       
         );
         Listing::create(
            [
             'title' => 'Laravel Senior Developer', 
             'tags' => 'laravel, javascript',
             'company' => 'Acme Corp',
             'location' => 'Boston, MA',
             'email' => 'email1@email.com',
             'website' => 'https://www.acme.com',
             'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
            ]
             
       
         );
    }
}
