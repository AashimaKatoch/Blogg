<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Nirvana</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">NIRVANA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">Blogs</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="gallery.php">PhotoGallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactus.php">Contact</a>
        </li>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
        
      </ul>
    
    </div>
  </div>
</nav>



<section class="my-5" >
<div class="py-5">

<h2 class="text-center">Our Blogs</h2>
</div>

<div class="container-fluid">
<div class="row">

<div class="col-lg-4 col-md-4 col-12">

<div class="card" >

  <img class="card-img-top " src="photos/card10.jpg" alt="Card image">

  <div class="card-body">
    <h4 class="card-title">Too many thoughts</h4>
    <p class="card-text">Tried to get my thoughts on paper, 
Too many thoughts in my head....
</p>
    <a href="blog1.php" class="btn btn-primary">More</a>
  </div>
</div>

</div>

<div class="col-lg-4 col-md-4 col-12">

<div class="card" >

  <img class="card-img-top" src="photos/card8.jpg" alt="Card image" >

  <div class="card-body">
    <h4 class="card-title">The rising sun</h4>
    <p class="card-text">
Before the daylight starts to come,
breathing night into our lungs....</p>
    <a href="blog2.php" class="btn btn-primary">More</a>
  </div>
</div>

</div>

<div class="col-lg-4 col-md-4 col-12">

<div class="card" >

  <img class="card-img-top" src="photos/xd.jpg" alt="Card image">

  <div class="card-body">
    <h4 class="card-title">The evil in me</h4>
    <p class="card-text">It will grow inside me,
  until it explodes.I will rise even after those storms.....</p>
    <a href="blog3.php" class="btn btn-primary">More</a>
  </div>
</div>

</div>

</div>
</div>
   
</section>


<footer>
    <p class="bg-dark text-white p-3 text-center">@NirvanaZone</p>
</footer>

</body>
</html>