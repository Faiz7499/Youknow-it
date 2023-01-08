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
    <title>YouKnow/About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
   <style>
   #ques {
        min-height: 230px;
    }
   </style>
  </head>
  <body>
    <?php include 'partials/header.php'?>
       <div class="container">
        <h1>YouKnow IT</h1>
        <hr>
        <h2>The YouKnow IT Platform it is The Platorm That Help Students To Build There Career In The IT.</h2>
        <h2>---Our Aim is To provide An Basic Knowledge About All Technologys---</h2>
        <br>
        <h5>We Provide Information  Realated IT Technologys. The Information Provided By us Are only Contain The Basic Knowledge. </h5>
        <h5>The Following Topics About Technology We Cover To Helps Students.</h5>
        <ul>
          <li>What is ?</li>
          <li>Why to Learn ?</li>
          <li>Where To learn ?</li>
          <li>Basic Topics .</li>
          <li>Advance Topic .</li>
          <li>Use In It career .</li>
        </ul>
        <h5>We Also helps students in Career Guidence like</h5>
        <ul>
          <li>The Career Options .</li>
          <li>Most Demanding Skills .</li>
          <li>The Criteria For That </li>
          <li>Skills Require For that Title .</li>
          <li>Step by Step Procedure To become Expert IN that Technology</li>
        </ul>
        <br> 
        <br>
        <br>

         
       </div>
     
     <div class="container col-6" id="ques">
     <h1 id="ahf">First Giving the Proper Guidence Is better Than Giving The Direct Knowledge..</h1>
     </div>
    <?php include 'partials/footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>