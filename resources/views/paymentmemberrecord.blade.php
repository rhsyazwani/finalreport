@extends('master.layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment member record</title>
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

/* ... (Rest of your header, navbar, footer styles) */

/* Payment page styles */
main {
    padding: 20px;
    background-color: white;
    max-width: 1200px;
    margin: 20px auto;
    border-radius: 10px;
    color: black;
    text-align: center;
}
table {
    width: 100%;
    border-collapse: collapse;
}
table th, table td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
    color:black;
}
button {
    background-color: #2e7d32;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
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


.back-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: rgb(129, 57, 57);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: rgb(138, 94, 37);
        }
        </style>
</head>



    <main>
        <h2>Membership Payment Record</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Member ID</th>
                    <th>Payment ID</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Payment Method</th>
                    <th>Status Plan</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <th>1</th>
                    <th>2742</th>
                    <th>#87980</th>
                    <th>RM25</th>
                    <th>2022-12-26</th>
                    <th>FPX</th>
                    <th>MONTHLY</th>
                    <th>Action</th>
    </tr>
    <tr>
                    <th>2</th>
                    <th>7321</th>
                    <th>#45678</th>
                    <th>RM70</th>
                    <th>2023-12-25</th>
                    <th>CREDIT CARD</th>
                    <th>A YEAR</th>
                    <th>Action</th>
    </tr>
    <tr>
                    <th>4</th>
                    <th>9125</th>
                    <th>#78901</th>
                    <th>RM70</th>
                    <th>2022-05-01</th>
                    <th>FPX</th>
                    <th>A YEAR</th>
                    <th>Action</th>
    </tr>
    <tr>
                    <th>5</th>
                    <th>5206</th>
                    <th>#77800</th>
                    <th>RM25</th>
                    <th>2022-08-09</th>
                    <th>TOUCHNGO</th>
                    <th>MONTHLY</th>
                    <th>Action</th>
    </tr>
    <tr>
                    <th>6</th>
                    <th>1092</th>
                    <th>#88997</th>
                    <th>RM70</th>
                    <th>2022-01-01</th>
                    <th>FPX</th>
                    <th>A YEAR</th>
                    <th>Action</th>
    </tr>
            </thead>

        </table>
        <button onclick="window.print()">Print</button>
        <a href="/payment" class="back-button">Back to payment</a>
    </main>



<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection

