<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training Center System | Welcome</title>

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

        .welcome-card {
            border-radius: 1.25rem;
            box-shadow: 0 30px 70px rgba(0,0,0,0.08);
            background: #ffffff;
            padding: 3rem 2.5rem;
        }

        .system-title {
            font-weight: 700;
            color: #111827;
        }

        .system-subtitle {
            color: #6b7280;
            font-size: 0.95rem;
        }

        .btn-primary-custom {
            background-color: #2563eb;
            border: none;
            border-radius: 0.75rem;
            padding: 0.8rem;
            font-weight: 600;
            transition: all 0.25s ease;
        }

        .btn-primary-custom:hover {
            background-color: #1d4ed8;
            transform: translateY(-1px);
        }

        .btn-outline-custom {
            border-radius: 0.75rem;
            padding: 0.8rem;
            font-weight: 600;
            color: #111827;
            border: 1px solid #d1d5db;
            transition: all 0.25s ease;
        }

        .btn-outline-custom:hover {
            background-color: #f9fafb;
            transform: translateY(-1px);
        }

        .icon-circle {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: #2563eb;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin: 0 auto 1.5rem;
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
        <div class="col-lg-6 col-md-8">

            <div class="welcome-card text-center">

                <div class="icon-circle">
                    <i class="bi bi-mortarboard-fill"></i>
                </div>

                <h2 class="system-title mb-2">Training Center System</h2>
                <p class="system-subtitle mb-4">
                    Centralized platform for training management, enrollment, certification, and user access
                </p>

                <a href="{{ url('auth/login') }}" class="btn btn-primary-custom w-100 mb-3">
                    <i class="bi bi-box-arrow-in-right me-1"></i> Log In
                </a>

                <a href="{{ url('auth/donor') }}" class="btn btn-outline-custom w-100">
                    <i class="bi bi-person-plus me-1"></i> Register Donor
                </a>

                <div class="footer-text mt-4">
                    © {{ date('Y') }} Training Center System. All rights reserved.
                </div>

            </div>

        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>