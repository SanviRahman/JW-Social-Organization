<?php
namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        $events = [
            [
                'image'       => 'image/Barshik-sova.jpg',
                'title'       => 'বার্ষিক সাধারণ সভা ২০২৫',
                'description' => 'সংগঠনের বার্ষিক সাধারণ সভা। সদস্যদের উপস্থিতি কাম্য।',
                'event_date'  => '2025-03-15',
                'event_time'  => '10:00:00',
                'location'    => 'ঝাউগড়া হলরুম',
            ],
            [
                'image'       => 'image/ponno.jpg',
                'title'       => 'ঈদ সামগ্রী বিতরণ',
                'description' => 'দরিদ্র পরিবারের মাঝে ঈদ সামগ্রী বিতরণ করা হবে।',
                'event_date'  => '2025-04-10',
                'event_time'  => '09:00:00',
                'location'    => 'সংগঠন কার্যালয়',
            ],
            [
                'image'       => 'image/britti.jpg',
                'title'       => 'শিক্ষা সহায়তা কর্মসূচি',
                'description' => 'অর্থনৈতিকভাবে অসচ্ছল শিক্ষার্থীদের জন্য শিক্ষা সহায়তা প্রদান।',
                'event_date'  => '2025-05-20',
                'event_time'  => '14:00:00',
                'location'    => 'ঝাউগড়া কমিউনিটি সেন্টার',
            ],
            [
                'image'       => 'image/Treatment.jpg',
                'title'       => 'স্বাস্থ্য ক্যাম্প',
                'description' => 'দরিদ্র ও অসচ্ছল মানুষের জন্য বিনামূল্যে স্বাস্থ্য পরীক্ষা ও চিকিৎসা ক্যাম্প।',
                'event_date'  => '2025-06-30',
                'event_time'  => '10:00:00',
                'location'    => 'ঝাউগড়া মাঠ',
            ],
            [
                'image'       => 'image/Tree.jpg',
                'title'       => 'পরিবেশ সচেতনতা কর্মসূচি',
                'description' => 'পরিবেশ রক্ষার গুরুত্ব সম্পর্কে সচেতনতা বৃদ্ধি এবং বৃক্ষরোপণ কর্মসূচি।',
                'event_date'  => '2025-07-15',
                'event_time'  => '09:00:00',
                'location'    => 'ঝাউগড়া পার্ক',
            ],
            [
                'image'       => 'image/britti.jpg',
                'title'       => 'শিক্ষা সহায়তা কর্মসূচি',
                'description' => 'অর্থনৈতিকভাবে অসচ্ছল শিক্ষার্থীদের জন্য শিক্ষা সহায়তা প্রদান।',
                'event_date'  => '2025-05-20',
                'event_time'  => '14:00:00',
                'location'    => 'ঝাউগড়া কমিউনিটি সেন্টার',
            ],
            [
                'image'       => 'image/Treatment.jpg',
                'title'       => 'স্বাস্থ্য ক্যাম্প',
                'description' => 'দরিদ্র ও অসচ্ছল মানুষের জন্য বিনামূল্যে স্বাস্থ্য পরীক্ষা ও চিকিৎসা ক্যাম্প।',
                'event_date'  => '2025-06-30',
                'event_time'  => '10:00:00',
                'location'    => 'ঝাউগড়া মাঠ',
            ],
            [
                'image'       => 'image/Tree.jpg',
                'title'       => 'পরিবেশ সচেতনতা কর্মসূচি',
                'description' => 'পরিবেশ রক্ষার গুরুত্ব সম্পর্কে সচেতনতা বৃদ্ধি এবং বৃক্ষরোপণ কর্মসূচি।',
                'event_date'  => '2025-07-15',
                'event_time'  => '09:00:00',
                'location'    => 'ঝাউগড়া পার্ক',
            ],
            [
                'image'       => 'image/britti.jpg',
                'title'       => 'শিক্ষা সহায়তা কর্মসূচি',
                'description' => 'অর্থনৈতিকভাবে অসচ্ছল শিক্ষার্থীদের জন্য শিক্ষা সহায়তা প্রদান।',
                'event_date'  => '2025-05-20',
                'event_time'  => '14:00:00',
                'location'    => 'ঝাউগড়া কমিউনিটি সেন্টার',
            ],
            [
                'image'       => 'image/Treatment.jpg',
                'title'       => 'স্বাস্থ্য ক্যাম্প',
                'description' => 'দরিদ্র ও অসচ্ছল মানুষের জন্য বিনামূল্যে স্বাস্থ্য পরীক্ষা ও চিকিৎসা ক্যাম্প।',
                'event_date'  => '2025-06-30',
                'event_time'  => '10:00:00',
                'location'    => 'ঝাউগড়া মাঠ',
            ],
            [
                'image'       => 'image/Tree.jpg',
                'title'       => 'পরিবেশ সচেতনতা কর্মসূচি',
                'description' => 'পরিবেশ রক্ষার গুরুত্ব সম্পর্কে সচেতনতা বৃদ্ধি এবং বৃক্ষরোপণ কর্মসূচি।',
                'event_date'  => '2025-07-15',
                'event_time'  => '09:00:00',
                'location'    => 'ঝাউগড়া পার্ক',
            ],
            [
                'image'       => 'image/britti.jpg',
                'title'       => 'শিক্ষা সহায়তা কর্মসূচি',
                'description' => 'অর্থনৈতিকভাবে অসচ্ছল শিক্ষার্থীদের জন্য শিক্ষা সহায়তা প্রদান।',
                'event_date'  => '2025-05-20',
                'event_time'  => '14:00:00',
                'location'    => 'ঝাউগড়া কমিউনিটি সেন্টার',
            ],
            [
                'image'       => 'image/Treatment.jpg',
                'title'       => 'স্বাস্থ্য ক্যাম্প',
                'description' => 'দরিদ্র ও অসচ্ছল মানুষের জন্য বিনামূল্যে স্বাস্থ্য পরীক্ষা ও চিকিৎসা ক্যাম্প।',
                'event_date'  => '2025-06-30',
                'event_time'  => '10:00:00',
                'location'    => 'ঝাউগড়া মাঠ',
            ],
            [
                'image'       => 'image/Tree.jpg',
                'title'       => 'পরিবেশ সচেতনতা কর্মসূচি',
                'description' => 'পরিবেশ রক্ষার গুরুত্ব সম্পর্কে সচেতনতা বৃদ্ধি এবং বৃক্ষরোপণ কর্মসূচি।',
                'event_date'  => '2025-07-15',
                'event_time'  => '09:00:00',
                'location'    => 'ঝাউগড়া পার্ক',
            ],
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
