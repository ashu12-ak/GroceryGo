<!DOCTYPE html>
<html>
<head>
    <title>All Orders - GroceryGo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between mb-4">
        <h2>📦 All Orders</h2>

        <div>
            <a href="/" class="btn btn-secondary">Home</a>
            <a href="{{ route('orders.index') }}" class="btn btn-primary">Refresh</a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped table-hover">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Customer</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>Total Amount</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>

        @forelse($orders as $order)

        <tr>

            <td>{{ $order->id }}</td>

            <td>{{ $order->customer_name }}</td>

            <td>{{ $order->mobile }}</td>

            <td>{{ $order->address }}</td>

            <td>
                <strong class="text-success">
                    ₹{{ $order->total_amount }}
                </strong>
            </td>

            <td>

                <form action="{{ route('orders.update',$order->id) }}" method="POST">

                    @csrf
                    @method('PATCH')

                    <select name="status"
                            class="form-select"
                            onchange="this.form.submit()">

                        <option value="Pending"
                            {{ $order->status == 'Pending' ? 'selected' : '' }}>
                            Pending
                        </option>

                        <option value="Processing"
                            {{ $order->status == 'Processing' ? 'selected' : '' }}>
                            Processing
                        </option>

                        <option value="Delivered"
                            {{ $order->status == 'Delivered' ? 'selected' : '' }}>
                            Delivered
                        </option>

                    </select>

                </form>

            </td>

        </tr>

        @empty

        <tr>
            <td colspan="6" class="text-center">
                No Orders Found
            </td>
        </tr>

        @endforelse

        </tbody>

    </table>

</div>

</body>
</html>