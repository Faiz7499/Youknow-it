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
    <title>YouKnow</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'partials/header.php';
          include 'partials/dbconnect.php';
    ?>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/2400x600/?coding,python" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/2400x600/?programmer,website" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/2400x600/?program,language" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container my-3">
    <h4 id="mhw">Welcome....     <?php echo $_SESSION['username'];?></h4>
        <h1 class="text-center">YouKnow IT Platform !</h1>
        <h2 class="text-center">Helps Students To Build There Career in IT</h2>

        <div class="row">
        <?php
        $sql='SELECT * FROM `category`';
        $result=mysqli_query($cont,$sql);
        while($row=mysqli_fetch_assoc($result)){
            $cname=$row['c_name'];
            $cdisc=$row['c_dis'];
            $cid=$row['c_id'];
            echo'<div class="col-md-4 my-2">
          <div class="card" style="width: 18rem;">
              <img src="https://source.unsplash.com/500x400/?coding,programming,'.$cname.'" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title"><a href="details.php?cd?cd='.$cid.'">'.$cname.'</a></h5>
                  <p class="card-text">'.$cdisc.'</p>
                  <a href="details.php?cd='.$cid.'" class="btn btn-primary">View Information</a>
              </div>
          </div>
      </div> ';
        }
        ?>
        </div>
    </div>

    <?php include 'partials/footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
