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
    <h1>Sign in</h1>
    <P>Personal Information</P>
  </div>
  <form action="create.php" method="POST">
    <div class="your-input">
      First name: <br />
      <input type="text" name="fname" id="fname" class="input" placeholder="Enter your First name"   /><br />
      Last name: <br />
      <input type="text" name="lname" id="lname" class="input" placeholder="Enter your Last name"  /><br />
      Email: <br />
      <input type="text" name="email" id="email" class="input" placeholder="Enter your email" /><br />
      PASSWORD: <br />
      <input type="password" name="pwd" id="pwd"  class="input" placeholder="Enter your password"/><br />
      GENDER: <br />
      <div class="gender">
        <input type="radio" name="gender" value="Male"/>Male<br />
        <input type="radio" name="gender" value="Female"/>Female<br /><br />
      </div>

    </div>

    <a href="#" class="forgot-password-link">Forgot Password?</a>
    <div class="submit-input">
      <input type="submit" name="submit" id="submit"  />
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