<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>

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
                <h3 class="text-center mb-4">My Account</h3>

                <ul class="list-group list-group-flush mb-4">
                    <li class="list-group-item"><strong>Name:</strong> {{ $user->name }}</li>
                    <li class="list-group-item"><strong>Username:</strong> {{ $user->username }}</li>
                    <li class="list-group-item"><strong>Email:</strong> {{ $user->email }}</li>
                    <li class="list-group-item"><strong>Phone:</strong> {{ $user->phone }}</li>
                    <li class="list-group-item"><strong>Address:</strong> {{ $user->address }}</li>
                </ul>

                <div class="d-flex justify-content-between">
                    <a href="{{ url('donor/account/edit') }}" class="btn btn-primary">
                        <i class="bi bi-pencil-square"></i> Edit Account
                    </a>
                    <a href="{{ url('donor/dashboard') }}" class="btn btn-secondary">
                        <i class="bi bi-house"></i> Go Home
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
