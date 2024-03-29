<?php

namespace Database\Seeders;

use App\Models\ElectionType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positions = [
            ['name' => 'President'],
            ['name' => 'Vice President'],
            ['name' => 'Secretary'],
            ['name' => 'Treasurer'],
            ['name' => 'Auditor'],
            ['name' => 'P.I.O'],
            ['name' => 'Business Manager'],
            ['name' => 'Vice President for Internal Affairs'],
            ['name' => 'Vice President for External Affairs'],
        ];


        \App\Models\Position::insert($positions);
    }
}
