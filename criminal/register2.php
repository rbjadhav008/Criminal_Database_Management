<form action="register2.php" method="post">
    enter your first name
    <input type="text" name="fname" id="fname"> <br>
    enter your last name
    <input type="text" name="lname" id="lname" > <br>
    <input type="submit" >
</form>

<?php 
        $servername="127.0.0.1:3307";
        $username="root";
        $password="";
        $dbname="keyboard";

        $conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed : ");

}

$fname =$_POST['fname'];
$lname =$_POST['lname'];


$sql="INSERT INTO `students` (`sr`, `fname`, `lname`) VALUES (NULL, '$fname', '$lname')" ;

if($conn->query($sql)==true){
    echo "registration succesfully....";
}
else{
    echo "registration  not succesfully....";
}

    $conn->close();

?>