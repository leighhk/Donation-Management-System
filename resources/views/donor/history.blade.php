<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation History</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-sm border-0 p-4">
                <h3 class="text-center mb-4">Donation History</h3>

                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>Amount</th>
                                <th>Date Donated</th>
                                <th>Purpose</th>
                                <th>Staff Id</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($donation as $d)
                            <tr>
                                <td>₱{{ number_format($d->amount, 2) }}</td>
                                <td>{{ $d->created_at }}</td>
                                <td>{{ $d->purpose }}</td>
                                <td>{{ $d->staff_id }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <a href="{{ url('donor/dashboard') }}" class="btn btn-secondary mt-3">
                    <i class="bi bi-arrow-left"></i> Back to Dashboard
                </a>
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
