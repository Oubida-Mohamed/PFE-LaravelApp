<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sub_categories')->insert([

            [
                'headers_id'=> 1,
                'label'=> "Logo Design",
            ],
            ['headers_id'=> 1,
            'label'=> "Brand Style Guides",],
            ['headers_id'=> 1,
            'label'=> "Business Card & Stationery",],
            ['headers_id'=> 1,
            'label'=> "Fonts & Typography",],

            ['headers_id'=> 2,
            'label'=> "Illustation",],
            ['headers_id'=> 2,
            'label'=> "Children's Book illustration",],
            ['headers_id'=> 2,
            'label'=> "Portaits & Caricatures",],
            ['headers_id'=> 2,
            'label'=> "Cartoons & Comics",],
            ['headers_id'=> 2,
            'label'=> "Pattern Design",],
            ['headers_id'=> 2,
            'label'=> "Tatto Design",],
            ['headers_id'=> 2,
            'label'=> "NFT Art",],


            ['headers_id'=> 3,
            'label'=> "Website & Design",],
            ['headers_id'=> 3,
            'label'=> "App Design",],
            ['headers_id'=> 3,
            'label'=> "UX Design",],
            ['headers_id'=> 3,
            'label'=> "Icon Design",],
            ['headers_id'=> 3,
            'label'=> "Landing Page Design",],
            ['headers_id'=> 3,
            'label'=> "Icon Design",],

            ['headers_id'=> 4,
            'label'=> "Flyer Design",],
            ['headers_id'=> 4,
            'label'=> "Brochure Design",],
            ['headers_id'=> 4,
            'label'=> "Poster Design",],
            ['headers_id'=> 4,
            'label'=> "Catalog Design",],
            ['headers_id'=> 4,
            'label'=> "Menu Design",],

            ['headers_id'=> 5,
            'label'=> "Image Editing",],
            ['headers_id'=> 5,
            'label'=> "Presentation Design",],
            ['headers_id'=> 5,
            'label'=> "Background Removal",],
            ['headers_id'=> 5,
            'label'=> "Infographic Design",],
            ['headers_id'=> 5,
            'label'=> "Resum Design",],

            ['headers_id'=> 6,
            'label'=> "Social Media Design",],
            ['headers_id'=> 6,
            'label'=> "Social Post & Banners",],
            ['headers_id'=> 6,
            'label'=> "Email Design",],
            ['headers_id'=> 6,
            'label'=> "Web Banners",],
            ['headers_id'=> 6,
            'label'=> "Signage Design",],

            ['headers_id'=> 7,
            'label'=> "Book Design",],
            ['headers_id'=> 7,
            'label'=> "Book Covers",],
            ['headers_id'=> 7,
            'label'=> "Album Covers Design",],

            ['headers_id'=> 8,
            'label'=> "T-Shirts & Marchandise",],
            ['headers_id'=> 8,
            'label'=> "Fashion Design",],
            ['headers_id'=> 8,
            'label'=> "Jewerly Design",],

            ['headers_id'=> 9,
            'label'=> "3D & Architecture",],
            ['headers_id'=> 9,
            'label'=> "3D & Industrial Design",],
            ['headers_id'=> 9,
            'label'=> "3D Fashion & Garment",],
            ['headers_id'=> 9,
            'label'=> "Printing Characters",],
            ['headers_id'=> 9,
            'label'=> "3D Game Art",],

        ['headers_id'=> 10,
            'label'=> "Search Engine Optimization (SEO)"
        ],
        ['headers_id'=> 10,
            'label'=> "Search Engine Marketing (SEM)"],
        [
            'headers_id'=> 10,
            'label'=> "Local SEO"],
        ['headers_id'=> 10,
            'label'=> "E-Commerce SEO"],
        ['headers_id'=> 10,
            'label'=> "Video SEO",],

        ['headers_id'=> 11,
            'label'=> "Socila Media Marketing",],
        ['headers_id'=> 11,
            'label'=> "Paid Social Media",],
        ['headers_id'=> 11,
            'label'=> "Influencer  Marketing",],

        ['headers_id'=> 12,
            'label'=> "Video Marketing",],
        ['headers_id'=> 12,
            'label'=> "E-Commerce Marketing",],
        ['headers_id'=> 12,
            'label'=> "Email Marketing",],
        ['headers_id'=> 12,
            'label'=> "Affiliate Marketing",],
        ['headers_id'=> 12,
            'label'=> "Text Message Marketing",],

        ['headers_id'=> 13,
            'label'=> "Marketing Strategy",],
        ['headers_id'=> 13,
            'label'=> "web Analytics",],

        ['headers_id'=> 14,
            'label'=> "Music Promotion",],
        ['headers_id'=> 14,
            'label'=> "Podcast Marketing",],
        ['headers_id'=> 14,
            'label'=> "Book & eBook Marketing",],
        ['headers_id'=> 14,
            'label'=> "Mobile App Marketing",],

        ['headers_id'=> 15,
            'label'=> "Articles & Blog Posts",],
        ['headers_id'=> 15,
            'label'=> "Book & eBook Writing",],
        ['headers_id'=> 15,
            'label'=> "Website Content",],
        ['headers_id'=> 15,
            'label'=> "Creative Writing",],
        ['headers_id'=> 15,
            'label'=> "Podcast Writing",],

        ['headers_id'=> 16,
            'label'=> "Translation",],
        ['headers_id'=> 16,
            'label'=> "Transcription",],

        ['headers_id'=> 17,
            'label'=> "Proofreading & Editing",],
        ['headers_id'=> 17,
            'label'=> "Book Editing",],
        ['headers_id'=> 17,
            'label'=> "Beta Reading",],
        ['headers_id'=> 17,
            'label'=> "Writing Advice",],

        ['headers_id'=> 18,
            'label'=> "Resume Writing",],
        ['headers_id'=> 18,
            'label'=> "Cover Letters",],
        ['headers_id'=> 18,
            'label'=> "Jop Descriptions",],

        ['headers_id'=> 19,
            'label'=> "Brand Voice & Tone",],
        ['headers_id'=> 19,
            'label'=> "Business Names & Slogans",],
        ['headers_id'=> 19,
            'label'=> "Case Studies",],
        ['headers_id'=> 19,
            'label'=> "Ad Copy",],
        ['headers_id'=> 19,
            'label'=> "Sales Copy",],
        ['headers_id'=> 19,
            'label'=> "Email Copy",],
        ['headers_id'=> 19,
            'label'=> "Social Media Copy",],
        ['headers_id'=> 19,
            'label'=> "UX Writing",],

        ['headers_id'=> 20,
            'label'=> "Videos Editing",],
        ['headers_id'=> 20,
            'label'=> "Visual Effects",],
        ['headers_id'=> 20,
            'label'=> "Intro & Outro Videos",],
        ['headers_id'=> 20,
            'label'=> "Video Templates Editing",],
        ['headers_id'=> 20,
            'label'=> "Subtitles & Caption",],

        ['headers_id'=> 21,
            'label'=> "Videos Ads & Commercials",],
        ['headers_id'=> 21,
            'label'=> "Music Videos",],
        ['headers_id'=> 21,
            'label'=> "Unboxing Videos",],
        ['headers_id'=> 21,
            'label'=> "Slideshow Videos",],

        ['headers_id'=> 22,
            'label'=> "Logo Animation",],
        ['headers_id'=> 22,
            'label'=> "Character Animation",],
        ['headers_id'=> 22,
            'label'=> "Animated GIFs",],
        ['headers_id'=> 22,
            'label'=> "Animation for Kids",],
        ['headers_id'=> 22,
            'label'=> "Animation for Streamers",],
        ['headers_id'=> 22,
            'label'=> "Lottie & Web Animation",],
        ['headers_id'=> 22,
            'label'=> "NFT Animation",],

        ['headers_id'=> 23,
            'label'=> "Videographers",],
        ['headers_id'=> 23,
            'label'=> "Filmed Video Production",],

        ['headers_id'=> 24,
            'label'=> "Animated Explainers",],
        ['headers_id'=> 24,
            'label'=> "Live Action Explainers",],
        ['headers_id'=> 24,
            'label'=> "Spokesperson Videos",],
        ['headers_id'=> 24,
            'label'=> "Screencasting Videos",],
        ['headers_id'=> 24,
            'label'=> "eLearning Videos Production",
        ],

        ['headers_id'=> 25,
            'label'=> "3D Product Animation",
        ],
        ['headers_id'=> 25,
            'label'=> "E-Commerce Product Videos",
        ],
        ['headers_id'=> 25,
            'label'=> "Corporate Videos",
        ],
        [
            'headers_id'=> 25,
            'label'=> "App & Website Previews",
        ],


//_____1
        [
            'headers_id'=> 26,
            'label'=> "Producers & Composers"
        ],
        [
            'headers_id'=> 26,
            'label'=> "Singers & Vocalists"
        ],
        [
            'headers_id'=> 26,
            'label'=> "Session Musicians"
        ],
        [
            'headers_id'=> 26,
            'label'=> "Songwriters"
        ],
        [
            'headers_id'=> 26,
            'label'=> "Beat Making"
        ],
        [
            'headers_id'=> 26,
            'label'=> "Jingles & Intros"
        ],
        //2
        [
            'headers_id'=> 27,
            'label'=> "Mixing & Mastering"
        ],
        [
            'headers_id'=> 27,
            'label'=> "Audio Editing"
        ],
        [
            'headers_id'=> 27,
            'label'=> "Vocal Tuning"
        ],
        //3
        [
            'headers_id'=> 28,
            'label'=> "Voice Over"
        ],
        [
            'headers_id'=> 28,
            'label'=> "Female Voice Over"
        ],
        [
            'headers_id'=> 28,
            'label'=> "Male Voice Over"
        ],
        [
            'headers_id'=> 28,
            'label'=> "German Voice Over"
        ],
        [
            'headers_id'=> 28,
            'label'=> "French Voice Over"
        ],
        [
            'headers_id'=> 28,
            'label'=> "Spanish Voice Over"
        ],
        //4
        [
            'headers_id'=> 29,
            'label'=> "Podcast Production"
        ],
        [
            'headers_id'=> 29,
            'label'=> "Audiobook Production"
        ],
        [
            'headers_id'=> 29,
            'label'=> "Audio Ads Production"
        ],
        [
            'headers_id'=> 29,
            'label'=> "Voice Synthesis & AI"
        ],
        //5
        [
            'headers_id'=> 30,
            'label'=> "DJ Drops & Tags"
        ],
        [
            'headers_id'=> 30,
            'label'=> "DJ Mixing"
        ],
        [
            'headers_id'=> 30,
            'label'=> "Remixing & Mashups"
        ],
        //6
        [
            'headers_id'=> 31,
            'label'=> "Sound Design"
        ],
        [
            'headers_id'=> 31,
            'label'=> "Synth Presets"
        ],
        [
            'headers_id'=> 31,
            'label'=> "Meditation Music"
        ],
        [
            'headers_id'=> 31,
            'label'=> "Audio Logo & Sonic Branding"
        ],
        //7
        [
            'headers_id'=> 32,
            'label'=> "Online Music Lessons"
        ],
        [
            'headers_id'=> 32,
            'label'=> "Music Transcription"
        ],
        [
            'headers_id'=> 32,
            'label'=> "Music & Audio Advice"
        ],
        //8
        [
            'headers_id'=> 33,
            'label'=> "Website DevelopmentNEW"
        ],
        [
            'headers_id'=> 33,
            'label'=> "Website Maintenance"
        ],
        [
            'headers_id'=> 33,
            'label'=> "Business Websites"
        ],
        [
            'headers_id'=> 33,
            'label'=> "E-Commerce Development"
        ],
        [
            'headers_id'=> 33,
            'label'=> "Landing Pages"
        ],
        [
            'headers_id'=> 33,
            'label'=> "Blogs"
        ],
        //9
        [
            'headers_id'=> 34,
            'label'=> "WordPress"
        ],
        [
            'headers_id'=> 34,
            'label'=> "Shopify"
        ],
        [
            'headers_id'=> 34,
            'label'=> "Wix"
        ],
        [
            'headers_id'=> 34,
            'label'=> "Custom Websites"
        ],
        //10
        [
            'headers_id'=> 35,
            'label'=> "Software Development"
        ],
        [
            'headers_id'=> 35,
            'label'=> "Mobile Apps"
        ],
        [
            'headers_id'=> 35,
            'label'=> "Web Applications"
        ],
        [
            'headers_id'=> 35,
            'label'=> "Desktop Applications"
        ],
        [
            'headers_id'=> 35,
            'label'=> "Game Development"
        ],
        [
            'headers_id'=> 35,
            'label'=> "AI Coding & DevelopmentNEW"
        ],
        [
            'headers_id'=> 35,
            'label'=> "Chatbots Development"
        ],
        //11
        [
            'headers_id'=> 36,
            'label'=> "QA & Review"
        ],
        [
            'headers_id'=> 36,
            'label'=> "User Testing"
        ],
        //12
        [
            'headers_id'=> 37,
            'label'=> "Python Developers"
        ],
        [
            'headers_id'=> 37,
            'label'=> "HTML & CSS Developers"
        ],
        [
            'headers_id'=> 37,
            'label'=> "JavaScript Developers"
        ],
        [
            'headers_id'=> 37,
            'label'=> "Java Developers"
        ],
        [
            'headers_id'=> 37,
            'label'=> "Android Developers"
        ],
        [
            'headers_id'=> 37,
            'label'=> "iOS Developers"
        ],
        [
            'headers_id'=> 37,
            'label'=> "Unity Developers"
        ],
        //13
        [
            'headers_id'=> 38,
            'label'=> "DevOps & Cloud"
        ],
        [
            'headers_id'=> 38,
            'label'=> "Support & IT"
        ],
        [
            'headers_id'=> 38,
            'label'=> "Cybersecurity"
        ],
        [
            'headers_id'=> 39,
            'label'=> "Data Entry"
        ],
        [
            'headers_id'=> 39,
            'label'=> "Databases"
        ],
        [
            'headers_id'=> 39,
            'label'=> "Data Processing"
        ],
        [
            'headers_id'=> 39,
            'label'=> "Data Engineering"
        ],
        [
            'headers_id'=> 39,
            'label'=> "Data Science & AI"
        ],
        [
            'headers_id'=> 39,
            'label'=> "Data Analytics"
        ],
        [
            'headers_id'=> 39,
            'label'=> "Data Visualization"
        ],
        //14
        [
            'headers_id'=> 40,
            'label'=> "Electronics Engineering"
        ],
        [
            'headers_id'=> 40,
            'label'=> "Convert Files"
        ],
        [
            'headers_id'=> 40,
            'label'=> "Blockchain & Cryptocurrency"
        ],
        //15
        [
            'headers_id'=> 41,
            'label'=> "Product Photographers"
        ],
        [
            'headers_id'=> 41,
            'label'=> "Food Photographers"
        ],
        [
            'headers_id'=> 41,
            'label'=> "Lifestyle & Fashion Photographers"
        ],
        //16
        [
            'headers_id'=> 42,
            'label'=> "Portrait Photographers"
        ],
        [
            'headers_id'=> 42,
            'label'=> "Event Photographers"
        ],
        [
            'headers_id'=> 42,
            'label'=> "Real Estate Photographers"
        ],
        [
            'headers_id'=> 42,
            'label'=> "Aerial Photographers"
        ],
        //17
        [
            'headers_id'=> 43,
            'label'=> "Photography Classes"
        ],
        [
            'headers_id'=> 43,
            'label'=> "Image Editing"
        ],
        [
            'headers_id'=> 43,
            'label'=> "Modeling & Acting"
        ],

        [
            'headers_id'=> 43,
            'label'=> "Styling & Beauty"
        ],
        //18
        [
            'headers_id'=> 44,
            'label'=> "Business RegistrationNEW"
        ],
        [
            'headers_id'=> 44,
            'label'=> "Business Plans"
        ],
        [
            'headers_id'=> 44,
            'label'=> "Pitch Decks"
        ],
        [
            'headers_id'=> 44,
            'label'=> "Startup Consulting"
        ],
        //19
        [
            'headers_id'=> 45,
            'label'=> "Applications & Registrations"
        ],
        [
            'headers_id'=> 45,
            'label'=> "Legal Documents & Contracts"
        ],
        [
            'headers_id'=> 45,
            'label'=> "Legal Consulting"
        ],
        //20
        [
            'headers_id'=> 46,
            'label'=> "Data Entry"
        ],
        [
            'headers_id'=> 46,
            'label'=> "Virtual Assistant"
        ],
        [
            'headers_id'=> 46,
            'label'=> "E-Commerce Management"
        ],
        [
            'headers_id'=> 46,
            'label'=> "HR Consulting"
        ],
        [
            'headers_id'=> 46,
            'label'=> "Project Management"
        ],
        [
            'headers_id'=> 46,
            'label'=> "Supply Chain Management"
        ],
        //21
        [
            'headers_id'=> 47,
            'label'=> "Business Consulting"
        ],
        [
            'headers_id'=> 47,
            'label'=> "Market Research"
        ],
        [
            'headers_id'=> 47,
            'label'=> "Data Analytics"
        ],
        [
            'headers_id'=> 47,
            'label'=> "Data Visualization"
        ],
        //22
        [
            'headers_id'=> 48,
            'label'=> "Sales"
        ],
        [
            'headers_id'=> 48,
            'label'=> "Lead Generation"
        ],
        [
            'headers_id'=> 48,
            'label'=> "Call Center & Calling"
        ],
        [
            'headers_id'=> 48,
            'label'=> "Customer Care"
        ],
        [
            'headers_id'=> 48,
            'label'=> "CRM Management"
        ],
        [
            'headers_id'=> 49,
            'label'=> "Interview Prep"
        ],
        [
            'headers_id'=> 49,
            'label'=> "Leadership Development"
        ],
        [
            'headers_id'=> 49,
            'label'=> "Life Coaching"
        ],
        //23
        [
            'headers_id'=> 50,
            'label'=> "Tax Consulting"
        ],
        [
            'headers_id'=> 50,
            'label'=> "Accounting & Bookkeeping"
        ],
        [
            'headers_id'=> 50,
            'label'=> "Financial Consulting"
        ],
        [
            'headers_id'=> 50,
            'label'=> "ERP Management"
        ],
        //24
        [
            'headers_id'=> 51,
            'label'=> "Fact CheckingNEW"
        ],
        [
            'headers_id'=> 51,
            'label'=> "Event Management"
        ],
        [
            'headers_id'=> 51,
            'label'=> "Game Concept Design"
        ],
        //25
        [
            'headers_id'=> 52,
            'label'=> "AI Applications"
        ],
        [
            'headers_id'=> 52,
            'label'=> "ChatGPT Applications"
        ],
        [
            'headers_id'=> 52,
            'label'=> "AI Websites"
        ],
        [
            'headers_id'=> 52,
            'label'=> "AI Chatbots"
        ],
        [
            'headers_id'=> 52,
            'label'=> "AI Agents DevelopmentNEW"
        ],
        //26
        [
            'headers_id'=> 53,
            'label'=> "Data Science & AI"
        ],
        [
            'headers_id'=> 53,
            'label'=> "Data Model TrainingNEW"
        ],
        [
            'headers_id'=> 53,
            'label'=> "Data Labeling & Annotation"
        ],
        [
            'headers_id'=> 53,
            'label'=> "Data Analytics"
        ],
        [
            'headers_id'=> 54,
            'label'=> "Midjourney Artists"
        ],
        [
            'headers_id'=> 54,
            'label'=> "DALL-E Artists"
        ],
        [
            'headers_id'=> 54,
            'label'=> "Stable Diffusion Artists"
        ],
        //27
        [
            'headers_id'=> 55,
            'label'=> "AI Music Videos"
        ],
        [
            'headers_id'=> 55,
            'label'=> "Voice Synthesis & AINEW"
        ],
        [
            'headers_id'=> 55,
            'label'=> "Generative AI LessonsNEW"
        ],
        //28
        [
            'headers_id'=> 56,
            'label'=> "Photo Manipulation"
        ],
        [
            'headers_id'=> 56,
            'label'=> "Fact CheckingNEW"
        ],
        [
            'headers_id'=> 56,
            'label'=> "AI Content Editing"
        ],
        ]);
    }
}
