<?php
 $servername="127.0.0.1:3307";
 $username="root";
 $password="";
 $dbname="pbl1";

 $conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
die("connection failed  ".mysqli_error($conn));
}/*
else{
    $stmt = $conn->prepare("insert into reg(firstname,lastname,policestation,email,password) values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$firstname,$lastname,$policestation,$email,$password);
    //$stmt->execute();
    echo "registration succesfully....";
    $stmt->close();
    $conn->close();
}*/

?>