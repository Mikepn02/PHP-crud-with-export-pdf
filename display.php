<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="display.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-xxxxxx" crossorigin="anonymous">
<script src="https://pro.fontawesome.com/releases/v5.15.3/js/all.js" integrity="sha384-xxxxxx" crossorigin="anonymous"></script>

    <title>Crud Operation</title>
</head>
<body>
    <div class="subcontainer">
        <nav>
            <div class="nav"><h1>User Managment system</h1></div>
        </nav>
 
  <table>
<tr>
    <th>#</th>
    <th>First name</th>
    <th>Last name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Gender</th>
    <th>Action</th>
</tr>

<?php
$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql);
if($result== true){
    // $row = mysqli_fetch_assoc($result);
    // echo $row['fname'];
    while($row = mysqli_fetch_assoc($result)){
        $id=$row['id']; // extract id
        $first_name=$row['fname'];
        $last_name = $row['lname'];
        $email = $row['email'];
        $password = $row['password'];
        $gender = $row['gender'];
        echo "
        <tr>
    <td>$id</td>
    <td>$first_name</td>
    <td>$last_name</td>
    <td>$email</td>
    <td>$password</td>
    <td>$gender</td>
    <td>
    <a href='delete.php?deleteid=$id' class='fas fa-trash-alt'></a>
    <a href='update.php?updateid=$id'  class='fas fa-pencil-alt'></a>
    </td>
</tr>";
    }
}else{
    echo 'No data found';
} 

?>
       
</tr>
  </table>
  <div class="user">
  <a href="user.php"><?php echo '<i class="fas fa-user-secret"></i>'; ?>New User</a><i class="fa-solid fa-user-secret"></i></a>
  <a href="pdf.php">Export to PDF <?php echo '<i class="fas fa-book"></i>';?></a>
  </div>

    </div>
</body>
</html>
