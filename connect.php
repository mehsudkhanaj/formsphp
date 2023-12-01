<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    
    
    $conn=new mysqli('localhost','root','','form');
    if($conn){
        $sql="INSERT INTO data (name,email,gender,mobile,password) values ('$name','$email','$gender','$mobile','$password')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "Data Inserted Successfully";
        }else{
            die(mysqli_error($conn));

        }
    } else{
        die(mysqli_error($conn));
    }
}
    
?>
