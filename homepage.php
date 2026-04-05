<?php
session_start();

// 🔒 direct access block
if(!isset($_SESSION['email'])){
    header("Location: index.php");
    exit();
}

// ✅ safe values (avoid error)
$firstName = isset($_SESSION['firstName']) ? $_SESSION['firstName'] : 'User';
$lastName  = isset($_SESSION['lastName']) ? $_SESSION['lastName'] : '';
$email     = $_SESSION['email'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>

<style>
    body {
        margin: 0;
        font-family: Arial;
        background: #0f172a;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .box {
        text-align: center;
        background: #1e293b;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    }

    h1 {
        margin-bottom: 10px;
    }

    .email {
        color: #38bdf8;
        font-size: 14px;
    }

    .logout {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        background: #38bdf8;
        color: black;
        border-radius: 6px;
        text-decoration: none;
    }
</style>
</head>

<body>

<div class="box">
    <h1>
        Hello <?php echo htmlspecialchars($firstName . " " . $lastName); ?> 👋
    </h1>

    <div class="email">
        <?php echo htmlspecialchars($email); ?>
    </div>

    <a href="logout.php" class="logout">Logout</a>
</div>

</body>
</html>