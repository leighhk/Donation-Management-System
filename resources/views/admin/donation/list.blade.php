<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation List</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body class="bg-light">

<div class="container py-5">

    <!-- HEADER + BACK BUTTON -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-semibold">Donation List</h2>

        <a href="{{ url('admin/dashboard') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Back to Dashboard
        </a>
    </div>

    <!-- DONATION TABLE -->
    <div class="card shadow-sm border-0">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>Donor</th>
                            <th>Amount</th>
                            <th>Purpose</th>
                            <th>Category</th>
                            <th>Staff Id</th>
                            <th>Date Created</th>
                            <th>Date Updated</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $row)
                        <tr>
                            <td>{{ $row->username }}</td>
                            <td>₱{{ number_format($row->amount, 2) }}</td>
                            <td>{{ $row->purpose }}</td>
                            <td>{{ $row->category_name }}</td>
                            <td>{{ $row->staff_id }}</td>
                            <td>{{ $row->created_at }}</td>
                            <td>{{ $row->updated_at }}</td>

                            <td class="text-center">
                                <a href="{{ url('/donation/' . $row->donation_id . '/delete') }}" 
                                   class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
