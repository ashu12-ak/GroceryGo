<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GroceryGo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            font-family: Arial, sans-serif;
        }

        .hero{
            background: linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)),
            url('https://images.unsplash.com/photo-1542838132-92c53300491e');
            background-size: cover;
            background-position: center;
            height: 90vh;
            color: white;
            display: flex;
            align-items: center;
        }

        .hero h1{
            font-size:60px;
            font-weight:bold;
        }

        .hero p{
            font-size:22px;
        }

        .category-card{
            transition:.3s;
        }

        .category-card:hover{
            transform:translateY(-8px);
        }

        footer{
            background:#198754;
            color:white;
            padding:20px;
            text-align:center;
            margin-top:60px;
        }
    </style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-success">

<div class="container">

<a class="navbar-brand fw-bold" href="/">
🛒 GroceryGo
</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="/">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/products">Products</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/categories">Categories</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/cart">Cart</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/checkout">Checkout</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/my-orders">My Orders</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/orders">Orders</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/about">About</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/contact">Contact</a>
</li>

@guest

<li class="nav-item">
<a class="nav-link" href="{{ route('login') }}">Login</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{ route('register') }}">Register</a>
</li>

@endguest

@auth

<li class="nav-item">
<a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{ route('profile.edit') }}">Profile</a>
</li>

<li class="nav-item">
<form method="POST" action="{{ route('logout') }}">
@csrf
<button class="btn btn-link nav-link" type="submit">
Logout
</button>
</form>
</li>

@endauth

</ul>

</div>

</div>

</nav>

<section class="hero">

<div class="container">

<h1>Fresh Grocery Delivered</h1>

<p>
Order fresh vegetables, fruits and groceries
directly from your home.
</p>

<a href="/products" class="btn btn-warning btn-lg mt-3">
Shop Now
</a>

</div>

</section>
<section class="container mt-5">

<div class="text-center mb-5">
<h2 class="fw-bold">Shop By Category</h2>
<p class="text-muted">Choose your favourite grocery category</p>
</div>

<div class="row">

<div class="col-md-3 mb-4">
<div class="card category-card shadow text-center">
<img src="https://images.unsplash.com/photo-1610832958506-aa56368176cf"
height="220" class="card-img-top">
<div class="card-body">
<h5>🥦 Vegetables</h5>
</div>
</div>
</div>

<div class="col-md-3 mb-4">
<div class="card category-card shadow text-center">
<img src="https://images.unsplash.com/photo-1619566636858-adf3ef46400b"
height="220" class="card-img-top">
<div class="card-body">
<h5>🍎 Fruits</h5>
</div>
</div>
</div>

<div class="col-md-3 mb-4">
<div class="card category-card shadow text-center">
<img src="https://images.unsplash.com/photo-1586201375761-83865001e31c"
height="220" class="card-img-top">
<div class="card-body">
<h5>🥛 Dairy</h5>
</div>
</div>
</div>

<div class="col-md-3 mb-4">
<div class="card category-card shadow text-center">
<img src="https://images.unsplash.com/photo-1606787366850-de6330128bfc"
height="220" class="card-img-top">
<div class="card-body">
<h5>🍞 Bakery</h5>
</div>
</div>
</div>

</div>

</section>

<section class="container mt-5">

<div class="text-center mb-5">
<h2 class="fw-bold">Why Choose GroceryGo?</h2>
</div>

<div class="row text-center">

<div class="col-md-4">
<h1>🚚</h1>
<h4>Fast Delivery</h4>
<p>Get groceries delivered quickly to your doorstep.</p>
</div>

<div class="col-md-4">
<h1>🥬</h1>
<h4>Fresh Products</h4>
<p>Fresh vegetables, fruits and dairy every day.</p>
</div>

<div class="col-md-4">
<h1>💰</h1>
<h4>Best Prices</h4>
<p>Affordable prices with exciting daily offers.</p>
</div>

</div>

</section>

<section class="container mt-5">

<div class="text-center mb-5">
<h2 class="fw-bold">Featured Products</h2>
<p class="text-muted">Most Popular Grocery Items</p>
</div>

<div class="row">

<div class="col-md-3 mb-4">
<div class="card shadow">
<img src="https://picsum.photos/300/220?1" class="card-img-top">
<div class="card-body text-center">
<h5>Fresh Apple</h5>
<h4 class="text-success">₹120</h4>
<a href="/products" class="btn btn-success">View</a>
</div>
</div>
</div>

<div class="col-md-3 mb-4">
<div class="card shadow">
<img src="https://picsum.photos/300/220?2" class="card-img-top">
<div class="card-body text-center">
<h5>Fresh Milk</h5>
<h4 class="text-success">₹60</h4>
<a href="/products" class="btn btn-success">View</a>
</div>
</div>
</div>

<div class="col-md-3 mb-4">
<div class="card shadow">
<img src="https://picsum.photos/300/220?3" class="card-img-top">
<div class="card-body text-center">
<h5>Bread</h5>
<h4 class="text-success">₹40</h4>
<a href="/products" class="btn btn-success">View</a>
</div>
</div>
</div>

<div class="col-md-3 mb-4">
<div class="card shadow">
<img src="https://picsum.photos/300/220?4" class="card-img-top">
<div class="card-body text-center">
<h5>Tomato</h5>
<h4 class="text-success">₹35</h4>
<a href="/products" class="btn btn-success">View</a>
</div>
</div>
</div>

</div>

</section>
<footer>
    <div class="container">

        <h4>🛒 GroceryGo</h4>

        <p>
            Fresh Groceries Delivered at Your Doorstep.
        </p>

        <hr class="bg-light">

        <div class="row">

            <div class="col-md-4">
                <h5>Quick Links</h5>

                <p><a href="/" class="text-white text-decoration-none">Home</a></p>
                <p><a href="/products" class="text-white text-decoration-none">Products</a></p>
                <p><a href="/categories" class="text-white text-decoration-none">Categories</a></p>
            </div>

            <div class="col-md-4">
                <h5>Customer</h5>

                <p><a href="/cart" class="text-white text-decoration-none">Cart</a></p>
                <p><a href="/checkout" class="text-white text-decoration-none">Checkout</a></p>
                <p><a href="/my-orders" class="text-white text-decoration-none">My Orders</a></p>
            </div>

            <div class="col-md-4">
                <h5>Company</h5>

                <p><a href="/about" class="text-white text-decoration-none">About Us</a></p>
                <p><a href="/contact" class="text-white text-decoration-none">Contact Us</a></p>
                <p>Email : grocerygo@gmail.com</p>
            </div>

        </div>

        <hr class="bg-light">

        <p class="mb-0">
            © 2026 GroceryGo | MCA Final Year Project | All Rights Reserved
        </p>

    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>