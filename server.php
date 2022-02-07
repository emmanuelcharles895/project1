<?php
session_start();
include"db.php";
$usernameExist = '';
//$S_SESSION['firstname']= '';
//$S_SESSION['success']= '';
if(isset($_POST['register'])){
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $number = mysqli_real_escape_string($conn, $_POST['number']); 


$sql = "SELECT * FROM estate WHERE email='$email' LIMIT 1";
$result = mysqli_query($conn,$sql);
$user = mysqli_fetch_assoc($result);
if($user){
    $usernameExist ='please user alread exist';
}else{
    $insert_query=("INSERT INTO estate(firstname, lastname, gender, email, password, number)
    VALUES('$firstname', '$lastname', '$gender' , '$email','$password' , '$number')");
    mysqli_query($db,$insert_query );

 $S_SESSION['firstname']= $firstname;
$S_SESSION['success']= "your now registered";
header('location:index.php');
    
}
if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $sql = "SELECT * FROM estate WHERE email='$email' AND password ='$password' LIMIT 1";
    $result = mysqli_query($conn,$sql);
    $user = mysqli_fetch_assoc($result);
    if($user){
        $usernameExist ='invalid details';
    }else{ 
        $S_SESSION['firstname']= ['firstname'];
        $S_SESSION['success']= "your login in";
       header('location: index.php');
    } 
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['firstname']);
        header('location: login.php');
        }
}
}  
















 
 



