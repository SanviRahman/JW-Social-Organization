<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AmaderKarjokrom;
use App\Models\Blog;
use App\Models\Communication;
use App\Models\Event;
use App\Models\NewsLetter;
use App\Models\NibondonForm;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    // Display the homepage with workshops and blogs
    public function index()
    {
        $workshops = AmaderKarjokrom::orderBy('created_at', 'desc')->get();
        $blogs     = Blog::orderBy('created_at', 'desc')->get();
        return view('index', compact('workshops', 'blogs'));
    }

    // Handle about page
    public function about()
    {
        return view('about');
    }

    // Show events page
    public function events()
    {
        $events = Event::orderBy('event_date')->paginate(9);
        return view('events', compact('events'));
    }

    // Show event details page
    public function eventDetails($id)
    {
        $event         = Event::findOrFail($id);
        $relatedEvents = Event::where('id', '!=', $id)
            ->orderBy('event_date', 'desc')
            ->take(9)
            ->get();
        return view('event-details', compact('event', 'relatedEvents'));
    }

    // Show workshop details
    public function workshopDetails($id)
    {
        $workshop         = AmaderKarjokrom::findOrFail($id);
        $relatedWorkshops = AmaderKarjokrom::where('id', '!=', $id)
            ->orderBy('created_at', 'desc')
            ->take(9)
            ->get();
        return view('workshop-details', compact('workshop', 'relatedWorkshops'));
    }

    // Show blog details
    public function blogDetails($id)
    {
        $blog         = Blog::findOrFail($id);
        $relatedBlogs = Blog::where('id', '!=', $id)
            ->orderBy('created_at', 'desc')
            ->take(9)
            ->get();
        return view('blog-details', compact('blog', 'relatedBlogs'));
    }

    // Handle contact form submission
    public function contactSubmit(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'phone'   => 'required|string|max:11',
            'email'   => 'required|email|max:255|unique:communications',
            'message' => 'required|string',
        ]);

        Communication::create($request->only(['name', 'phone', 'email', 'message']));

        return redirect()->back()->with('success', 'আপনার বার্তা সফলভাবে পাঠানো হয়েছে!');
    }

    // Handle Nibondon form submission
    public function nibondonSubmit(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'phone'     => 'required|string|max:11',
            'email'     => 'required|email|max:255|unique:nibondon_forms',
            'interests' => 'required|string',
        ]);

        NibondonForm::create($request->only(['name', 'phone', 'email', 'interests']));

        return redirect()->back()->with('success', 'আপনার নিবন্ধন সফলভাবে সম্পন্ন হয়েছে!');
    }

    // Handle newsletter subscription
    public function newsletterSubscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255|unique:news_letters',
        ]);

        NewsLetter::create($request->only('email'));

        return redirect()->back()->with('success', 'আপনার ইমেইল সফলভাবে সাবস্ক্রাইব হয়েছে!');
    }

}
