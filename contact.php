<?php
session_start();
if($_SESSION['loggedin'] != true){
  header("location:login.php");
  exit;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YouKnow/Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
     #ques {
        min-height: 100px;
    }
    </style>
  </head>
  <body>
    <?php include 'partials/header.php'?>
     <div class="container">
     <h1>YouKnow IT</h1>
        <hr>
        <h3>-Put the Message In below Form</h3>
        <form>
  <div class="mb-3 col-6">
    <label for="exampleInputEmail1" class="form-label"> Your Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3 col-6">
    <label for="exampleInputPassword1" class="form-label">Reason OF Contact</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>
<br>
 
<h3> -> OR Contact With US Using Below Email Address .</h3>
<br>

<h5>    review@youknow.org</h5>
<hr>
        
     </div>
     <div class="container col-6" id="ques">
     <h2 id="ahf">   -----Get In Touch With Us----- </h2>
     </div>
    <?php include 'partials/footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>