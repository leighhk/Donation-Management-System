<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body class="bg-light d-flex align-items-center" style="height: 100vh;">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">

            <div class="card shadow-sm border-0 p-4 text-center">

                <h2 class="mb-4 fw-semibold">Welcome to Training Center System</h2>

                <!-- LOGIN BUTTON -->
                <a href="{{ url('auth/login') }}" class="btn btn-primary w-100 mb-3">
                    <i class="bi bi-box-arrow-in-right"></i> Log In
                </a>

                <!-- REGISTER BUTTON -->
                <a href="{{ url('auth/donor') }}" class="btn btn-success w-100">
                    <i class="bi bi-person-plus"></i> Register Donor
                </a>

            </div>

        </div>
    </div>
</div>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
