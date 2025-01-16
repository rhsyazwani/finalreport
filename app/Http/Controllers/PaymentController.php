<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller


{
    public function index()
    {
    $payments = Payment::all();
        return view('payment', compact('payments'));
    }

    public function showMembershipRecord()
    {
        // No need to use models, just return the view
        return view('paymentmemberrecord');
    }

    public function showBookingRecord()
    {
        // No need to use models, just return the view
        return view('paymentbookrecord');
    }
}

