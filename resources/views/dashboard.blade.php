<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4 text-center">
        📊 GroceryGo Dashboard
    </h2>

    <div class="row">

        <div class="col-md-3 mb-3">
            <div class="card bg-primary text-white shadow">
                <div class="card-body text-center">
                    <h5>Total Products</h5>
                    <h2>{{ $products }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card bg-success text-white shadow">
                <div class="card-body text-center">
                    <h5>Total Categories</h5>
                    <h2>{{ $categories }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card bg-warning text-dark shadow">
                <div class="card-body text-center">
                    <h5>Total Orders</h5>
                    <h2>{{ $orders }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card bg-danger text-white shadow">
                <div class="card-body text-center">
                    <h5>Total Revenue</h5>
                    <h2>₹{{ $revenue }}</h2>
                </div>
            </div>
        </div>

    </div>

    <hr class="my-5">

    <h3 class="mb-3">🛍 Recent Orders</h3>

    <table class="table table-bordered table-striped">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Customer</th>
                <th>Mobile</th>
                <th>Total Amount</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>

        @forelse($recentOrders as $order)

            <tr>

                <td>{{ $order->id }}</td>

                <td>{{ $order->customer_name }}</td>

                <td>{{ $order->mobile }}</td>

                <td>₹{{ $order->total_amount }}</td>

                <td>
                    <span class="badge bg-success">
                        {{ $order->status }}
                    </span>
                </td>

            </tr>

        @empty

            <tr>
                <td colspan="5" class="text-center">
                    No Orders Found
                </td>
            </tr>

        @endforelse

        </tbody>

    </table>

</div>

</body>
</html>