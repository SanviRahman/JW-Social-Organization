<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AmaderKarjokromSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('amader_karjokroms')->insert([
            [
                'image'       => 'image/britti.jpg',
                'title'       => 'শিক্ষা সহায়তা কর্মসূচি',
                'description' => 'অসচ্ছল মেধাবী শিক্ষার্থীদের বৃত্তি ও শিক্ষা উপকরণ প্রদান। ২০২৫ সালে ৫০ জন শিক্ষার্থীকে বৃত্তি দেওয়া হয়েছে।',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'image'       => 'image/Treatment.jpg',
                'title'       => 'স্বাস্থ্য সেবা ক্যাম্প',
                'description' => 'বিনামূল্যে চিকিৎসা সেবা, ওষুধ বিতরণ ও ডায়াবেটিস পরীক্ষা ক্যাম্প পরিচালনা। গত মাসে ৩০০ জন রোগী সেবা পেয়েছেন।',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'image'       => 'image/ponno.jpg',
                'title'       => 'দুর্যোগকালীন ত্রাণ বিতরণ',
                'description' => 'বন্যা ও ঘূর্ণিঝড়ে ক্ষতিগ্রস্ত পরিবারের মাঝে শুকনো খাবার, বিশুদ্ধ পানি ও নিত্যপ্রয়োজনীয় সামগ্রী পৌঁছে দেওয়া।',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'image'       => 'image/Tree.jpg',
                'title'       => 'নারী উদ্যোক্তা প্রশিক্ষণ',
                'description' => 'স্থানীয় নারীদের জন্য সেলাই, হস্তশিল্প ও ছোট ব্যবসা ব্যবস্থাপনা বিষয়ে বিনামূল্যে প্রশিক্ষণের আয়োজন।',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'image'       => 'image/Tree.jpg',
                'title'       => 'বৃক্ষরোপণ অভিযান',
                'description' => 'পরিবেশ রক্ষায় স্কুল ও কমিউনিটি এলাকায় ৫০০ ফলজ ও ঔষধি গাছের চারা রোপণ ও পরিচর্যা।',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
        ]);
    }
}