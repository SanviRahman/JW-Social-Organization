<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('event_date', 'desc')->paginate(10);
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'event_date' => ['nullable', 'date'],
            'event_time' => ['nullable', 'date_format:H:i'],
            'location' => ['nullable', 'string', 'max:255'],
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('uploads/events', 'public');
            $data['image'] = 'storage/' . $path;
        }

        Event::create($data);
        return redirect()->route('admin.events.index')->with('success', 'Event created');
    }

    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $data = $request->validate([
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'event_date' => ['nullable', 'date'],
            'event_time' => ['nullable', 'date_format:H:i'],
            'location' => ['nullable', 'string', 'max:255'],
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if it exists and is not a default asset
            if ($event->image && str_contains($event->image, 'storage/uploads/')) {
                Storage::disk('public')->delete(str_replace('storage/', '', $event->image));
            }
            $path = $request->file('image')->store('uploads/events', 'public');
            $data['image'] = 'storage/' . $path;
        }

        $event->update($data);
        return redirect()->route('admin.events.index')->with('success', 'Event updated');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.events.index')->with('success', 'Event deleted');
    }
}
