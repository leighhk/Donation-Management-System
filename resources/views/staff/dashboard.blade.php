<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Staff Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        /* Unified color: green shades */
        .dashboard-card a {
            background-color: #28a745; /* green */
            color: white;
        }
        .dashboard-card a:hover {
            background-color: #218838; /* darker green */
            color: white;
        }
    </style>
</head>
<body class="bg-light">

<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <span class="navbar-brand fw-semibold">
            <i class="bi bi-cash-coin me-2"></i>Finance Staff Dashboard
        </span>
        <form action="{{ url('auth/logout') }}" method="POST" class="d-flex ms-auto">
            @csrf
            <button type="submit" class="btn btn-danger btn-sm">
                <i class="bi bi-box-arrow-right me-1"></i> Log Out
            </button>
        </form>
    </div>
</nav>

<!-- Main Content -->
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card dashboard-card shadow-sm border-0 p-4 text-center">
                <h3 class="mb-4">Finance Staff Dashboard</h3>

                <div class="d-grid gap-3 mb-3">
                    <a href="{{ url('donation/add') }}" class="btn btn-lg">
                        <i class="bi bi-plus-circle me-2"></i> Create Donation Record
                    </a>
                    <a href="{{ url('donation/list') }}" class="btn btn-lg">
                        <i class="bi bi-list-check me-2"></i> View Donation Records
                    </a>
                    <a href="{{ url('staff/summary') }}" class="btn btn-lg">
                        <i class="bi bi-file-earmark-text me-2"></i> Generate Summary Log
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