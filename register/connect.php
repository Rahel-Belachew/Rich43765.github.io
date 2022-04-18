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
        $INSERT="INSERT Into reg1(name,email,phone,addres,gender,password) VALUES('$name','$email','$phone','$address','$gender','$password')";
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