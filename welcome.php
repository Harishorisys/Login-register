<?php
session_start();
if(!isset($_SESSION['firstname']) && !isset($_SESSION['lastname'])){
    header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME</title>
    <link rel="stylesheet" href="welcome.css">
</head>
<body>
    <div class="banner">
        <div class="welcome-banner">
            <h2>HI!</h2>
           
            <p>Welcome to the Home Page <h2><?php echo $_SESSION['firstname']." ".$_SESSION['lastname'] ; ?><h2></h2></p>
            <a href="logout.php"><input type="submit" name="submit" class="btnlog" value="LOGOUT"></a>
        </div>
    </div>
</body>
</html>