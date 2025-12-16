<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Receipt</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @media print {
            button, a { display: none; }
        }
    </style>
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-sm border-0 p-4">
                <h3 class="text-center mb-4">Donation Receipt</h3>

                <ul class="list-group list-group-flush mb-4">
                    <li class="list-group-item"><strong>Donation ID:</strong> {{ $donation->donation_id }}</li>
                    <li class="list-group-item"><strong>Donor:</strong> {{ $donation->username }}</li>
                    <li class="list-group-item"><strong>Amount:</strong> ₱{{ number_format($donation->amount, 2) }}</li>
                    <li class="list-group-item"><strong>Purpose:</strong> {{ $donation->purpose }}</li>
                    <li class="list-group-item"><strong>Date:</strong> {{ $donation->created_at }}</li>
                </ul>

                <div class="d-flex justify-content-between">
                    <button onclick="window.print()" class="btn btn-primary">
                        <i class="bi bi-printer"></i> Print Receipt
                    </button>
                    <a href="{{ url('donation/list') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Back to List
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
