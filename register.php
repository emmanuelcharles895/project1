<?php
include"server.php";
?>

<!DOCTYPE html>
<html>
    <head>
        
        <title>DUCE ESTATE</title>  
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <form action="" method="post">
            <div class="form">
            <div class="form-group">
            <?php echo $usernameExist;?>
                <h2>Register here</h2>
                
        <input type="text"class="form-control"id="firstname" name="firstname" required placeholder='Enter firstnAME'>
        <input type="text"class="form-control"id="lastname"  name="lastname" required placeholder='last name'>
        
        <input type="email" class="form-control" id="email" placeholder="enter email" name="email" required>
        <input type="password"class="form-control"id="password"name="password" required>
        <input type="number"class="form-control"id="number"name="number" required>
                <input type="submit"value="submit"name='register'class='btn'>
            </div>
        </form>
    </body>
</html>
