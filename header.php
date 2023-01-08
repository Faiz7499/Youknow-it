 <head>
 <link rel="stylesheet" href="styles.css">
 </head>
 <?php
 if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
  $loggedin=true;
}
else{
  $loggedin=false;
}
 echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="main.php">YouKnow</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link  active" aria-current="page" href="main.php">Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link mx-2 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sections
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Languages And Framework</a></li>
            <li><a class="dropdown-item" href="#">Core Subjects </a></li>
            <li><a class="dropdown-item" href="#">Career Options </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">........</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link  mx-2"  href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2"  href="contact.php">Contact</a>
        </li>
      </ul>
      <div class="">
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      </div>';
      
      if(!$loggedin){
     echo' <ul class="navbar-nav me mb mb-lg">
      <li class="nav-item">
          <a class="nav-link mx-2" href="login.php">Login</a>
        </li>
        <li class="nav-item">
        <a class="nav-link mx-2" href="signup.php">Signup</a>
      </li>
      </ul>';}
      if($loggedin){
        echo'<ul class="navbar-nav me mb mb-lg">
        <li class="nav-item">
          <a class="nav-link mx-2" href="logout.php">Logout</a>
        </li>
      </ul>';
      }
    echo'</div>
  </div>
</nav>';

?>