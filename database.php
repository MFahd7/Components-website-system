<?php

  $fullname = $_POST['fullname'];
  $username = $_POST['username'];
  $DateOfBirth = $_POST['DateOfBirth'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $phone = $_POST['phone'];
  $country = $_POST['country'];
  $City = $_POST['City'];
  $Street = $_POST['Street'];
  $type = $_POST['type'];
  
  if(!empty($fullname) || !empty($username) || !empty($DateOfBirth) || !empty($email) || !empty($password) || !empty($phone) || !empty($country) || !empty($City) || !empty($Street) || !empty($type)){
    $host = "localhost";
    $dbUser = "root";
    $dbpass = "";
    $dbname = "microtech";

    $con = new mysqli($host, $dbUser, $dbpass,$dbname);
    if(mysqli_connect_error()){
        die('connection faild(' . mysqli_connect_errno(). ')' . mysqli_connect_error());
    } else{
        $stmt = $con->prepare("insert into registration(fullname, username, DateOfBirth, email, password, phone, country, City, Street, type)
                               values( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                         $stmt->bind_param("sssssissss",$fullname, $username, $DateOfBirth, $email, $password, $phone, $country, $City, $Street, $type);
                         $stmt->execute();
                         echo "registration sucessfull. ";
                         $stmt->close();
                         $con->close();
    }

  } else{
      echo "All fields are required";
      die();
  }
  

?>
