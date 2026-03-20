<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SAITM Website</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">SAITM</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="download.jpg" class="d-block w-100" style="height:450px; object-fit:cover;">
    </div>

    <div class="carousel-item">
      <img src="images (1).jpg" class="d-block w-100" style="height:450px; object-fit:cover;">
    </div>

    <div class="carousel-item">
      <img src="images.jpg" class="d-block w-100" style="height:450px; object-fit:cover;">
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>

</div>

<div class="container mt-5">

<div class="card shadow border-0 text-center p-4">
  <h2 class="text-danger fw-bold">About SAITM</h2>
  <p class="mt-3">
    St. Andrews Institute of Technology and Management (SAITM) is a leading institute known for
    quality education, modern infrastructure, and excellent placement opportunities.
  </p>
</div>

<div class="text-center mt-4">
  <button class="btn btn-success m-2">Explore</button>
  <button class="btn btn-danger m-2">Courses</button>
  <button class="btn btn-info m-2">Admissions</button>
  <button class="btn btn-secondary m-2">Contact</button>
</div>

</div>

<div class="container mt-5">
<div class="card shadow border-0 p-4">

<h2 class="text-success text-center mb-4">Contact Us</h2>

<div class="row">

<div class="col-md-4 mb-3">
  <h5>Address</h5>
  <textarea class="form-control" rows="5" placeholder="Enter your address"></textarea>
</div>

<div class="col-md-4 mb-3">
  <h5>Your Details</h5>
  <input type="text" class="form-control mb-3" placeholder="Your Name">
  <input type="email" class="form-control mb-3" placeholder="Your Email">
  <button class="btn btn-success w-100">Submit</button>
</div>

<div class="col-md-4 mb-3">
  <h5>Location</h5>
  <iframe class="w-100 rounded" height="200"
  src="https://www.google.com/maps?q=28.5957,77.2433&output=embed"></iframe>
</div>

</div>

</div>
</div>
</div>
</body>
</html>