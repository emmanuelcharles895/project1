<?php 
ini_set('display_error', '1');
ini_set('display_startup_error', '1');
error_reporting(E_ALL);
?>
<?php include "server.php";  ?>
<!DOCTYPE html>
<html>
<head>
<title>WELCOME</title>
</head>
<style>
        body{
    background-position: center;
    background-size: cover;
    background-color: #ccc;
    text-align: center;
    display: block;
}
.form-control{
    border-radius: 5px;
    max-width: 700vh;
    padding: 10px;
    margin:15px auto ;
    display: flex;
    justify-content: center;
    text-align: center;
    border: 1px solid;
}
.btn{
background-color: blue;
cursor: pointer;
}

</style>
<body>
    <div class="header">
        <h2>Login</h2>
</div>
<form action="login.php" method="post">
            <div class="form">
            <div class="form-group">
            <?php echo $usernameExist;?>
                <h2>Registration</h2>
                <label for="username">User Name</label>
                <input type="email"name="email"id="email"placeholder="enter email" required>
            <input type="password"name="password"id="password"placeholder="enter password" required>
        <input type="submit" value= "Login" name ="login"class='btn'>
</div>
<p>
    Not yet a member?<a href="index.php">Register</a>
</p>
</form>
</body>
</html>



