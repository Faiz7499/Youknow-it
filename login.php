<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login YouKnow</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <style>
    #ques {
        min-height: 200px;
    }
    .h11{
      color:darkblue;
    }
    </style>
</head>

<body>
    <?php 
         include 'partials/header.php';
        include 'partials/dbconnect.php';
    ?>
<?php
$showAlert=false;
$showerror=false;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  include 'partials/dbconnect.php';
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $sql = "SELECT * from `userr`  where email='$email'  ";
  $result = mysqli_query($cont, $sql);
  $row=mysqli_fetch_assoc($result);
  $username=$row['username'];
  $num = mysqli_num_rows($result);
  if ($num == 1){
    if($pass==$row['pass']){
          $login = true;
          session_start();
          $_SESSION['loggedin'] = true;
          $_SESSION['username'] = $username;
          header("location: main.php");
    }
    else{
          $showAlert=true;
          $showerror="invalid Password OR Email ID";
      }        
}

}
?>
<?php
if($showAlert){
  echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Invalid </strong> '.$showerror.'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
?>

    <div class="container " >
          <h1 class="text-center" class="h11">YouKnow IT</h1>
          <h2 class="text-center" class="h11">Login If You Have Already Registered with Us </h2>

          </div>
          <div class="container col-5" >
        <form action="login.php" method="post">
            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control " name="email" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        <br>
        <br>
        <div class="container col-6" id="ques">
     <h1 id="ahf">First Giving the Proper Guidence Is better Than Giving The Direct Knowledge..</h1>
     </div>
    <?php include 'partials/footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>