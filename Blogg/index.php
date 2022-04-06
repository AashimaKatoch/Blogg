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
  
    <title>Nirvana</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="CSS/responsive.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
    <!-- ChatBot -->
<link rel="stylesheet" type="text/css" href="CSS/jquery.convform.css">
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery.convform.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</head>
<body>
<!-- ChatBot -->


<div class="chat_icon">
	<i class="fa fa-comments" aria-hidden="true"></i>
</div>

<div class="chat_box">
	<div class="my-conv-form-wrapper">
		<form action="" method="GET" class="hidden">

      <select data-conv-question="Hello! How can I help you" name="category">
        <option value="Consult">Consult with doctor?</option>
        <option value="schemes">Learn about different schemes?</option>
      </select>

      <div data-conv-fork="category">
        <div data-conv-case="Consult">
          <input type="text" name="domainName" data-conv-question="Please, tell me prefferred time slot">    
        </div>
        <div data-conv-case="schemes" data-conv-fork="first-question2">
          <input type="text" name="companyName" data-conv-question="Click here "> 
        </div>
      </div>

      <input type="text" name="name" data-conv-question="Please, Enter your name">

      <input type="text" data-conv-question="Hi {name}, <br> It's a pleasure to meet you." data-no-answer="true">

      <input data-conv-question="Enter your e-mail" data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" type="email" name="email" required placeholder="What's your e-mail?">

      <select data-conv-question="Please Confirm">
        <option value="Yes">Confirm</option>
      </select>

  	</form>
	</div>
</div>
<!-- ChatBot end -->


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
        <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
        
      </ul>
      
    </div>
  </div>
</nav>


<!--carousel-->

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="photos/colos1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Welcome to Nirvana</h3>
        <p>Loose yourself in the moment</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="photos/bg1.jpg" alt="Nirvana" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Nirvana</h3>
        <p>Miles to go..</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="photos/bg.png" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Nirvana</h3>
        <p>Make yourself at home</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5" >
<div class="py-5">



<h2 class="text-center">About Us</h2>

</div>

<div class="container-fluid">
<div class="row">

<div class="col-lg-6 col-md-6 col-12">
<img src="photos/aboutus.jpg" alt="" class="img-fluid aboutimg">
</div>

<div class="col-lg-6 col-md-6 col-12">
<h2 class="display-4">This is Nirvana</h2>
<p class="py-3">This space has collection of some photographs,drawings and some thoughts that I pen down from time to time.This is what I would like to call <b>Online journal</b>.If there is anthing else that you would like me to add here you can contact us.</p>

<a href="contactus.php" class="btn btn-success">Tell us what you think</a>
</div>
</div>

</div>
</section>





<footer>
    <p class="bg-dark text-white p-3 text-center">@NirvanaZone</p>
</footer>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>