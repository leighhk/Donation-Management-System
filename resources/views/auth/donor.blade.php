<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training Center System - Donor Registration</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        body {
            background: linear-gradient(to right, #f8f9fa, #e9ecef);
        }
        .card {
            border-radius: 1rem;
        }
        .header-text {
            font-weight: 700;
            color: #0d6efd;
        }
        .register-btn {
            transition: transform 0.2s;
        }
        .register-btn:hover {
            transform: scale(1.02);
        }
    </style>
</head>

<body>

<div class="container py-5">

    <!-- Header -->
    <div class="text-center mb-4">
        <h1 class="header-text">Training Center System</h1>
        <h4 class="text-muted">Donor Registration</h4>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">

            <!-- Registration Card -->
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">

                    <form action="{{ url('auth/register') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter your full name" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Choose a username" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter your email address" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter a secure password" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Enter your phone number" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Enter your address" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 register-btn">
                            <i class="bi bi-person-plus"></i> Register
                        </button>
                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
