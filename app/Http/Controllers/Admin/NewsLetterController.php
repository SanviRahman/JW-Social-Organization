<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsLetter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function index()
    {
        $newsletters = NewsLetter::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.newsletters.index', compact('newsletters'));
    }

    public function destroy(NewsLetter $newsletter)
    {
        $newsletter->delete();
        return redirect()->route('admin.newsletters.index')->with('success', 'Subscriber removed');
    }
}
