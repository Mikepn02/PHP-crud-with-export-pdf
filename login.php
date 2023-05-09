<?php
session_start();
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
        $sql = "SELECT * FROM users WHERE email=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: index.php?error=SQL error");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
                $hashed_password = $row['password'];
                if(password_verify($password , $hashed_password)){
                    $_SESSION['user_id'] = $row['user_id'];
                    $_SESSION['email'] = $row['email'];
                    header("location: display.php");
                    exit();
                }else{
                    $error_msg = 'Invalid email or password';
                    header("location: index.php?error=$error_msg");
                    exit();
                }
            }
            else{
                $error_msg = 'Incorrect username or password';
                header("location: index.php?error=$error_msg");
                exit();
            }
        }
    }
}
else{
    header("location: index.php");
    exit();
}
?>
