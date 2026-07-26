<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4">🛒 Checkout</h2>

    <form action="{{ route('place.order') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label>Customer Name</label>
            <input type="text" name="customer_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Mobile Number</label>
            <input type="text" name="mobile" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Delivery Address</label>
            <textarea name="address" class="form-control" rows="4" required></textarea>
        </div>

        <h4 class="mt-4">Order Summary</h4>

        <table class="table table-bordered">

            <thead class="table-dark">
                <tr>
                    <th>Product</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>

            <tbody>

            @php
                $grandTotal = 0;
            @endphp

            @foreach($carts as $cart)

                @php
                    $total = $cart->product->price * $cart->quantity;
                    $grandTotal += $total;
                @endphp

                <tr>
                    <td>{{ $cart->product->name }}</td>
                    <td>{{ $cart->quantity }}</td>
                    <td>₹{{ $cart->product->price }}</td>
                    <td>₹{{ $total }}</td>
                </tr>

            @endforeach

            </tbody>

        </table>

        <h3 class="text-end text-success">
            Grand Total : ₹{{ $grandTotal }}
        </h3>

        <button type="submit" class="btn btn-success btn-lg">
            Place Order
        </button>

        <a href="/cart" class="btn btn-secondary btn-lg">
            Back
        </a>

    </form>

</div>

</body>
</html>