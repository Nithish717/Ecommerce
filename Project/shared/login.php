<?php
include "menu.html";

session_start();
$_SESSION['login_status']=false;

$conn=new mysqli("localhost","root","","project",3306);

$sql_result=mysqli_query($conn,"select * from user where username='$_POST[username]' and password='$_POST[password]'");


if($sql_result->num_rows==0){
    echo "<h1>Invalid Credentials</h1>";
    exit();
}

echo "<h1>Login success</h1>";

$_SESSION['login_status']=true;

$dbrow=mysqli_fetch_assoc($sql_result);

$_SESSION['usertype']=$dbrow['usertype'];
$_SESSION['userid']=$dbrow['userid'];

if($dbrow['usertype']=='Vendor'){
    header("location:../vendor/home.php");
}
else if($dbrow['usertype']=='Customer'){
    header("location:../customer/home.php"); 
}

?>