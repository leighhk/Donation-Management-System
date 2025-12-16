<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training Center System - Login</title>

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
        .login-btn {
            transition: transform 0.2s;
        }
        .login-btn:hover {
            transform: scale(1.02);
        }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center" style="height: 100vh;">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">

            <!-- Header -->
            <div class="text-center mb-4">
                <h1 class="header-text">Training Center System</h1>
            </div>

            <!-- Login Card -->
            <div class="card shadow-sm border-0 p-4">

                <h3 class="text-center mb-4">Log In</h3>

                <form action="{{ url('auth/login') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter your username" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 login-btn">
                        <i class="bi bi-box-arrow-in-right"></i> Log In
                    </button>

                    <!-- ERROR DISPLAY -->
                    @if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </form>

            </div>

        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
