@extends('master.layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Court Bookings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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
        <h1>All Court Bookings</h1>
        <a href="{{ route('court_bookings.create') }}" class="btn btn-primary mb-3">Create New Booking</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Booking ID</th>
                    <th>Member ID</th>
                    <th>Court Number</th>
                    <th>Booking Date</th>
                    <th>Booking Time</th>
                    <th>Total Hours</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $index => $booking)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $booking->booking_id }}</td>
                        <td>{{ $booking->member_id }}</td>
                        <td>Court {{ $booking->court_no }}</td>
                        <td>{{ $booking->booking_date }}</td>
                        <td>
                            @if ($booking->booking_time_start && $booking->booking_time_end)
                                {{ date('H:i', strtotime($booking->booking_time_start)) }} -
                                {{ date('H:i', strtotime($booking->booking_time_end)) }}
                            @else
                                Not Available
                            @endif
                        </td>
                        <td>
                            @if ($booking->booking_time_start && $booking->booking_time_end)
                                @php
                                    $start = strtotime($booking->booking_time_start);
                                    $end = strtotime($booking->booking_time_end);
                                    $totalMinutes = ($end - $start) / 60;
                                    $hours = intdiv($totalMinutes, 60);
                                    $minutes = $totalMinutes % 60;
                                @endphp
                                {{ $hours }} hour(s) {{ $minutes > 0 ? $minutes . ' minute(s)' : '' }}
                            @else
                                Not Available
                            @endif
                        </td>
                        <td>{{ ucfirst($booking->status) }}</td>
                        <td>
                            <!-- Edit Button as Icon -->
                            <a href="{{ route('court_bookings.edit', $booking->booking_id) }}" class="btn btn-warning btn-sm">
    <i class="bi bi-pencil-square"></i>
</a>

<!-- Delete Button as Icon -->
<form action="{{ route('court_bookings.destroy', $booking->booking_id) }}" method="POST" style="display:inline-block;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this booking?')">
        <i class="bi bi-trash"></i>
    </button>
</form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
@endsection
