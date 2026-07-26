<!DOCTYPE html>
<html>
<head>
    <title>Categories</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between mb-3">
        <h2>Category List</h2>

        <a href="{{ route('categories.create') }}" class="btn btn-success">
            Add Category
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Description</th>
                <th>Image</th>
                <th width="180">Action</th>
            </tr>
        </thead>

        <tbody>

        @forelse($categories as $category)

            <tr>

                <td>{{ $category->id }}</td>

                <td>{{ $category->name }}</td>

                <td>{{ $category->description }}</td>

                <td>{{ $category->image }}</td>

                <td>

                    <a href="{{ route('categories.edit',$category->id) }}"
                       class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('categories.destroy',$category->id) }}"
                          method="POST"
                          style="display:inline;">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm">
                            Delete
                        </button>

                    </form>

                </td>

            </tr>

        @empty

            <tr>

                <td colspan="5" class="text-center">

                    No Categories Found

                </td>

            </tr>

        @endforelse

        </tbody>

    </table>

</div>

</body>
</html>