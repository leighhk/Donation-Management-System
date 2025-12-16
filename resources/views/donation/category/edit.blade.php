<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Donation Category</title>

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
                <h4 class="mb-4 text-center">Edit Category: {{ $category->name }}</h4>

                <form action="{{ url('/donation/category/' . $category->category_id . '/update') }}" method="post">
                    @csrf

                    <!-- Category Name -->
                    <div class="mb-3">
                        <label class="form-label">Category Name</label>
                        <select name="name" class="form-select" required>
                            <option value="Education" {{ $category->name == 'Education' ? 'selected' : '' }}>Education</option>
                            <option value="Food" {{ $category->name == 'Food' ? 'selected' : '' }}>Food</option>
                            <option value="Clothes" {{ $category->name == 'Clothes' ? 'selected' : '' }}>Clothes</option>
                            <option value="Medical" {{ $category->name == 'Medical' ? 'selected' : '' }}>Medical</option>
                        </select>
                    </div>

                    <!-- Description -->
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" name="description" class="form-control" value="{{ $category->description }}" required>
                    </div>

                    <!-- Buttons -->
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-check-circle"></i> Save Changes
                        </button>
                        <a href="{{ url('/donation/category') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Go Back
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
