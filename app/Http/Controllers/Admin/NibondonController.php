<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NibondonForm;
use Illuminate\Http\Request;

class NibondonController extends Controller
{
    public function index()
    {
        $submissions = NibondonForm::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.nibondon.index', compact('submissions'));
    }

    public function show(NibondonForm $nibondon)
    {
        return view('admin.nibondon.show', compact('nibondon'));
    }

    public function destroy(NibondonForm $nibondon)
    {
        $nibondon->delete();
        return redirect()->route('admin.nibondon.index')->with('success', 'Submission deleted');
    }
}
