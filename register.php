<?php 
session_start();
include "function.php";
if(isset($_SESSION['login']) === true && $_COOKIE['login'] === true){
    header("location:dashboard.php");
}

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $pass = $_POST['password'];    
    register($email,$username,$pass);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container-fluid">
        <div class="row p-5 m-5 justify-content-center">
            <div class="col-4">
                <h5 class="text-center">LOGIN</h5>
                <form action="" method="post">
                    <div class="d-flex flex-lg-column gap-2">
                        <input type="text" name="email" placeholder="Email" required>
                        <input type="text" name="username" placeholder="Username" required>
                        <input type="password" id="pass" name="password" placeholder="Password" required>
                        <label for="check" id="check" class="d-flex align-items-center gap-2"><input type="checkbox" id="check"><span>show password</span></label> 
                    </div>
                    <button class="btn btn-outline-success mt-2 w-100" name="submit">Masuk</button>
                </form>
                <a href="index.php" class="nav-link"><h6>already have an account?</h6></a>
            </div>
        </div>
    </div> 


    <script src="index.js"></script>
</body>
</html>