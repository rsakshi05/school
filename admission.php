<?php
     $studName = $_POST['studName'];
     $gender = $_POST['gender'];
     $birthday = $_POST['birthday'];
     $religion = $_POST['religion'];
     $caste = $_POST['caste'];
     $bg = $_POST['bg'];
     $add1 = $_POST['add1'];
     $add2 = $_POST['add2'];
     $phn = $_POST['phn'];
     $aphn = $_POST['aphn'];
     $email = $_POST['email'];
     $city = $_POST['city'];
     $state = $_POST['state'];
     $country = $_POST['country'];
     $idno = $_POST['idno'];
     $uid = $_POST['uid'];
     $photo = $_POST['photo'];
     $class = $_POST['class'];
     $fName = $_POST['fName'];
     $fNo = $_POST['fNo'];
     $fOcc = $_POST['fOcc'];
     $mName = $_POST['mName'];
     $mNo = $_POST['mNo'];
     $mOcc = $_POST['mOcc'];

     //Database Connection

     $conn = new mysqli('localhost','root','','admission');
     if($conn->connect_error){
         die('Connection Failed : '.$conn->connect_error);
     }
     else{
         $stmt = $conn->prepare("insert into admission_data(studName,gender,birthday,religion,caste,bg,add1,add2,phn,aphn,email,city,state,country,idno,uid,photo,class,fName,fNo,fOcc,mName,mNo,mOcc)values(?, ?, ?, ?, ?, ? , ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
         $stmt->bind_param("iiiissssssssssssssssssss",$studName,$gender,$birthday,$religion,$caste,$bg,$add1,$add2,$phn,$aphn,$email,$city,$state,$country,$idno,$uid,$photo,$class,$fName,$fNo,$fOcc,$mName,$mNo,$mOcc);
         $stmt-> execute();
         echo "Form Submitted Successfully";
         $stmt->close();
         $conn->close();
     }
?>