<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4">🛒 Shopping Cart</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th width="150">Action</th>
            </tr>
        </thead>

        <tbody>

        @php
            $grandTotal = 0;
        @endphp

        @forelse($carts as $cart)

            @php
                $total = $cart->product->price * $cart->quantity;
                $grandTotal += $total;
            @endphp

            <tr>

                <td>{{ $cart->id }}</td>

                <td>{{ $cart->product->name }}</td>

                <td>₹{{ $cart->product->price }}</td>

                <td>{{ $cart->quantity }}</td>

                <td>₹{{ $total }}</td>

                <td>

                    <form action="{{ route('cart.destroy',$cart->id) }}" method="POST">

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm">
                            Remove
                        </button>

                    </form>

                </td>

            </tr>

        @empty

            <tr>
                <td colspan="6" class="text-center">
                    <strong>Cart is Empty</strong>
                </td>
            </tr>

        @endforelse

        </tbody>

    </table>

    <div class="d-flex justify-content-between align-items-center mt-4">

        <a href="/products" class="btn btn-primary">
            ← Continue Shopping
        </a>

        <h4>
            Grand Total :
            <span class="text-success">₹{{ $grandTotal }}</span>
        </h4>

    </div>

    @if($grandTotal > 0)

    <div class="text-end mt-3">

        <a href="{{ route('checkout') }}" class="btn btn-success btn-lg">
            Proceed to Checkout
        </a>

    </div>

    @endif

</div>

</body>
</html>