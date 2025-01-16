<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourtBooking;

class CourtBookingController extends Controller
{
    public function index()
    {
        $bookings = CourtBooking::all();
        return view('index-booking', compact('bookings'));
    }

    public function create()
    {
        return view('create-booking');
    }

    public function store(Request $request)
    {
        $request->validate([
            'booking_id' => 'required|unique:court_bookings,booking_id',
            'member_id' => 'required',
            'court_no' => 'required',
            'booking_date' => 'required|date',
            'booking_time_start' => 'required',
            'booking_time_end' => 'required|after:booking_time_start',
            'status' => 'required',
        ]);

        $totalHours = (strtotime($request->booking_time_end) - strtotime($request->booking_time_start)) / 3600;

        CourtBooking::create([
            'booking_id' => $request->booking_id,
            'member_id' => $request->member_id,
            'court_no' => $request->court_no,
            'booking_date' => $request->booking_date,
            'booking_time_start' => $request->booking_time_start,
            'booking_time_end' => $request->booking_time_end,
            'total_hours' => $totalHours,
            'status' => $request->status,
        ]);

        return redirect()->route('court_bookings.index')->with('success', 'Court booking created successfully.');
    }

    public function edit($booking_id)
    {
        $courtBooking = CourtBooking::where('booking_id', $booking_id)->firstOrFail();
        return view('edit-booking', compact('courtBooking'));
    }

    public function update(Request $request, $booking_id)
    {
        $courtBooking = CourtBooking::where('booking_id', $booking_id)->firstOrFail();

        $request->validate([
            'member_id' => 'required',
            'court_no' => 'required',
            'booking_date' => 'required|date',
            'booking_time_start' => 'required',
            'booking_time_end' => 'required|after:booking_time_start',
            'status' => 'required',
        ]);

        $totalHours = (strtotime($request->booking_time_end) - strtotime($request->booking_time_start)) / 3600;

        $courtBooking->update([
            'member_id' => $request->member_id,
            'court_no' => $request->court_no,
            'booking_date' => $request->booking_date,
            'booking_time_start' => $request->booking_time_start,
            'booking_time_end' => $request->booking_time_end,
            'total_hours' => $totalHours,
            'status' => $request->status,
        ]);

        return redirect()->route('court_bookings.index')->with('success', 'Court booking updated successfully.');
    }

    public function destroy(CourtBooking $courtBooking)
    {
        $courtBooking->delete();
        return redirect()->route('court_bookings.index')->with('success', 'Court booking deleted successfully.');
    }
}
