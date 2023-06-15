<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'label'=>"Graphics & Design"
            ],
            [
                'label'=>"Digital Marketing"
            ],
            [
                'label'=>"Writing & Translation"
            ],
            [
                'label'=>"Video & Animation"
            ],
            [
                'label'=>"Music & Audio"
            ],
            [
                'label'=>"Programming & Tech"
            ],
            [
                'label'=>"Photography"
            ],
            [
                'label'=>"Business"
            ],
            [
                'label'=>"AI Services"
            ],
        ]);
    }
}
