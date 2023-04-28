<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM users where id=$id";
    $result = mysqli_query($conn,$sql);
    if($result == true){
        // echo "Deleted successfully";
        header('location:display.php');
    }else{
        // die(mysqli_error($conn));
        echo "connection failed!!!";
    }
}

?>