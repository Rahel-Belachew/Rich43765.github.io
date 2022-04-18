
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 <link rel="stylesheet" href="login.css">
  
</head>
<body>
   
    
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">MEILLEUR</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      
        <a class="nav-link" href=css/index.php>Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=index.php>About us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Our Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href=css/b1/burger.php>Burgers</a>
          <a class="dropdown-item" href=css/drinks/beverage.php>Beverages</a>
         
        </div>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href=css/index.php id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href=login/login.php>css</a>
          <a class="dropdown-item" href=register/register.php>Sin up</a>
         
        </div>
      </li>
      
    </ul>
   
  </div>
</nav>
    <div class=text>
    <h1 class="display-4">Login Form</h1>
</div>
 <div class="container">
    <form>
        <div class="form-group row">
             <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
             <div class="col-sm-10">
               <input type="name" class="form-control" id="inputEmail3" placeholder="Enter your name" name="name" autocomplete ="off">
             </div>
           </div>
           <div class="form-group row">
             <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
             <div class="col-sm-10">
               <input type="password" class="form-control" id="inputPassword3" placeholder="Enter your Password">
             </div>
           </div>
           <button type="button" class="btn btn-outline-dark">Submit</button>
    </form>
</div>
</body>
</html>