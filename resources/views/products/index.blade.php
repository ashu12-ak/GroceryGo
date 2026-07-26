<!DOCTYPE html>
<html>
<head>
    <title>GroceryGo - Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>🛒 GroceryGo Products</h2>

        <a href="{{ route('products.create') }}" class="btn btn-success">
            Add Product
        </a>
    </div>

    <!-- Search Box -->
    <form action="{{ route('products.index') }}" method="GET" class="row mb-4">

        <div class="col-md-10">
            <input type="text"
                   name="search"
                   value="{{ request('search') }}"
                   class="form-control"
                   placeholder="Search Product Here...">
        </div>

        <div class="col-md-2">
            <button class="btn btn-primary w-100">
                Search
            </button>
        </div>

    </form>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Description</th>
                <th>Image</th>
                <th width="260">Action</th>
            </tr>
        </thead>

        <tbody>

        @forelse($products as $product)

        <tr>

            <td>{{ $product->id }}</td>

            <td>{{ $product->category->name ?? 'No Category' }}</td>

            <td>{{ $product->name }}</td>

            <td>₹{{ $product->price }}</td>

            <td>{{ $product->quantity }}</td>

            <td>{{ $product->description }}</td>

            <td>
                @if($product->image)
                    <img src="{{ $product->image }}" width="60" height="60" class="rounded">
                @else
                    No Image
                @endif
            </td>

            <td>

                <a href="{{ route('products.edit',$product->id) }}"
                   class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('products.destroy',$product->id) }}"
                      method="POST"
                      style="display:inline;">

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm">
                        Delete
                    </button>

                </form>

                <form action="{{ route('cart.store',$product->id) }}"
                      method="POST"
                      style="display:inline;">

                    @csrf

                    <button type="submit" class="btn btn-success btn-sm">
                        Add To Cart
                    </button>

                </form>

            </td>

        </tr>

        @empty

        <tr>
            <td colspan="8" class="text-center">
                <strong>No Products Found</strong>
            </td>
        </tr>

        @endforelse

        </tbody>

    </table>

</div>

</body>
</html>