<?php 
        $servername="127.0.0.1:3307";
        $username="root";
        $password="";
        $dbname="pbl1";

        $conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("connection failed  ".mysqli_error($conn));

}
if(isset($_POST['submit'])){
    $uname=$_POST['uname'];
    $password=$_POST['password'];

    $sql="select * from register where email='$uname' and password='$password' ";
    $que=mysqli_query($conn,$sql);
    if(mysqli_num_rows($que)>0){
        echo "login succes";
    }    
    else{
        echo "wrong password";
    }
}



?>


else{
    $stmt=$con->prepare("select * from register where email = $email ");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result= $stmt->get_result();
    if($stmt_result->num_rows >0 ){
       $data = $stmt_result->fetch_assoc();
       if($data['password']== $password){
           echo "<h2> Login succesfully";
       }
       else{
           echo "<h2> invalid email or password";
       }
    }
    else{
        echo "<h2> Invalid email or password";
    }
}

?>