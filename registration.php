<?php
 
include "connection.php";
$msg = "";

if(isset($_POST['submit'])){
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $password = $_POST['password'];

   $checkquery = "select * from register where email = '$email' ";
   $result = mysqli_query($conn,$checkquery);

   if(mysqli_num_rows($result) >0){
       $msg = "The Email Is Already Registered";
       // echo "<script type='text/javascript'>alert('THE EMAIL IS ALREADY REGISTERED')</script>";
   }
   else{
       $insertqry= "insert into register (firstname,lastname,email,password) values('$fname','$lname','$email','$password')";

       if(mysqli_query($conn,$insertqry) == true){
           header("location:login.php");
       }
       else{
           die(mysqli_error($conn));
       }
   }
}



?>


<!DOCTYPE html>     
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container" >
        <div class="container-log">
            <form action="" method="POST" autocomplete="off">
                <div class="errmsg">
                <?php
                echo "$msg";
                ?>
                </div>
                <h2>REGISTER PAGE</h2>
                <label>FIRSTNAME:</label>
                <input type="text" name="fname" required><br><br>
                <label>LASTNAME:</label>
                <input type="text" name="lname" required><br><br>
                <label>EMAIL:</label>
                <input type="email" name="email" required><br><br>
                <label>PASSWORD:</label>
                <input type="password" name="password" required><br><br>
                <a href="#"><input type="submit" name="submit" class="btnlog" value="REGISTER"></a>
                <p>Already have an account please ?<a href="login.php">Login</a></p>
            </form>
        </div>
    </div>
</body>
</html> 