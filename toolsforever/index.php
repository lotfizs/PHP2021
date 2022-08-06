<?php
session_start();
if(isset($_SESSION['unique_id'])){
    header("location: users.php");
}
?>

<?php include_once "header.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Tools Forever - login / registreer</title>
</head>

<body>
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form action="" method="post" class="sign-in-form">
                <h2 class="title">Login</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Email Address" name="email" value="<?php echo $_POST['email']; ?>" required />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required />
                </div>
                <input type="submit" value="Login" name="signin" class="btn solid" />
            </form>
            <form action="" class="sign-up-form" method="post">
                <h2 class="title">registeer</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Full Name" name="signup_full_name" value="<?php echo $_POST["signup_full_name"]; ?>" required />
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email Address" name="signup_email" value="<?php echo $_POST["signup_email"]; ?>" required />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="signup_password" value="<?php echo $_POST["signup_password"]; ?>" required />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Confirm Password" name="signup_cpassword" value="<?php echo $_POST["signup_cpassword"]; ?>" required />
                </div>
                <input type="submit" class="btn" name="signup" value="Sign up" />
            </form>
        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>Nieuwe medewerker ?</h3>
                <p>
                    klik hier op naar die registreer pagina te gaan
                </p>
                <button class="btn transparent" id="sign-up-btn">
                    registreer
                </button>
            </div>
            <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>1 van ons ?</h3>
                <p>
                    klik hier om naar de inlog pagina te gaan
                </p>
                <button class="btn transparent" id="sign-in-btn">
                    login
                </button>
            </div>
            <img src="img/register.svg" class="image" alt="" />
        </div>
    </div>
</div>

<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
<script src="app.js"></script>
</body>

</html>
</body>
</html>