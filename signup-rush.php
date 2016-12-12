<?php

$email = $_POST["email"];
echo $email;
$name = $_POST["name"];
$roll = $_POST["roll"];
$course = $_POST["course"];
$password = $_POST["password"];

if (($email == NULL)||($roll==NULL)||($course == NULL)||($password==NULL))
{
    echo "You did not enter all details properly";
    //header("Location:javascript:window.history.go(-1);");//ensures mandatory fields are filled, has to be modified
}
else
{
    $db_username = "root";
    $db_password = "";
    $db = "names";
    
    $db=mysqli_connect("localhost",$db_username,$db_password,$db) or die("Failed to connect to databse".mysql_error());
    
    $new_user = "INSERT INTO registered_users(email,name,roll,course,password,status) VALUES('$email','$name','$roll','$course','$password','0') ";
    
    mysqli_query($db,$new_user) or die("Trouble signing up".mysql_error());
    
    echo "<h1>VERIFICATION OF DETAILS </h1>";
    echo "Email: ".$email."@iitgn.ac.in <br>";
    echo "Name: ".$name."<br>";
    echo "Roll no.: ".$roll."<br>";
    echo "Course: ".$course."<br>";
    //encrypting password

    echo "Password: ".$password."<br>";
    echo "You have successfully signed up!";
}
?>
