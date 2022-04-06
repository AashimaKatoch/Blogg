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
         <a class="nav-link" href="gallery.php">Photo Gallery</a>
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
  <h1>Welcome to our Gallery</h1>
  <p>Tell us what you think</p>
</div>

<!--gallery-->
<section class="my-5" >
<div class="py-5">

<h2 class="text-center ">PhotoGallery</h2>
</div>

<div class="container-fluid">

<div class="row">


    <!--gallery 1-->
    


    <!--gallery 1-->
    <div class="col-lg-4 col-md-4 col-12" >
        <img src="photos/lol3.jpg" alt="" class="img-fluid pb-4 aboutimg">

    </div>


    <!--gallery 1-->
    <div class="col-lg-4 col-md-4 col-12" >
        <img src="photos/lol.jpg" alt="" class="img-fluid pb-4 aboutimg" >

    </div>



    <!--gallery 1-->
    <div class="col-lg-4 col-md-4 col-12" >
        <img src="photos/lol4.jpg" alt="" class="img-fluid pb-4 aboutimg ">

    </div>



    <!--gallery 1-->
    <div class="col-lg-4 col-md-4 col-12" >
        <img src="photos/lol5.jpg" alt="" class="img-fluid pb-4 aboutimg ">

    </div>




    <!--gallery 1-->
    <div class="col-lg-4 col-md-4 col-12" >
        <img src="photos/lol6.jpg" alt="" class="img-fluid pb-4 aboutimg ">

    </div>


    <!--gallery 1-->
    <div class="col-lg-4 col-md-4 col-12" >
        <img src="photos/lol7.jpg" alt="" class="img-fluid pb-4 aboutimg ">

    </div>

    <div class="col-lg-4 col-md-4 col-12" >
        <img src="photos/lol8.jpg" alt="" class="img-fluid pb-4 aboutimg">

    </div>

    <!--gallery 1-->
    <div class="col-lg-4 col-md-4 col-12" >
        <img src="photos/lol9.jpg" alt="" class="img-fluid pb-4 aboutimg ">

    </div>


    <!--gallery 1-->
    <div class="col-lg-4 col-md-4 col-12" >
        <img src="photos/old3.jpg" alt="" class="img-fluid pb-4 aboutimg ">

    </div>


</div>


</div>
</section>

<footer>
    <p class="bg-dark text-white p-3 text-center">@NirvanaZone</p>
</footer>

</body>
</html>


