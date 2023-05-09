<?php 
include 'connect.php';
if(isset($_POST['submit'])){
    $first_name = $_POST['fname'];
    $last_name =$_POST['lname'];
    $email =$_POST['email'];
    $password =$_POST['pwd'];
    $gender = $_POST['gender'];
    $hashed_password = password_hash($password,PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO USERS(fname,lname,email,password,gender) VALUES ('$first_name','$last_name','$email','$hashed_password','$gender')";
    $result = $conn->query($sql);
    if($result == true){
        // echo "Data inserted successfully!!!"; 
        header('location:index.php');
    }else{
        echo 'Error:',$sql.'<br>'.$conn -> error;
    }
    $conn->close();

}




?>