<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Communication;
use Illuminate\Http\Request;

class CommunicationController extends Controller
{
    public function index()
    {
        $messages = Communication::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.communications.index', compact('messages'));
    }

    public function show(Communication $communication)
    {
        return view('admin.communications.show', compact('communication'));
    }

    public function destroy(Communication $communication)
    {
        $communication->delete();
        return redirect()->route('admin.communications.index')->with('success', 'Message deleted');
    }
}
