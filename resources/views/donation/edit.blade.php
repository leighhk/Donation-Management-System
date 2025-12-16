<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Donation</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-sm border-0 p-4">
                <h4 class="mb-4 text-center">Editing Donation #{{ $donationModel->donation_id }}</h4>

                <form action="{{ url('donation/' . $donationModel->donation_id . '/update') }}" method="post">
                    @csrf
        

                    <!-- Amount -->
                    <div class="mb-3">
                        <label class="form-label">Amount</label>
                        <input type="number" name="amount" class="form-control" value="{{ $donationModel->amount }}" required>
                    </div>

                    <!-- Purpose -->
                    <div class="mb-3">
                        <label class="form-label">Purpose</label>
                        <input type="text" name="purpose" class="form-control" value="{{ $donationModel->purpose }}" required>
                    </div>
                    
                    <!-- Buttons -->
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-check-circle"></i> Update Donation
                        </button>
                        <a href="{{ url('/donation/list') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Back
                        </a>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
