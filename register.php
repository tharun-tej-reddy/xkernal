<?php
include 'database.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <form action="register.php" method="POST" id="registerbox">
        <h1>Register</h1> 
       
        <input type="email" name="mail" placeholder="E-Mail" >
        <input type="tel" name="num" placeholder="Mobile-number" >
        <div>
        <input type="text" name="user" placeholder="Username"  >
        </div>
    
        <div>
        <input type="password" name="pass" placeholder="Password" >
        </div>
          <?php
          if(isset($_POST['submit'])){
            $email = $_POST['mail'];
            $mobile = $_POST['num'];
            $username = $_POST['user'];
            $password = $_POST['pass'];
               if (empty($email) || empty($mobile) || empty($username) || empty($password)) {
                 echo "<p style='color:red;'>Fill all the details</p>";
               } 
               else{
                $check = "SELECT * FROM info WHERE mobilenum='$mobile' OR username='$username'";
                $result = mysqli_query($con, $check);

            if (mysqli_num_rows($result) > 0) {
                echo "<p style='color:red;'>Mobilenum or Username already exists!</p>";
            } else {
                $has_password = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO info (email, mobilenum, username, password)
                        VALUES ('$email', '$mobile', '$username', '$has_password')";

                if (mysqli_query($con, $sql)) {
                   echo "<script>
                     alert('You are registered successfully');
                      window.location.href = 'loginpage.php';
                      </script>";
 
               }
               else {
                    echo "<p style='color:red;'>Error: " . mysqli_error($con) . "</p>";
                }
            }
        }
    }
          ?>
        <input type="submit" name="submit" value="Register" id="submit" required >
       
    </form>
</body>
</html>