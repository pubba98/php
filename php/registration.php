<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Sign Up</title>
<link rel="stylesheet" href="../css/style.css" />

</head>
<body>

<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username); 
 
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);
 
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 
 $name = stripslashes($_REQUEST['name']);
 $name = mysqli_real_escape_string($con,$name); 
 
 $address = stripslashes($_REQUEST['address']);
 $address = mysqli_real_escape_string($con,$address); 
 
 $phone = stripslashes($_REQUEST['phone']);
 $phone = mysqli_real_escape_string($con,$phone); 
 

        $query = "INSERT into `Customer` (CustomerName, CustomerContactNumber, CustomerAddress, CustomerEmail, CustomerPassword, CustomerUserName)
VALUES ('$name' , '$phone' , '$address' , '$email' , '".md5($password)."' , '$username')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='../php/login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Sign Up</h1>

<form name="registration" action="" method="post">
<input type="text" name="name" placeholder="Full Name" required />
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="text" name="phone" placeholder="Contact Number" required />
<input type="text" name="address" placeholder="Shipping Address" required />
<input type="submit" name="submit" value="             Register            " />
</form>
<p>Already a Member? <a href='../php/login.php'>Log In Here</a></p>
</div>
<div class="form">
<a href= "../index.php" ><input type="submit" name="" value="    Back to Home Page    " /></a>

</form>

<?php } ?>
</body>
</html>
