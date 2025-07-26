<?php
include 'database.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loginpage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <form action="loginpage.php" method="POST" id="loginbox">
        <h1>Login</h1> 

        <div>
        
        <input type="text" name="user" placeholder="Username" >
        <i class="fa-solid fa-user"></i>
        </div>
    
        <div>
       
        <input type="password" name="pass" placeholder="Password">
        <i class="fa-solid fa-lock"></i>
        </div>
        <?php
        if(isset($_POST['submit'])){
            $username = $_POST['user'];
            $password = $_POST['pass'];
               if (empty($username) || empty($password)) {
                 echo "<p style='color:red;'>Fill all the details</p>";
               }
               else{  
                 $check = "SELECT * FROM info WHERE username='$username'";
                    $result = mysqli_query($con, $check);
                  if (mysqli_num_rows($result) > 0) {
                      $row = mysqli_fetch_assoc($result);
                    $storedHash = $row['password'];

                       if (password_verify($password, $storedHash)) {
                          $_SESSION['username'] = $username;
                          $_SESSION['email'] = $row['email'];
                          $_SESSION['mobileno'] = $row['mobilenum'];

                           header("Location: home.php");

                         } 
                         else {
                             echo "<p style='color:red'>Incorrect password!</p>";
                           }
                       } 
                       else {
                           echo "<p style='color:red'>Username not found!</p>";
                        }
                    }  
                    
               
            
               }
        
        ?>
        <input type="submit" name="submit" value="Login" id="submit"  >
        Don't have an account? <a href="register.php " target="_blank"><b>Register</b></a>
    </form>
</body>
</html>