<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Member</title>
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
    <div class="container mt-4">
        <h1>Add New Member</h1>

        <div class="form-container">
            <form action="{{ route('membership.store') }}" method="POST">
                @csrf

                <div class="form-group mb-3">
                    <label for="member_id">Member ID</label>
                    <input type="text" name="member_id" id="member_id" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="phone_no">Phone No.</label>
                    <input type="text" name="phone_no" id="phone_no" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="date_joined">Date Joined</label>
                    <input type="date" name="date_joined" id="date_joined" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="role">Role</label>
                    <input type="text" name="role" id="role" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="membership_status">Membership Status</label>
                    <select name="membership_status" id="membership_status" class="form-control" required>
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                </div>

                <div class="form-group text-center mt-4">
                    <button type="submit" class="btn btn-primary">Add Member</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
