<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ElectionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $electionTypes = [
           ['name' => 'DSG'],
           ['name' => 'CDSG'],
        ];

        \App\Models\ElectionType::insert($electionTypes);
    }
}
