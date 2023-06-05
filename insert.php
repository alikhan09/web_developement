<?php
   $name = $_POST['std_name'];
    $email = $_POST['std_email'];
     $age = $_POST['std_age'];

     echo "Name is : ".$name."</br>";
      echo "Email is : ".$email."</br>";
       echo "Age is : ".$age."</br>";

       $conn = new mysqli("localhost","root","", "ali");
       $q ="insert into std_info (std_name,std_email,std_age) values('".$name."','".$email."',".$age.")";
       $conn->query($q);
?>