<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AmaderKarjokrom;
use App\Models\Event;
use App\Models\Blog;

class PublicController extends Controller
{
    public function index()
    {
        $workshops = AmaderKarjokrom::orderBy('created_at', 'desc')->get();
        $blogs     = Blog::orderBy('created_at', 'desc')->get();
        return view('index', compact('workshops', 'blogs'));
    }

    public function about()
    {
        return view('about');
    }

    public function events()
    {
        $events = Event::orderBy('event_date')->paginate(9);
        return view('events', compact('events'));
    }

    public function eventDetails($id)
    {
        $event = Event::findOrFail($id);
        // Fetch 3 other events (excluding current) – you can order by date or random
        $relatedEvents = Event::where('id', '!=', $id)
            ->orderBy('event_date', 'desc')
            ->take(9)
            ->get();
        return view('event-details', compact('event', 'relatedEvents'));
    }

    public function workshopDetails($id)
    {
        $workshop         = AmaderKarjokrom::findOrFail($id);
        $relatedWorkshops = AmaderKarjokrom::where('id', '!=', $id)
            ->orderBy('created_at', 'desc')
            ->take(9)
            ->get();
        return view('workshop-details', compact('workshop', 'relatedWorkshops'));
    }

    public function blogDetails($id)
    {
        $blog = Blog::findOrFail($id);
        // Fetch 3 other blogs (excluding current) – you can order by date or random
        $relatedBlogs = Blog::where('id', '!=', $id)
            ->orderBy('created_at', 'desc')
            ->take(9)
            ->get();
        return view('blog-details', compact('blog', 'relatedBlogs'));
    }
}
