@extends('master.layout')
@section('content')

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
            background-color:rgb(255, 255, 255); /* Dark gray table */
            border: none; /* No border */
            border-radius: 8px;
            color: #ffffff; /* White text */
        }
        .table th {
            background-color: darkgreen; /* Blue header */
            color: #ffffff; /* White text */
            font-weight: bold;
        }
        .table tbody tr:nth-child(even) {
            background-color: #effff3; /* Slightly lighter green for alternating rows */
        }
        .table tbody tr {
            color: #ffffff; /* White text */
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
    <div class="mt-4">
        <h1 class="text-center mb-4">Members List</h1>

        <!-- Members Table -->
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Member ID</th>
                    <th>Name</th>
                    <th>Phone No.</th>
                    <th>Email</th>
                    <th>Date Joined</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($members as $index => $member)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $member->member_id }}</td>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->phone_no }}</td>
                        <td>{{ $member->email }}</td>
                        <td>{{ $member->date_joined }}</td>
                        <td>{{ $member->role }}</td>
                        <td>{{ $member->membership_status }}</td>
                        <td>
                            <form method="POST" action="{{ route('membership.destroy', $member->id) }}" class="d-inline delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>

                            <a href="{{ route('membership.edit', $member->id) }}" class="btn btn-warning btn-sm edit-button">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Add Member Button -->
        <div id="actionButtons" class="text-center">
            <a href="{{ route('membership.create') }}" class="btn btn-success">Add Member</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection
