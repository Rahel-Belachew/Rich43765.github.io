<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "12345";
$dbname = "final";
$con=new mysqli( $host,$dbUsername, $dbPassword, $dbname );

if(isset($_post ['submit'])){
 $name = $_post['name'];
 $email = $_post['email'];
 $phone = $_post['phone'];
 $address = $_post['address'];
 $gender = $_post['gender'];
 $password   = $_post['password'];
 $sql="insert into 'reg1'(name,email,phone,address,gender,password) values('$name','$email','$phone','$addres','$gender','$password')";

 if(!empty($name)||!empty($email)||!empty($phone)||!empty($address)||!empty($gender)||!empty($password)){
    
    
    $result=mysqli_query($con,$sql);
     if($result){
         echo "data inserted";
     }else{
         die(mysqli_error($con));
     }
    if(mysqli_connect_errno()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
        echo "connection successfull";
    }else{
        $SELECT="SELECT email From reg1 where email=? Limit 1";
        $INSERT="INSERT Into reg1(name,email,phone,addres,gender,password,) values(?,?,?,?,?,?)";
        //prepare statement
        $stmt=$conn->prepare($SELECT);
        $stmt->$Bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result(); 
        $rnum=$stmt->num_rows;
        if($rnum==0){
            $strm->close();
            $strm=$conn->prepare($INSERT);
            $strm->bind_param("ssssii",$name,$email,$phone,$address,$gender,$password);
            $stmt->execute();
            echo "New record inserted";

        }
        else{
            echo "already exist";

        }
        $stmt->close();
        $conn->close();
    }


}
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 <link rel="stylesheet" href="register.css">
    
</head>
<body>
<form action="login.php" method="post">  
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
    </ul>
  </div>
</nav>
    <div class ="text">
    <h1 class="display-4">Registration Form</h1>   
</div>
  <div class="container ">
    
      <div class="form-group row">
          <label>Name</label>
          <div class="col-sm-10">
            <input type="name" class="form-control"  placeholder="Name" name="name" required >
          </div>
        </div>
        <div class="form-group row">
          <label>Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" placeholder="Enter your email" name="email"required >
          </div>
        </div>
        <div class="form-group row">
          <label>Phone </label>
          <div class="col-sm-10">
            <input type="phone" class="form-control" placeholder="your phone number"name="phone" required >
          </div>
        </div>
        <div class="form-group row">
          <label>Address</label>
          <div class="col-sm-10">
            <input type="address" class="form-control" autocomplete="off" placeholder="Enter your address" name="address"required >
          </div>
        </div>
        <td>Gender   : </td>
        <td>
          <input type="radio" name="gender" value="M">male
          <input type="radio" name="gender" value="F">female
        </td>
         </input
         <br>

      <div class="form-group row">
          <label>Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="password"autocomplete="off" placeholder="Enter your password" required >
          </div>
         </div>
        
        
        <button type="button" class="btn btn-outline-dark" name="submit">Submit</button>
        </div> 
   
    </form>
    
        
 
</body>
</html>