<!DOCTYPE html>
<?php
include"server.php";
?>

<html>
    <head>
        
        <title>chang'ombe sec school</title>  
        
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
</style>

    <body>
        <form action="server.php" method="post">
            <div class="form">
            <div class="form-group">
            <?php echo $usernameExist;?>
                <h2>Register here</h2>
                
                <input type="text"class="form-control"id="firstname"name="firstname" required >
            <input type="text"class="form-control"id="lastname"name="lastname" required >
        <div class="form-group">
            <label for="gender"> Gender</label>
            <input type="text" name="gender" require>
            <div>
                <label for="male"class="radio-inline"><input type="radio"name="Gender" id="male">Male</label>
                <label for="female"class="radio-inline"><input type="radio"name="Gender"  id="female">Female</label>
                <label for="others"class="radio-inline"><input type="radio"name="Gender" id="others">Others</label>
</div>
                <input type="email"class="form-control"id="email"placeholder="enter email"name="email" required>
                <input type="password"class="form-control"id="password"name="password" required>
                    <input type="number"class="form-control"id="number"name="number" required>
                <input type="submit"value="submit"name='register'class='btn'>
            </div>
        </form>
    </body>
</html>
