<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('headers')->insert([

            ['categories_id'=> 1,
                'label_header'=> "Logo & Brand Identity"
            ],
            ['categories_id'=> 1,
                'label_header'=> "Art & illustration"
            ],
            ['categories_id'=> 1,
                'label_header'=> "Web & App Design"],
            ['categories_id'=> 1,
                'label_header'=> "Print Design"],
            ['categories_id'=> 1,
                'label_header'=> "Visual Design"],
            ['categories_id'=> 1,
                'label_header'=> "Marketing Design"],
            ['categories_id'=> 1,
                'label_header'=> "Packaglng & Covers"],
            ['categories_id'=> 1,
                'label_header'=> "Fashlon & Merchandise"],
            ['categories_id'=> 1,
                'label_header'=> "3D Design"],

            ['categories_id'=> 2,
                'label_header'=> "Search"],
            ['categories_id'=> 2,
                'label_header'=> "Social"],
            ['categories_id'=> 2,
                'label_header'=> "Methods & Techniques"],
            ['categories_id'=> 2,
                'label_header'=> "Analytics & Strategy"],
            ['categories_id'=> 2,
                'label_header'=> "Industry & Purpose-specific"],

            ['categories_id'=> 3,
                'label_header'=> "Content Writing"],
            ['categories_id'=> 3,
                'label_header'=> "Translation & Transcription"],
            ['categories_id'=> 3,
                'label_header'=> "Editing & Critique"],
            ['categories_id'=> 3,
                'label_header'=> "Career writing"],
            ['categories_id'=> 3,
                'label_header'=> "Business & Marketing Copy"
            ],

            ['categories_id'=> 4,
                'label_header'=> "Editing Post-Product"],
            ['categories_id'=> 4,
                'label_header'=> "Social & marketing videos"],
            ['categories_id'=> 4,
                'label_header'=> "Animation"],
            ['categories_id'=> 4,
                'label_header'=> "Filmed Video Production"],
            ['categories_id'=> 4,
                'label_header'=> "Explainer Videos"],
            ['categories_id'=> 4,
                'label_header'=> "Product Videos"],
                
            // categorie 5
            [
                'label_header'=>"Music Production & Writing",
                'categories_id'=>5
            ],
            [
                'label_header'=>"Audio Engineering & Post Production",
                'categories_id'=>5
            ],
            [
                'label_header'=>"Voice Over & Narration",
                'categories_id'=>5
            ],
            [
                'label_header'=>"Streaming & Audio",
                'categories_id'=>5
            ],
            [
                'label_header'=>"DJing",
                'categories_id'=>5
            ],
            [
                'label_header'=>"Sound Design",
                'categories_id'=>5
            ],
            [
                'label_header'=>"Lessons & Transcription",
                'categories_id'=>5
            ],
            
            // categorie 6
            [
                'label_header'=>"Websites",
                'categories_id'=>6
            ],
            [
                'label_header'=>"Website Platforms",
                'categories_id'=>6
            ],
            [
                'label_header'=>"Application Development",
                'categories_id'=>6
            ],
            [
                'label_header'=>"Testing & Review",
                'categories_id'=>6
            ],
            [
                'label_header'=>"Software Developers",
                'categories_id'=>6
            ],
            [
                'label_header'=>"Support & Cybersecurity",
                'categories_id'=>6
            ],
            [
                'label_header'=>"Data",
                'categories_id'=>6
            ],
            [
                'label_header'=>"Miscellaneous",
                'categories_id'=>6
            ],
            // categorie 7
            [
                'label_header'=>"Products & Lifestyle",
                'categories_id'=>7
            ],
            [
                'label_header'=>"People & Scenes",
                'categories_id'=>7
            ],
            [
                'label_header'=>"Miscellaneous",
                'categories_id'=>7
            ],
            // categorie 8
            [
                'label_header'=>"Business Formation",
                'categories_id'=>8
            ],
            [
                'label_header'=>"Legal Services",
                'categories_id'=>8
            ],
            [
                'label_header'=>"General & Administrative",
                'categories_id'=>8
            ],
            [
                'label_header'=>"Business Growth",
                'categories_id'=>8
            ],
            [
                'label_header'=>"Sales & Customer Care",
                'categories_id'=>8
            ],
            [
                'label_header'=>"Professional Development",
                'categories_id'=>8
            ],
            [
                'label_header'=>"Accounting & Finance",
                'categories_id'=>8
            ],
            [
                'label_header'=>"Miscellaneous",
                'categories_id'=>8
            ],
            // categorie 9
            [
                'label_header'=>"Build your AI app",
                'categories_id'=>9
            ],
            [
                'label_header'=>"Get your data right",
                'categories_id'=>9
            ],
            [
                'label_header'=>"AI Artists",
                'categories_id'=>9
            ],
            [
                'label_header'=>"Creative services",
                'categories_id'=>9
            ],
            [
                'label_header'=>"Refine AI with experts",
                'categories_id'=>9
            ],
        ]);
    }
}
