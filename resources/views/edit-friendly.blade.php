<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Friendly Session</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #1a1a1a;
            font-family: Arial, sans-serif;
        }
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: rgb(150, 185, 150);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        button {
            width: 100%;
        }
    </style>
</head>
<body>

    <div class="container form-container">
        <h1>Edit Friendly Session</h1>
        <form method="POST" action="{{ route('friendly.update', $session->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="session_ID" class="form-label">Session ID</label>
                <input type="text" class="form-control" id="session_ID" name="session_ID" value="{{ $session->session_ID }}" required>
            </div>

            <div class="mb-3">
                <label for="court_no" class="form-label">Court No</label>
                <input type="text" class="form-control" id="court_no" name="court_no" value="{{ $session->court_no }}" required>
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="text" class="form-control" id="category" name="category" value="{{ $session->category }}" required>
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ $session->date }}" required>
            </div>

            <div class="mb-3">
                <label for="time" class="form-label">Time</label>
                <input type="time" class="form-control" id="time" name="time" value="{{ $session->time }}" required>
            </div>

            <div class="mb-3">
                <label for="team_one" class="form-label">Team One</label>
                <input type="text" class="form-control" id="team_one" name="team_one" value="{{ $session->team_one }}" required>
            </div>

            <div class="mb-3">
                <label for="team_two" class="form-label">Team Two</label>
                <input type="text" class="form-control" id="team_two" name="team_two" value="{{ $session->team_two }}" required>
            </div>

            <button type="submit" class="btn btn-success">Update Session</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
