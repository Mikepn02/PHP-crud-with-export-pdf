<?php
$severname = 'localhost';
$username ='root';
$password = '';
$database = 'student_db';

$conn = new mysqli($severname,$username,$password,$database);
if(!$conn){
    // die(mysqli_error($conn));
    echo "connection failed!!!";

}
else{

    // echo "connection successfully !!!!!";
}


?>