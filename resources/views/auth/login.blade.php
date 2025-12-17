<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training Center System | Secure Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #f4f6f9, #e6ebf2);
            min-height: 100vh;
        }

        .brand-panel {
            background: linear-gradient(180deg, #1f2933, #111827);
            color: #ffffff;
            border-radius: 1.25rem 0 0 1.25rem;
        }

        .brand-panel h2 {
            font-weight: 700;
        }

        .brand-panel p {
            color: #cbd5e1;
            font-size: 0.95rem;
        }

        .login-card {
            border-radius: 1.25rem;
            overflow: hidden;
            box-shadow: 0 25px 60px rgba(0,0,0,0.08);
            background-color: #ffffff;
        }

        .form-control {
            border-radius: 0.75rem;
            padding: 0.75rem 1rem;
        }

        .form-control:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 0.15rem rgba(37, 99, 235, 0.2);
        }

        .btn-login {
            background-color: #2563eb;
            border: none;
            border-radius: 0.75rem;
            padding: 0.75rem;
            font-weight: 600;
            transition: all 0.25s ease;
        }

        .btn-login:hover {
            background-color: #1d4ed8;
            transform: translateY(-1px);
        }

        .login-title {
            font-weight: 700;
            color: #111827;
        }

        .footer-text {
            font-size: 0.8rem;
            color: #6b7280;
        }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="login-card row g-0">

                <!-- Brand / Info Panel -->
                <div class="col-md-5 d-none d-md-flex brand-panel flex-column justify-content-center p-4">
                    <h2>Training Center System</h2>
                    <p class="mt-3">
                        A secure platform for managing training programs, enrollments, certifications, and user roles.
                    </p>
                    <div class="mt-4">
                        <i class="bi bi-shield-lock fs-2"></i>
                    </div>
                </div>

                <!-- Login Form -->
                <div class="col-md-7 p-4 p-md-5">
                    <h3 class="login-title mb-2">Welcome Back</h3>
                    <p class="text-muted mb-4">Please sign in to continue</p>

                    <form action="{{ url('auth/login') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Enter your username" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                        </div>

                        <button type="submit" class="btn btn-login w-100">
                            <i class="bi bi-box-arrow-in-right me-1"></i> Sign In
                        </button>

                        <!-- ERROR DISPLAY -->
                        @if ($errors->any())
                        <div class="alert alert-danger mt-4">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </form>

                    <div class="text-center mt-4 footer-text">
                        © {{ date('Y') }} Training Center System. All rights reserved.
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>