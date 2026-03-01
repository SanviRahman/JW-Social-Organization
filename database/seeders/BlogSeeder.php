<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use Faker\Factory as Faker;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('bn_BD'); // Bengali locale (if installed, otherwise fallback)

        // Predefined Bengali titles and descriptions for more realistic data
        $blogs = [
            [
                'title' => 'সমাজসেবায় ঝাউগড়া কল্যাণ সংগঠনের নতুন উদ্যোগ',
                'description' => 'আমাদের সংগঠন সম্প্রতি সমাজের পিছিয়ে পড়া জনগোষ্ঠীর জন্য একটি নতুন কর্মসূচি হাতে নিয়েছে। এ কর্মসূচির আওতায় বিনামূল্যে চিকিৎসা সেবা ও শিক্ষা উপকরণ বিতরণ করা হবে।',
                'image' => 'image/Barshik-sova.jpg',
                'event_date' => '২০২৬-০৩-১৫',
            ],
            [
                'title' => 'বার্ষিক ইফতার মাহফিল অনুষ্ঠিত',
                'description' => 'গতকাল ঝাউগড়া কল্যাণ সংগঠনের আয়োজনে বার্ষিক ইফতার মাহফিল অনুষ্ঠিত হয়েছে। এতে এলাকার গণ্যমান্য ব্যক্তিবর্গ ও সাধারণ মানুষ অংশগ্রহণ করেন।',
                'image' => 'image/ponno.jpg',
                'event_date' => '২০২৬-০৩-১০',
            ],
            [
                'title' => 'বৃক্ষরোপণ অভিযান ২০২৬',
                'description' => 'পরিবেশ রক্ষায় ঝাউগড়া কল্যাণ সংগঠনের উদ্যোগে বৃক্ষরোপণ অভিযান শুরু হয়েছে। এ বছর ৫০০টি চারা রোপণের লক্ষ্যমাত্রা নির্ধারণ করা হয়েছে।',
                'image' => 'image/Tree.jpg',
                'event_date' => '২০২৬-০২-২০',
            ],
            [
                'title' => 'ফ্রি মেডিকেল ক্যাম্প সফলভাবে সম্পন্ন',
                'description' => 'গত সপ্তাহে ঝাউগড়া ইউনিয়নে আয়োজিত ফ্রি মেডিকেল ক্যাম্পে ৩০০ এর বেশি রোগী বিনামূল্যে চিকিৎসা সেবা পেয়েছেন।',
                'image' => 'image/Treatment.jpg',
                'event_date' => '২০২৬-০২-০৫',
            ],
            [
                'title' => 'যুবকদের জন্য প্রশিক্ষণ কর্মশালা',
                'description' => 'বেকার যুবকদের আত্মকর্মসংস্থানের লক্ষ্যে একটি প্রশিক্ষণ কর্মশালার আয়োজন করেছে সংগঠন। কম্পিউটার প্রশিক্ষণ ও উদ্যোক্তা উন্নয়ন বিষয়ে এই কর্মশালা অনুষ্ঠিত হবে।',
                'image' => 'image/Jubok.jpg',
                'event_date' => '২০২৬-০১-১৮',
            ],
            [
                'title' => 'নবীন বরণ ও সাংস্কৃতিক অনুষ্ঠান',
                'description' => 'নতুন সদস্যদের বরণ করতে এবং এলাকার সাংস্কৃতিক চর্চা ধরে রাখতে সংগঠনের পক্ষ থেকে একটি সাংস্কৃতিক সন্ধ্যার আয়োজন করা হয়।',
                'image' => 'image/Nobin.png',
                'event_date' => '২০২৫-১২-২০',
            ],
            [
                'title' => 'রক্তদান শিবির',
                'description' => 'মানবতার সেবায় ঝাউগড়া কল্যাণ সংগঠনের উদ্যোগে এক দিনব্যাপী রক্তদান শিবির অনুষ্ঠিত হয়েছে। ৫০ জনের বেশি স্বেচ্ছায় রক্ত দেন।',
                'image' => 'image/Blood.jpg',
                'event_date' => '২০২৫-১২-১০',
            ],
            [
                'title' => 'বার্ষিক সাধারণ সভা অনুষ্ঠিত',
                'description' => 'সংগঠনের বার্ষিক সাধারণ সভায় গত এক বছরের কার্যক্রমের মূল্যায়ন ও আগামী বছরের পরিকল্পনা গ্রহণ করা হয়।',
                'image' => 'image/Barshik-sova.jpg',
                'event_date' => '২০২৫-১১-০৫',
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::create([
                'title' => $blog['title'],
                'description' => $blog['description'],
                'image' => $blog['image'],
                'event_date' => $blog['event_date'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Optionally, generate additional random blogs using Faker
        // for ($i = 0; $i < 5; $i++) {
        //     Blog::create([
        //         'title' => $faker->sentence(6),
        //         'description' => $faker->paragraph(3),
        //         'image' => 'images/blog/default.jpg', // default placeholder
        //         'event_date' => $faker->date(),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);
        // }
    }
}