<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login & Register</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<!-- cache fix -->
<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<body>

<!-- REGISTER -->
<div class="container" id="signup" style="display:none;">
    <h2>Register</h2>

    <form method="post" action="register.php">

        <div class="input-box">
            <i class="fas fa-user"></i>
            <input type="text" name="fName" placeholder="First Name" required>
        </div>

        <div class="input-box">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" placeholder="Last Name" required>
        </div>

        <div class="input-box">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" placeholder="Email" required>
        </div>

        <div class="input-box">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required>
            <i class="fas fa-eye togglePassword"></i>
        </div>

        <!-- ✅ IMPORTANT: name added -->
        <button type="submit" name="signUp" class="btn">Sign Up</button>

        <p class="or">----------Or----------</p>

        <div class="social">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook-f"></i>
        </div>

        <p class="link">
            Already Have Account ? 
            <span id="signInButton" style="cursor:pointer; color:#7b7be6;">Sign In</span>
        </p>

    </form>
</div>


<!-- LOGIN -->
<div class="container" id="signIn">
    <h2>Sign In</h2>

    <form method="post" action="register.php">

        <div class="input-box">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" placeholder="Email" required>
        </div>

        <div class="input-box">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required>
            <i class="fas fa-eye togglePassword"></i>
        </div>

        <p class="recover">Recover Password</p>

        <!-- ✅ IMPORTANT -->
        <button type="submit" name="signIn" class="btn">Sign In</button>

        <p class="or">----------or----------</p>

        <div class="social">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook-f"></i>
        </div>

        <p class="link">
            Don't have account yet? 
            <span id="signUpButton" style="cursor:pointer; color:#7b7be6;">Sign Up</span>
        </p>

    </form>
</div>

<!-- cache fix -->
<script src="script.js?v=<?php echo time(); ?>"></script>

</body>
</html>