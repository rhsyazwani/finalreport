@extends('master.layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

    <style>
        /* General styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #1a1a1a;
    color: white; /* Set default text color to white */
}

/* Header styles */
header {
    background-color: #214e20;
    padding: 20px 0;
}
main {
    padding: 20px;
    color: white;
    max-width: 1200px;
    margin: 20px auto;
    border-radius: 10px;
    text-align: center;
}
/* ... (Rest of your header, navbar, footer styles) */

/* Payment page styles */
.payment-main { /* Style the main content area */
    background-color: white;
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    border-radius: 10px;
    color: black; /* Set text color within main to black */
}

.payment-buttons { /* Style the button container */
    display: flex; /* Arrange buttons horizontally */
    justify-content: center; /* Center horizontally */
    gap: 20px; /* Add space between buttons */
    margin-bottom: 20px; /* Add margin below the buttons */
}

.btn {
    background-color: #2e7d32;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none; /* Remove underlines from links */
}

.btn:hover {
    background-color: #214e20;
}

.payment-image{
    display: flex;
    justify-content: space-around;
}

.payment-image img{
    width: 200px;
}
.next-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: rgb(129, 57, 57);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s;
        }

        .next-button:hover {
            background-color: rgb(138, 94, 37);
        }
        </style>
</head>

<body>
    <div>
<main>
    <h1>Payment</h1>

    <div class="payment-image">
    <img src="assets/img/analysis.png" alt="analysis">
    <a href="{{ route('payment.membershipRecord') }}" class="next-button">Membership record payment</a>
    <img src="assets/img/cost.png" alt="cost">
    <a href="{{ route('payment.bookingRecord') }}" class="next-button">Booking record payment</a>
    <img src="assets/img/statics.png" alt="statics">
</div>


    </main>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
