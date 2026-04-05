<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include("connect.php");


// ================= SIGN UP =================
if(isset($_POST['signUp'])){

    $fName = $_POST['fName'] ?? '';
    $lName = $_POST['lName'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = isset($_POST['password']) ? md5($_POST['password']) : '';

    // check email
    $check = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($check);

    if($result && $result->num_rows > 0){
        echo "<script>alert('Email already exists'); window.location='index.php';</script>";
        exit();
    }

    // insert data
    $insert = "INSERT INTO users(firstName,lastName,email,password)
               VALUES('$fName','$lName','$email','$password')";

    if($conn->query($insert)){
        echo "<script>alert('Successfully Registered'); window.location='index.php';</script>";
        exit();
    } else {
        echo "Insert Error: " . $conn->error;
        exit();
    }
}


// ================= SIGN IN =================
if(isset($_POST['signIn'])){

    $email = $_POST['email'] ?? '';
    $password = isset($_POST['password']) ? md5($_POST['password']) : '';

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if($result && $result->num_rows > 0){

        $row = $result->fetch_assoc();

        // session store (safe)
        $_SESSION['firstName'] = $row['firstName'] ?? 'User';
        $_SESSION['lastName']  = $row['lastName'] ?? '';
        $_SESSION['email']     = $row['email'];

        header("Location: homepage.php");
        exit();

    } else {
        echo "<script>alert('Invalid Login'); window.location='index.php';</script>";
        exit();
    }
}
?>