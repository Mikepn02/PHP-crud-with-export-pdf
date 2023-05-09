<?php
include 'connect.php';

if(isset($_POST['email']) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    
    if(empty($email)){
        header("location: index.php?error=Email is required");
        exit();
    }
    else if(empty($password)){
        header("location: index.php?error=Password is required");
        exit();
    }
    else{
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            $_SESSION['email'] = $row['email'];
            $_SESSION['pass'] = $row['email'];
            $_SESSION['id'] = $row['id'];
            header("location: display.php");
            exit();
        }
        else{
            header("location: index.php?error=Incorrect user name or password");
            exit();
        }
    }
}
else{
    header("location: index.php");
    exit();
}
?>
