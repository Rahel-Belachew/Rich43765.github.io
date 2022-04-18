<!DOCTYPE html>
<html lang="en">
<head>
<title>FOOD DELIVERY</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">#1burger</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Our Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href=css/b1/burger.php>Burgers</a>
          <a class="dropdown-item" href=css/drinks/beverage.php>Beverages</a>
         
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href=login/login.php>Log in</a>
          <a class="dropdown-item" href=register/register.php>Sin up</a>
         
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
  </div>
</nav>

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image/burger1.gif" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/drink2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/burger2.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/drink1.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

  <div class="carousel-caption d-none d-md-block">
    
    <h1 class="display-4">Welcome! <br>We Serve The Best.</h1>

  </div>
</div>


<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>our location</h3>
            <a href="#"><i class="fas fa-map-marker-alt"></i> Addis Ababa</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i> Adama</a>
           
        </div>
        <div class="box">
            <h3>Quick links</h3>
            <a href="#"><i class="fas fa-arrow-right"></i> Home</a>
            <a href="#"><i class="fas fa-arrow-right"></i> Our menu</a>
         
            <a href="#"><i class="fas fa-arrow-right"></i> About us</a>

        </div>
        

        <div class="box">
            <h3>contact us</h3>
            <a href="#"><i class="fas fa-phone"></i> +251-111-234-567</a>
            <a href="#"><i class="fas fa-phone"></i> +251-111-346-798</a>
            <a href="#"><i class="fas fa-envelope"></i> #1burger@gmail.com</a>
           </div>
        
         <div class="share">
           <h3>Share</h3>
             <a href="#" class="fab fa-facebook-f"></a>
             <a href="#" class="fab fa-twitter"></a>
             <a href="#" class="fab fa-instagram"></a>
             <a href="#" class="fab fa-telegram"></a>
        
        </div>
  </div>

    
</section>

</body>
</html>