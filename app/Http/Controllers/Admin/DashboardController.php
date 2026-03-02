<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AmaderKarjokrom;
use App\Models\Event;
use App\Models\Blog;
use App\Models\NewsLetter;
use App\Models\NibondonForm;
use App\Models\Communication;

class DashboardController extends Controller
{
    public function index()
    {
        $eventCount = Event::count();
        $workshopCount = AmaderKarjokrom::count();
        $blogCount = Blog::count();
        $newsletterCount = NewsLetter::count();
        $nibondonCount = NibondonForm::count();
        $communicationCount = Communication::count();

        return view('admin.dashboard', compact(
            'eventCount', 
            'workshopCount', 
            'blogCount', 
            'newsletterCount', 
            'nibondonCount', 
            'communicationCount'
        ));
    }
}
