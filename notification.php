<?php
session_start();

$username = $_SESSION['username'] ?? 'Guest';
$email=$_SESSION['email']?? 'guest';
$mobileno=$_SESSION['mobileno']?? 'guest';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
</head>
<body>
    <div id="container">
    <div id="sidebar"> 
        <h2 id="admin"><?php echo "Welcome ,{$username}";?></h2>
        <ul id="dashboard">
            <li class="options" ><a href="home.php" style="text-decoration:none;color:inherit" ><i class="fa-solid fa-user icons"></i>My profile</a></li>
            
           <li class="options" style="background-color:red"> <a href="notification.php"  style="text-decoration:none;color:inherit" ><i class="fa-solid fa-bell icons"></i>Notifications</a></li>
           <li class="options"><a href="settings.php"  style="text-decoration:none;color:inherit" ><i class="fa-solid fa-gear icons"></i>Settings</a></li>
            <li class="options"><a href="loginpage.php" style="text-decoration:none;color:inherit" ><i class="fa-solid fa-right-from-bracket icons"></i>
Logout</a></li>
        </ul>
    </div>
    <div id="profile">
    <h1>Currently there are no notifications</h1>
  </div>
</div>
</body>
</html>