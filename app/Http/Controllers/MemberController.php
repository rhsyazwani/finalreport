<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Membership::all();
        return view('membership', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add-membership');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'member_id' => 'required|unique:members',
            'email' => 'required|email|unique:members',
            'phone_no' => 'required|unique:members',
            'date_joined' => 'required|date',
            'role' => 'required',
            'membership_status' => 'required',
        ]);

        Membership::create($request->all());
        return redirect()->route('membership.index')->with('success', 'Member added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Membership $membership)
{
    return view('edit-membership', compact('membership'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Membership $membership)
    {
        // Validate the form input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:members,email,' . $membership->id,
            'phone_no' => 'required',
            'membership_status' => 'required',
        ]);

        // Update the member record with the new data
        $membership->update($request->all());

        // Redirect back to the members list with a success message
        return redirect()->route('membership.index')->with('success', 'Member updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Membership $membership)
    {
        $membership->delete();

        return redirect()->route('membership.index')->with('success', 'Member deleted successfully.');
    }
}
