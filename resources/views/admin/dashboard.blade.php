<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body class="bg-light">

    <!-- NAVBAR -->
    <nav class="navbar navbar-light bg-white shadow-sm px-4 py-3">
        <span class="navbar-brand mb-0 h4">Admin Dashboard</span>

        <form action="{{ url('/auth/logout') }}" method="POST">
            @csrf
            <button class="btn btn-danger">
                <i class="bi bi-box-arrow-right"></i> Logout
            </button>
        </form>
    </nav>

    <!-- MAIN CONTENT -->
    <div class="container mt-5">
        <div class="row g-4">

            <!-- CARD 1 -->
            <div class="col-md-4">
                <a href="{{ url('admin/accounts') }}" class="text-decoration-none">
                    <div class="card shadow-sm border-0 h-100 text-center p-4 hover-effect">
                        <i class="bi bi-people fs-1 mb-3 text-primary"></i>
                        <h5 class="text-dark">Accounts</h5>
                        <p class="text-muted small">Manage user accounts</p>
                    </div>
                </a>
            </div>

            <!-- CARD 2 -->
            <div class="col-md-4">
                <a href="{{ url('admin/donation/list') }}" class="text-decoration-none">
                    <div class="card shadow-sm border-0 h-100 text-center p-4 hover-effect">
                        <i class="bi bi-list-check fs-1 mb-3 text-success"></i>
                        <h5 class="text-dark">Donation List</h5>
                        <p class="text-muted small">View all donations</p>
                    </div>
                </a>
            </div>

            <!-- CARD 3 -->
            <div class="col-md-4">
                <a href="{{ url('donation/category') }}" class="text-decoration-none">
                    <div class="card shadow-sm border-0 h-100 text-center p-4 hover-effect">
                        <i class="bi bi-grid fs-1 mb-3 text-warning"></i>
                        <h5 class="text-dark">Donation Category</h5>
                        <p class="text-muted small">Manage categories & rules</p>
                    </div>
                </a>
            </div>

        </div>
    </div>

    <!-- Hover Effect CSS -->
    <style>
        .hover-effect {
            transition: all .2s ease;
        }
        .hover-effect:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }
    </style>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
