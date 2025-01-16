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
        width: auto; /* Change width to auto */
        background-color: #719fd4; /* Blue color */
        border: none;
    }

</style>
</head>
<body>
<div class="container form-container">

<form action="{{ route('inquiries.send-reply', $inquiry->id) }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">To:</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $inquiry->name }}" readonly>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $inquiry->email }}" readonly>
    </div>

    <div class="mb-3">
        <label for="subject" class="form-label">Subject:</label>
        <input type="text" class="form-control" id="subject" name="subject" value="Your Inquiry" required>
    </div>

    <div class="mb-3">
        <label for="message" class="form-label">Message:</label>
        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
    </div>

    <div class="d-flex justify-content-between">
        <a href="{{ route('inquiries.index') }}" class="btn btn-secondary">Back</a>
        <button type="submit" class="btn btn-success">Send</button>
    </div>
</form>
