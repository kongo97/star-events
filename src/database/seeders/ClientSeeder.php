<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::create([
            "name" => "Louis Vuitton",
        ]);

        Client::create([
            "name" => "Max Mara",
        ]);
        
        Client::create([
            "name" => "GLO",
        ]);
        
        Client::create([
            "name" => "Pal Zileri",
        ]);
        
        Client::create([
            "name" => "Google",
        ]);
        
        Client::create([
            "name" => "Timberland",
        ]);
        
        Client::create([
            "name" => "Fendi",
        ]);
        
        Client::create([
            "name" => "Primark",
        ]);
        
        Client::create([
            "name" => "Furla",
        ]);
        
        Client::create([
            "name" => "Nespresso",
        ]);
        
        Client::create([
            "name" => "Elena Mirò",
        ]);
        
        Client::create([
            "name" => "IQOS",
        ]);
        
        Client::create([
            "name" => "Calvin Klein",
        ]);
        
        Client::create([
            "name" => "Stella McCartney",
        ]);
        
        Client::create([
            "name" => "Samsonite",
        ]);
        
        Client::create([
            "name" => "Apple",
        ]);
        
        Client::create([
            "name" => "Tommy Hilfiger",
        ]);
        
        Client::create([
            "name" => "Giuseppe Zanotti",
        ]);
        
        Client::create([
            "name" => "Armani",
        ]);
        
        Client::create([
            "name" => "Saint Laurent",
        ]);
        
        Client::create([
            "name" => "Tod's",
        ]);
    }
}
