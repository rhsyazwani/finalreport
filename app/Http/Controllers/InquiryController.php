<?php
namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    // Display the inquiry dashboard
    public function index()
    {
        $inquiries = Inquiry::all();
        return view('inquiry', compact('inquiries'));
    }

    // Store a new inquiry
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Inquiry::create($request->all());

        return redirect()->route('inquiries.index')->with('success', 'Inquiry submitted successfully!');
    }
    // Display the form
    public function create()
    {
        return view('edit-inquiry'); // Corresponds to edit.blade.php
    }

    // Delete an inquiry
    public function destroy($id)
    {
        Inquiry::findOrFail($id)->delete();
        return redirect()->route('inquiries.index')->with('success', 'Inquiry deleted successfully!');
    }

    public function reply($id)
    {
        $inquiry = Inquiry::findOrFail($id);
        return view('reply', compact('inquiry'));
    }

    // Handle the Reply Submission
    public function sendReply(Request $request, $id)
{
    $request->validate([
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    // Redirect back to the inquiries index page
    return redirect()->route('inquiries.index')->with('success', 'Reply processed successfully!');
}

}
