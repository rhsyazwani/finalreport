<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecPaymentBookController extends Controller
{
    public function index()
    {
        $paymentbookrecords = PaymentBook::all();
        return view('paymentbookrecord', compact('paymentbookrecords'));
    }

    
}
