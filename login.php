<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>WELCOME TO THE DATABASE</title>
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
<form action="server.php" method="post">
            <div class="form">
            <div class="form-group">
                <h2>Register here</h2>
                <label for="username">User Name</label>
                <input type="text"class="form-control"id="firstname"name="firstname">
            </div>
            <label for="password">Password</label>
            <input type="password"class="form-control"id="password"name="password">
        </div>
        <div class="input-group">
        <button type="submit" class= "btn" name ="index_php">
</div>
<p>
    Not yet a member?<a href="index.php">Sign in</a>
</p>
</form>
</body>
</html>



