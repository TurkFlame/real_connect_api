<?php

namespace Database\Seeders;

use App\Models\Event;
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
        Event::create([
            'name' => "Softweek",
            'start_date' => "2024-10-14 08:00:00.000",
            'end_date' => "2024-10-18 08:00:00.000",
            'cost' => 80,
            'participants_number' => 120,
            'image_url' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCIhkAgWN6UDwxZt36_x0S6PVaVuE4X_E9pA&s"
        ]);

        Event::create([
            'name' => "Campus Party Brasil",
            'start_date' => "2024-10-14 08:00:00.000",
            'end_date' => "2024-10-18 08:00:00.000",
            'cost' => 300,
            'participants_number' => 4000,
            'image_url' => "https://guarapuava.camporeal.edu.br/content/uploads/2023/08/Engenharia-de-Software-participa-do-Campus-Party-Brasil-3.jpg"
        ]);
        Event::create([
            'name' => "Arraiá Campo Real",
            'start_date' => "2024-07-31 20:30:00.000",
            'end_date' => "2024-07-31 23:00:00.000",
            'cost' => 50,
            'participants_number' => 200,
            'image_url' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQo0krBVWXdoDc65gRH8LQcxvDKwadBT-UZHg&s"
        ]);
        Event::create([
            'name' => "Festa do calouro",
            'start_date' => "2024-04-20 23:00:00.000",
            'end_date' => "2024-04-21 07:00:00.000",
            'cost' => 65,
            'participants_number' => 100,
            'image_url' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJO8cYmCEV3wo4JimdVFNK5URkcAOjtYBb3w&s"
        ]);
    }
}
