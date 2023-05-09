<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Free Web tutorials" />
    <meta name="keywords" content="HTML, CSS, JavaScript" />
    <meta name="author" content="John Doe" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LinkedIn Login Form Using HTML and CSS</title>
    <link rel="stylesheet" href="linkedin.css">
</head>
<div class="container">
    <div class="link-header"></div>
<div class="text">
    <h1>Sign in</h1>
    <?php
    if(isset($_GET['error'])){
    ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
    <?php
    }
    ?>
    <p>Stay updated on your professional world</p>
</div>

    <form action="login.php" method="POST">
        <div class="your-input">
            <input class="input" type="text" name="email" placeholder="Email" id="Email">
            <input class="input" type="password" name="password" placeholder="Password" id="password" >
        </div>
        <a href="#" class="forgot-password-link">Forgot Password?</a>
        <div class="submit-input">
            <button type="submit">Sign in</button>
        </div>
    </form>
    <div class="footer">
        <p class="join-link"> New Here?
            <a href="user.php" class="join-now">
                Join now
            </a>
        </p>
    </div>
</div>

</html>