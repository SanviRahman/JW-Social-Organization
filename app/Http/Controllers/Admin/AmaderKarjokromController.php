<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AmaderKarjokrom;
use Illuminate\Http\Request;

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
            'image' => ['nullable', 'string', 'max:255'],
            'title' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
        ]);
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
            'image' => ['nullable', 'string', 'max:255'],
            'title' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
        ]);
        $karjokrom->update($data);
        return redirect()->route('admin.karjokroms.index')->with('success', 'Item updated');
    }

    public function destroy(AmaderKarjokrom $karjokrom)
    {
        $karjokrom->delete();
        return redirect()->route('admin.karjokroms.index')->with('success', 'Item deleted');
    }
}
