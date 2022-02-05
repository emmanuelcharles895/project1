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
                <h2>Register here</h2>
                <label for="firstname">First Name</label>
                <input type="text"class="form-control"id="firstname"name="firstname" required value="<?php echo $username; ?>">
            </div>
            <label for="firstname">Last Name</label>
            <input type="text"class="form-control"id="firstname"name="firstname" required value="<?php echo $lastname; ?>">
        </div>
        <div class="form-group">
            <label for="gender"> Gender</label>
            <input type="text" name="gender" require value="<?php echo $gender; ?>">
            <div>
                <label for="male"class="radio-inline"><input type="radio"name="Gender" required value="<?php echo $gender; ?>" id="male">Male</label>
                <label for="female"class="radio-inline"><input type="radio"name="Gender" required value="<?php echo $gender; ?>" id="female">Female</label>
                <label for="others"class="radio-inline"><input type="radio"name="Gender" required value="<?php echo $gender; ?>" id="others">Others</label>
            </div>
            </div>
            <div class="form-group">
                <label for="email">Email</label> 
                <input type="email"class="form-control"id="email"name="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password"class="form-control"id="password"name="password">
            </div>
                <div class="form-group">
                    <label for="number">Phonenumber</label>
                    <input type="number"class="form-control"id="number"name="number">
                </div>
                <input type="submit"class="btn btn-primar">
            </div>
        </form>
    </body>
</html>
