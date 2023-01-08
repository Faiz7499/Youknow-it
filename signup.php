<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YouKnow Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <style>
    #ques {
        min-height: 500px;
    }
    .h11{
      color:darkblue;
    }
    </style>
</head>

<body>
<?php
$showalert=false;
$showerror=false;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
include 'partials/dbconnect.php';
$email=$_POST['email'];
$username=$_POST['username'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$exitSql="SELECT * FROM `userr` where email='$email'";
$result=mysqli_query($cont,$exitSql);
$numexist=mysqli_num_rows($result);
if($numexist > 0){
    $showalert=false;
    $showerror=" ..THe User Is Already Exist...";
}
else{
if($pass==$cpass){
    $sql="INSERT INTO `userr` ( `email`, `pass`, `timesatem`,`username`) VALUES ( '$email', '$pass', current_timestamp(),'$username');";
    $result=mysqli_query($cont,$sql);
    if($result){
       $showalert=true;
    } 
    $reciver=$email;
    $subject="Wellcome to the YouKnow Community !!";
    $body="You Have Successfully Signup to the Youknow . you Can Take benifit from Us .Now You Can login....";
    $sender="faizk5515@gmail.com";
    mail($reciver,$subject,$body,$sender);
}
else{
    $showalert=false;
    $showerror="... Confirm Password Not Matched , try With THE Same";}
}
}
?>
    <?php include 'partials/header.php'?>
    <?php include 'partials/dbconnect.php'?>
    <?php
    if($showalert){
        echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success</strong> You Have Succesfully Signup , NOw You Can Login
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    if(!$showalert){
        echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Invalid ! </strong>'.$showerror.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    ?>
    <div class="container " >
    <h1 class="text-center" class="h11">YouKnow IT</h1>
    <h1 class="text-center" class="h11"></h1>
    <h2 class="text-center" class="h11">Signup To become The Member of YouKnow Community</h2>
</div> 
      <div class="container col-5" id="ques">
        <form action="signup.php" method="post">
            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control " name="email" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="cpass" id="exampleInputPassword2">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <?php include 'partials/footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>