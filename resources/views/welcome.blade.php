<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GroceryGo | Hyperlocal Grocery Ordering</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <style>

        body{
            font-family: Arial, Helvetica, sans-serif;
            background:#f8f9fa;
        }

        .navbar{
            background:#198754;
        }

        .navbar-brand,
        .nav-link{
            color:white !important;
            font-weight:bold;
        }

        .hero{
            background:linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)),
            url('https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&w=1400&q=80');

            background-size:cover;
            background-position:center;
            height:550px;

            display:flex;
            justify-content:center;
            align-items:center;

            color:white;
            text-align:center;
        }

        .hero h1{
            font-size:55px;
            font-weight:bold;
        }

        .hero p{
            font-size:20px;
        }

        .section-title{
            text-align:center;
            margin-top:70px;
            margin-bottom:40px;
            font-weight:bold;
        }

        .category-card{
            transition:.3s;
            border:none;
        }

        .category-card:hover{
            transform:translateY(-8px);
        }

        footer{
            background:#198754;
            color:white;
            padding:25px;
            margin-top:60px;
        }

    </style>

</head>
<body>

<nav class="navbar navbar-expand-lg">

<div class="container">

<a class="navbar-brand" href="#">
<i class="fa-solid fa-cart-shopping"></i>
GroceryGo
</a>

<button class="navbar-toggler bg-light"
data-bs-toggle="collapse"
data-bs-target="#menu">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a href="/" class="nav-link">Home</a>
</li>

<li class="nav-item">
<a href="/products" class="nav-link">Products</a>
</li>

<li class="nav-item">
<a href="/login" class="nav-link">Login</a>
</li>

<li class="nav-item">
<a href="/register" class="nav-link">Register</a>
</li>

<li class="nav-item">
<a href="#" class="nav-link">Contact</a>
</li>

</ul>

</div>

</div>

</nav>

<section class="hero">

<div>

<h1>Fresh Groceries Delivered To Your Doorstep</h1>

<p>
Order Fresh Fruits, Vegetables, Dairy Products &
Daily Essentials Anytime.
</p>

<a href="/products"
class="btn btn-warning btn-lg mt-3">

Shop Now

</a>

</div>

</section>
<!-- Categories -->

<div class="container">

    <h2 class="section-title">Shop By Category</h2>

    <div class="row">

        <div class="col-md-3 mb-4">
            <div class="card category-card shadow text-center p-4">
                <h1>🥦</h1>
                <h4>Vegetables</h4>
                <p>Fresh farm vegetables delivered daily.</p>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card category-card shadow text-center p-4">
                <h1>🍎</h1>
                <h4>Fruits</h4>
                <p>Fresh seasonal fruits with best quality.</p>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card category-card shadow text-center p-4">
                <h1>🥛</h1>
                <h4>Dairy</h4>
                <p>Milk, Butter, Cheese and Dairy Products.</p>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card category-card shadow text-center p-4">
                <h1>🍚</h1>
                <h4>Groceries</h4>
                <p>Rice, Pulses, Oil and Daily Essentials.</p>
            </div>
        </div>

    </div>

</div>

<!-- Why Choose Us -->

<div class="container">

    <h2 class="section-title">Why Choose GroceryGo?</h2>

    <div class="row text-center">

        <div class="col-md-4">
            <div class="card shadow p-4">
                <h1>🚚</h1>
                <h4>Fast Delivery</h4>
                <p>Get groceries delivered within a few hours.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow p-4">
                <h1>🥬</h1>
                <h4>Fresh Products</h4>
                <p>Fresh vegetables, fruits and dairy every day.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow p-4">
                <h1>💳</h1>
                <h4>Secure Payment</h4>
                <p>Easy and secure online payment options.</p>
            </div>
        </div>

    </div>

</div>

<!-- Featured Products -->

<div class="container">

    <h2 class="section-title">Featured Products</h2>

    <div class="row">

        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <img src="https://images.unsplash.com/photo-1567306226416-28f0efdc88ce?w=600"
                     class="card-img-top" height="220">
                <div class="card-body">
                    <h4>Fresh Apples</h4>
                    <p>₹120 / Kg</p>
                    <a href="/products" class="btn btn-success">View Products</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <img src="https://images.unsplash.com/photo-1540420773420-3366772f4999?w=600"
                     class="card-img-top" height="220">
                <div class="card-body">
                    <h4>Organic Vegetables</h4>
                    <p>Fresh Daily</p>
                    <a href="/products" class="btn btn-success">View Products</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <img src="https://images.unsplash.com/photo-1550583724-b2692b85b150?w=600"
                     class="card-img-top" height="220">
                <div class="card-body">
                    <h4>Milk & Dairy</h4>
                    <p>Best Quality</p>
                    <a href="/products" class="btn btn-success">View Products</a>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- Customer Reviews -->

<div class="container">

    <h2 class="section-title">What Our Customers Say</h2>

    <div class="row">

        <div class="col-md-4 mb-4">
            <div class="card shadow p-4">
                <h5>⭐⭐⭐⭐⭐</h5>
                <p>"Fresh vegetables and super fast delivery. Highly recommended!"</p>
                <strong>- Rahul Patil</strong>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow p-4">
                <h5>⭐⭐⭐⭐⭐</h5>
                <p>"Easy ordering process and affordable prices. Great service."</p>
                <strong>- Sneha Kulkarni</strong>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow p-4">
                <h5>⭐⭐⭐⭐⭐</h5>
                <p>"Best grocery shopping experience. Quality products every time."</p>
                <strong>- Amit Sharma</strong>
            </div>
        </div>

    </div>

</div>

<!-- Contact -->

<div class="container my-5">

    <div class="card shadow">

        <div class="card-body text-center">

            <h2>Contact Us</h2>

            <p>Email : support@grocerygo.com</p>
            <p>Phone : +91 9876543210</p>
            <p>Address : Nashik, Maharashtra, India</p>

        </div>

    </div>

</div>

<!-- Footer -->

<footer>

<div class="container text-center">

    <h4>GroceryGo</h4>

    <p>
        Hyperlocal Grocery Ordering & Delivery Tracking Portal
    </p>

    <p>
        © 2026 GroceryGo. All Rights Reserved.
    </p>

</div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>