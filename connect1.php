<?php
     $Name = $_POST['Name'];
     $email = $_POST['email'];
     $message = $_POST['message'];
     $class = $_POST['class'];
     //Database Connection

     $conn = new mysqli('localhost','root','','contact');
     if($conn->connect_error){
         die('Connection Failed : '.$conn->connect_error);
     }
     else{
         $stmt = $conn->prepare("insert into contact_us(Name, email, message,class)values(?, ?, ?, ?)");
         $stmt->bind_param("ssss",$Name,$email,$message,$class);
         $stmt-> execute();
         echo "Form Submitted Successfully";
         $stmt->close();
         $conn->close();
     }
    
?>