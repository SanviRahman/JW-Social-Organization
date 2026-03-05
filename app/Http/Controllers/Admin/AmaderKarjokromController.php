<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AmaderKarjokrom;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class AmaderKarjokromController extends Controller
{
    public function index()
    {
        $items = AmaderKarjokrom::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.karjokroms.index', compact('items'));
    }

    public function create()
    {
        return view('admin.karjokroms.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'title' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('uploads/karjokroms', 'public');
            $data['image'] = 'storage/' . $path;
        }

        AmaderKarjokrom::create($data);
        return redirect()->route('admin.karjokroms.index')->with('success', 'Item created');
    }

    public function edit(AmaderKarjokrom $karjokrom)
    {
        return view('admin.karjokroms.edit', ['item' => $karjokrom]);
    }

    public function update(Request $request, AmaderKarjokrom $karjokrom)
    {
        $data = $request->validate([
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'title' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if it exists and is not a default asset
            if ($karjokrom->image && str_contains($karjokrom->image, 'storage/uploads/')) {
                Storage::disk('public')->delete(str_replace('storage/', '', $karjokrom->image));
            }
            $path = $request->file('image')->store('uploads/karjokroms', 'public');
            $data['image'] = 'storage/' . $path;
        }

        $karjokrom->update($data);
        return redirect()->route('admin.karjokroms.index')->with('success', 'Item updated');
    }

    public function destroy(AmaderKarjokrom $karjokrom)
    {
        $karjokrom->delete();
        return redirect()->route('admin.karjokroms.index')->with('success', 'Item deleted');
    }
}
