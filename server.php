<?php
$firstname = "";
$lastname = "";
$gender = "";
$email ="";
$password= "";
$number = "";
$error = array();

$db = mysqli_connect('localhost', 'root', '', 'login');
if(isset($_POST['registration'])){
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $number = mysqli_real_escape_string($db, $_POST['number']); 

}
 
   $sql = ("INSERT INTO registration(firstname, lastname, gender, email, password, number)
 VALUES('$firstname', '$lastname', '$gender' , '$email','$password' , '$number')");
 
 mysqli_query($db,$sql); 
 
 $sql = "SELECT * FROM registration";
  $result = mysqli_query($db,$sql);
 if(mysqli_num_rows($result)>0){
     while($row = mysqli_fetch_assoc($result)){
        echo"firstname: " . $row["firstname"]. " -lastname : " . $row["lastname"].
        "-gender : " . $row["gender"]. " -email : " . $row["email"]. " -password : " . $row["password"]. 
        " -number : " . $row["number"]."<br>";

     }    
 
}
 mysqli_close($db);
 ?>
 
 



