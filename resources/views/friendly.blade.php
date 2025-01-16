@extends('master.layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friendly Session List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap CSS -->
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
        .table {
            background-color: #fcfffc; /* Light green background */
            border: none; /* No border */
            border-radius: 8px;
            color: #155724; /* Dark green text */
        }
        .table th {
            background-color: #155724; /* Dark green header */
            color: #ffffff; /* White text */
            font-weight: bold;
        }
        .table tbody tr {
            color: #155724; /* Dark green text */
        }
        .table tbody tr:nth-child(even) {
            background-color: #effff3; /* Slightly lighter green for alternating rows */
        }
        .container {
            padding: 2rem;
            max-width: 1200px;
            margin: 2rem auto;
        }
        .btn-custom {
            padding: 6px 12px;
            font-size: 14px;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn-edit {
            background-color: #ffc107; /* Yellow for Edit */
            color: #212529;
        }
        .btn-edit:hover {
            background-color: #e0a800; /* Darker yellow on hover */
        }
        .btn-delete {
            background-color: #dc3545; /* Red for Delete */
            color: #fff;
        }
        .btn-delete:hover {
            background-color: #c82333; /* Darker red on hover */
        }
        .btn-add {
            background-color: #28a745; /* Green for Add */
            color: #fff;
            margin-top: 1.5rem;
        }
        .btn-add:hover {
            background-color: #218838; /* Darker green on hover */
        }
        .text-center {
            color: #ffffff; /* White text */
        }
        footer {
            text-align: center;
            margin-top: 2rem;
            color: #ffffff; /* White text */
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Friendly Session List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Session ID</th>
                    <th scope="col">Court No</th>
                    <th scope="col">Category</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Team One</th>
                    <th scope="col">Team Two</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($sessions as $session)
                    <tr>
                        <td>{{ $session->session_ID }}</td>
                        <td>{{ $session->court_no }}</td>
                        <td>{{ $session->category }}</td>
                        <td>{{ $session->date }}</td>
                        <td>{{ $session->time }}</td>
                        <td>{{ $session->team_one }}</td>
                        <td>{{ $session->team_two }}</td>
                        <td>
                            <a href="{{ route('friendly.edit', $session->id) }}" class="btn-custom btn-edit">Update</a>

                            <form action="{{ route('friendly.destroy', $session->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-custom btn-delete">Delete</button>
                            </form>


                        </td>
                    </tr>
                    @endforeach

            </tbody>
        </table>

        <!-- Add button at the bottom center -->
        <div class="text-center">
            <a href="{{ url('add-friendly') }}" class="btn-custom btn-add">Add New Session</a>
        </div>

    </div>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
