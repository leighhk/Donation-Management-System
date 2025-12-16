<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Donation</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Create Donation</h4>
                </div>

                <div class="card-body">
                    <form action="{{ url('donation/create') }}" method="post">
                        @csrf

                        <!-- Donor -->
                        <div class="mb-3">
                            <label class="form-label">Donor</label>
                            <select name="donor_id" class="form-select" required>
                                <option value="">-- Select Donor --</option>
                                @foreach($donor as $d)
                                    <option value="{{ $d->user_id }}">{{ $d->username }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Amount -->
                        <div class="mb-3">
                            <label class="form-label">Amount</label>
                            <input type="number" name="amount" class="form-control" required>
                        </div>

                        <!-- Purpose -->
                        <div class="mb-3">
                            <label class="form-label">Purpose</label>
                            <input type="text" name="purpose" class="form-control" required>
                        </div>

                        <!-- Category -->
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select name="category_id" class="form-select" required>
                                <option value="">-- Select Category --</option>
                                @foreach($category as $c)
                                    <option value="{{ $c->category_id }}">{{ $c->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="btn btn-success w-100">
                            Create Donation
                        </button>

                    </form>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
