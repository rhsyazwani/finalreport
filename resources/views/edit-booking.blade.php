@extends('master.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Court Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
        body {
            background-color: #1a1a1a; /* Dark background */
            color: #ffffff; /* White text */
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #ffffff; /* White text */
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .form-container {
            background-color: rgba(255, 218, 185, 0.587); /* Semi-transparent */
            padding: 2rem;
            border-radius: 8px;
            color: #ffffff; /* White text */
            max-width: 800px;
            margin: auto;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-custom {
            padding: 10px 20px;
            font-size: 14px;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn-primary {
            background-color: #28a745; /* Green */
            color: #fff;
        }
        .btn-primary:hover {
            background-color: #218838; /* Darker green on hover */
        }
    </style>
<body>
    <div class="container mt-5">
        <h1>Edit Court Booking</h1>
        <!-- Ensure the form points to the correct update route -->
        <form action="{{ route('court_bookings.update', $courtBooking->booking_id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Booking ID -->
            <div class="mb-3">
                <label for="booking_id" class="form-label">Booking ID</label>
                <input type="text" class="form-control" id="booking_id" name="booking_id" value="{{ $courtBooking->booking_id }}" readonly>
            </div>

            <!-- Member ID -->
            <div class="mb-3">
                <label for="member_id" class="form-label">Member ID</label>
                <input type="text" class="form-control" id="member_id" name="member_id" value="{{ $courtBooking->member_id }}" required>
            </div>

            <!-- Court Number -->
            <div class="mb-3">
                <label for="court_no" class="form-label">Court Number</label>
                <select class="form-control" id="court_no" name="court_no" required>
                    <option value="1" {{ $courtBooking->court_no == '1' ? 'selected' : '' }}>Court 1</option>
                    <option value="2" {{ $courtBooking->court_no == '2' ? 'selected' : '' }}>Court 2</option>
                    <option value="3" {{ $courtBooking->court_no == '3' ? 'selected' : '' }}>Court 3</option>
                </select>
            </div>

            <!-- Booking Date -->
            <div class="mb-3">
                <label for="booking_date" class="form-label">Booking Date</label>
                <input type="date" class="form-control" id="booking_date" name="booking_date" value="{{ $courtBooking->booking_date }}" required>
            </div>

            <!-- Booking Time -->
            <div class="mb-3">
                <label for="booking_time_start" class="form-label">Booking Time (Start)</label>
                <input type="time" class="form-control" id="booking_time_start" name="booking_time_start" value="{{ $courtBooking->booking_time_start }}" required>
            </div>

            <div class="mb-3">
                <label for="booking_time_end" class="form-label">Booking Time (End)</label>
                <input type="time" class="form-control" id="booking_time_end" name="booking_time_end" value="{{ $courtBooking->booking_time_end }}" required>
            </div>

            <!-- Status -->
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="Pending" {{ $courtBooking->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                    <option value="Confirmed" {{ $courtBooking->status == 'Confirmed' ? 'selected' : '' }}>Confirmed</option>
                    <option value="Cancelled" {{ $courtBooking->status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                </select>
            </div>

            <!-- Submit and Back Buttons -->
            <div class="d-flex justify-content-between">
                <a href="{{ route('court_bookings.index') }}" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</body>
</html>
@endsection
