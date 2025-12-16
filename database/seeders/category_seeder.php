<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class category_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                DB::table('category')->insert([
            [
                'name' => 'Education',
                'description' => 'Donations for school supplies, tuition assistance, or educational programs.',
            ],
            [
                'name' => 'Food',
                'description' => 'Donations for feeding programs, food packs, or relief goods.',
            ],
            [
                'name' => 'Clothes',
                'description' => 'Donations for clothing, blankets, and wearable items.',
            ],
            [
                'name' => 'Medical',
                'description' => 'Donations for medicine, medical missions, and healthcare support.',
            ],
        ]);
    }
}
