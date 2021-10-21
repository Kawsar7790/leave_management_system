<?php
include('../db/db.php');
//session_start();
?>
<?php
        $sql1   ="SELECT * FROM employee";

        $query1 = mysqli_query($conn,$sql1);
        while ($row = mysqli_fetch_assoc($query1)) {
            $Id     =$row['id'];
            $Name   =$row['name'];
            $Pass   =$row['password'];
            $Email  =$row['email'];
            $Role   =$row['role'];
        
            echo $Id;
         
        }
        

echo "<br>";
echo "Hi";
?>