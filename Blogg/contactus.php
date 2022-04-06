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
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
    <title>Nirvana</title>
</head>
<body>


<!--NavBar-->
    
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

<div class="jumbotron">
  <h1>Contact Us</h1>
  <p>Tell us what you think</p>
</div>


<section class="my-5" >
<div class="py-5">

<h2 class="text-center">Give us your views</h2>
</div>

<div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="user" class="form-control">

        </div>

        <div class="form-group">
            <label for="">Email ID</label>
            <input type="text" name="email" class="form-control">

        </div>

        <div class="form-group">
            <label for="">Mobile Number</label>
            <input type="text" name="mobile" class="form-control">

        </div>

        <div class="form-group">
            <label for="">Comment</label>
            <textarea  class="form-control" rows="5" name="comment" ></textarea>

        </div>

        <button type="submit" class="btn btn-success">Submit</button>



    </form>
</div>


<footer>
    <p class="bg-dark text-white p-3 text-center">@NirvanaZone</p>
</footer>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>