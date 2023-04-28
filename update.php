<?php 
include 'connect.php';
$id = $_GET['updateid'];
$sql = "SELECT * FROM  users where id=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$first_name = $row['fname'];
$last_name =$row['lname'];
$email =$row['email'];
$password =$row['password'];
$gender = $row['gender'];
if(isset($_POST['submit'])){
    $first_name = $_POST['fname'];
    $last_name =$_POST['lname'];
    $email =$_POST['email'];
    $password =$_POST['pwd'];
    $gender = $_POST['gender'];
    
    $sql = "UPDATE users set id=$id , fname='$first_name',lname = '$last_name',email='$email',password ='$password',gender = '$gender'  where id=$id";
    $result = mysqli_query($conn,$sql);
    if($result == true){
        // echo "Updated successfully!!!"; 
        header('location:display.php');//
    }else{
        echo 'Error:',$sql.'<br>'.$conn -> error;
    }
    $conn->close();

}




?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type='text/css' href="style.css">
  <title>Document</title>
</head>
<div class="container">
  <div class="link-header">
    <h1 class="link-text"></h1>
  </div>
  <div class="text">
    <h1>Update user</h1>
    <P>Personal Information</P>
  </div>
  <form action="update.php?updateid=<?php echo $id; ?>" method="POST">
    <div class="your-input">
      First name: <br />
      <input type="text" name="fname" id="fname" class="input" placeholder="Enter your First name" value=<?php echo $first_name; ?>   /><br />
      Last name: <br />
      <input type="text" name="lname" id="lname" class="input" placeholder="Enter your Last name" value=<?php echo $last_name ?>   /><br />
      Email: <br />
      <input type="text" name="email" id="email" class="input" placeholder="Enter your email" value=<?php echo $email ?>/><br />
      PASSWORD: <br />
      <input type="password" name="pwd" id="pwd"  class="input" placeholder="Enter your password" value=<?php echo $password; ?>    /><br />
      GENDER: <br />
      <div class="gender">
        <input type="radio" name="gender" value="Male" <?php if($gender == 'Male') {echo "checked";}?>/>Male<br />
        <input type="radio" name="gender" value="Female" <?php if($gender == 'Female') {echo "checked";}?>/>Female<br /><br />
      </div>

    </div>

    <a href="/user.php" class="forgot-password-link">Forgot Password?</a>
    <div class="submit-input">
      <input type="submit" name="submit" id="submit" value="Update" action=''/>
    </div>

  </form>
  <div class="footer">
    <!-- <p class="join-link"> New to FD? -->
      <a href="#" class="join-now">
        <!-- Join now -->
      </a>
    </p>
  </div>
</div>

</body>

</html>