<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Statut;


class StatutsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    $statuses = [
        ['titre' => 'En cours', 'color' => '#FFA500'],
        ['name' => 'Terminé', 'color' => '#008000'],
    ];

    Statut::insert($statuses);
}

}