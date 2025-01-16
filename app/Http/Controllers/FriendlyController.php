<?php

namespace App\Http\Controllers;

use App\Models\FriendlySes;
use Illuminate\Http\Request;

class FriendlyController extends Controller
{
    public function index()
    {
        $sessions = FriendlySes::all(); // Retrieve all sessions from the database
        return view('friendly', compact('sessions'));
    }

    public function create()
    {
        return view('add-friendly'); // Return the form view
    }

    public function store(Request $request)
    {
        FriendlySes::create($request->all()); // Store data
        return redirect()->route('friendly.index'); // Redirect to the main page
    }

    public function destroy($id)
{
    // Find and delete the session by its ID
    FriendlySes::findOrFail($id)->delete();

    // Redirect back to the friendly session list with success message
    return redirect()->route('friendly.index')->with('success', 'Session deleted successfully.');
}

public function edit($id)
{
    // Find the session by its ID
    $session = FriendlySes::findOrFail($id);

    // Return the edit form view
    return view('edit-friendly', compact('session'));
}

public function update(Request $request, $id)
{
    // Validate the request data
    $request->validate([
        'session_ID' => 'required|string|max:8',
        'court_no' => 'required|string|max:8',
        'category' => 'required|string|max:30',
        'date' => 'required|string|max:10',
        'time' => 'required|string|max:10',
        'team_one' => 'required|string|max:20',
        'team_two' => 'required|string|max:20',
    ]);

    // Find the session and update it
    $session = FriendlySes::findOrFail($id);
    $session->update($request->all());

    // Redirect back to the session list with success message
    return redirect()->route('friendly.index')->with('success', 'Session updated successfully.');
}



}
