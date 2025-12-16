<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-sm border-0 p-4 text-center">
                <h3 class="mb-4">Welcome to Your Dashboard</h3>

                <div class="d-grid gap-3 mb-3">
                    <a href="{{ url('donor/account') }}" class="btn btn-primary btn-lg">
                        <i class="bi bi-person-circle"></i> My Account
                    </a>
                    <a href="{{ url('donor/history') }}" class="btn btn-success btn-lg">
                        <i class="bi bi-clock-history"></i> Donation History
                    </a>
                </div>

                <form action="{{ url('/auth/logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-lg w-100">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
