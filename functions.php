<?php
include('db/db.php');
session_start();
?>
<?php

function login(){
    global $conn;
        $email  = mysqli_real_escape_string($conn,$_POST['email']);
        $pass   = mysqli_real_escape_string($conn,$_POST['pass']);
        $sql1   ="SELECT * FROM employee WHERE email='{$email}' AND password='{$pass}'";

        $query1 = mysqli_query($conn,$sql1);
        while ($row = mysqli_fetch_assoc($query1)) {
            $Id     =$row['id'];
            $Name   =$row['name'];
            $Pass   =$row['password'];
            $Email  =$row['email'];
            $Role   =$row['role'];
        
        
        if ($Email === $email && $Pass === $pass) {
            $_SESSION['id']=$row['id'];
            $_SESSION['name']=$row['name'];
            $_SESSION['email']=$row['email'];
            $_SESSION['role']=$row['role'];

            //echo $_SESSION['role'];

            header("location:index.php");
        }
        
       // else 
            // echo "Invalid Username Or Password";
            // header("location:login1.php");
        

    

    }

  


   
}
?>