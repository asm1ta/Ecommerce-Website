<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecommerce website using PHP and MySQL</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container-fluid p-0">
    <!-- Navbar 1 -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">ShopEasy</a>
        <img src="./images ecommerce/logo.png" alt="Logo" class="logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/users_area/signup.php">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/users_area/signin.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Cart/cart_select.php"><i class="fa-solid fa-cart-shopping"></i> Cart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Payment/confirm_payment.php">Total Price</a>
            </li>
          </ul>

          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <!-- Navbar 2 -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
      </ul>
    </nav>

    <!-- Header -->
    <div class="bg-light text-center py-3">
      <h3>Hidden Store</h3>
      <p>Communication is at the heart of e-commerce and community</p>
    </div>

    <!-- Content -->
    <div class="row m-2">
      <div class="col-md-10">
        <div class="row">
          <!-- Product 1 -->
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="./images ecommerce/apple.jpeg" class="card-img-top" alt="Apple">
              <div class="card-body">
                <h5 class="card-title">Apple</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a href="#" class="btn btn-info">Add to cart</a>
                <a href="#" class="btn btn-secondary">View more</a>
              </div>
            </div>
          </div>
          <!-- Product 2 -->
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="./images ecommerce/dress.jpg" class="card-img-top" alt="Dress">
              <div class="card-body">
                <h5 class="card-title">Dress</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a href="#" class="btn btn-info">Add to cart</a>
                <a href="#" class="btn btn-secondary">View more</a>
              </div>
            </div>
          </div>
          <!-- Product 3 -->
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="./images ecommerce/glass.jpg" class="card-img-top" alt="Glasses">
              <div class="card-body">
                <h5 class="card-title">Glasses</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a href="#" class="btn btn-info">Add to cart</a>
                <a href="#" class="btn btn-secondary">View more</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Sidebar -->
      <div class="col-md-2 bg-secondary text-light p-3">
        <ul class="navbar-nav text-center">
          <li class="nav-item bg-info mb-2">
            <a class="nav-link text-light" href="#">
              <h4 class="mb-0">Delivery Brands</h4>
            </a>
          </li>
          <li class="nav-item"><a href="#" class="nav-link text-light">Brand1</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-light">Brand2</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-light">Brand3</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-light">Brand4</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-light">Brand5</a></li>
        </ul>
        <ul class="navbar-nav text-center mt-4">
          <li class="nav-item bg-info mb-2">
            <a class="nav-link text-light" href="#">
              <h4 class="mb-0">Categories</h4>
            </a>
          </li>
          <li class="nav-item"><a href="#" class="nav-link text-light">Category1</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-light">Category2</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-light">Category3</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-light">Category4</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-light">Category5</a></li>
        </ul>
      </div>
    </div>

    <!-- Footer -->
    <div class="bg-info text-center p-3 mt-3">
      <p class="mb-0">All rights reserved © Designed by team</p>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>
</body>

</html>