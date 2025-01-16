<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
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
            background-color:  rgb(150, 185, 150); /* Semi-transparent */
            padding: 2rem;
            border-radius: 8px;
            color: #ffffff; /* White text */
            max-width: 800px;
            margin: auto;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #28a745; /* Green */
            color: #fff;
            border: none;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #218838; /* Darker green on hover */
        }
        .form-control {
            background-color: #333333; /* Darker input background */
            color: #ffffff; /* White text */
            border: none;
        }
        .form-control:focus {
            background-color: #444444; /* Slightly lighter background on focus */
            color: #ffffff;
            border-color: #28a745; /* Green border on focus */
            box-shadow: none;
        }
        body, html {
    height: 100%; /* Ensure the body and html take the full height */
    margin: 0; /* Remove default margin */
}

.main {
    min-height: calc(100vh - 60px); /* Adjust based on your footer's height */
    padding-bottom: 60px; /* Space for the footer */
}

footer {
    background-color: #214e20;
    color: white;
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 20px;
    width: 100%;
    position: relative;
}

    </style>
</head>
<body>
<div class="container">
    <h1>Member Information</h1>

    <form action="{{ route('membership.update', $membership->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Member ID (Read-Only) -->
        <div class="form-group">
            <label for="member_id">Member ID</label>
            <input type="text" name="member_id" id="member_id" value="{{ old('member_id', $membership->member_id) }}" class="form-control" readonly>
        </div>

        <!-- Name -->
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $membership->name) }}" class="form-control" required>
        </div>

        <!-- Phone Number -->
        <div class="form-group">
            <label for="phone_no">Phone No.</label>
            <input type="text" name="phone_no" id="phone_no" value="{{ old('phone_no', $membership->phone_no) }}" class="form-control" required>
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email', $membership->email) }}" class="form-control" required>
        </div>

        <!-- Date Joined -->
        <div class="form-group">
            <label for="date_joined">Date Joined</label>
            <input type="date" name="date_joined" id="date_joined" value="{{ old('date_joined', $membership->date_joined) }}" class="form-control" required>
        </div>

        <!-- Role -->
        <div class="form-group">
            <label for="role">Role</label>
            <input type="text" name="role" id="role" value="{{ old('role', $membership->role) }}" class="form-control" required>
        </div>

        <!-- Membership Status -->
        <div class="form-group">
            <label for="membership_status">Membership Status</label>
            <input type="text" name="membership_status" id="membership_status" value="{{ old('membership_status', $membership->membership_status) }}" class="form-control" required>
        </div>

        <!-- Submit Button -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update Info</button>
        </div>
    </form>
</body>




